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
            <li><b><a href="#">Gadgets</a></b></li>
            <li><b><a href="#">Ratings</a></b></li>
        </ul>
        <div class="nav-icons">
            <input type="text" class="search-bar" placeholder="Search something..">
            <a href="#"><img src="{{ asset('pict/Home.png') }}" alt="Home"></a>
            <a href="#"><img src="{{ asset('pict/Account.png') }}" alt="User"></a>

        </div>
    </nav>
    <div class="container">
        <h2>Produk Baru</h2>
        <form action="{{ url('admin/gadgets/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>Nama Produk</label>
                <input type="text" name="name" class="form-control" placeholder="nama produk" required>
            </div>

            <div class="mb-3">
                <label>Kategori</label>
                <select name="categories_id" class="form-control" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Tahun Keluaran</label>
                <input type="year" name="tahun_keluaran" class="form-control" placeholder="tahun keluaran" required>
            </div>

            <div class="mb-3">
                <label>Harga</label>
                <input type="number" name="harga" class="form-control" placeholder="Rp" required>
            </div>

            <div class="mb-3">
                <label>Spesifikasi</label>
                <textarea name="description" class="form-control" placeholder="spesifikasi" required></textarea>
            </div>

            <div class="mb-3">
                <label>Foto Produk</label>
                <input type="file" name="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="{{ route('admin.gadgets.dashboard') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>

</html>