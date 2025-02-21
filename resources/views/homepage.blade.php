<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechSphere - Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <nav class="bg-white p-4 shadow-md flex justify-between">
        <h1 class="text-xl font-bold">TechSphere</h1>
        <div>
            <a href="#" class="px-4">Mobile</a>
            <a href="#" class="px-4">Laptop</a>
            <a href="#" class="px-4">PC</a>
            <a href="/login" class="px-4">Login</a>
        </div>
    </nav>

    <div class="container mx-auto mt-6">
        @foreach ($products as $product)
            <div class="bg-white p-4 mb-4 shadow-lg rounded-md">
                <img src="{{ asset('images/' . $product['image']) }}" class="w-full rounded">
                <h2 class="text-lg font-bold mt-2">{{ $product['name'] }}</h2>
                <a href="/detail/{{ $product['name'] }}" class="block bg-blue-500 text-white text-center py-2 mt-2 rounded">
                    Lihat Detail
                </a>
            </div>
        @endforeach
    </div>

    <footer class="bg-black text-white text-center p-4 mt-10">
        &copy; 2025 TechSphere. All Rights Reserved.
    </footer>
</body>

</html>