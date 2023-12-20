<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forget Password</title>
</head>
<body>
    <h1>Dear {{ $email }},</h1>

    <p>go to site to reset your password</p>

    <a href="{{ route('admin.auth.forget.update', $email) }}" class="btn btn-info">Update Password</a>
</body>
</html>