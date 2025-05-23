<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <link rel="stylesheet" href="{{ asset(path: "css/tambahproduk.css") }}">
</head>

<body>
    <nav class="navbar">
        <div class="logo">TechSphere</div>
        <ul class="nav-links">
            <li><b><a href="{{ route('admin.categories.index') }}">Categories</a></b></li>
            <li><b><a href="{{ route('admin.gadgets.dashboard') }}">Gadgets</a></b></li>
            <li><b><a href="#">Ratings</a></b></li>
        </ul>
        <div class="nav-icons">
            <input type="text" class="search-bar" placeholder="Search something..">
            <a href="#"><img src="{{ asset('pict/Home.png') }}" alt="Home"></a>
            <a href="#"><img src="{{ asset('pict/Account.png') }}" alt="User"></a>

        </div>
    </nav>
    <div class="container">
        <h2>Kategori Baru</h2>
        <form action="{{ url('admin/categories/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="kategori" required>
            </div>

            <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</body>

</html>