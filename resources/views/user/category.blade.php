<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
</head>

<body>
    <nav class="navbar">
        <div class="logo">TechSphere</div>
        <ul class="nav-links">
            <li><b><a href="{{ route('user.home') }}">Home</a></b></li>
            <li class="dropdown">
                <b><a href="#">Category</a></b>
                <ul class="itulah"> @foreach($categories as $category)
                    <li><a href="{{ route('user.category', $category->id) }}">{{ $category->name }}</a></li>
                @endforeach
                </ul>
            </li>
            <li><b><a href="{{ route('user.about') }}">About Us</a></b></li>
        </ul>
        <div class="nav-icons">
            <input type="text" class="search-bar" placeholder="Search something..">
            <a href="#"><img src="{{ asset('pict/Home.png') }}" alt="Home"></a>
            <a href="#"><img src="{{ asset('pict/Account.png') }}" alt="User"></a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
    </nav>
</body>

</html>