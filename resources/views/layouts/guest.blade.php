<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-b from-pink-100 via-white to-pink-200 min-h-screen font-sans antialiased text-gray-900">
    
    <div class="w-full h-screen p-10">
        <div class="flex flex-col items-start justify-start h-full w-full">
            <div class="mb-6">
                <a href="/" wire:navigate>
                    <x-application-logo class="w-16 h-16 fill-current text-pink-600" />
                </a>
            </div>

            <div class="bg-white shadow-xl rounded-2xl p-10 w-full h-full">
                {{ $slot }}
            </div>
        </div>
    </div>

</body>
</html>
