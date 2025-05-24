<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="{{ asset(path: 'css/about.css') }}" />
</head>

<body>
    <nav class="navbar">
        <div class="logo">TechSphere</div>
        <ul class="nav-links">
            <li><b><a href="#">Home</a></b></li>
            <li class="dropdown">
                <b><a href="#">Category</a></b>
                <ul class="itulah"> @foreach($categories as $category)
                    <li><a href="{{ route('homepage', $category->id) }}">{{ $category->name }}</a></li>
                @endforeach
                </ul>
            </li>
            <li><b><a href="{{ route('about') }}">About Us</a></b></li>
        </ul>
        <div class="nav-icons">
            <input type="text" class="search-bar" placeholder="Search something..">
            <a href="#"><img src="{{ asset('pict/Home.png') }}" alt="Home"></a>
            <a href="{{ route('pralogin') }}"><img src="{{ asset('pict/Account.png') }}" alt="User"></a>
        </div>
    </nav>

    <div class="frame">
        <div class="overlap-group">
            <div class="overlap"><img class="image" src="{{asset('pict/image.png')}}">
                <div class="text-wrapper">About Our Company</div>
                <div class="div">TechSphere.</div>
            </div>
        </div>
    </div>

    <div class="frame-2">
        <h2>Apa Itu TechSphere?</h2>
        <p class="platform">
            TechSphere adalah sebuah platform terpercaya yang menyajikan informasi lengkap, akurat, dan terbaru
            tentang alat komunikasi
            seperti
            smartphone, laptop, PC, dan tablet. Kami hadir untuk membantu pengguna memahami teknologi melalui
            ulasan
            mendalam, perbandingan produk, dan tips penggunaan yang mudah dipahami. <br /><br />Dengan fokus
            pada
            transparansi dan objektivitas, Techsphere menjadi jembatan antara kebutuhan pengguna dan kemajuan
            teknologi
            komunikasi.
        </p>
        <img src="{{ asset('pict/group-1.png') }}" alt="company" class="company">
    </div>
    
    <div class="frame-3">
        <h2>Our Partner</h2>
        <div class="partner">
            <img src="{{ asset('pict/mi.png') }}" alt="mi">
            <img src="{{ asset('pict/apple.png') }}" alt="apple">
            <img src="{{ asset('pict/samsung.png') }}" alt="samsung">
            <img src="{{ asset('pict/huawei.png') }}" alt="huawei">
            <img src="{{ asset('pict/asus.png') }}" alt="asus">
            <img src="{{ asset('pict/lenovo.png') }}" alt="lenovo">
        </div>
    </div>
</body>

</html>