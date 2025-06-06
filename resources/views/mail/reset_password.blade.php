<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .header {
            background-color: #493fd5;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 20px;
        }
        .content p {
            font-size: 16px;
            line-height: 1.5;
        }
        .button-container {
            text-align: center;
            margin-top: 20px;
        }
        .button {
            background-color: #493fd5;
            color: #ffffff;
            padding: 12px 20px;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #7d76e2;
        }
        .footer {
            text-align: center;
            font-size: 14px;
            color: #777;
            padding: 20px;
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
            <h1>Password Reset Request</h1>
        </div>

        <div class="content">
            <p>Hello {{$info['user']}},</p>
            <p>We received a request to reset your password. Please click the button below to reset your password:</p>

            <div class="button-container">
                <a href="{{$info['pResetLink']}}" class="button">Reset Password</a>
            </div>

            <p>If you did not request a password reset, please ignore this email. Your password will remain unchanged.</p>
        </div>

        <div class="footer">
            <p>&copy; 2024 Mjnamadi. All rights reserved.</p>
        </div>
    </div>

</body>
</html>
