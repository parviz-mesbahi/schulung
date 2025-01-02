<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ ucfirst(request()->path()) }} | IT-Schulungen: Java, Datenbanken, Algorithmen  & Spring Boot | MaxaBit IT-Solutions Bonn</title>
    <meta name="description" content="Entdecken Sie umfassende IT-Schulungen zu Java, Datenbanken und Algorithmen. Verbessern Sie Ihre Programmierkenntnisse mit unseren erfahrenen Trainern. Jetzt anmelden!">
    <meta name="keywords" content="Java Schulung, Datenbankkurs, Algorithmus Training, IT Weiterbildung, Programmierkurs">
    <meta name="robots" content="index, follow">

    {{--    <img src="images/java-kurs.jpg" alt="Java Programmierung Kurs für Anfänger und Fortgeschrittene">--}}


    <meta property="og:title" content="IT-Schulungen: Java, Datenbanken, Algorithmen  & Spring Boot | MaxaBit IT-Solutions Bonn">
    <meta property="og:description" content="Verbessern Sie Ihre IT-Kenntnisse mit unseren spezialisierten Schulungen in Java, Datenbanken, Algorithmen  & Spring Boot">
    {{--    <meta property="og:image" content="https://maxabit.de/images/og-image.jpg">--}}
    <meta property="og:url" content="https://maxabit.de">
    <meta property="og:type" content="website">

    <link rel="canonical" href="https://maxabit.de/kurs">

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Course",
        "name": "Java Programmierung",
        "description": "Lernen Sie die Grundlagen und fortgeschrittene Konzepte der Java-Programmierung in unserem umfassenden Kurs.",
        "provider": {
         "@type": "Organization",
         "name": "MaxaBit IT-Solutions",
         "sameAs": "https://maxabit.de"
        }
    }
</script>

    <link rel="alternate" href="https://maxabit.de/" hreflang="de">

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
        <a href="{{ url('/kurs') }}" class="text-sm/6 font-semibold text-white">Kurse</a>
        <a href="{{ url('/ueberuns') }}" class="text-sm/6 font-semibold text-white">Über uns</a>
        <a href="{{ url('/kontakt') }}" class="text-sm/6 font-semibold text-white">Kontakt</a>
    </div>
</nav>

</div>

<div class="ml-10">
    @if ($data->isEmpty())
        <p>No content available.</p>
    @else
        @foreach ($data as $item)
            <div>
                {!! $item->content  !!}
            </div>
            <hr>
        @endforeach
    @endif
</div>
</body>
</html>
