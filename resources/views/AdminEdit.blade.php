<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
</head>

<body>
    <form action="{{ route('admin.gadgets.update', $gadgets->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Gadget:</label>
        <input type="text" name="name" value="{{ $gadgets->name }}" required>

        <label>Kategori:</label>
        <select name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $gadgets->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <label>Harga:</label>
        <input type="number" name="harga" value="{{ $gadget->harga }}" required>

        <button type="submit">Simpan Perubahan</button>
    </form>

</body>

</html>