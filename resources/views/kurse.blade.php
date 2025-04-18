<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alle Onlinekurse auf einem Blick - Praxisnah mit Maxabit</title>
    <meta name="description" content="Java, Algorithmen, Datenbanken und Java Spring Boot - Erlerne in unseren Kursen fundierte Fachkenntnisse – für Anfänger und Fortgeschrittene. ">
    <meta name="keywords" content="Java Schulung, Datenbankkurs, Algorithmus Training, IT Weiterbildung, Programmierkurs">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="IT-Schulungen: Java, Datenbanken, Algorithmen  & Spring Boot | MaxaBit IT-Solutions Bonn">
    <meta property="og:description" content="Verbessern Sie Ihre IT-Kenntnisse mit unseren spezialisierten Schulungen in Java, Datenbanken, Algorithmen  & Spring Boot">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <link rel="canonical" href="{{ url()->current() }}">

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

    <link rel="icon" href="favicon.svg" type="image/svg+xml">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body >
<header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-6 lg:px-8 bg-gray-900" aria-label="Global">
        <div class="flex lg:flex-1">
            <a  href="{{ url('/') }}" class="">
                <h1 class="text-blue-800 text-4xl font-serif font-extrabold">MaxaBit</h1>
            </a>
        </div>
        <div class="flex lg:hidden">
            <button id="mobileMenuButtonOpen" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-400">
                <span class="sr-only">Open main menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            {{--                <a href="{{ url('/') }}" class="text-sm/6 font-semibold text-white">Home</a>--}}
            <a href="{{ url('/entwicklung')}}" class="text-sm/6 font-semibold text-white">Entwicklung</a>
            <a href="{{ url('/kurse') }}" class="text-sm/6 font-semibold text-white">Kurse</a>
            <a href="{{ url('/ueberuns') }}" class="text-sm/6 font-semibold text-white">Über uns</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="{{ url('/kontakt') }}" class="text-sm/6 font-semibold text-white">Kontakt </a>
        </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true" id="mobileDialog">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-50"></div>
        <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gray-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-white/10">
            <div class="flex items-center justify-between" x-data="{ open: true }" x-show="open">
                <a href="{{ url('/') }}" class="-m-1.5 p-1.5">
                    <span class="text-blue-800 text-4xl font-serif font-extrabold">MaxaBit</span>
                </a>
                <button id="mobileMenuButtonClose" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-400">
                    <span class="sr-only">Close menu</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/25">
                    <div class="space-y-2 py-6">
                        <a href="{{ url('/') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-gray-800">Home</a>
                        <a href="{{ url('/entwicklung') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-gray-800">Entwicklung</a>
                        <a href="{{ url('/kurse') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-gray-800">Kurse</a>
                        <a href="{{ url('/ueberuns') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-gray-800">Über uns</a>
                    </div>
                    <div class="py-6">
                        <a href="{{ url('/kontakt') }}" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-white hover:bg-gray-800">Kontakt</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="isolate overflow-hidden bg-white px-6 lg:px-8">
    <div class="relative mx-auto max-w-2xl py-24 sm:py-32 lg:max-w-4xl">
        <div class="absolute left-1/2 top-0 -z-10 h-[50rem] w-[90rem] -translate-x-1/2 bg-[radial-gradient(50%_100%_at_top,theme(colors.indigo.100),white)] opacity-20 lg:left-36"></div>
        <div class="absolute inset-y-0 right-1/2 -z-10 mr-12 w-[150vw] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-20 md:mr-0 lg:right-full lg:-mr-36 lg:origin-center"></div>
        <figure class="grid grid-cols-1 items-center gap-x-6 gap-y-8 lg:gap-x-10">
            <div class="relative col-span-2 lg:col-start-1 lg:row-start-2">
                <svg viewBox="0 0 162 128" fill="none" aria-hidden="true" class="absolute -top-12 left-0 -z-10 h-32 stroke-gray-900/10">
                    <path id="b56e9dab-6ccb-4d32-ad02-6b4bb5d9bbeb" d="M65.5697 118.507L65.8918 118.89C68.9503 116.314 71.367 113.253 73.1386 109.71C74.9162 106.155 75.8027 102.28 75.8027 98.0919C75.8027 94.237 75.16 90.6155 73.8708 87.2314C72.5851 83.8565 70.8137 80.9533 68.553 78.5292C66.4529 76.1079 63.9476 74.2482 61.0407 72.9536C58.2795 71.4949 55.276 70.767 52.0386 70.767C48.9935 70.767 46.4686 71.1668 44.4872 71.9924L44.4799 71.9955L44.4726 71.9988C42.7101 72.7999 41.1035 73.6831 39.6544 74.6492C38.2407 75.5916 36.8279 76.455 35.4159 77.2394L35.4047 77.2457L35.3938 77.2525C34.2318 77.9787 32.6713 78.3634 30.6736 78.3634C29.0405 78.3634 27.5131 77.2868 26.1274 74.8257C24.7483 72.2185 24.0519 69.2166 24.0519 65.8071C24.0519 60.0311 25.3782 54.4081 28.0373 48.9335C30.703 43.4454 34.3114 38.345 38.8667 33.6325C43.5812 28.761 49.0045 24.5159 55.1389 20.8979C60.1667 18.0071 65.4966 15.6179 71.1291 13.7305C73.8626 12.8145 75.8027 10.2968 75.8027 7.38572C75.8027 3.6497 72.6341 0.62247 68.8814 1.1527C61.1635 2.2432 53.7398 4.41426 46.6119 7.66522C37.5369 11.6459 29.5729 17.0612 22.7236 23.9105C16.0322 30.6019 10.618 38.4859 6.47981 47.558L6.47976 47.558L6.47682 47.5647C2.4901 56.6544 0.5 66.6148 0.5 77.4391C0.5 84.2996 1.61702 90.7679 3.85425 96.8404L3.8558 96.8445C6.08991 102.749 9.12394 108.02 12.959 112.654L12.959 112.654L12.9646 112.661C16.8027 117.138 21.2829 120.739 26.4034 123.459L26.4033 123.459L26.4144 123.465C31.5505 126.033 37.0873 127.316 43.0178 127.316C47.5035 127.316 51.6783 126.595 55.5376 125.148L55.5376 125.148L55.5477 125.144C59.5516 123.542 63.0052 121.456 65.9019 118.881L65.5697 118.507Z" />
                    <use href="#b56e9dab-6ccb-4d32-ad02-6b4bb5d9bbeb" x="86" />
                </svg>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Effektive IT-Schulungen – Praxisnah und Innovativ</h2>
                <blockquote class="text-xl/4  text-gray-900 sm:text-2xl/9">

                    <p class="mx-auto mt-4 max-w-xl text-lg/8 text-gray-600">
                        Die Zufriedenheit unserer Kursteilnehmer liegt uns besonders am Herzen. Unser Ziel ist es,
                        Ihnen nicht nur Wissen zu vermitteln,
                        sondern auch Ihre Fähigkeiten durch moderne und praxisnahe Ansätze nachhaltig zu verbessern.
                        Wir setzen auf innovative Methoden, die Ihnen den Einstieg erleichtern und komplexe
                        Themen verständlich machen.
                        Durch praxisorientierte Übungen stellen wir sicher, dass Sie das Gelernte direkt anwenden können.
                    </p>
                    <p>
                    <p class="text-3xl font-bold tracking-tight text-gray-900 sm:text-2xl mt-6">Kursformat:</p>


                    <ul class="list-decimal pl-4 space-y-2">
                        <li class="mx-auto mt-4 max-w-xl text-lg/6 text-gray-500">
                            <strong>Dauer:</strong> Abhängig vom Kursumfang beträgt die Dauer 3 bis 5 Tage.
                        </li>
                        <li class="mx-auto mt-4 max-w-xl text-lg/8 text-gray-500">
                            <strong>Format:</strong> Sowohl Online- als auch Präsenzteilnahme möglich
                        </li>
                        <li class="mx-auto mt-4 max-w-xl text-lg/8 text-gray-500">
                            <strong>Kosten:</strong> Variieren je nach Anzahl der Tage und der Teilnehmer.
                        </li>
                        <li class="mx-auto mt-4 max-w-xl text-lg/8 text-gray-500">
                            <strong>Art:</strong> Einzelunterricht oder Gruppenunterricht
                        </li>
                        <li class="mx-auto mt-4 max-w-xl text-lg/8 text-gray-500">
                            <strong>Zertifikat:</strong> Teilnahme- und Leistungsnachweis
                        </li>
                    </ul>
                    </p>

                </blockquote>
            </div>
            <div class="col-end-1 w-16 lg:row-span-2 lg:w-72">
{{--                <img class="rounded-xl bg-indigo-50 lg:rounded-3xl" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=576&h=576&q=80" alt="">--}}
                <img class="rounded-xl bg-indigo-50 lg:rounded-3xl"
                     src="{{ asset('images/studentin.webp') }}" alt="">
            </div>
        </figure>
    </div>
</section>

{{--<div class="bg-white py-24 sm:py-32">--}}
{{--    <div class="mx-auto max-w-7xl px-6 lg:px-2">--}}
<div class="bg-white">
    <div class="mx-auto max-w-7xl px-6 py-2 sm:py-32 lg:px-8 lg:py-2">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-base/10 font-semibold text-indigo-600">Effektiv lernen</h2>
            <p class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-3xl lg:text-balance">
                Werde ein professioneller Entwickler.
            </p>
            <p class="mt-6 text-lg/8 text-gray-600"> Lerne die Fähigkeiten und Tools, die notwendig sind, um als professioneller Entwickler erfolgreich zu sein.</p>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                <div class="relative pl-16">
                    <dt class="text-base/7 font-semibold text-gray-900">
                        <div class="absolute left-0 top-0 flex size-10 items-center justify-center rounded-lg bg-indigo-600">
                            <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
                            </svg>
                        </div>
                        Java
                    </dt>
                    <dd class="mt-2 text-base/7 text-gray-600">
                        In diesem Java-Kurs lernst du die grundlegenden und fortgeschrittenen
                        Konzepte der Java-Programmierung, um leistungsfähige Anwendungen zu entwickeln.
                    </dd>
                    <dd class="mt-2 text-base/7 text-gray-600">
                       <a href="{{ url('/kurs/java') }}" > <span class="text-indigo-800"> Mehr... </span></a>
                    </dd>
                </div>
                <div class="relative pl-16">
                    <dt class="text-base/7 font-semibold text-gray-900">
                        <div class="absolute left-0 top-0 flex size-10 items-center justify-center rounded-lg bg-indigo-600">
                            <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                        </div>
                        Algorithmen
                    </dt>
                    <dd class="mt-2 text-base/7 text-gray-600">
                        In diesem Algorithmus-Kurs lernen die Teilnehmer die grundlegenden Techniken
                        und Strategien zur effizienten Lösung von Problemen mit verschiedenen Algorithmen und Datenstrukturen.
                    </dd>
                    <dd class="mt-2 text-base/7 text-gray-600">
                        <a href="{{ url('/kurs/algorithmus') }}" > <span class="text-indigo-800"> Mehr... </span></a>
                    </dd>
                </div>
                <div class="relative pl-16">
                    <dt class="text-base/7 font-semibold text-gray-900">
                        <div class="absolute left-0 top-0 flex size-10 items-center justify-center rounded-lg bg-indigo-600">
                            <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                            </svg>
                        </div>
                        Datenbanken
                    </dt>
                    <dd class="mt-2 text-base/7 text-gray-600">
                        In diesem Datenbankkurs lernst du die
                        Grundlagen und fortgeschrittene Techniken zur Verwaltung, Abfrage und Optimierung von Datenbanken.
                    </dd>
                    <dd class="mt-2 text-base/7 text-gray-600">
                        <a href="{{ url('/kurs/datenbank') }}" > <span class="text-indigo-800"> Mehr... </span></a>
                    </dd>
                </div>
                <div class="relative pl-16">
                    <dt class="text-base/7 font-semibold text-gray-900">
                        <div class="absolute left-0 top-0 flex size-10 items-center justify-center rounded-lg bg-indigo-600">
                            <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0 1 19.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 0 0 4.5 10.5a7.464 7.464 0 0 1-1.15 3.993m1.989 3.559A11.209 11.209 0 0 0 8.25 10.5a3.75 3.75 0 1 1 7.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 0 1-3.6 9.75m6.633-4.596a18.666 18.666 0 0 1-2.485 5.33" />
                            </svg>
                        </div>
                        Springboot
                    </dt>
                    <dd class="mt-2 text-base/7 text-gray-600">
                        In diesem Spring Boot Kurs lernst du, wie du mit Java leistungsstarke,
                        skalierbare Webanwendungen und Microservices effizient entwickelst.
                    </dd>
                    <dd class="mt-2 text-base/7 text-gray-600">
                        <a href="{{ url('/kurs/springboot') }}" > <span class="text-indigo-800"> Mehr... </span></a>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</div>


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
            <p class="text-sm/6 text-gray-400 text-center">Copyright &copy; 2024-2025 MaxaBit IT-Solutions, Inc. All rights reserved. <br> Kurse in: Köln - Bonn - Frankfurt</p>
        </div>
    </div>
</footer>

</body>
<script defer>
    const mobileDialog = document.getElementById("mobileDialog")
    const mobileMenuButtonOpen = document.getElementById("mobileMenuButtonOpen")
    const mobileMenuButtonClose = document.getElementById("mobileMenuButtonClose")
    mobileMenuButtonOpen.addEventListener("click", toggleMobileMenu)
    mobileMenuButtonClose.addEventListener("click", toggleMobileMenu)
    mobileDialog.style.visibility = "hidden"

    function toggleMobileMenu(){
        if(mobileDialog.style.visibility == "hidden") mobileDialog.style.visibility = "visible"
        else mobileDialog.style.visibility = "hidden"
    }
</script>
</html>
