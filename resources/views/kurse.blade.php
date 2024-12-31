<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Impressum</title>
    <meta name="description" content="XXXXX">
    <meta name="keywords" content="SEO, Suchmaschinenoptimierung, Anfänger, Tipps">
    <meta name="robots" content="index, follow">

    <meta property="og:title" content="XXXXX">
    <meta property="og:description" content="YYYYYY">
    <meta property="og:image" content="https://example.com/images/seo-tipps.png">
    <meta property="og:url" content="https://maxabit.de">

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<nav class="flex items-center justify-between p-6 lg:px-8 bg-slate-700" >
    <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">MaxaBit IT-Solutions</span>
            <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="">
        </a>
    </div>

    <div class="lg:flex lg:gap-x-12 ">
        <a href="{{ url('/home') }}" class="text-sm/6 font-semibold text-white">Home</a>
        <a href="{{ url('/ueberuns') }}" class="text-sm/6 font-semibold text-white">Über uns</a>
    </div>
</nav>
{{--    </header>--}}
</div>

<div class="ml-10">
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <ul>
            <li> <a href="{{ url('/kurs/java/ueber-kurs') }}">Java</a></li>
            <li> <a href="{{ url('/kurs/algorithmus/ueber-kurs') }}">Algorithmus</a></li>
            <li> <a href="{{ url('/kurs/datenbank/ueber-kurs') }}">Datenbank</a></li>
            <li> <a href="{{ url('/kurs/springboot/ueber-kurs') }}">Spring Boot</a></li>


        </ul>


    </div>

    Kurse
</div>
</body>
</html>
