<?php
// Start session for CSRF protection
session_start();

// Include company details
require_once 'data.php';

// Set JSON response header
header('Content-Type: application/json');

// Initialize response
$response = [
    'success' => false,
    'message' => ''
];

// Check if request is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $response['message'] = 'Invalid request method';
    echo json_encode($response);
    exit;
}

// Validate Google reCAPTCHA
if (isset($_POST['g-recaptcha-response'])) {
    $recaptcha_secret = '6LfkKpcsAAAAAKuWW83mtf8Kyy03G-sYQ22JUMtZ'; // Replace with your secret key
    $recaptcha_response = $_POST['g-recaptcha-response'];
    
    // Verify reCAPTCHA
    $verify_url = 'https://www.google.com/recaptcha/api/siteverify';
    $verify_data = [
        'secret' => $recaptcha_secret,
        'response' => $recaptcha_response,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ];
    
    $options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($verify_data)
        ]
    ];
    
    $context = stream_context_create($options);
    $verify_response = file_get_contents($verify_url, false, $context);
    $verify_result = json_decode($verify_response);
    
    if (!$verify_result->success) {
        $response['message'] = 'reCAPTCHA verification failed. Please try again.';
        echo json_encode($response);
        exit;
    }
} else {
    $response['message'] = 'Please complete the reCAPTCHA verification.';
    echo json_encode($response);
    exit;
}

