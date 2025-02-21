<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechSphere</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- Header -->
    <header>
        <nav>
            <a href="/">TechSphere</a>
            <ul>
                <li><a href="#">Mobile</a></li>
                <li><a href="#">Laptop</a></li>
                <li><a href="#">PC</a></li>
            </ul>
        </nav>
    </header>

    <!-- Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 TechSphere. All Rights Reserved.</p>
    </footer>
</body>

</html>