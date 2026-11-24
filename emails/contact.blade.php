<!DOCTYPE html>
<html lang="en">
<body style="font-family: Arial, sans-serif; color: #111827; line-height: 1.6;">
    <h2 style="margin: 0 0 12px;">New message from your website</h2>
    <p><strong>Name:</strong> {{ $data['name'] }}<br>
    <strong>Email:</strong> {{ $data['email'] }}<br>
    <strong>Subject:</strong> {{ $data['subject'] ?? '-' }}</p>
    <p style="white-space: pre-line;">{{ $data['message'] }}</p>
</body>
</html>
