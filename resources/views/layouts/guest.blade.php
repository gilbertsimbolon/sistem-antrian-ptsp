<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Sistem Antrian PTSP') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-gray-900">
        <div class="flex flex-col items-center min-h-screen pt-6 sm:justify-center sm:pt-0" style="background-color: #FBF6E9">
            {{-- Logo --}}
            <div>
                <a href="/">
                    <img class="w-32 h-32" src="{{ asset('img/logo-pntondano.png') }}" alt="Logo PN Tondano">
                </a>
            </div>
            {{-- Judul Aplikasi --}}
            <div class="w-auto h-auto mt-5 font-serif text-2xl text-center uppercase">
                <h1>
                    Sistem Antrian <br> PTSP (Pelayanan Terpadu Satu Pintu) <br> Pengadilan Negeri Tondano    
                </h1>
            </div>

            <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md dark:bg-green-900 sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
