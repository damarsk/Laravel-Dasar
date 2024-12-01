<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
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
    <div class="container mx-auto p-8">
        <h1 class="text-4xl font-bold mb-8 text-center">Contact Me</h1>
        <form action="/contact" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Name
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" name="name" placeholder="Your name">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" name="email" placeholder="Your email">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="message">
                    Message
                </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" name="message" rows="4" placeholder="Your message"></textarea>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Send
                </button>
            </div>
        </form>
    </div>
</body>
</html>