// Sanitize and validate input
$name = filter_var(trim($_POST['name'] ?? ''), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$phone = filter_var(trim($_POST['phone'] ?? ''), FILTER_SANITIZE_STRING);
$company = filter_var(trim($_POST['company'] ?? ''), FILTER_SANITIZE_STRING);
$service = filter_var(trim($_POST['service'] ?? ''), FILTER_SANITIZE_STRING);
$message = filter_var(trim($_POST['message'] ?? ''), FILTER_SANITIZE_STRING);

// Validate required fields
if (empty($name)) {
    $response['message'] = 'Please enter your name.';
    echo json_encode($response);
    exit;
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $response['message'] = 'Please enter a valid email address.';
    echo json_encode($response);
    exit;
}

if (empty($message)) {
    $response['message'] = 'Please enter your message.';
    echo json_encode($response);
    exit;
}

// Prepare email content
$to = $company_details['query_email'];
$subject = "New Contact Form Submission from {$name}";

// Create HTML email body
$email_body = "
<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: linear-gradient(135deg, #3b82f6, #10b981); color: white; padding: 20px; border-radius: 8px 8px 0 0; }
        .content { background: #f9fafb; padding: 30px; border: 1px solid #e5e7eb; }
        .field { margin-bottom: 20px; }
        .label { font-weight: bold; color: #1f2937; margin-bottom: 5px; display: block; }
        .value { background: white; padding: 12px; border-radius: 6px; border: 1px solid #d1d5db; }
        .footer { background: #1f2937; color: #9ca3af; padding: 20px; text-align: center; border-radius: 0 0 8px 8px; font-size: 12px; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h2 style='margin: 0;'>New Contact Form Submission</h2>
            <p style='margin: 5px 0 0 0; opacity: 0.9;'>Received on " . date('F j, Y, g:i a') . "</p>
        </div>
        
        <div class='content'>
            <div class='field'>
                <span class='label'>Name:</span>
                <div class='value'>" . htmlspecialchars($name) . "</div>
            </div>
            
            <div class='field'>
                <span class='label'>Email:</span>
                <div class='value'><a href='mailto:" . htmlspecialchars($email) . "'>" . htmlspecialchars($email) . "</a></div>
            </div>
            
            " . (!empty($phone) ? "
            <div class='field'>
                <span class='label'>Phone:</span>
                <div class='value'>" . htmlspecialchars($phone) . "</div>
            </div>
            " : "") . "
            
            " . (!empty($company) ? "
            <div class='field'>
                <span class='label'>Company:</span>
                <div class='value'>" . htmlspecialchars($company) . "</div>
            </div>
            " : "") . "
            
            <div class='field'>
                <span class='label'>Service Interest:</span>
                <div class='value'>" . htmlspecialchars($service) . "</div>
            </div>
            
            <div class='field'>
                <span class='label'>Message:</span>
                <div class='value'>" . nl2br(htmlspecialchars($message)) . "</div>
            </div>
        </div>
        
        <div class='footer'>
            <p>This email was sent from the contact form at " . $company_details['name'] . "</p>
            <p style='margin: 5px 0 0 0;'>Reply directly to this email to contact the sender.</p>
        </div>
    </div>
</body>
</html>
";

// Email headers
$headers = [
    'MIME-Version: 1.0',
    'Content-type: text/html; charset=UTF-8',
    'From: ' . $company_details['name'] . ' <noreply@integralsolutions.com.bd>',
    'Reply-To: ' . $name . ' <' . $email . '>',
    'X-Mailer: PHP/' . phpversion()
];

// Send email
$mail_sent = mail($to, $subject, $email_body, implode("\r\n", $headers));

if ($mail_sent) {
    $response['success'] = true;
    $response['message'] = 'Thank you for contacting us! We will get back to you within 24 hours.';
    
    // Optional: Send auto-reply to customer
    $customer_subject = "Thank you for contacting " . $company_details['name'];
    $customer_body = "
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset='UTF-8'>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: linear-gradient(135deg, #3b82f6, #10b981); color: white; padding: 20px; border-radius: 8px 8px 0 0; }
            .content { background: #f9fafb; padding: 30px; border: 1px solid #e5e7eb; }
            .footer { background: #1f2937; color: #9ca3af; padding: 20px; text-align: center; border-radius: 0 0 8px 8px; font-size: 12px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2 style='margin: 0;'>Thank You for Contacting Us!</h2>
            </div>
            
            <div class='content'>
                <p>Dear " . htmlspecialchars($name) . ",</p>
                
                <p>Thank you for reaching out to <strong>" . $company_details['name'] . "</strong>. We have received your message and our team will review it shortly.</p>
                
                <p>We typically respond within 24 hours during business hours:</p>
                <ul>
                    <li>Sunday - Thursday: " . $company_details['business_hours']['Sunday - Thursday'] . "</li>
                    <li>Friday: " . $company_details['business_hours']['Friday'] . "</li>
                    <li>Saturday: " . $company_details['business_hours']['Saturday'] . "</li>
                </ul>
                
                <p><strong>Your Message:</strong></p>
                <div style='background: white; padding: 15px; border-radius: 6px; border: 1px solid #d1d5db; margin: 15px 0;'>
                    " . nl2br(htmlspecialchars($message)) . "
                </div>
                
                <p>If you need immediate assistance, feel free to contact us directly:</p>
                <ul>
                    <li>Phone: " . implode(' or ', $company_details['phone']) . "</li>
                    <li>Email: " . $company_details['email'] . "</li>
                    <li>Address: " . $company_details['address'] . ", " . $company_details['city'] . "</li>
                </ul>
                
                <p>Best regards,<br><strong>" . $company_details['name'] . " Team</strong></p>
            </div>
            
            <div class='footer'>
                <p>" . $company_details['name'] . "</p>
                <p>" . $company_details['address'] . ", " . $company_details['city'] . "</p>
            </div>
        </div>
    </body>
    </html>
    ";
    
    $customer_headers = [
        'MIME-Version: 1.0',
        'Content-type: text/html; charset=UTF-8',
        'From: ' . $company_details['name'] . ' <noreply@integralsolutions.com.bd>',
        'X-Mailer: PHP/' . phpversion()
    ];
    
    mail($email, $customer_subject, $customer_body, implode("\r\n", $customer_headers));
    
} else {
    $response['message'] = 'Sorry, there was an error sending your message. Please try again or contact us directly at ' . $company_details['email'];
}

echo json_encode($response);
exit;
