# Contact Form Setup Guide

This guide will help you set up the contact form with email functionality and Google reCAPTCHA.

## 1. Google reCAPTCHA Setup

### Get Your reCAPTCHA Keys

1. Go to [Google reCAPTCHA Admin Console](https://www.google.com/recaptcha/admin)
2. Click on "+" to create a new site
3. Fill in the details:
   - **Label**: Integral Solutions Contact Form
   - **reCAPTCHA type**: Select "reCAPTCHA v2" → "I'm not a robot" Checkbox
   - **Domains**: Add your domain (e.g., `integralsolutions.com.bd` or `localhost` for testing)
4. Accept the Terms of Service
5. Click "Submit"

### Add Your Keys to the Code

After registration, you'll receive two keys:
- **Site Key** (public key)
- **Secret Key** (private key)

#### Update contact.php (Line ~177)
Replace `YOUR_RECAPTCHA_SITE_KEY` with your Site Key:
```php
<div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY_HERE"></div>
```

#### Update contact_handler.php (Line ~26)
Replace the secret key:
```php
$recaptcha_secret = 'YOUR_SECRET_KEY_HERE';
```

---

## 2. Email Configuration

### Option A: Using PHP mail() Function (Default)

The contact form uses PHP's built-in `mail()` function. For this to work:

#### XAMPP Configuration (Windows):

1. **Install a fake SMTP server for testing** (Recommended for local development):
   - Download [Papercut SMTP](https://github.com/ChangemakerStudios/Papercut-SMTP/releases)
   - Run Papercut and keep it open
   - Configure XAMPP php.ini:

2. **Edit php.ini** (located at `C:\xampp\php\php.ini`):
   ```ini
   [mail function]
   SMTP = localhost
   smtp_port = 25
   sendmail_from = noreply@integralsolutions.com.bd
   ```

3. Restart Apache in XAMPP

#### For Production (Using Real Email Server):

You need to configure your server's SMTP settings. Contact your hosting provider for SMTP details.

---

### Option B: Using PHPMailer (Recommended for Production)

For better email delivery and Gmail/SMTP support:

1. **Install PHPMailer via Composer**:
   ```bash
   composer require phpmailer/phpmailer
   ```

2. **Create a new file** `contact_handler_smtp.php`:

```php
<?php
session_start();
require_once 'data.php';
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');

$response = ['success' => false, 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $response['message'] = 'Invalid request method';
    echo json_encode($response);
    exit;
}

// Verify reCAPTCHA (same as before)
if (isset($_POST['g-recaptcha-response'])) {
    $recaptcha_secret = 'YOUR_RECAPTCHA_SECRET_KEY';
    $recaptcha_response = $_POST['g-recaptcha-response'];
    
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
        $response['message'] = 'reCAPTCHA verification failed.';
        echo json_encode($response);
        exit;
    }
}

// Sanitize input (same as before)
$name = filter_var(trim($_POST['name'] ?? ''), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$phone = filter_var(trim($_POST['phone'] ?? ''), FILTER_SANITIZE_STRING);
$company = filter_var(trim($_POST['company'] ?? ''), FILTER_SANITIZE_STRING);
$service = filter_var(trim($_POST['service'] ?? ''), FILTER_SANITIZE_STRING);
$message = filter_var(trim($_POST['message'] ?? ''), FILTER_SANITIZE_STRING);

// Validate
if (empty($name) || empty($email) || empty($message)) {
    $response['message'] = 'Please fill in all required fields.';
    echo json_encode($response);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $response['message'] = 'Please enter a valid email address.';
    echo json_encode($response);
    exit;
}

// Create PHPMailer instance
$mail = new PHPMailer(true);

try {
    // SMTP Configuration
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com'; // Your SMTP server
    $mail->SMTPAuth   = true;
    $mail->Username   = 'your-email@gmail.com'; // Your email
    $mail->Password   = 'your-app-password'; // Your app password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;
    
    // Recipients
    $mail->setFrom('noreply@integralsolutions.com.bd', $company_details['name']);
    $mail->addAddress($company_details['email']); // Company email
    $mail->addReplyTo($email, $name);
    
    // Content
    $mail->isHTML(true);
    $mail->Subject = "New Contact Form Submission from {$name}";
    $mail->Body    = "
    <h2>New Contact Form Submission</h2>
    <p><strong>Name:</strong> {$name}</p>
    <p><strong>Email:</strong> {$email}</p>
    <p><strong>Phone:</strong> {$phone}</p>
    <p><strong>Company:</strong> {$company}</p>
    <p><strong>Service Interest:</strong> {$service}</p>
    <p><strong>Message:</strong><br>" . nl2br($message) . "</p>
    ";
    
    $mail->send();
    
    // Send auto-reply
    $mail->clearAddresses();
    $mail->addAddress($email, $name);
    $mail->Subject = "Thank you for contacting {$company_details['name']}";
    $mail->Body = "
    <h2>Thank You!</h2>
    <p>Dear {$name},</p>
    <p>We have received your message and will get back to you within 24 hours.</p>
    <p>Best regards,<br>{$company_details['name']}</p>
    ";
    $mail->send();
    
    $response['success'] = true;
    $response['message'] = 'Thank you! Your message has been sent successfully.';
    
} catch (Exception $e) {
    $response['message'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

echo json_encode($response);
?>
```

3. **Update contact.php** to use the new handler:
   - Change `'contact_handler.php'` to `'contact_handler_smtp.php'` in the fetch call

---

## 3. Gmail SMTP Setup

If using Gmail:

1. **Enable 2-Factor Authentication** on your Google account
2. **Create an App Password**:
   - Go to [Google Account Security](https://myaccount.google.com/security)
   - Click on "2-Step Verification"
   - Scroll down to "App passwords"
   - Select "Mail" and "Other (Custom name)"
   - Enter "Integral Solutions Contact Form"
   - Click "Generate"
   - Copy the 16-character password

3. **Use in PHPMailer**:
   ```php
   $mail->Username   = 'your-email@gmail.com';
   $mail->Password   = 'xxxx xxxx xxxx xxxx'; // 16-char app password
   ```

---

## 4. Testing

### Test reCAPTCHA:
1. Open contact form in browser
2. You should see the reCAPTCHA checkbox
3. Complete the form and check the reCAPTCHA
4. Submit

### Test Email (Local):
1. Start Papercut SMTP (for local testing)
2. Submit the form
3. Check Papercut inbox for the email

### Test Email (Production):
1. Submit the form with valid data
2. Check your company email inbox
3. Check customer's email for auto-reply

---

## 5. Troubleshooting

### reCAPTCHA not showing:
- Check browser console for errors
- Verify the site key is correct
- Ensure domain is added to reCAPTCHA admin console

### Email not sending:
- Check PHP error log: `C:\xampp\php\logs\php_error_log`
- Verify SMTP settings
- Check firewall isn't blocking port 25/587
- For Gmail: ensure app password is correct

### Form not submitting:
- Check browser console for JavaScript errors
- Verify `contact_handler.php` path is correct
- Check file permissions (755 for PHP files)

---

## 6. Production Checklist

Before going live:

- [ ] Replace `YOUR_RECAPTCHA_SITE_KEY` in contact.php
- [ ] Replace `YOUR_RECAPTCHA_SECRET_KEY` in contact_handler.php
- [ ] Configure proper SMTP settings
- [ ] Test form submission
- [ ] Test email delivery
- [ ] Test auto-reply to customer
- [ ] Check emails don't go to spam folder
- [ ] Set up email monitoring/logging

---

## Security Notes

1. **Never commit secrets to version control**
   - Add `contact_handler.php` to `.gitignore` if it contains credentials
   - Or use environment variables

2. **Rate Limiting** (recommended):
   Add session-based rate limiting to prevent spam:
   ```php
   session_start();
   $limit_time = 60; // 1 minute
   
   if (isset($_SESSION['last_contact_time'])) {
       if (time() - $_SESSION['last_contact_time'] < $limit_time) {
           $response['message'] = "Please wait before submitting again.";
           echo json_encode($response);
           exit;
       }
   }
   $_SESSION['last_contact_time'] = time();
   ```

3. **Input validation** is already implemented in the handler

---

## Support

For issues:
- Check XAMPP error logs
- Verify all configuration steps
- Test with simple email first before complex HTML templates
