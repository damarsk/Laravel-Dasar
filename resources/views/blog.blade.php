<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<nav class="bg-white shadow-md">
        <ul class="flex justify-between p-4">
            <div class="flex space-x-4">
                <li><a href="{{ url('/') }}" class="text-blue-500 hover:text-blue-700">Home</a></li>
                <li><a href="{{ url('/about') }}" class="text-blue-500 hover:text-blue-700">About</a></li>
                <li><a href="{{ url('/contact') }}" class="text-blue-500 hover:text-blue-700">Contact Me</a></li>
            </div>
            <div class="flex space-x-4">
                @auth
                    <li><a href="{{ url('/dashboard') }}" class="text-blue-500 hover:text-blue-700">Dashboard</a></li>
                @endauth
                @guest
                    <li><a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-700">Login</a></li>
                    <li><a href="{{ route('register') }}" class="text-blue-500 hover:text-blue-700">Register</a></li>
                @endguest
            </div>
        </ul>
    </nav>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold mb-8 text-center">Blog</h1>
        
        <div class="flex justify-center mb-8">
            <a href="/" class="bg-blue-500 text-white px-4 py-2 rounded mr-2">Home</a>
            <a href="/blog" class="bg-blue-500 text-white px-4 py-2 rounded mr-2">Blog</a>
            <a href="/about" class="bg-blue-500 text-white px-4 py-2 rounded mr-2">About</a>
            <a href="/contact" class="bg-blue-500 text-white px-4 py-2 rounded">Contact</a>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-2xl font-bold mb-2">Judul Artikel 1</h2>
            <p class="text-gray-700">Ini adalah isi dari artikel pertama. Artikel ini berisi informasi yang sangat menarik dan bermanfaat.</p>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-2">Judul Artikel 2</h2>
            <p class="text-gray-700">Ini adalah isi dari artikel kedua. Artikel ini juga berisi informasi yang sangat menarik dan bermanfaat.</p>
        </div>
    </div>
</body>
</html>