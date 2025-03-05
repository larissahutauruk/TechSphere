<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TechSaphere</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <div class="container">
        <h2>Log In</h2>
        <form action="{{ url('/login') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Berikutnya</button>
        </form>
        <a href="{{ route('register') }}">Buat akun.</a>
        <button class="google-login">Masuk dengan Google</button>
    </div>
</body>

</html>