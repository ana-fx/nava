<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - We've Received Your Message</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .header {
            border-bottom: 2px solid #1b1b18;
            padding-bottom: 20px;
            margin-bottom: 30px;
            text-align: center;
        }
        .header img {
            max-width: 150px;
            height: auto;
            margin-bottom: 15px;
        }
        .header h1 {
            margin: 0;
            color: #1b1b18;
            font-size: 24px;
        }
        .content {
            margin-bottom: 30px;
        }
        .greeting {
            font-size: 18px;
            color: #1b1b18;
            margin-bottom: 20px;
        }
        .message {
            color: #333;
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 20px;
        }
        .info-box {
            background-color: #f9f9f9;
            border-left: 3px solid #1b1b18;
            padding: 15px;
            margin: 20px 0;
        }
        .info-label {
            font-weight: 600;
            color: #1b1b18;
            font-size: 14px;
            margin-bottom: 5px;
        }
        .info-value {
            color: #333;
            font-size: 16px;
        }
        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e0e0e0;
            font-size: 12px;
            color: #666;
            text-align: center;
        }
        .signature {
            margin-top: 30px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <a href="https://nava.enterprises/" target="_blank" rel="noopener noreferrer">
                <img src="https://nava.enterprises/logo-long.png" alt="Nava Logo" />
            </a>
            <h1>Thank You {{ $name }}!</h1>
        </div>

        <div class="content">
            <div class="greeting">
                Hello {{ $name }},
            </div>

            <div class="message">
                We have received your message through our contact form. Thank you for contacting us!
            </div>

            <div class="info-box">
                <div class="info-label">Subject:</div>
                <div class="info-value">{{ $subject }}</div>
            </div>

            <div class="message">
                Our team will review your message and get back to you as soon as possible. We typically respond within 1-2 business days.
            </div>

            <div class="message">
                If you have urgent questions, please don't hesitate to contact us directly at:
            </div>

            <div class="info-box">
                <div style="margin-bottom: 10px;">
                    <strong>Email:</strong> <a href="mailto:info@nava.com" style="color: #1b1b18; text-decoration: none;">info@nava.com</a>
                </div>
                <div style="margin-bottom: 10px;">
                    <strong>Phone:</strong> <a href="tel:+6281234567890" style="color: #1b1b18; text-decoration: none;">+62 812 3456 7890</a>
                </div>
            </div>

            <div class="message">
                Once again, thank you for your trust in us. We greatly appreciate the time you took to contact us.
            </div>
        </div>

        <div class="signature">
            <p>Best regards,<br>
            <strong>The Nava Team</strong></p>
        </div>

        <div class="footer">
            <p>This email was sent automatically. Please do not reply to this email.</p>
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved. | <a href="https://nava.enterprises/" style="color: #1b1b18; text-decoration: none;">nava.enterprises</a></p>
        </div>
    </div>
</body>
</html>

