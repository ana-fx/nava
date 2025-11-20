<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
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
        .info-section {
            margin-bottom: 25px;
        }
        .info-label {
            font-weight: 600;
            color: #1b1b18;
            margin-bottom: 5px;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .info-value {
            color: #333;
            font-size: 16px;
            padding: 10px;
            background-color: #f9f9f9;
            border-left: 3px solid #1b1b18;
            margin-top: 5px;
        }
        .message-box {
            background-color: #f9f9f9;
            border-left: 3px solid #1b1b18;
            padding: 15px;
            margin-top: 10px;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e0e0e0;
            font-size: 12px;
            color: #666;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <a href="https://nava.enterprises/" target="_blank" rel="noopener noreferrer">
                <img src="https://nava.enterprises/logo-long.png" alt="Nava Logo" />
            </a>
            <h1>New Contact Form Submission</h1>
        </div>

        <div class="info-section">
            <div class="info-label">Name</div>
            <div class="info-value">{{ $name }}</div>
        </div>

        <div class="info-section">
            <div class="info-label">Email</div>
            <div class="info-value">
                <a href="mailto:{{ $email }}" style="color: #1b1b18; text-decoration: none;">{{ $email }}</a>
            </div>
        </div>

        @if($phone)
        <div class="info-section">
            <div class="info-label">Phone</div>
            <div class="info-value">
                <a href="tel:{{ $phone }}" style="color: #1b1b18; text-decoration: none;">{{ $phone }}</a>
            </div>
        </div>
        @endif

        <div class="info-section">
            <div class="info-label">Subject</div>
            <div class="info-value">{{ $subject }}</div>
        </div>

        <div class="info-section">
            <div class="info-label">Message</div>
            <div class="message-box">{{ $contactMessage ?? '' }}</div>
        </div>

        <div class="footer">
            <p>This email was sent from the contact form on <a href="https://nava.enterprises/" style="color: #1b1b18; text-decoration: none;">{{ config('app.name') }}</a> website.</p>
            <p>You can reply directly to this email to respond to {{ $name }}.</p>
        </div>
    </div>
</body>
</html>

