<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Unsere Leistungen – Individuelle IT- und Softwarelösungen</title>
    <meta name="description" content="Von Webentwicklung bis IT-Consulting: Entdecke unser umfassendes Dienstleistungsangebot – perfekt auf dein Unternehmen abgestimmt.">
    <meta name="keywords" content="Java Kurs, Spring Boot, Datenbankkurs, Algorithmus Training, IT Weiterbildung, Programmierkurs">
    <meta name="robots" content="index, follow">

    {{--    <img src="images/java-kurs.jpg" alt="Java Programmierung Kurs für Anfänger und Fortgeschrittene">--}}


    <meta property="og:title" content="IT-Schulungen: Java, Datenbanken, Algorithmen  & Spring Boot | MaxaBit IT-Solutions Bonn">
    <meta property="og:description" content="Verbessern Sie Ihre IT-Kenntnisse mit unseren spezialisierten Schulungen in Java, Datenbanken, Algorithmen  & Spring Boot">
    {{--    <meta property="og:image" content="https://maxabit.de/images/og-image.jpg">--}}
    <meta property="og:url" content={{ url()->current() }}>
    <meta property="og:type" content="website">

    <link rel="canonical" href={{ url()->current() }}>

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
    <link rel="icon" href="favicon.svg" type="image/svg+xml">

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
{{--<nav class="flex items-center justify-between p-6 lg:px-8 bg-slate-700" >--}}
{{--    <div class="flex lg:flex-1">--}}
{{--        <a href="#" class="-m-1.5 p-1.5">--}}
{{--            <span class="sr-only">MaxaBit IT-Solutions</span>--}}
{{--            <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="">--}}
{{--        </a>--}}
{{--    </div>--}}

{{--    <div class="lg:flex lg:gap-x-12 ">--}}
{{--        <a href="{{ url('/') }}" class="text-sm/6 font-semibold text-white">Home</a>--}}
{{--        <a href="{{ url('/ueberuns') }}" class="text-sm/6 font-semibold text-white">Über uns</a>--}}
{{--    </div>--}}
{{--</nav>--}}
{{--    </header>--}}
{{--</div>--}}

<header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-6 lg:px-8 bg-slate-800 " aria-label="Global ">
        {{--            <a  href="{{ url('/') }}" class="-m-1.5 p-1.5">--}}
        {{--                <span class="text-blue-500 text-4xl font-mono font-extrabold"> MaxaBit</span>--}}
        {{--            </a>--}}
        <div class="flex lg:flex-1">
            <a  href="{{ url('/') }}" class="">
                <span class="text-blue-800 text-4xl font-serif font-extrabold"> MaxaBit</span>
                {{--                    <span class="text-blue-700 text-4xl font-mono font-extrabold"> MaxaBit</span>--}}
                {{--                    <span class="text-blue-700 text-4xl font-sans font-extrabold"> MaxaBit</span>--}}

                {{--                    <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="">--}}
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-400">
                <span class="sr-only">Open main menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
{{--            <a href="{{ url('/') }}" class="text-sm/6 font-semibold text-white">Home</a>--}}
            <a href="{{ url('/entwicklung')}}" class="text-sm/6 font-semibold text-white">Entwicklung</a>
            <a href="{{ url('/kurs') }}" class="text-sm/6 font-semibold text-white">Kurse</a>
            <a href="{{ url('/ueberuns') }}" class="text-sm/6 font-semibold text-white">Über uns</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="{{ url('/kontakt') }}" class="text-sm/6 font-semibold text-white">Kurs buchen </a>
        </div>
    </nav>
