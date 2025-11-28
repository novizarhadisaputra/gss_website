<!DOCTYPE html>
<html>
<head>
    <title>New Contact Form Submission</title>
</head>
<body>
    <h2>New Contact Form Submission</h2>
    <p>You have received a new message from the contact form on your website.</p>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Full Name</th>
            <td>{{ $data['full_name'] }}</td>
        </tr>
        <tr>
            <th>Company Name</th>
            <td>{{ $data['company_name'] }}</td>
        </tr>
        <tr>
            <th>Email Address</th>
            <td>{{ $data['email'] }}</td>
        </tr>
        <tr>
            <th>Message</th>
            <td>{{ $data['message'] }}</td>
        </tr>
    </table>
</body>
</html>
