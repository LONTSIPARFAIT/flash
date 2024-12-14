<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('/img/logo.png') }}" type="image/x-icon">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-600 p-4 flex justify-between items-center">
        <div class="flex items-center">
            <img src="/img/logo.png" class="h-16 w-16 rounded" alt="Logo">
        </div>
        <div class="flex items-center space-x-4">
            <a href="/" class="text-white font-bold text-sm md:text-base hover:underline">Accueil</a>
            <a href="/A-Propos" class="text-white text-sm md:text-base hover:underline">À Propos</a>
            <a href="/services" class="text-white text-sm md:text-base hover:underline">Services</a>
            <a href="/contact" class="text-white text-sm md:text-base hover:underline">Contact</a>
        </div>
    </nav>

    @yield('content')

</body>
</html>
