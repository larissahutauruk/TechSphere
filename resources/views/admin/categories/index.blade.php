<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset(path: "css/admindashboard.css") }}">
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
            <a href="{{ route('admin.gadgets.dashboard') }}"><img src="{{ asset('pict/Home.png') }}" alt="Home"></a>
            <a href="#"><img src="{{ asset('pict/Account.png') }}" alt="User"></a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
    </nav>

    @extends('layouts.app')

    @section('content')
        <h1>Daftar Kategori</h1>
        <a href="{{ route('admin.categories.create') }}" class="button-1">Tambah Produk</a>
        <table class="tabel">
            <tr class="tabel-head" border-buttom="1px solid #d9d9d9">
                <th width="100vh">ID</th>
                <th width="100vh">Kategori</th>
                <th width="150vh">Opsi</th>
            </tr>
            @foreach($categories as $category)
                <tr class="table-body">
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td><!-- Link Edit -->
                        <a href="{{ route('admin.categories.edit', $category->id) }}" class="link">Edit</a>

                        <!-- Link Delete -->
                        <form action="{{route('admin.categories.destroy', $category->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus?')"
                                class="button">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @endsection
</body>

</html>