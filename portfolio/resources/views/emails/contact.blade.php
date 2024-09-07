<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
    <h1>Contact Form Submission</h1>
    <p>Email from: {{ $name }}</p>
    <p>Email address: {{ $email }}</p>
    <p>Message:</p>
    <p>{{ $contactMessage }}</p>
    <p>This email was sent from your site {{ url('/') }} contact form.</p>
</body>
</html>
