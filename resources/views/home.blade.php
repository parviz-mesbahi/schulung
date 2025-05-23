<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Maxabit – Dein Partner für praxisnahe IT-Onlinekurse</title>
    <meta name="description" content="Entdecke maßgeschneiderte IT-Services und innovative Softwarelösungen für dein Unternehmen. Kontaktiere uns für eine unverbindliche Beratung.">
    <meta name="keywords" content="Java Kurs, Spring Boot, Datenbankkurs, Algorithmus Training, IT Weiterbildung, Programmierkurs">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="IT-Schulungen: Java, Datenbanken, Algorithmen  & Spring Boot | MaxaBit IT-Solutions Bonn">
    <meta property="og:description" content="Verbessern Sie Ihre IT-Kenntnisse mit unseren spezialisierten Schulungen in Java, Datenbanken, Algorithmen  & Spring Boot">
{{--    <meta property="og:url" content="{{ url()->current() }}">--}}
    <meta property="og:type" content="website">

    <link rel="canonical" href="{{ url()->current() }}">

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Course",
        "name": "Java Programmierung",
        "description": "Lernen Sie die Grundlagen und fortgeschrittene Konzepte der Java-Programmierung in unserem umfassenden Kurs.",
        "provider": {
         "@type": "Firma",
         "name": "MaxaBit IT-Solutions",
         "sameAs": "https://maxabit.de"
        }
    }
</script>
    <link rel="alternate" href="https://maxabit.de/" hreflang="de">
    <link rel="icon" href="{{ url('/favicon.svg') }}" type="image/svg+xml">
    <script src="https://cdn.tailwindcss.com"></script>




