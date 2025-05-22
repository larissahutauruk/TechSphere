<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset("css/admindashboard.css") }}">
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
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>

        </div>
    </nav>

    @extends('layouts.app')

    @section('content')
        <h1>Daftar Produk</h1>
        <a href="{{ route('admin.gadgets.create') }}" class="button-1">Tambah Produk</a>
        <table class="tabel">
            <tr class="tabel-head" border-buttom="1px solid #d9d9d9">
                <th width="50vh">No</th>
                <th width="200vh">Nama Produk</th>
                <th width="130vh">Tahun Keluaran</th>
                <th width="150vh">Harga</th>
                <th width="450vh">Deskripsi</th>
                <th width="200vh">Photo</th>
                <th width="150vh">Opsi</th>
            </tr>
            @foreach($gadgets as $gadget)
                <tr border-buttom="1px solid #d9d9d9">
                    <td>{{ $gadget->id }}</td>
                    <td>{{ $gadget->name }}</td>
                    <td>{{ $gadget->tahun_keluaran }}</td>
                    <td>Rp {{ number_format($gadget->harga, 0, ',', '.') }}</td>
                    <td class="tabel-deskripsi">{{ $gadget->description }}</td>
                    <td><img src="{{ asset('pict/' . $gadget->image) }}" width="200px" height="120px"></td>
                    <td>
                        <!-- Link Edit -->
                        <a href="{{ route('admin.gadgets.edit', $gadget->id) }}" class="link">Edit</a>

                        <!-- Link Delete -->
                        <form action="{{ route('admin.gadgets.destroy', $gadget->id) }}" method="POST" style="display:inline;">
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