<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
        @import url('https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css');
    </style>
    </head>
    <body class="antialiased bg-gray-100 text-gray-900 flex flex-col min-h-screen">
        <header class="p-4 shadow-md" style="background-color: #2ab7b7;">
            <div class="container mx-auto flex justify-between items-center">
                <div class="flex items-center">
                    <a href="{{ url('/') }}" class="flex items-center">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10 mr-3">
                        <span class="text-white text-xl font-bold">Blue Media</span>
                    </a>
                </div>
                <nav class="flex space-x-4">
                    <a href="#home" class="text-white px-3 py-2 rounded-full text-sm font-medium border-2 border-transparent hover:border-white transition">Home</a>
                    <a href="#about" class="text-white px-3 py-2 rounded-full text-sm font-medium border-2 border-transparent hover:border-white transition">About</a>
                    <a href="#services" class="text-white px-3 py-2 rounded-full text-sm font-medium border-2 border-transparent hover:border-white transition">Services</a>
                    <a href="#contact" class="text-white px-3 py-2 rounded-full text-sm font-medium border-2 border-transparent hover:border-white transition">Contact</a>
                    <a href="#request" class="text-white px-3 py-2 rounded-full text-sm font-medium border-2 border-white hover:bg-transparent transition">Envoyer une demande</a>
                    <a href="#login" class="text-white px-3 py-2 rounded-full text-sm font-medium border-2 border-transparent hover:border-white transition">Connexion</a>
                </nav>
            </div>
        </header>
        <main class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg flex-grow">
            <h1 class="text-2xl font-bold text-center">Salut World, welcome to {{ config('app.name') }}</h1>
        </main>
        <footer class="p-4 mt-10" style="background-color: #2ab7b7;">
            <div class="container mx-auto text-center text-white">
                <p>&copy; {{ date('Y') }} Blue Media. All rights reserved.</p>
            </div>
        </footer>
    </body>
</html>