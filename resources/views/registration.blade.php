<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .reg-container { width: 400px; padding: 20px; }
        .form-group { display: flex; align-items: center; margin-bottom: 15px; }
        .form-group label { width: 100px; }
        .form-group input { flex: 1; padding: 8px; border: 1px solid #ccc; border-radius: 4px; }
        .btn-reg { background-color: #2e8b57; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer; }
        .links { margin-left: 20px; }
        .success-msg { color: #666; margin-top: 20px; }
        h1 { margin-bottom: 30px; }
    </style>
</head>
<body>
    <div class="reg-container">
        <h1>Registration</h1>
        <form action="/register" method="POST">
            @csrf
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="name" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <div style="display: flex; align-items: center;">
                <button type="submit" class="btn-reg">Register</button>
                <div class="links">
                    <a href="/login">Sudah punya akun? Login</a>
                </div>
            </div>
        </form>
        @if(session('success'))
            <div class="success-msg">{{ session('success') }}</div>
        @endif
    </div>
</body>
</html>
