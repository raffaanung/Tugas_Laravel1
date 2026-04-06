<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 50px; }
        .btn-logout { background-color: #4361ee; color: white; text-decoration: none; padding: 10px 20px; border-radius: 5px; display: inline-block; margin-top: 20px; }
        h1 { margin-bottom: 30px; }
    </style>
</head>
<body>
    <h1>Selamat datang, {{ $user->name }}</h1>
    <a href="/logout" class="btn-logout">Logout</a>
</body>
</html>
