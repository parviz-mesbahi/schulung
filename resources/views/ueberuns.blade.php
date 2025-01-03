<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Über uns | IT-Schulungen: Java, Datenbanken, Algorithmen  & Spring Boot | MaxaBit IT-Solutions Bonn</title>
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

<div class="bg-white">
    <!-- Header -->
    <header class="absolute inset-x-0 top-0 z-50 bg-slate-800">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">MaxaBit IT-Solutions</span>
                    <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="">
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <a href="{{ url('/') }}" class="text-sm/6 font-semibold text-white">Home</a>
                <a href="{{ url('/kurs') }}" class="text-sm/6 font-semibold text-white">Kurse</a>
                <a href="{{ url('/ueberuns') }}" class="text-sm/6 font-semibold text-white">Über uns</a>
                <a href="{{ url('/kontakt') }}" class="text-sm/6 font-semibold text-white">Kontakt</a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="#" class="text-sm/6 font-semibold text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
            </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
{{--        <div class="lg:hidden" role="dialog" aria-modal="true">--}}
{{--            <!-- Background backdrop, show/hide based on slide-over state. -->--}}
{{--            <div class="fixed inset-0 z-50"></div>--}}
{{--            <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">--}}
{{--                <div class="flex items-center justify-between">--}}
{{--                    <a href="#" class="-m-1.5 p-1.5">--}}
{{--                        <span class="sr-only">Your Company</span>--}}
{{--                        <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="">--}}
{{--                    </a>--}}
{{--                    <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">--}}
{{--                        <span class="sr-only">Close menu</span>--}}
{{--                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />--}}
{{--                        </svg>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="mt-6 flow-root">--}}
{{--                    <div class="-my-6 divide-y divide-gray-500/10">--}}
{{--                        <div class="space-y-2 py-6">--}}
{{--                            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Product</a>--}}
{{--                            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Features</a>--}}
{{--                            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Resources</a>--}}
{{--                            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Company</a>--}}
{{--                        </div>--}}
{{--                        <div class="py-6">--}}
{{--                            <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log in</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </header>

    <main class="isolate">
        <!-- Hero section -->
        <div class="relative isolate -z-10 overflow-hidden bg-gradient-to-b from-indigo-100/20 pt-14">
            <div class="absolute inset-y-0 right-1/2 -z-10 -mr-96 w-[200%] origin-top-right skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:-mr-80 lg:-mr-96" aria-hidden="true"></div>
            <div class="mx-auto max-w-7xl px-6 py-32 sm:py-40 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0 lg:grid lg:max-w-none lg:grid-cols-2 lg:gap-x-16 lg:gap-y-8 xl:grid-cols-1 xl:grid-rows-1 xl:gap-x-8">
                    <!-- <h1 class="max-w-2xl text-balance text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl lg:col-span-2 xl:col-auto">We’re changing the way people connect</h1> -->
                    <h1 class="max-w-2xl text-balance text-5xl font-semibold tracking-tight text-gray-900 sm:text-5xl lg:col-span-2 xl:col-auto">
                        MaxaBit-IT Solutions in Bonn, Ihrem IT-Partner für umfassende Lösungen und Weiterbildung.
                    </h1>
                    <div class="mt-6 max-w-xl lg:mt-0 xl:col-end-1 xl:row-start-1">
{{--                        <p class="text-pretty text-lg font-medium text-gray-800 sm:text-sm/10">--}}
                        <p class="mt-1 text-base/7 text-gray-600">
                            Die Firma MaxaBit-IT Solutions in Bonn wurde im Jahr 2000 gegründet.</br>
                            Ursprünglich lag unser Fokus darauf, für kleine und mittelständische Unternehmen Anwendungen zu entwickeln,
                            die den Arbeitsalltag erleichtern und Arbeitsabläufe effizienter gestalten.</br>

                            Im Laufe der Zeit haben wir uns darauf spezialisiert, personalisierte Softwarelösungen
                            für mittelständische Unternehmen zu entwickeln – maßgeschneidert auf deren spezifische
                            Anforderungen. Neben Dienstleistungen wie Beratung und Softwareentwicklung bieten
                            wir auch praxisnahe und fundierte Schulungen in den Schlüsselbereichen der Informatik an.</br>

                            Unser Unternehmen verfolgt eine ganzheitliche Herangehensweise,
                            um unseren Kunden das Beste aus beiden Welten zu bieten: individuelle IT-Lösungen und qualitativ
                            hochwertige Wissensvermittlung. Wir bieten gezielte Schulungen für Ihre Mitarbeiter und Auszubildenden
                            in Bereichen wie Java-Programmierung, Datenbankmanagement und Algorithmen. </br>

                            Wir wissen, wie wichtig eine fundierte Ausbildung für die Fachkräfte von morgen ist.
                            Wenn Ihr Unternehmen Auszubildende in verschiedenen Bereichen beschäftigt und sie auf ihrem beruflichen Weg unterstützt,
                            sind wir der ideale Partner für deren Schulung und Weiterbildung.


                        </p>
                    </div>
                    <img src="https://images.unsplash.com/photo-1567532900872-f4e906cbf06a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1280&q=80" alt="" class="mt-10 aspect-[6/5] w-full max-w-lg rounded-2xl object-cover sm:mt-16 lg:mt-0 lg:max-w-none xl:row-span-2 xl:row-end-2 xl:mt-36">
                </div>
            </div>
            <div class="absolute inset-x-0 bottom-0 -z-10 h-24 bg-gradient-to-t from-white sm:h-32"></div>
        </div>

        <!-- Timeline section -->
        <div class="mx-auto -mt-8 max-w-7xl px-6 lg:px-8">
            <div class="mx-auto grid max-w-2xl grid-cols-1 gap-8 overflow-hidden lg:mx-0 lg:max-w-none lg:grid-cols-4">
                <div>
                    <time datetime="2021-08" class="flex items-center text-sm/6 font-semibold text-indigo-600">
                        <svg viewBox="0 0 4 4" class="mr-4 size-1 flex-none" aria-hidden="true">
                            <circle cx="2" cy="2" r="2" fill="currentColor" />
                        </svg>
                        2000
                        <div class="absolute -ml-2 h-px w-screen -translate-x-full bg-gray-900/10 sm:-ml-4 lg:static lg:-mr-6 lg:ml-8 lg:w-auto lg:flex-auto lg:translate-x-0" aria-hidden="true"></div>
                    </time>
                    <p class="mt-6 text-lg/8 font-semibold tracking-tight text-gray-900">Gründungsjahr</p>
                    <p class="mt-1 text-base/7 text-gray-600">
                        MaxaBit-IT Solutions wurde im Jahr 2000 in Bonn gegründet und begann mit der Entwicklung von
                        Anwendungen für kleine und mittelständische Unternehmen.
                    </p>
                </div>
                <div>
                    <time datetime="2021-12" class="flex items-center text-sm/6 font-semibold text-indigo-600">
                        <svg viewBox="0 0 4 4" class="mr-4 size-1 flex-none" aria-hidden="true">
                            <circle cx="2" cy="2" r="2" fill="currentColor" />
                        </svg>
                        2008
                        <div class="absolute -ml-2 h-px w-screen -translate-x-full bg-gray-900/10 sm:-ml-4 lg:static lg:-mr-6 lg:ml-8 lg:w-auto lg:flex-auto lg:translate-x-0" aria-hidden="true"></div>
                    </time>
                    <p class="mt-6 text-lg/8 font-semibold tracking-tight text-gray-900">Mitarbeiter Schulung</p>
                    <p class="mt-1 text-base/7 text-gray-600">
                        Für die individuell erstellte Software benötigen Unternehmen oft Schulungen für ihre Mitarbeitenden.
                        Im Laufe der Zeit haben wir hierfür ein Schulungskonzept entwickelt.
                    </p>
                </div>
                <div>
                    <time datetime="2022-02" class="flex items-center text-sm/6 font-semibold text-indigo-600">
                        <svg viewBox="0 0 4 4" class="mr-4 size-1 flex-none" aria-hidden="true">
                            <circle cx="2" cy="2" r="2" fill="currentColor" />
                        </svg>
                        2010
                        <div class="absolute -ml-2 h-px w-screen -translate-x-full bg-gray-900/10 sm:-ml-4 lg:static lg:-mr-6 lg:ml-8 lg:w-auto lg:flex-auto lg:translate-x-0" aria-hidden="true"></div>
                    </time>
                    <p class="mt-6 text-lg/8 font-semibold tracking-tight text-gray-900">Azubis Schulung</p>
                    <p class="mt-1 text-base/7 text-gray-600">
                        Wir bieten speziell konzipierte Schulungen für Auszubildende in den zentralen Bereichen der IT an,
                        insbesondere in den Bereichen Programmierung und Datenbanken.
                    </p>
                </div>
                <div>
                    <time datetime="2022-12" class="flex items-center text-sm/6 font-semibold text-indigo-600">
                        <svg viewBox="0 0 4 4" class="mr-4 size-1 flex-none" aria-hidden="true">
                            <circle cx="2" cy="2" r="2" fill="currentColor" />
                        </svg>
                        Bis heute
                        <div class="absolute -ml-2 h-px w-screen -translate-x-full bg-gray-900/10 sm:-ml-4 lg:static lg:-mr-6 lg:ml-8 lg:w-auto lg:flex-auto lg:translate-x-0" aria-hidden="true"></div>
                    </time>
                    <p class="mt-6 text-lg/8 font-semibold tracking-tight text-gray-900">Entwicklung & Schulung</p>
                    <p class="mt-1 text-base/7 text-gray-600">
                        Individuelle IT-Lösungen und qualitativ hochwertige Wissensvermittlung –
                        gezielte Schulungen für Mitarbeiter und Auszubildende in den Schlüsselbereichen der Informatik.
                    </p>
                </div>
            </div>
        </div>

        <!-- Logo cloud -->
        <div class="mx-auto mt-32 max-w-7xl sm:mt-40 sm:px-6 lg:px-8">
            <div class="relative isolate overflow-hidden bg-gray-900 px-6 py-24 text-center shadow-2xl sm:rounded-3xl sm:px-16">
                <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight text-white sm:text-4xl">Unseren Kunden</h2>
                <p class="mx-auto mt-6 max-w-xl text-lg/8 text-gray-300">
                    Im Folgenden finden Sie eine Übersicht der Firmen, bei denen wir bereits Schulungen durchgeführt haben.
                </p>
                <div class="mx-auto mt-20 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-12 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 sm:gap-y-14 lg:max-w-4xl lg:grid-cols-5">
                    <div class="text-white "> Telekom Bonn </div>
                    <div class="text-white "> HDI Gerling Köln </div>
                    <div class="text-white "> GEZ Köln </div>
                    <div class="text-white "> Ford Köln </div>
                    <div class="text-white "> Gus Köln </div>
{{--                    <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/plus/img/logos/158x48/transistor-logo-white.svg" alt="Transistor" width="158" height="48">--}}
{{--                    <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/plus/img/logos/158x48/reform-logo-white.svg" alt="Reform" width="158" height="48">--}}
{{--                    <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/plus/img/logos/158x48/tuple-logo-white.svg" alt="Tuple" width="158" height="48">--}}
{{--                    <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1" src="https://tailwindui.com/plus/img/logos/158x48/savvycal-logo-white.svg" alt="SavvyCal" width="158" height="48">--}}
{{--                    <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1" src="https://tailwindui.com/plus/img/logos/158x48/statamic-logo-white.svg" alt="Statamic" width="158" height="48">--}}
                </div>
                <div class="absolute -top-24 right-0 -z-10 transform-gpu blur-3xl" aria-hidden="true">
                    <div class="aspect-[1404/767] w-[87.75rem] bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-25" style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)"></div>
                </div>
            </div>
        </div>

        <!-- Content section -->
{{--        <div class="mt-32 overflow-hidden sm:mt-40">--}}
{{--            <div class="mx-auto max-w-7xl px-6 lg:flex lg:px-8">--}}
{{--                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-12 gap-y-16 lg:mx-0 lg:min-w-full lg:max-w-none lg:flex-none lg:gap-y-8">--}}
{{--                    <div class="lg:col-end-1 lg:w-full lg:max-w-lg lg:pb-8">--}}
{{--                        <h2 class="text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Our people</h2>--}}
{{--                        <p class="mt-6 text-xl/8 text-gray-600">Quasi est quaerat. Sit molestiae et. Provident ad dolorem occaecati eos iste. Soluta rerum quidem minus ut molestiae velit error quod. Excepturi quidem expedita molestias quas.</p>--}}
{{--                        <p class="mt-6 text-base/7 text-gray-600">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat. Quasi aperiam sit non sit neque reprehenderit.</p>--}}
{{--                    </div>--}}
{{--                    <div class="flex flex-wrap items-start justify-end gap-6 sm:gap-8 lg:contents">--}}
{{--                        <div class="w-0 flex-auto lg:ml-auto lg:w-auto lg:flex-none lg:self-end">--}}
{{--                            <img src="https://images.unsplash.com/photo-1670272502246-768d249768ca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1152&q=80" alt="" class="aspect-[7/5] w-[37rem] max-w-none rounded-2xl bg-gray-50 object-cover">--}}
{{--                        </div>--}}
{{--                        <div class="contents lg:col-span-2 lg:col-end-2 lg:ml-auto lg:flex lg:w-[37rem] lg:items-start lg:justify-end lg:gap-x-8">--}}
{{--                            <div class="order-first flex w-64 flex-none justify-end self-end lg:w-auto">--}}
{{--                                <img src="https://images.unsplash.com/photo-1605656816944-971cd5c1407f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=768&h=604&q=80" alt="" class="aspect-[4/3] w-[24rem] max-w-none flex-none rounded-2xl bg-gray-50 object-cover">--}}
{{--                            </div>--}}
{{--                            <div class="flex w-96 flex-auto justify-end lg:w-auto lg:flex-none">--}}
{{--                                <img src="https://images.unsplash.com/photo-1568992687947-868a62a9f521?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1152&h=842&q=80" alt="" class="aspect-[7/5] w-[37rem] max-w-none flex-none rounded-2xl bg-gray-50 object-cover">--}}
{{--                            </div>--}}
{{--                            <div class="hidden sm:block sm:w-0 sm:flex-auto lg:w-auto lg:flex-none">--}}
{{--                                <img src="https://images.unsplash.com/photo-1612872087720-bb876e2e67d1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=768&h=604&q=80" alt="" class="aspect-[4/3] w-[24rem] max-w-none rounded-2xl bg-gray-50 object-cover">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <!-- Stats -->
{{--        <div class="mx-auto mt-32 max-w-7xl px-6 sm:mt-40 lg:px-8">--}}
{{--            <div class="mx-auto max-w-2xl lg:mx-0">--}}
{{--                <h2 class="text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">We approach work as a place to make the world better</h2>--}}
{{--                <p class="mt-6 text-base/7 text-gray-600">Diam nunc lacus lacus aliquam turpis enim. Eget hac velit est euismod lacus. Est non placerat nam arcu. Cras purus nibh cursus sit eu in id. Integer vel nibh.</p>--}}
{{--            </div>--}}
{{--            <div class="mx-auto mt-16 flex max-w-2xl flex-col gap-8 lg:mx-0 lg:mt-20 lg:max-w-none lg:flex-row lg:items-end">--}}
{{--                <div class="flex flex-col-reverse justify-between gap-x-16 gap-y-8 rounded-2xl bg-gray-50 p-8 sm:w-3/4 sm:max-w-md sm:flex-row-reverse sm:items-end lg:w-72 lg:max-w-none lg:flex-none lg:flex-col lg:items-start">--}}
{{--                    <p class="flex-none text-3xl font-bold tracking-tight text-gray-900">250k</p>--}}
{{--                    <div class="sm:w-80 sm:shrink lg:w-auto lg:flex-none">--}}
{{--                        <p class="text-lg font-semibold tracking-tight text-gray-900">Users on the platform</p>--}}
{{--                        <p class="mt-2 text-base/7 text-gray-600">Vel labore deleniti veniam consequuntur sunt nobis.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="flex flex-col-reverse justify-between gap-x-16 gap-y-8 rounded-2xl bg-gray-900 p-8 sm:flex-row-reverse sm:items-end lg:w-full lg:max-w-sm lg:flex-auto lg:flex-col lg:items-start lg:gap-y-44">--}}
{{--                    <p class="flex-none text-3xl font-bold tracking-tight text-white">$8.9 billion</p>--}}
{{--                    <div class="sm:w-80 sm:shrink lg:w-auto lg:flex-none">--}}
{{--                        <p class="text-lg font-semibold tracking-tight text-white">We’re proud that our customers have made over $8 billion in total revenue.</p>--}}
{{--                        <p class="mt-2 text-base/7 text-gray-400">Eu duis porta aliquam ornare. Elementum eget magna egestas.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="flex flex-col-reverse justify-between gap-x-16 gap-y-8 rounded-2xl bg-indigo-600 p-8 sm:w-11/12 sm:max-w-xl sm:flex-row-reverse sm:items-end lg:w-full lg:max-w-none lg:flex-auto lg:flex-col lg:items-start lg:gap-y-28">--}}
{{--                    <p class="flex-none text-3xl font-bold tracking-tight text-white">401,093</p>--}}
{{--                    <div class="sm:w-80 sm:shrink lg:w-auto lg:flex-none">--}}
{{--                        <p class="text-lg font-semibold tracking-tight text-white">Transactions this year</p>--}}
{{--                        <p class="mt-2 text-base/7 text-indigo-200">Eu duis porta aliquam ornare. Elementum eget magna egestas. Eu duis porta aliquam ornare.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <!-- Content section -->
{{--        <div class="mx-auto mt-32 max-w-7xl px-6 sm:mt-40 lg:px-8">--}}
{{--            <div class="mx-auto flex max-w-2xl flex-col items-end justify-between gap-16 lg:mx-0 lg:max-w-none lg:flex-row">--}}
{{--                <div class="w-full lg:max-w-lg lg:flex-auto">--}}
{{--                    <h2 class="text-pretty text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl">We’re always looking for awesome people to join us</h2>--}}
{{--                    <p class="mt-6 text-xl/8 text-gray-600">Diam nunc lacus lacus aliquam turpis enim. Eget hac velit est euismod lacus. Est non placerat nam arcu. Cras purus nibh cursus sit eu in id.</p>--}}
{{--                    <img src="https://images.unsplash.com/photo-1606857521015-7f9fcf423740?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1344&h=1104&q=80" alt="" class="mt-16 aspect-[6/5] w-full rounded-2xl bg-gray-50 object-cover lg:aspect-auto lg:h-[34.5rem]">--}}
{{--                </div>--}}
{{--                <div class="w-full lg:max-w-xl lg:flex-auto">--}}
{{--                    <h3 class="sr-only">Job openings</h3>--}}
{{--                    <ul class="-my-8 divide-y divide-gray-100">--}}
{{--                        <li class="py-8">--}}
{{--                            <dl class="relative flex flex-wrap gap-x-3">--}}
{{--                                <dt class="sr-only">Role</dt>--}}
{{--                                <dd class="w-full flex-none text-lg font-semibold tracking-tight text-gray-900">--}}
{{--                                    <a href="#">--}}
{{--                                        Full-time designer--}}
{{--                                        <span class="absolute inset-0" aria-hidden="true"></span>--}}
{{--                                    </a>--}}
{{--                                </dd>--}}
{{--                                <dt class="sr-only">Description</dt>--}}
{{--                                <dd class="mt-2 w-full flex-none text-base/7 text-gray-600">Quos sunt ad dolore ullam qui. Enim et quisquam dicta molestias. Corrupti quo voluptatum eligendi autem labore.</dd>--}}
{{--                                <dt class="sr-only">Salary</dt>--}}
{{--                                <dd class="mt-4 text-base/7 font-semibold text-gray-900">$75,000 USD</dd>--}}
{{--                                <dt class="sr-only">Location</dt>--}}
{{--                                <dd class="mt-4 flex items-center gap-x-3 text-base/7 text-gray-500">--}}
{{--                                    <svg viewBox="0 0 2 2" class="size-0.5 flex-none fill-gray-300" aria-hidden="true">--}}
{{--                                        <circle cx="1" cy="1" r="1" />--}}
{{--                                    </svg>--}}
{{--                                    San Francisco, CA--}}
{{--                                </dd>--}}
{{--                            </dl>--}}
{{--                        </li>--}}
{{--                        <li class="py-8">--}}
{{--                            <dl class="relative flex flex-wrap gap-x-3">--}}
{{--                                <dt class="sr-only">Role</dt>--}}
{{--                                <dd class="w-full flex-none text-lg font-semibold tracking-tight text-gray-900">--}}
{{--                                    <a href="#">--}}
{{--                                        Laravel developer--}}
{{--                                        <span class="absolute inset-0" aria-hidden="true"></span>--}}
{{--                                    </a>--}}
{{--                                </dd>--}}
{{--                                <dt class="sr-only">Description</dt>--}}
{{--                                <dd class="mt-2 w-full flex-none text-base/7 text-gray-600">Et veniam et officia dolorum rerum. Et voluptas consequatur magni sapiente amet voluptates dolorum. Ut porro aut eveniet.</dd>--}}
{{--                                <dt class="sr-only">Salary</dt>--}}
{{--                                <dd class="mt-4 text-base/7 font-semibold text-gray-900">$125,000 USD</dd>--}}
{{--                                <dt class="sr-only">Location</dt>--}}
{{--                                <dd class="mt-4 flex items-center gap-x-3 text-base/7 text-gray-500">--}}
{{--                                    <svg viewBox="0 0 2 2" class="size-0.5 flex-none fill-gray-300" aria-hidden="true">--}}
{{--                                        <circle cx="1" cy="1" r="1" />--}}
{{--                                    </svg>--}}
{{--                                    San Francisco, CA--}}
{{--                                </dd>--}}
{{--                            </dl>--}}
{{--                        </li>--}}
{{--                        <li class="py-8">--}}
{{--                            <dl class="relative flex flex-wrap gap-x-3">--}}
{{--                                <dt class="sr-only">Role</dt>--}}
{{--                                <dd class="w-full flex-none text-lg font-semibold tracking-tight text-gray-900">--}}
{{--                                    <a href="#">--}}
{{--                                        React Native developer--}}
{{--                                        <span class="absolute inset-0" aria-hidden="true"></span>--}}
{{--                                    </a>--}}
{{--                                </dd>--}}
{{--                                <dt class="sr-only">Description</dt>--}}
{{--                                <dd class="mt-2 w-full flex-none text-base/7 text-gray-600">Veniam ipsam nisi quas architecto eos non voluptatem in nemo. Est occaecati nihil omnis delectus illum est.</dd>--}}
{{--                                <dt class="sr-only">Salary</dt>--}}
{{--                                <dd class="mt-4 text-base/7 font-semibold text-gray-900">$105,000 USD</dd>--}}
{{--                                <dt class="sr-only">Location</dt>--}}
{{--                                <dd class="mt-4 flex items-center gap-x-3 text-base/7 text-gray-500">--}}
{{--                                    <svg viewBox="0 0 2 2" class="size-0.5 flex-none fill-gray-300" aria-hidden="true">--}}
{{--                                        <circle cx="1" cy="1" r="1" />--}}
{{--                                    </svg>--}}
{{--                                    San Francisco, CA--}}
{{--                                </dd>--}}
{{--                            </dl>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <div class="mt-8 flex border-t border-gray-100 pt-8">--}}
{{--                        <a href="#" class="text-sm/6 font-semibold text-indigo-600 hover:text-indigo-500">View all openings <span aria-hidden="true">&rarr;</span></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </main>

    <!-- Footer -->
    <!-- Footer -->
    <footer class="mt-32 bg-gray-900 sm:mt-56">
        <div class="mx-auto max-w-7xl px-6 py-16 sm:py-24 lg:px-8 lg:py-32">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <img class="h-9" src="https://maxabit.com/" alt="MaxaBit IT-Solutions">
                <div class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm/6 font-semibold text-white"><a href="{{ url('/impressum') }}">Impressum</a></h3>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <h3 class="text-sm/6 font-semibold text-white"><a href="{{ url('/datenschutz') }}">Datenschutz</a></h3>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <h3 class="text-sm/6 font-semibold text-white"><a href="{{ url('/home') }}"> </a></h3>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <h3 class="text-sm/6 font-semibold text-white"><a href="{{ url('/home') }}">MaxaBit IT-Solutions </a></h3>
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm/6 font-semibold text-white"><a href="{{ url('/ueberuns') }}">Über Uns</a></h3>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <h3 class="text-sm/6 font-semibold text-white"><a href="{{ url('/kontakt') }}">Kontakt</a></h3>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <h3 class="text-sm/6 font-semibold text-white">Copyright © 2024 </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>



</body>
</html>
