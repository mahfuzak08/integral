# Contact Form - Quick Start Guide

## 🚀 Quick Setup (5 minutes)

### Step 1: Get Google reCAPTCHA Keys (2 min)
1. Visit: https://www.google.com/recaptcha/admin
2. Register a new site:
   - Type: reCAPTCHA v2 "I'm not a robot"
   - Domain: `localhost` (for testing) or your domain
3. Copy the **Site Key** and **Secret Key**

### Step 2: Add Keys to Your Code (1 min)

**File: contact.php (Line ~177)**
```php
<div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY_HERE"></div>
```

**File: contact_handler.php (Line ~26)**
```php
$recaptcha_secret = 'YOUR_SECRET_KEY_HERE';
```

### Step 3: Test Email Setup (2 min)

**For Local Testing (XAMPP):**
1. Download [Papercut SMTP](https://github.com/ChangemakerStudios/Papercut-SMTP/releases)
2. Run Papercut.exe (keep it open)
3. That's it! No configuration needed.

**Test it:**
1. Open: `http://localhost/isl3/test_email.php`
2. Update the email address in the file
3. Click "Send Test Email"
4. Check Papercut inbox

### Step 4: Test Contact Form
1. Open: `http://localhost/isl3/contact.php`
2. Fill out the form
3. Complete reCAPTCHA
4. Submit
5. Check Papercut for the email

---

## 📧 Email Configuration Options

### Option A: Basic PHP mail() - Already Configured ✓
- Works with Papercut for local testing
- Good for XAMPP development
- Current handler: `contact_handler.php`

### Option B: Gmail SMTP - For Production (Recommended)
See [CONTACT_FORM_SETUP.md](CONTACT_FORM_SETUP.md) for detailed PHPMailer setup

---

## ✅ What's Already Done

✓ Contact form with validation  
✓ AJAX submission (no page reload)  
✓ Google reCAPTCHA integration  
✓ Email handler with HTML templates  
✓ Auto-reply to customers  
✓ Loading states and error handling  
✓ Responsive design  
✓ Success/error messages  

---

## 🔧 Files Created/Modified

**New Files:**
- `contact_handler.php` - Form processing & email sending
- `CONTACT_FORM_SETUP.md` - Detailed setup guide
- `test_email.php` - Email configuration tester
- `QUICK_START.md` - This file

**Modified Files:**
- `contact.php` - Added reCAPTCHA, AJAX, loading states

---

## 🎯 To Do Now

1. [ ] Get reCAPTCHA keys
2. [ ] Add keys to contact.php and contact_handler.php  
3. [ ] Download and run Papercut SMTP
4. [ ] Test with test_email.php
5. [ ] Test contact form

---

## 📞 Contact Form Features

**Customer Experience:**
- Real-time validation
- reCAPTCHA verification
- Loading spinner during submission
- Success/error messages
- Auto-reply confirmation email
- No page reload (AJAX)

**Admin Experience:**
- Formatted HTML email with all details
- Reply-to set to customer's email
- Timestamp included
- Clean, professional design

**Form Fields:**
- Name* (required)
- Email* (required)
- Phone (optional)
- Company (optional)
- Service Interest (dropdown)
- Message* (required)
- reCAPTCHA* (required)

---

## 🐛 Common Issues

**reCAPTCHA not showing:**
- Check browser console for errors
- Verify site key is correct
- Clear browser cache

**Email not sending:**
- Make sure Papercut is running
- Check `contact_handler.php` for PHP errors
- Open `test_email.php` to diagnose

**Form not submitting:**
- Check browser console
- Verify reCAPTCHA is checked
- Check all required fields are filled

---

## 📚 Need More Help?

- **Detailed Setup:** See [CONTACT_FORM_SETUP.md](CONTACT_FORM_SETUP.md)
- **Test Email:** Open `test_email.php` in browser
- **Production Setup:** See PHPMailer section in setup guide

---

## 🔒 Security Features

✓ CSRF protection with sessions  
✓ Input sanitization & validation  
✓ Google reCAPTCHA spam protection  
✓ XSS prevention (htmlspecialchars)  
✓ Email validation  
✓ Server-side verification  

---

**Happy Testing! 🎉**

For production deployment, remember to:
- Use real domain in reCAPTCHA
- Set up proper SMTP (Gmail/SendGrid/etc)
- Test thoroughly before going live
