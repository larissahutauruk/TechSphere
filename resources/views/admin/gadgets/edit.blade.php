<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link rel="stylesheet" href="{{ asset(path: "css/editproduk.css") }}">
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
        <h2>Edit Produk</h2>
        <form action="{{ route('admin.gadgets.update', $gadgets->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <input type="text" name="name" value="{{ $gadgets->name }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <select name="categories_id" id="category" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $gadgets->categories_id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <input type="year" name="tahun_keluaran" value="{{ $gadgets->tahun_keluaran }}" class="form-control"
                    required>
            </div>
            <div class="mb-3">
                <input type="number" name="harga" value="{{ $gadgets->harga }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <input type="string" name="description" value="{{ $gadgets->description }}" class="form-control"
                    required>
            </div>
            <div class="mb-3">
                <label>photo</label>
                <input type="file" name="image" value="{{ $gadgets->images }}" class="form-control" required>
            </div>

            <a href="{{ route('admin.gadgets.dashboard') }}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

</body>

</html>