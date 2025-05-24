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

    <div class="data">
        <h2>{{ $gadgets->name }}</h2>
        <h3>Tahun Keluaran: {{ $gadgets->tahun_keluaran }} <br> Spesifikasi lainnya: <br> {{ $gadgets->description }}
        </h3>
    </div>
    <div class="box"><img src="{{ asset('pict/' . $gadgets->image) }}">
        <h3>Rp {{ number_format($gadgets->harga, 0, ',', '.') }}</h3>
    </div>

    <h2 class="link">Link pembelian:</h2>
    <div class="buy">
        <a href="">Shopee</a>
        <a href="">Lazada</a>
        <a href="">Tokopedia</a>
        <a href="">Ori Web</a>
    </div>

    <div class="rating">
        <h2>Beri rating website ini</h2>
        <p>Sampaikan pendapat anda</p>
    </div>

    <div class="terlaris">
        <div></div>
        <div></div>
        <div></div>
    </div>
</body>

</html>