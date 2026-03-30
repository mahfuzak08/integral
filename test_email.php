<?php
/**
 * Email Test Script
 * Use this to test if email sending is working on your server
 */
require_once 'data.php';

// Test email address - change this to your email
$test_email = "your-test-email@example.com";

echo "<!DOCTYPE html>
<html>
<head>
    <title>Email Test - Integral Solutions</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 50px auto; padding: 20px; }
        .success { background: #d4edda; border: 1px solid #c3e6cb; color: #155724; padding: 15px; border-radius: 5px; margin: 20px 0; }
        .error { background: #f8d7da; border: 1px solid #f5c6cb; color: #721c24; padding: 15px; border-radius: 5px; margin: 20px 0; }
        .info { background: #d1ecf1; border: 1px solid #bee5eb; color: #0c5460; padding: 15px; border-radius: 5px; margin: 20px 0; }
        code { background: #f4f4f4; padding: 2px 6px; border-radius: 3px; }
    </style>
</head>
<body>
    <h1>Email Configuration Test</h1>
    <div class='info'>
        <strong>Test Email:</strong> $test_email<br>
        <strong>Company Email:</strong> {$company_details['email']}<br>
        <strong>PHP Version:</strong> " . phpversion() . "<br>
        <strong>Server:</strong> " . $_SERVER['SERVER_SOFTWARE'] . "
    </div>";

// Test 1: Check if mail function exists
echo "<h2>Test 1: Mail Function Check</h2>";
if (function_exists('mail')) {
    echo "<div class='success'>✓ mail() function is available</div>";
} else {
    echo "<div class='error'>✗ mail() function is NOT available. Check your PHP configuration.</div>";
    exit;
}

// Test 2: Check php.ini settings
echo "<h2>Test 2: PHP Mail Configuration</h2>";
$smtp = ini_get('SMTP');
$smtp_port = ini_get('smtp_port');
$sendmail_from = ini_get('sendmail_from');

echo "<div class='info'>";
echo "<strong>SMTP Server:</strong> " . ($smtp ?: 'Not set') . "<br>";
echo "<strong>SMTP Port:</strong> " . ($smtp_port ?: 'Not set') . "<br>";
echo "<strong>Sendmail From:</strong> " . ($sendmail_from ?: 'Not set');
echo "</div>";

// Test 3: Send test email
echo "<h2>Test 3: Send Test Email</h2>";

if (isset($_GET['send'])) {
    $to = $test_email;
    $subject = "Test Email from Integral Solutions Contact Form";
    
    $message = "
    <!DOCTYPE html>
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: linear-gradient(135deg, #3b82f6, #10b981); color: white; padding: 20px; border-radius: 8px 8px 0 0; }
            .content { background: #f9fafb; padding: 30px; border: 1px solid #e5e7eb; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>Email Test Successful!</h2>
            </div>
            <div class='content'>
                <p>This is a test email from your Integral Solutions contact form.</p>
                <p><strong>Test Details:</strong></p>
                <ul>
                    <li>Sent: " . date('F j, Y, g:i a') . "</li>
                    <li>From: PHP mail() function</li>
                    <li>Server: " . $_SERVER['SERVER_NAME'] . "</li>
                </ul>
                <p>If you're seeing this email, your email configuration is working correctly!</p>
            </div>
        </div>
    </body>
    </html>
    ";
    
    $headers = [
        'MIME-Version: 1.0',
        'Content-type: text/html; charset=UTF-8',
        'From: ' . $company_details['name'] . ' <noreply@integralsolutions.com.bd>',
        'Reply-To: noreply@integralsolutions.com.bd',
        'X-Mailer: PHP/' . phpversion()
    ];
    
    $result = mail($to, $subject, $message, implode("\r\n", $headers));
    
    if ($result) {
        echo "<div class='success'>";
        echo "✓ Email sent successfully to <strong>$to</strong><br><br>";
        echo "Check your inbox (and spam folder) for the test email.<br>";
        echo "If you don't receive it within a few minutes, check your server logs.";
        echo "</div>";
    } else {
        echo "<div class='error'>";
        echo "✗ Failed to send email.<br><br>";
        echo "<strong>Possible issues:</strong><br>";
        echo "• SMTP server not configured in php.ini<br>";
        echo "• Firewall blocking SMTP port<br>";
        echo "• Mail server requires authentication<br>";
        echo "• Check server error logs for details<br><br>";
        echo "<strong>XAMPP users:</strong> Install and run <a href='https://github.com/ChangemakerStudios/Papercut-SMTP/releases' target='_blank'>Papercut SMTP</a> for local testing.";
        echo "</div>";
        
        // Show last error if available
        $error = error_get_last();
        if ($error) {
            echo "<div class='info'><strong>PHP Error:</strong><br><code>" . htmlspecialchars($error['message']) . "</code></div>";
        }
    }
} else {
    echo "<div class='info'>";
    echo "<strong>Ready to test?</strong><br><br>";
    echo "1. Update <code>\$test_email</code> at the top of this file with your email address<br>";
    echo "2. Click the button below to send a test email<br>";
    echo "3. Check your inbox (and spam folder)<br><br>";
    echo "<a href='?send=1' style='display: inline-block; background: #3b82f6; color: white; padding: 12px 24px; text-decoration: none; border-radius: 8px; font-weight: bold;'>Send Test Email</a>";
    echo "</div>";
}

// Additional help
echo "<h2>Troubleshooting</h2>";
echo "<div class='info'>";
echo "<strong>For XAMPP (Windows):</strong><br>";
echo "1. Download <a href='https://github.com/ChangemakerStudios/Papercut-SMTP/releases' target='_blank'>Papercut SMTP</a><br>";
echo "2. Run Papercut (keep it open)<br>";
echo "3. Edit php.ini (C:\\xampp\\php\\php.ini):<br>";
echo "<code>SMTP = localhost<br>smtp_port = 25</code><br>";
echo "4. Restart Apache in XAMPP<br><br>";

echo "<strong>For Production:</strong><br>";
echo "• Use PHPMailer with SMTP authentication<br>";
echo "• Configure with your email provider's SMTP settings<br>";
echo "• See CONTACT_FORM_SETUP.md for detailed instructions<br>";
echo "</div>";

echo "
</body>
</html>";
?>
