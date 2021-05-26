<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>

<body>
<h2>Dear {{$user['name']}},</h2>
<br/>
Welcome to our comunity! Your registered email is {{$user['email']}} and you will be receiving a "Reset password" email to reset your account with new password.
</body>

</html>
