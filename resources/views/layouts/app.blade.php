<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothify</title>
</head>
<body class="bg-gray-100">

    <!-- NAVBAR -->
    <nav class="bg-white shadow px-6 py-4 flex justify-between">
        <h1 class="text-xl font-bold text-blue-600">Clothify</h1>
        <div class="space-x-4">
            <a href="#" class="text-gray-700">Home</a>
            <a href="#" class="text-gray-700">Produk</a>
            <a href="#" class="text-gray-700">Keranjang</a>
        </div>
    </nav>

    <!-- CONTENT -->
    <main class="p-6">
        @yield('content')
    </main>

</body>
</html>