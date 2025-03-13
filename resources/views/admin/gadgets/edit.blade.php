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

        <label for="categories">Kategori:</label>
        <select name="categories_id" id="category">
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $category->id == $gadgets->categories_id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>


        <label>Tahun Keluaran</label>
        <input type="year" name="tahun_keluaran" value="{{ $gadgets->tahun_keluaran }}" required>
        <label>Harga</label>
        <input type="number" name="harga" value="{{ $gadgets->harga }}" required>
        <label>Deskripsi</label>
        <input type="string" name="description" value="{{ $gadgets->description }}" required>
        <label>Image</label>
        <input type="file" name="image" value="{{ $gadgets->images }}" required>

        <button type="submit">Simpan Perubahan</button>
    </form>

</body>

</html>