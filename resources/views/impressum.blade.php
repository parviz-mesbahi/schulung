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

    <link rel="canonical" href={{ url()->current() }}>

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
        <a href="{{ url('/') }}" class="text-sm/6 font-semibold text-white">Home</a>
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

<!-- Footer -->
<footer class="mt-32 bg-gray-900 sm:mt-56">
    <div class="mx-auto max-w-7xl px-6 py-16 sm:py-24 lg:px-8 lg:py-32">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            {{--                <img class="h-9" src="https://maxabit.de" alt="MaxaBit IT-Solutions">--}}
            <img class="h-9 text-gray-400 " src="https://maxabit.de" alt="MaxaBit IT-Solutions">
            <div class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                <div class="md:grid md:grid-cols-2 md:gap-8 ">
                    <div>
                        <h3 class="text-sm/6 font-semibold text-blue-500"><a href="{{ url('/impressum') }}">Impressum</a></h3>
                    </div>
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-sm/6 font-semibold text-blue-500"><a href="{{ url('/datenschutz') }}">Datenschutz</a></h3>
                    </div>
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-sm/6 font-semibold text-blue-500"><a href="{{ url('/') }}"> </a></h3>
                    </div>
                </div>
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm/6 font-semibold text-blue-500"><a href="{{ url('/ueberuns') }}">Über Uns</a></h3>
                    </div>
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-sm/6 font-semibold text-blue-500"><a href="{{ url('/kontakt') }}">Kontakt</a></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-16 border-t border-white/10 pt-8 sm:mt-20 lg:mt-24">
            <p class="text-sm/6 text-gray-400 text-center">Copyright &copy; 2024 MaxaBit IT-Solutions, Inc. All rights reserved.</p>
        </div>
    </div>
</footer>
</body>
</html>
