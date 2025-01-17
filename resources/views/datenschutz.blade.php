<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ ucfirst(request()->path()) }} | IT-Schulungen: Java, Datenbanken, Algorithmen  & Spring Boot | MaxaBit IT-Solutions Bonn</title>
    <meta name="description" content="Entdecken Sie umfassende IT-Schulungen zu Java, Datenbanken und Algorithmen. Verbessern Sie Ihre Programmierkenntnisse mit unseren erfahrenen Trainern. Jetzt anmelden!">
    <meta name="keywords" content="Java Kurs, Spring Boot, Datenbankkurs, Algorithmus Training, IT Weiterbildung, Programmierkurs">
    <meta name="robots" content="index, follow">


    <link rel="canonical" href={{ url()->current() }}>

    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
<div>
    <!-- Header -->
    {{--    <header class="absolute inset-x-0 top-0 ">--}}
    <nav class="flex items-center justify-between p-6 lg:px-8 bg-slate-700">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">MaxaBit IT-Solutions</span>
                <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500"
                     alt="">
            </a>
        </div>
        {{--            <div class="flex lg:hidden">--}}
        {{--                <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-400">--}}
        {{--                    <span class="sr-only">Open main menu</span>--}}
        {{--                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">--}}
        {{--                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />--}}
        {{--                    </svg>--}}
        {{--                </button>--}}
        {{--            </div>--}}
        <div class="lg:flex lg:gap-x-12 ">
            <a href="{{ url('/') }}" class="text-sm/6 font-semibold text-white">Home</a>
            <a href="{{ url('/kurs') }}" class="text-sm/6 font-semibold text-white">Kurse</a>
            <a href="{{ url('/ueberuns') }}" class="text-sm/6 font-semibold text-white">Über uns</a>
            <a href="{{ url('/kontakt') }}" class="text-sm/6 font-semibold text-white">Kontakt</a>
        </div>
        {{--            <div class="hidden lg:flex lg:flex-1 lg:justify-end">--}}
        {{--                <a href="" class="text-sm/6 font-semibold text-white">Log in <span aria-hidden="true">&rarr;</span></a>--}}
        {{--            </div>--}}
    </nav>
    {{--    </header>--}}
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
            <a href="{{ url('/') }}" class="h-9 text-blue-500"> MaxaBit IT-Solutions </a>
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
            <p class="text-sm/6 text-gray-400 text-center">Copyright &copy; 2024 MaxaBit IT-Solutions, Inc. All rights reserved. In: Köln - Bonn - Frankfurt</p>
        </div>
    </div>
</footer>

</div>
</body>
</html>