</header>
<div>
    <div class="relative isolate overflow-hidden bg-white py-24 sm:py-32">
        <div class="absolute -top-80 left-[max(6rem,33%)] -z-10 transform-gpu blur-3xl sm:left-1/2 md:top-20 lg:ml-20 xl:top-3 xl:ml-56" aria-hidden="true">
            <div class="aspect-[801/1036] w-[50.0625rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(63.1% 29.6%, 100% 17.2%, 76.7% 3.1%, 48.4% 0.1%, 44.6% 4.8%, 54.5% 25.4%, 59.8% 49.1%, 55.3% 57.9%, 44.5% 57.3%, 27.8% 48%, 35.1% 81.6%, 0% 97.8%, 39.3% 100%, 35.3% 81.5%, 97.2% 52.8%, 63.1% 29.6%)"></div>
        </div>
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <p class="text-base/7 font-semibold text-indigo-600">Personalisierte Software für Ihre Firma</p>
                <h1 class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-4xl">Spezialisiert für mittelständische Unternehmen</h1>
                <p class="mt-6 text-xl/8 text-gray-700">
                    Unser Unternehmen verfolgt eine ganzheitliche Herangehensweise,
                    um unseren Kunden maßgeschneiderte IT-Lösungen zu bieten, die perfekt auf ihre Bedürfnisse abgestimmt sind.
                </p>
            </div>
            <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:mt-10 lg:max-w-none lg:grid-cols-12">
                <div class="relative lg:order-last lg:col-span-5">
                    <svg class="absolute -top-[40rem] left-1 -z-10 h-[64rem] w-[175.5rem] -translate-x-1/2 stroke-gray-900/10 [mask-image:radial-gradient(64rem_64rem_at_111.5rem_0%,white,transparent)]" aria-hidden="true">
                        <defs>
                            <pattern id="e87443c8-56e4-4c20-9111-55b82fa704e3" width="200" height="200" patternUnits="userSpaceOnUse">
                                <path d="M0.5 0V200M200 0.5L0 0.499983" />
                            </pattern>
                        </defs>
                        <rect width="100%" height="100%" stroke-width="0" fill="url(#e87443c8-56e4-4c20-9111-55b82fa704e3)" />
                    </svg>
                    <figure class="border-l border-indigo-600 pl-8">
                        <blockquote class="text-xl/8 font-semibold tracking-tight text-gray-900">
                            <p>
                                Wir bieten individuelle IT-Beratung, entwickeln und implementieren Lösungen, die perfekt auf Ihr Unternehmen abgestimmt sind.
                                <br>
                                Zudem sorgen wir für eine praxisnahe Schulung Ihrer Mitarbeiter, damit sie die neuen Systeme effizient nutzen können.
                                Dies ist unsere Expertise.
                            </p>
                        </blockquote>
                        <figcaption class="mt-8 flex gap-x-4">
                            <img src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="mt-1 size-10 flex-none rounded-full bg-gray-50">
                            <div class="text-sm/6">
                                <div class="font-semibold text-gray-900">Parviz Mesbahi</div>
                                <div class="text-gray-600">info@maxabit.de</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="max-w-xl text-base/7 text-gray-700 lg:col-span-7">
                    <p>
                        Unser Unternehmen bietet umfassende Dienstleistungen im Bereich der Datenverarbeitung und -analyse an.
                        Wir beginnen mit einer gründlichen <strong>Datenanalyse</strong>, um wertvolle Erkenntnisse zu gewinnen und fundierte Entscheidungen
                        zu ermöglichen. Basierend auf diesen Analyseergebnissen erstellen wir eine maßgeschneiderte <strong>Datenbank</strong>,
                        die optimal auf die Anforderungen und Strukturen der erfassten Daten abgestimmt ist. <br> <br>

                        Um die Daten effizient zu erfassen, implementieren wir eine benutzerfreundliche <strong>Webapplikation</strong>,
                        die eine einfache Eingabe und Verwaltung der Daten ermöglicht. Anschließend führen wir eine <strong>Datenvalidierung</strong> durch,
                        um sicherzustellen, dass alle erfassten Informationen korrekt und konsistent sind. Darüber hinaus <strong>anreichern </strong>
                        wir die Daten mit relevanten Zusatzinformationen, um deren Wert und Nutzen zu maximieren.</br>

                        Abschließend bieten wir Lösungen für den <strong>Datenimport und Datenexport</strong>, die eine nahtlose Integration und den Austausch
                        von Daten mit anderen Systemen ermöglichen. Unser Ziel ist es, unseren Kunden eine effiziente und zuverlässige
                        Datenverarbeitung zu bieten, die ihre Geschäftsprozesse optimiert.</br>
                    </p>

                    <ul role="list" class="mt-8 max-w-xl space-y-8 text-gray-600">
                        <li class="flex gap-x-3">
                            <svg class="mt-1 size-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd" d="M5.5 17a4.5 4.5 0 0 1-1.44-8.765 4.5 4.5 0 0 1 8.302-3.046 3.5 3.5 0 0 1 4.504 4.272A4 4 0 0 1 15 17H5.5Zm3.75-2.75a.75.75 0 0 0 1.5 0V9.66l1.95 2.1a.75.75 0 1 0 1.1-1.02l-3.25-3.5a.75.75 0 0 0-1.1 0l-3.25 3.5a.75.75 0 1 0 1.1 1.02l1.95-2.1v4.59Z" clip-rule="evenodd" />
                            </svg>
                            <span><strong class="font-semibold text-gray-900">Anforderungsanalyse</strong>
                               In der Anforderungsanalyse erfassen wir die spezifischen Bedürfnisse und Ziele Ihres Unternehmens. Wir stellen sicher,
                                dass alle relevanten Anforderungen präzise dokumentiert und als Grundlage für die nächsten Schritte genutzt werden.
                            </span>
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="mt-1 size-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
                            </svg>
                            <span><strong class="font-semibold text-gray-900">Beratung.</strong>
                                Unsere Beratung hilft Ihnen dabei, die besten IT-Lösungen für Ihre individuellen Bedürfnisse zu finden.
                                Wir bieten Ihnen fundierte Empfehlungen, die sowohl Ihre aktuellen als auch zukünftigen Anforderungen berücksichtigen.
                            </span>
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="mt-1 size-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
{{--                                <path d="M4.632 3.533A2 2 0 0 1 6.577 2h6.846a2 2 0 0 1 1.945 1.533l1.976 8.234A3.489 3.489 0 0 0 16 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234Z" />--}}
{{--                                <path fill-rule="evenodd" d="M4 13a2 2 0 1 0 0 4h12a2 2 0 1 0 0-4H4Zm11.24 2a.75.75 0 0 1 .75-.75H16a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75h-.01a.75.75 0 0 1-.75-.75V15Zm-2.25-.75a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 0 0 .75-.75V15a.75.75 0 0 0-.75-.75h-.01Z" clip-rule="evenodd" />--}}
                                <path fill-rule="evenodd" d="M12 8a1 1 0 0 0-1 1v10H9a1 1 0 1 0 0 2h11a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1h-8Zm4 10a2 2 0 1 1 0-4 2 2 0 0 1 0 4Z" clip-rule="evenodd"/>
                                <path fill-rule="evenodd" d="M5 3a2 2 0 0 0-2 2v6h6V9a3 3 0 0 1 3-3h8c.35 0 .687.06 1 .17V5a2 2 0 0 0-2-2H5Zm4 10H3v2a2 2 0 0 0 2 2h4v-4Z" clip-rule="evenodd"/>

                            </svg>
                            <span><strong class="font-semibold text-gray-900">Entwicklung.</strong>
                               In der Entwicklungsphase setzen wir die erarbeiteten Anforderungen in maßgeschneiderte Softwarelösungen um.
                                Dabei legen wir großen Wert auf Qualität, Flexibilität und die Skalierbarkeit der Systeme.
                            </span>
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="mt-1 size-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
{{--                                <path d="M4.632 3.533A2 2 0 0 1 6.577 2h6.846a2 2 0 0 1 1.945 1.533l1.976 8.234A3.489 3.489 0 0 0 16 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234Z" />--}}
{{--                                <path fill-rule="evenodd" d="M4 13a2 2 0 1 0 0 4h12a2 2 0 1 0 0-4H4Zm11.24 2a.75.75 0 0 1 .75-.75H16a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75h-.01a.75.75 0 0 1-.75-.75V15Zm-2.25-.75a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 0 0 .75-.75V15a.75.75 0 0 0-.75-.75h-.01Z" clip-rule="evenodd" />--}}
                                <path fill-rule="evenodd" d="M5 8a4 4 0 1 1 7.796 1.263l-2.533 2.534A4 4 0 0 1 5 8Zm4.06 5H7a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h2.172a2.999 2.999 0 0 1-.114-1.588l.674-3.372a3 3 0 0 1 .82-1.533L9.06 13Zm9.032-5a2.907 2.907 0 0 0-2.056.852L9.967 14.92a1 1 0 0 0-.273.51l-.675 3.373a1 1 0 0 0 1.177 1.177l3.372-.675a1 1 0 0 0 .511-.273l6.07-6.07a2.91 2.91 0 0 0-.944-4.742A2.907 2.907 0 0 0 18.092 8Z" clip-rule="evenodd"/>

                            </svg>


                            <span><strong class="font-semibold text-gray-900">Wartung.</strong>
                                Wir bieten kontinuierliche Wartung und Unterstützung, um sicherzustellen, dass Ihre Systeme stets auf dem neuesten Stand und
                                reibungslos funktionieren.
                                Durch regelmäßige Updates und Anpassungen gewährleisten wir eine langfristige Leistungsfähigkeit.
                            </span>
                        </li>
                    </ul>
{{--                    <p class="mt-8">Et vitae blandit facilisi magna lacus commodo. Vitae sapien duis odio id et. Id blandit molestie auctor fermentum dignissim. Lacus diam tincidunt ac cursus in vel. Mauris varius vulputate et ultrices hac adipiscing egestas. Iaculis convallis ac tempor et ut. Ac lorem vel integer orci.</p>--}}
                    <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900">Service wird bei uns großgeschrieben</h2>
                    <p class="mt-6">
                        Bei uns steht der Service an oberster Stelle. Wir sind überzeugt, dass erstklassiger Kundenservice die Grundlage für eine
                        langfristige und erfolgreiche Zusammenarbeit ist. Deshalb setzen wir alles daran,
                        unseren Kunden nicht nur hochwertige Produkte, sondern auch einen persönlichen und zuverlässigen Service zu bieten.
                    </p>
                </div>
            </div>
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

</div>
</body>
</html>