</head>
<body class="bg-gray-100">
<div class="bg-white">
    <!-- Header -->
    <header class="absolute inset-x-0 top-0 z-50">
        <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
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


    <!-- Hero section -->
    <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
        <img loading="lazy" src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=2830&h=1500&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply" alt="" class="absolute inset-0 -z-10 size-full object-cover object-right md:object-center">
        <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl">
            <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu">
            <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>

        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-5xl font-semibold tracking-tight text-white sm:text-7xl">Onlinekurse</h2>
                <p class="mt-8 text-pretty text-lg font-medium text-gray-400 sm:text-xl/8">
                    Entdecken Sie Java, Algorithmen, Datenbankmanagement und Spring Boot in
                    praxisnahen Onlinekursen – flexibel, fundiert und auf Ihre Bedürfnisse
                    zugeschnitten.
                </p>
            </div>
            <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-6 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-8">
                <div class="flex gap-x-4 rounded-xl bg-white/5 p-6 ring-1 ring-inset ring-white/10">
                    <svg class="h-7 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 0 1 3.5 2h1.148a1.5 1.5 0 0 1 1.465 1.175l.716 3.223a1.5 1.5 0 0 1-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 0 0 6.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 0 1 1.767-1.052l3.223.716A1.5 1.5 0 0 1 18 15.352V16.5a1.5 1.5 0 0 1-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 0 1 2.43 8.326 13.019 13.019 0 0 1 2 5V3.5Z" clip-rule="evenodd" />
                    </svg>
                    <div class="text-base/7">
                        <h3 class="font-semibold text-white">Beratung</h3>
                        <p class="mt-2 text-gray-300">
                            Wir unterstützen Sie mit individueller Beratung, um Ihre IT-Infrastruktur effektiv
                            zu optimieren und maßgeschneiderte Lösungen zu entwickeln
                        </p>
                    </div>
                </div>
                <div class="flex gap-x-4 rounded-xl bg-white/5 p-6 ring-1 ring-inset ring-white/10">
                    <svg class="h-7 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd" d="m7.171 4.146 1.947 2.466a3.514 3.514 0 0 1 1.764 0l1.947-2.466a6.52 6.52 0 0 0-5.658 0Zm8.683 3.025-2.466 1.947c.15.578.15 1.186 0 1.764l2.466 1.947a6.52 6.52 0 0 0 0-5.658Zm-3.025 8.683-1.947-2.466c-.578.15-1.186.15-1.764 0l-1.947 2.466a6.52 6.52 0 0 0 5.658 0ZM4.146 12.83l2.466-1.947a3.514 3.514 0 0 1 0-1.764L4.146 7.171a6.52 6.52 0 0 0 0 5.658ZM5.63 3.297a8.01 8.01 0 0 1 8.738 0 8.031 8.031 0 0 1 2.334 2.334 8.01 8.01 0 0 1 0 8.738 8.033 8.033 0 0 1-2.334 2.334 8.01 8.01 0 0 1-8.738 0 8.032 8.032 0 0 1-2.334-2.334 8.01 8.01 0 0 1 0-8.738A8.03 8.03 0 0 1 5.63 3.297Zm5.198 4.882a2.008 2.008 0 0 0-2.243.407 1.994 1.994 0 0 0-.407 2.243 1.993 1.993 0 0 0 .992.992 2.008 2.008 0 0 0 2.243-.407c.176-.175.31-.374.407-.585a2.008 2.008 0 0 0-.407-2.243 1.993 1.993 0 0 0-.585-.407Z" clip-rule="evenodd" />
                    </svg>
                    <div class="text-base/7">
                        <h3 class="font-semibold text-white">Entwicklung</h3>
                        <p class="mt-2 text-gray-300">
                            Wir realisieren Softwarelösungen, die perfekt auf Ihre Geschäftsprozesse
                            abgestimmt sind und Ihren Erfolg nachhaltig fördern.
                        </p>
                    </div>
                </div>
                <div class="flex gap-x-4 rounded-xl bg-white/5 p-6 ring-1 ring-inset ring-white/10">
                    <svg class="h-7 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 0 1 3.5 2h9A1.5 1.5 0 0 1 14 3.5v11.75A2.75 2.75 0 0 0 16.75 18h-12A2.75 2.75 0 0 1 2 15.25V3.5Zm3.75 7a.75.75 0 0 0 0 1.5h4.5a.75.75 0 0 0 0-1.5h-4.5Zm0 3a.75.75 0 0 0 0 1.5h4.5a.75.75 0 0 0 0-1.5h-4.5ZM5 5.75A.75.75 0 0 1 5.75 5h4.5a.75.75 0 0 1 .75.75v2.5a.75.75 0 0 1-.75.75h-4.5A.75.75 0 0 1 5 8.25v-2.5Z" clip-rule="evenodd" />
                        <path d="M16.5 6.5h-1v8.75a1.25 1.25 0 1 0 2.5 0V8a1.5 1.5 0 0 0-1.5-1.5Z" />
                    </svg>
                    <div class="text-base/7">
                        <h3 class="font-semibold text-white">Kurse</h3>
                        <p class="mt-2 text-gray-300">
                            Unsere praxisnahen Onlinekurse in Java, Algorithmen, Datenbankverwaltung
                            und Spring Boot helfen Ihnen, Ihre Fähigkeiten gezielt und effektiv zu erweitern.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Hero section -->

    <!--  Über uns -->
    <div class="bg-gray-50">
        <div class="mx-auto max-w-7xl py-24 sm:px-2 sm:py-32 lg:px-4">
            <div class="mx-auto max-w-2xl px-4 lg:max-w-none">
                <div class="grid grid-cols-1 items-center gap-x-16 gap-y-10 lg:grid-cols-2">
                    <div>
                        <h2 class="text-4xl font-bold tracking-tight text-gray-900">
                            Warum Ihr Unternehmen von der Expertise unserer Dozenten profitiert.
                        </h2>
                        <p class="mt-4 text-gray-500">

                        <ul class="list-image-[{{ url('images/double_arrow_blue.svg)') }}">
                            <li>
                                <strong class="text-gray-900"> Fachliche Exzellenz:</strong> Unsere Dozenten sind anerkannte Experten mit
                                tiefgehender Erfahrung, die praxisnahe und aktuelle Schulungen bieten.</li> <br>
                            <li>
                                <strong class="text-gray-900">Individuell abgestimmte Schulungen: </strong> Wir passen die Lerninhalte
                                gezielt an die Bedürfnisse und den Kenntnisstand Ihrer Mitarbeiter an.
                            </li> <br>
                            <li>
                                <strong class="text-gray-900">Klare Kommunikation: </strong> Unsere Dozenten vermitteln komplexe Konzepte
                                verständlich und anschaulich, um den Lernprozess effektiv zu gestalten.
                            </li>
                            <li>
                                <strong class="text-gray-900">Praktische Anwendbarkeit:</strong>  Unsere Schulungen verbinden theoretisches
                                Wissen mit praxisorientierten Beispielen, die sofort im Arbeitsalltag
                                umsetzbar sind.
                            </li>
                            <li>
                                <strong class="text-gray-900">Innovative Lehrmethoden: </strong> Unsere Dozenten integrieren aktuelle Trends
                                und moderne Lehransätze, um ein effektives Lernen zu gewährleisten
                            </li>
                        </ul>

                        </p>
                    </div>
                    <img src="images/Schulung-Home.jpg" alt="" loading="lazy" class="aspect-[3/2] w-full rounded-lg bg-gray-100 object-cover">
                </div>
                <div class="mt-16 grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-3">
                    <div class="sm:flex lg:block">
                        <div class="sm:shrink-0">
                            <img class="size-28" src="images/onlinekurs.svg" loading="lazy" alt="">
                        </div>
                        <div class="mt-4 sm:ml-6 sm:mt-0 lg:ml-0 lg:mt-6">
                            <h3 class="text-sm font-medium text-gray-900">Onlinekurse</h3>
                            <p class="mt-2 text-sm text-gray-500">
                                Entdecken Sie die Welt des digitalen Lernens mit unseren professionellen Onlinekurse!
                                Wir bieten Ihnen eine flexible,
                                ortsunabhängige Möglichkeit, Ihr Wissen und Ihre Fähigkeiten in verschiedenen Fachbereichen zu erweitern.
                            </p>
                        </div>
                    </div>
                    <div class="sm:flex lg:block">
                        <div class="sm:shrink-0">
                            {{--                                <img class="size-16" src="https://tailwindui.com/plus/img/ecommerce/icons/icon-warranty-simple.svg" alt="">--}}
                            <img class="size-28" src="images/vorortkurs.svg" loading="lazy" alt="">
                        </div>
                        <div class="mt-4 sm:ml-6 sm:mt-0 lg:ml-0 lg:mt-6">
                            <h3 class="text-sm font-medium text-gray-900">Vor-Ort-Kurse</h3>
                            <p class="mt-2 text-sm text-gray-500">
                                Wir bringen das Wissen zu Ihnen! Mit unseren Vor-Ort-Schulungen profitieren Sie von maßgeschneiderten Weiterbildungen,
                                die direkt in Ihrer gewohnten Umgebung stattfinden.
                                Unsere erfahrenen Trainer*innen kommen zu Ihnen und vermitteln praxisnahes Wissen.
                            </p>
                        </div>
                    </div>
                    <div class="sm:flex lg:block">
                        <div class="sm:shrink-0">
                            {{--                                <img class="size-16" src="https://tailwindui.com/plus/img/ecommerce/icons/icon-exchange-simple.svg" alt="">--}}
                            <img class="size-28" src="images/planingkurs.svg" loading="lazy" alt="">
                        </div>
                        <div class="mt-4 sm:ml-6 sm:mt-0 lg:ml-0 lg:mt-6">
                            <h3 class="text-sm font-medium text-gray-900">Kurse planen</h3>
                            <p class="mt-2 text-sm text-gray-500">
                                Die Planung eines Kurses erfordert Struktur, Zielorientierung und einen klaren Fahrplan.
                                Ob für interne Weiterbildungen,
                                öffentliche Seminare oder Schulungen – wir unterstützen Sie dabei, Ihre Kurse perfekt zu gestalten.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of Über uns  -->

    <!-- Inhalt der schulungen -->
    <div class="bg-gray-900 py-24 sm:py-32">
        <div class="relative isolate">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="mx-auto flex max-w-2xl flex-col gap-16 bg-white/5 px-6 py-16 ring-1 ring-white/10 sm:rounded-3xl sm:p-8 lg:mx-0 lg:max-w-none lg:flex-row lg:items-center lg:py-20 xl:gap-x-20 xl:px-20">
                    <img class="h-96 w-full flex-none rounded-2xl object-cover shadow-xl lg:aspect-square lg:h-auto lg:max-w-sm" src="https://maxabit-schulungen.de/image/Bild-Maxabit-Schulung-2.jpg" loading="lazy" alt="">
                    <div class="w-full flex-auto">
                        <h2 class="text-pretty text-4xl font-semibold tracking-tight text-white sm:text-5xl">Der Inhalt der Schulungen</h2>
                        <p class="mt-6 text-pretty text-lg/8 text-gray-300">
                            Profitieren Sie von praxisorientierten Onlinekursen, die Ihnen fundiertes Wissen
                            in Java, Algorithmen, Datenbanken und Spring Boot vermitteln. Jederzeit und
                            flexibel.
                        </p>
                        <ul role="list" class="mt-10 grid grid-cols-1 gap-x-8 gap-y-3 text-base/7 text-white sm:grid-cols-2">
                            <li class="flex gap-x-3">
                                <svg class="h-7 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd" />
                                </svg>
                                Java
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-7 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd" />
                                </svg>
                                Spring Boot
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-7 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd" />
                                </svg>
                                Algorithmen
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-7 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd" />
                                </svg>
                                Beratung
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-7 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd" />
                                </svg>
                                Datenbanken
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-7 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd" />
                                </svg>
                                Planung
                            </li>
                        </ul>
                        <div class="mt-10 flex">
                            <a href="{{ url('/kontakt') }}" class="text-sm/6 font-semibold text-indigo-400">Ein Onlinekurs buchen </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute inset-x-0 -top-16 -z-10 flex transform-gpu justify-center overflow-hidden blur-3xl" aria-hidden="true">
                <div class="aspect-[1318/752] w-[82.375rem] flex-none bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-25" style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)"></div>
            </div>
        </div>
    </div>

    <!-- End of Inhalt der schulungen -->





    <!-- Schulungen Block -->
    {{--        <div class="relative isolate mt-32 bg-white px-6 sm:mt-56 lg:px-8">--}}
    <div class="relative isolate mt-16 bg-white px-6 sm:mt-32 lg:px-16">
        {{--        <div class="mx-auto          mt-16 max-w-7xl         px-6 sm:mt-32 lg:px-8">--}}
        <div class="absolute inset-x-0 -top-3 -z-10 transform-gpu overflow-hidden px-36 blur-3xl" aria-hidden="true">
            <div class="mx-auto aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-2xl sm:text-center">
            <h2 class="text-base/7 font-semibold text-indigo-600">Kurse</h2>
            <p class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-balance sm:text-5xl">
                Wählen Sie ihren Onlinekurse
            </p>
            <p class="mt-6 text-lg/8 text-gray-600">
                Lernen Sie IT von Grund auf – praxisnah und individuell.
            </p>
        </div>
        {{------- von hier schulungskarten -------}}
        {{--            <div class="mx-auto mt-16 grid max-w-lg grid-cols-1 items-center gap-y-6 sm:mt-20 sm:gap-y-0 lg:max-w-4xl lg:grid-cols-2">--}}
        {{--                <div class="rounded-3xl p-8 ring-2 ring-gray-200">--}}
        <div class="isolate mx-auto mt-10 grid max-w-md grid-cols-1 gap-8 md:max-w-2xl md:grid-cols-2 lg:max-w-4xl xl:mx-0 xl:max-w-none xl:grid-cols-4">
            <div class="rounded-3xl p-8 ring-1 ring-gray-200">
                <h3 id="tier-hobby" class="text-base/7 font-semibold text-indigo-600">Java</h3>
                <p class="mt-4 text-sm/6 text-gray-600">
                    Eine der weltweit führenden, objektorientierten Programmiersprachen, die sich
                    durch ihre Flexibilität und Plattformunabhängigkeit auszeichnet.
                </p>
                <p class="mt-6 flex items-baseline gap-x-1">
                    <span class="text-4xl font-semibold tracking-tight text-gray-900">5</span>
                    <span class="text-sm/6 font-semibold text-gray-600">/ Tage à 8 Stunden</span>
                </p>
                <a href="{{url('/kurs/java/ueber-kurs')}}" aria-describedby="tier-hobby" class="mt-6 block rounded-md px-3 py-2 text-center text-sm/6 font-semibold text-white ring-1 ring-inset ring-indigo-200 hover:ring-indigo-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 bg-indigo-500 ">
                    Zum Kurs</a>
                <ul role="list" class="mt-8 space-y-3 text-sm/6 text-gray-600">
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Klassen und Objekte
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Vererbung
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Polymorphismus
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Exception Handling
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Collections
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Lambda-Ausdrücke
                    </li>
                </ul>
            </div>

            <div class="rounded-3xl p-8 ring-2 ring-gray-200">
                <h2 id="tier-startup" class="text-lg/8 font-semibold text-indigo-600">Algorithmen</h2>
                <p class="mt-4 text-sm/6 text-gray-600">
                    Ein Kurs, der Ihnen beibringt, wie man Probleme mithilfe einer
                    systematischen Abfolge von Schritten effizient und präzise löst.
                </p>
                <p class="mt-6 flex items-baseline gap-x-1">
                    <span class="text-4xl font-semibold tracking-tight text-gray-900">3</span>
                    <span class="text-sm/6 font-semibold text-gray-600">/ Tage à 8 Stunden</span>
                </p>
                <a href="{{url('/kurs/algorithmus/ueber-kurs')}}" aria-describedby="tier-freelancer" class="mt-6 block rounded-md px-3 py-2 text-center text-sm/6 font-semibold text-white ring-1 ring-inset ring-indigo-200 hover:ring-indigo-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 bg-indigo-500">
                    Zum Kurs</a>
                <ul role="list" class="mt-8 space-y-3 text-sm/6 text-gray-600">
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Definition
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Struktogramm
                    </li>                        <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Datenstrukturen
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Sortieralgorithmen
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Suchalgorithmen
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Komplexität und Analyse
                    </li>
                </ul>
            </div>

            <div class="rounded-3xl p-8 ring-2 ring-gray-200">
                <h2 id="tier-startup" class="text-lg/8 font-semibold text-indigo-600">Datenbanken</h2>
                <p class="mt-4 text-sm/6 text-gray-600">
                    Moderne Datenbanksysteme kennenlernen,
                    um große Datenmengen systematisch zu speichern und über SQL effizient abfragen zu können.
                </p>
                <p class="mt-6 flex items-baseline gap-x-1">
                    <span class="text-4xl font-semibold tracking-tight text-gray-900">3</span>
                    <span class="text-sm/6 font-semibold text-gray-600">/ Tage à 8 Stunden</span>
                </p>
                {{--                    <a href="#" aria-describedby="tier-startup" class="mt-6 block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Zum Kurs</a>--}}
                <a href="{{url('/kurs/datenbank/ueber-kurs')}}" aria-describedby="tier-startup" class="mt-6 block rounded-md px-3 py-2 text-center text-sm/6 font-semibold text-white ring-1 ring-inset ring-indigo-200 hover:ring-indigo-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 bg-indigo-500">
                    Zum Kurs
                </a>

                <ul role="list" class="mt-8 space-y-3 text-sm/6 text-gray-600">
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Datenbanksysteme
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Datenbankdesign
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        SQL (Query Language)
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Indizes und Performance
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Transaktionen
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Datensicherheit
                    </li>
                </ul>
            </div>

            <div class="rounded-3xl p-8 ring-2 ring-gray-200">

                <h2 id="tier-enterprise" class="text-lg/8 font-semibold text-indigo-600">Spring Boot</h2>
                <p class="mt-4 text-sm/6 text-gray-600">
                    Lernen Sie in unserem Spring Boot Kurs,
                    wie Sie moderne und leistungsstarke Anwendungen effizient und schnell erstellen und anschließend deployen.
                </p>
                <p class="mt-6 flex items-baseline gap-x-1">
                    <span class="text-4xl font-semibold tracking-tight text-gray-900">5</span>
                    <span class="text-sm/6 font-semibold text-gray-600">/ Tage à 8 Stunden</span>
                </p>
                <a href="{{url('/kurs/springboot/ueber-kurs')}}" aria-describedby="tier-enterprise" class="mt-6 block rounded-md px-3 py-2 text-center text-sm/6 font-semibold text-white ring-1 ring-inset ring-indigo-200 hover:ring-indigo-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 bg-indigo-500">
                    Zum Kurs
                </a>
                <ul role="list" class="mt-8 space-y-3 text-sm/6 text-gray-600">
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Spring Boot Basics
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Dependency Injection
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Datenbankintegration
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Authentifizierung
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        RESTful Web Services
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                        </svg>
                        Custom reporting tools
                    </li>
                </ul>
            </div>
        </div>


    </div>



    <!-- zufrieden section -->
    <div class="relative z-10 mt-32 bg-gray-900 pb-20 sm:mt-56 sm:pb-24 xl:pb-0">
        <div class="absolute inset-0 overflow-hidden" aria-hidden="true">
            <div class="absolute left-[calc(50%-19rem)] top-[calc(50%-36rem)] transform-gpu blur-3xl">
                <div class="aspect-[1097/1023] w-[68.5625rem] bg-gradient-to-r from-[#ff4694] to-[#776fff] opacity-25" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
        </div>
        <div class="mx-auto flex max-w-7xl flex-col items-center gap-x-8 gap-y-10 px-6 sm:gap-y-8 lg:px-8 xl:flex-row xl:items-stretch">
            <div class="-mt-8 w-full max-w-2xl xl:-mb-8 xl:w-96 xl:flex-none">
                <div class="relative aspect-[2/1] h-full md:-mx-8 xl:mx-0 xl:aspect-auto">
                    <img class="absolute inset-0 size-full rounded-2xl bg-gray-800 object-cover shadow-2xl"
                         {{--                         src="https://maxabit-schulungen.de/image/Bild-Maxabit-Schulung-1.jpg" alt="">--}}
                         src="{{asset('/images/java-software-entwicklung.webp')}}" alt="" loading="lazy">
                </div>
            </div>
            <div class="w-full max-w-2xl xl:max-w-none xl:flex-auto xl:px-16 xl:py-24">
                <figure class="relative isolate pt-6 sm:pt-12">
                    <svg viewBox="0 0 162 128" fill="none" aria-hidden="true" class="absolute left-0 top-0 -z-10 h-32 stroke-white/20">
                        <path id="b56e9dab-6ccb-4d32-ad02-6b4bb5d9bbeb" d="M65.5697 118.507L65.8918 118.89C68.9503 116.314 71.367 113.253 73.1386 109.71C74.9162 106.155 75.8027 102.28 75.8027 98.0919C75.8027 94.237 75.16 90.6155 73.8708 87.2314C72.5851 83.8565 70.8137 80.9533 68.553 78.5292C66.4529 76.1079 63.9476 74.2482 61.0407 72.9536C58.2795 71.4949 55.276 70.767 52.0386 70.767C48.9935 70.767 46.4686 71.1668 44.4872 71.9924L44.4799 71.9955L44.4726 71.9988C42.7101 72.7999 41.1035 73.6831 39.6544 74.6492C38.2407 75.5916 36.8279 76.455 35.4159 77.2394L35.4047 77.2457L35.3938 77.2525C34.2318 77.9787 32.6713 78.3634 30.6736 78.3634C29.0405 78.3634 27.5131 77.2868 26.1274 74.8257C24.7483 72.2185 24.0519 69.2166 24.0519 65.8071C24.0519 60.0311 25.3782 54.4081 28.0373 48.9335C30.703 43.4454 34.3114 38.345 38.8667 33.6325C43.5812 28.761 49.0045 24.5159 55.1389 20.8979C60.1667 18.0071 65.4966 15.6179 71.1291 13.7305C73.8626 12.8145 75.8027 10.2968 75.8027 7.38572C75.8027 3.6497 72.6341 0.62247 68.8814 1.1527C61.1635 2.2432 53.7398 4.41426 46.6119 7.66522C37.5369 11.6459 29.5729 17.0612 22.7236 23.9105C16.0322 30.6019 10.618 38.4859 6.47981 47.558L6.47976 47.558L6.47682 47.5647C2.4901 56.6544 0.5 66.6148 0.5 77.4391C0.5 84.2996 1.61702 90.7679 3.85425 96.8404L3.8558 96.8445C6.08991 102.749 9.12394 108.02 12.959 112.654L12.959 112.654L12.9646 112.661C16.8027 117.138 21.2829 120.739 26.4034 123.459L26.4033 123.459L26.4144 123.465C31.5505 126.033 37.0873 127.316 43.0178 127.316C47.5035 127.316 51.6783 126.595 55.5376 125.148L55.5376 125.148L55.5477 125.144C59.5516 123.542 63.0052 121.456 65.9019 118.881L65.5697 118.507Z" />
                        <use href="#b56e9dab-6ccb-4d32-ad02-6b4bb5d9bbeb" x="86" />
                    </svg>
                    <blockquote class="text-xl/8 font-semibold text-white sm:text-2xl/9">
                        <p>
                            Wir entwickeln maßgeschneiderte Software für mittelständische Unternehmen,
                            exakt abgestimmt auf Ihre Anforderungen. Neben Beratungs- und
                            Entwicklungsdienstleistungen bieten wir fundierte Schulungen in zentralen IT-
                            Bereichen an, um Ihr Team und Ihre Auszubildenden optimal zu unterstützen.
                            Unser Ansatz/Fokus ist ganzheitlich: Wir vereinen modernste IT-Lösungen mit
                            hochwertiger Wissensvermittlung. Ob Java-Programmierung,
                            Datenbankmanagement oder Algorithmen – unsere Schulungen sind praxisnah
                            gestaltet und vermitteln genau das Wissen, das Sie und Ihre Mitarbeitenden für
                            den beruflichen Erfolg benötigen.
                            Mit MaxaBit-IT Solutions investieren Sie in moderne Software und die Zukunft
                            Ihrer Fachkräfte. Gemeinsam gestalten wir den Erfolg Ihres Unternehmens.
                        </p>
                    </blockquote>
                    <figcaption class="mt-8 text-base">
                        {{--                        <div class="font-semibold text-white">Hier eine Anfrage erstellen</div>--}}
                        <div class="mt-1 text-indigo-600">
                            <a href="{{ url('/kontakt') }}">Kontaktieren Sie uns für mehr Details</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
    <!-- end of zufrieden section -->

    <!-- FAQ section -->
    <div class="bg-white">
        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8 lg:py-40">
            <div class="mx-auto max-w-4xl divide-y divide-gray-900/10">
                <h2 class="text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Häufig gestellte Fragen</h2>
                <dl class="mt-10 space-y-6 divide-y divide-gray-900/10">
                    <div class="pt-6">
                        <dt>
                            <!-- Expand/collapse question button -->
                            <button type="button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-0" aria-expanded="false">
                                <span class="text-base/7 font-semibold">
                                    Welche Vorkenntnisse sind für die Kurse erforderlich?
                                </span>
                                <span class="ml-6 flex h-7 items-center">

                <svg id="svgPlus1" class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="false" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                </svg>

                <svg id="svgMinus1" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                </svg>
              </span>
                            </button>
                        </dt>
                        <dd class="mt-2 pr-12" id="faq1">
                            <p class="text-base/7 text-gray-600">
                                Unsere Kurse sind so konzipiert, dass sie sowohl für Einsteiger als auch
                                für Fortgeschrittene geeignet sind. Einige Kurse, wie beispielsweise in
                                Java und Algorithmen, erfordern grundlegende Programmierkenntnisse.
                                Weitere Details zu den Anforderungen finden Sie in der
                                Kursbeschreibung.
                            </p>
                        </dd>
                    </div>

                    <!-- More questions... -->
                </dl>
                <dl class="mt-10 space-y-6 divide-y divide-gray-900/10">
                    <div class="pt-6">
                        <dt>
                            <button type="button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-0" aria-expanded="false">
                                <span class="text-base/7 font-semibold">
                                    Wie lange dauert es, einen Kurs abzuschließen?
                                </span>
                                <span class="ml-6 flex h-7 items-center">

                <svg id="svgPlus2" class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                </svg>
                <svg id="svgMinus2" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                </svg>
              </span>
                            </button>
                        </dt>
                        <dd class="mt-2 pr-12" id="faq2">
                            <p class="text-base/7 text-gray-600">
                                Die Dauer jedes Kurses variiert je nach Umfang und Komplexität. Sie
                                können jedoch in Ihrem eigenen Tempo lernen, was Ihnen ermöglicht,
                                den Kurs nach Ihrem individuellen Zeitplan abzuschließen.
                            </p>
                        </dd>
                    </div>

                    <!-- More questions... -->
                </dl>
                <dl class="mt-10 space-y-6 divide-y divide-gray-900/10">
                    <div class="pt-6">
                        <dt>
                            <button type="button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-0" aria-expanded="false">
                                <span class="text-base/7 font-semibold">
                                   Sind die Kurse auch für Unternehmen geeignet?
                                </span>
                                <span class="ml-6 flex h-7 items-center">

                <svg id="svgPlus3" class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                </svg>

                <svg id="svgMinus3" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                </svg>
              </span>
                            </button>
                        </dt>
                        <dd class="mt-2 pr-12" id="faq3">
                            <p class="text-base/7 text-gray-600">
                                Ja, unsere Kurse sind sowohl für Einzelpersonen als auch für
                                Unternehmen geeignet. Wir bieten maßgeschneiderte Schulungen an,
                                um Ihre Teams in den Bereichen Java, Datenbanken, Algorithmen und
                                Spring Boot weiterzubilden.
                            </p>
                        </dd>
                    </div>

                    <!-- More questions... -->
                </dl>
                <dl class="mt-10 space-y-6 divide-y divide-gray-900/10">
                    <div class="pt-6">
                        <dt>
                            <!-- Expand/collapse question button -->
                            <button type="button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-0" aria-expanded="false">
                                <span class="text-base/7 font-semibold">
                                    Erhalte ich ein Zertifikat nach dem Kurs?
                                </span>
                                <span class="ml-6 flex h-7 items-center">

                <svg id="svgPlus4" class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                </svg>
                <svg id="svgMinus4" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                </svg>
              </span>
                            </button>
                        </dt>
                        <dd class="mt-2 pr-12" id="faq4">
                            <p class="text-base/7 text-gray-600">
                                Ja, nach erfolgreichem Abschluss eines Kurses erhalten Sie ein Teilnahmezertifikat,
                                das Ihre neu erlernten Fähigkeiten und Kenntnisse dokumentiert und bestätigt.
                            </p>
                        </dd>
                    </div>

                    <!-- More questions... -->
                </dl>
                <dl class="mt-10 space-y-6 divide-y divide-gray-900/10">
                    <div class="pt-6">
                        <dt>

                            <button type="button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-0" aria-expanded="false">
                                <span class="text-base/7 font-semibold">
                                    Wie melde ich mich für einen Kurs an?
                                </span>
                                <span class="ml-6 flex h-7 items-center">

                <svg id="svgPlus5" class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                </svg>

                <svg id="svgMinus5" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                </svg>
              </span>
                            </button>
                        </dt>
                        <dd class="mt-2 pr-12" id="faq5">
                            <p class="text-base/7 text-gray-600">
                                Die Anmeldung erfolgt ganz einfach über unsere Website. Wählen Sie den
                                gewünschten Kurs aus, füllen Sie das Anmeldeformular aus und beginnen
                                Sie sofort mit dem Lernen.
                            </p>
                        </dd>
                    </div>

                    <!-- More questions... -->
                </dl>

            </div>
        </div>
    </div>



    <!-- Footer -->
    <footer class="mt-32 bg-gray-900 sm:mt-6">
        <div class="mx-auto max-w-7xl px-6 py-16 sm:py-24 lg:px-8 lg:py-32">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <div class="h-9 text-blue-500"> MaxaBit IT-Solutions </div>
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
</div>


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

<script>
    document.addEventListener("DOMContentLoaded", function () {
        for (let i = 1; i <= 5; i++) {
            const plus = document.getElementById(`svgPlus${i}`);
            const minus = document.getElementById(`svgMinus${i}`);
            const text = document.getElementById(`faq${i}`);

            // Anfangszustand: Text und Minus-Icon verstecken
            if (text) text.style.display = "none";
            if (minus) minus.style.display = "none";

            if (plus && minus && text) {
                plus.addEventListener("click", function () {
                    text.style.display = "block";
                    plus.style.display = "none";
                    minus.style.display = "inline";
                });

                minus.addEventListener("click", function () {
                    text.style.display = "none";
                    plus.style.display = "inline";
                    minus.style.display = "none";
                });
            }
        }
    });
</script>

</html>
