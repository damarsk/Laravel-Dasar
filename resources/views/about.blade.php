<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
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
    <h1>About</h1>
    <p>This is the about page.</p>   
</body>
</html>