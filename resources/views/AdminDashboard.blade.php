<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            gap: 20px;
            align-items: center;
        }

        /* Logo */
        .logo {
            padding-left: 50px;
            font-family: 'Kalnia';
            font-size: 28px;
            font-weight: bold;
        }

        /* Navigation Links */
        .nav-links {
            font-family: 'Calibri';
            list-style: none;
            display: flex;
            right: 100px;
        }

        .nav-links li {
            display: inline;
        }

        .nav-links a {
            text-decoration: none;
            color: black;
            font-size: 20px;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: black;
        }

        /* Icons & Search Bar */
        .nav-icons {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .search-bar {
            margin-right: 30px;
            padding: 10px 40px;
            border: 1px;
            border-radius: 20px;
            outline: none;
            background-color: #d9d9d9;
        }

        .nav-icons img {
            width: 24px;
            height: 24px;
        }

        /* Navbar */
        .navbar {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background: #f5f5f5;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 50px;
        }

        .nav-links li a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }

        .search input {
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .icons img {
            width: 25px;
            margin-left: 25px;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="logo">TechSphere</div>
        <ul class="nav-links">
            <li><b><a href="{{ route('admin.categories') }}">Categories</a></b></li>
            <li><b><a href="{{ route('admin.gadgets') }}">Gadgets</a></b></li>
            <li><b><a href="#">Ratings</a></b></li>
        </ul>
        <div class="nav-icons">
            <input type="text" class="search-bar" placeholder="Search something..">
            <a href="#"><img src="{{ asset('pict/Home.png') }}" alt="Home"></a>
            <a href="#"><img src="{{ asset('pict/Account.png') }}" alt="User"></a>
        </div>
    </nav>

    @extends('layouts.app')

    @section('content')
        <h1>Daftar Produk</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category ID</th>
                <th>Tahun</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Opsi</th>
            </tr>
            @foreach($gadgets as $gadget)
                <tr>
                    <td>{{ $gadget->id }}</td>
                    <td>{{ $gadget->name }}</td>
                    <td>{{ $gadget->categories_id }}</td>
                    <td>{{ $gadget->tahun_keluaran }}</td>
                    <td>Rp {{ number_format($gadget->harga, 0, ',', '.') }}</td>
                    <td>{{ $gadget->description }}</td>
                    <td>{{ $gadget->image }}</td>
                    <td>
                        <!-- Link Edit -->
                        <a href="{{ route('admin.gadgets.edit', $gadget->id) }}">Edit</a> |

                        <!-- Link Delete -->
                        <form action="{{ route('admin.gadgets.destroy', $gadget->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @endsection

</body>

</html>