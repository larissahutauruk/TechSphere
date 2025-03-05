<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - TechSaphere</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
    <div class="container">
        <h2>Make a new account</h2>
        <form action="{{ route('register.post') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="text" name="name" placeholder="Nama Lengkap" required>
            <button type="submit">Berikutnya</button>
        </form>
        <a href="{{ route('login') }}">Kembali</a>
    </div>
</body>

</html>