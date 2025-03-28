<!DOCTYPE html>
<html>
<head>
    <title>New Contact Us Message</title>
</head>
<body>
    <h2>New Message From: {{ $data['name'] }}</h2>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $data['comment'] }}</p>
</body>
</html>
