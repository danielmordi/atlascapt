<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background-color: #4F46E5;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .content {
            background-color: #f9fafb;
            padding: 30px;
            border: 1px solid #e5e7eb;
        }

        .field {
            margin-bottom: 20px;
        }

        .field-label {
            font-weight: bold;
            color: #4b5563;
            margin-bottom: 5px;
        }

        .field-value {
            color: #1f2937;
        }

        .footer {
            text-align: center;
            padding: 20px;
            color: #6b7280;
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>New Contact Form Submission</h1>
        </div>

        <div class="content">
            <div class="field">
                <div class="field-label">Name:</div>
                <div class="field-value">{{ $formData['name'] }}</div>
            </div>

            <div class="field">
                <div class="field-label">Email:</div>
                <div class="field-value">{{ $formData['email'] }}</div>
            </div>

            @if (!empty($formData['phone']))
                <div class="field">
                    <div class="field-label">Phone:</div>
                    <div class="field-value">{{ $formData['phone'] }}</div>
                </div>
            @endif

            <div class="field">
                <div class="field-label">Message:</div>
                <div class="field-value">{{ $formData['message'] }}</div>
            </div>
        </div>

        <div class="footer">
            <p>This email was sent from the {{ config('app.name') }} contact form.</p>
            <p>Received at: {{ now()->format('F j, Y g:i A') }}</p>
        </div>
    </div>
</body>

</html>
