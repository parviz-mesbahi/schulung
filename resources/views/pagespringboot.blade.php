<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spring Boot-Kurs: Moderne Java-Webanwendungen entwickeln | Maxabit</title>
    <meta name="description" content="Lerne Spring Boot für die Entwicklung von leistungsstarken Webanwendungen. Praktisch, praxisnah und verständlich – jetzt mit dem Kurs starten!">
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

    <link rel="icon" href="https://maxabit.de/favicon.svg" type="image/svg+xml">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body >
<header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-6 lg:px-8 bg-gray-900 " aria-label="Global ">
        <div class="flex lg:flex-1">
            <a  href="{{ url('/') }}" class="">
                <h1 class="text-blue-800 text-4xl font-serif font-extrabold"> MaxaBit</h1>
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
            <a href="{{ url('/kurse') }}" class="text-sm/6 font-semibold text-white">Kurse</a>
            <a href="{{ url('/ueberuns') }}" class="text-sm/6 font-semibold text-white">Über uns</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="{{ url('/kontakt') }}" class="text-sm/6 font-semibold text-white">Kurs buchen </a>
        </div>
    </nav>
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
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Spring Boot – Effiziente Entwicklung moderner Java-Webanwendungen</h2>
                <blockquote class="text-xl/4  text-gray-900 sm:text-2xl/9">


                    <p class="mx-auto mt-4 max-w-xl text-lg/8 text-gray-600">
                        In diesem Spring Boot Kurs lernen die Teilnehmer, moderne Java-Webanwendungen effizient zu entwickeln.
                        Der Kurs deckt die Grundlagen von Spring Boot, Microservices, Datenbankintegration,
                        Sicherheit und RESTful APIs ab. Praktische Übungen helfen, ein tiefes Verständnis für die Erstellung von robusten,
                        skalierbaren Anwendungen zu entwickeln.
                        Ideal für Entwickler, die ihre Kenntnisse in der Java-Entwicklung vertiefen möchten.
                    </p>
                    <p>
{{--                    <p class="text-3xl  mb-2 mt-10 text-indigo-600">Kursformat:</p>--}}
                    <p class="mt-10 text-lg/8 font-semibold text-gray-900">Kursformat:</p>

                    <ul class="list-decimal pl-4 space-y-2">
                        <li class="mx-auto mt-4 max-w-xl text-lg/8 text-gray-500">
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
                    <a href="{{url('/kurs/springboot/ueber-kurs')}}" aria-describedby="tier-hobby" class="mt-6 block rounded-md px-3 py-2 text-center text-sm/6 font-semibold text-white ring-1 ring-inset ring-indigo-200 hover:ring-indigo-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 bg-indigo-500 ">
                        Zum Kurs
                    </a>
                    </p>

                </blockquote>
            </div>
            <div class="col-end-1 w-16 lg:row-span-2 lg:w-72">
                <img class="rounded-xl bg-indigo-50 lg:rounded-3xl"
                     src="{{ asset('images/studentin.webp') }}" alt="">
            </div>
        </figure>
    </div>
</section>

<div class="bg-white">
    <div class="mx-auto max-w-7xl px-6 py-2 sm:py-32 lg:px-8 lg:py-2">
        <div class="mx-auto max-w-3xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Inhalt des Kurses</h2>
            <p class="mx-auto mt-4 max-w-xl text-lg/8 text-gray-600">
                Der Spring Boot Kurs vermittelt die Grundlagen und fortgeschrittenen Techniken zur Entwicklung
                von modernen Java-Webanwendungen, einschließlich der Erstellung von Microservices,
                der Integration von Datenbanken und der Nutzung von RESTful APIs. Teilnehmer lernen,
                effiziente, skalierbare Anwendungen zu entwickeln und Sicherheitsaspekte zu implementieren.
            </p>
        </div>
        <dl class="mt-20 grid grid-cols-1 gap-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 lg:gap-x-8">
            <div class="relative">
                <dt>
                    <svg class="absolute mt-1 size-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                    </svg>
                    <p class="ml-10 text-lg/8 font-semibold text-gray-900">Einführung in Spring Boot</p>
                </dt>
                <dd class="ml-10 mt-2 text-base/7 text-gray-600">
                    In diesem Thema lernen die Teilnehmer die Grundkonzepte von Spring Boot, einschließlich der Vorteile und Merkmale.
                    Es wird erklärt, wie Spring Boot die Entwicklung vereinfacht,
                    indem es vorkonfigurierte Einstellungen und eine einfache Projektstruktur bereitstellt.
                </dd>
            </div>
            <div class="relative">
                <dt>
                    <svg class="absolute mt-1 size-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                    </svg>
                    <p class="ml-10 text-lg/8 font-semibold text-gray-900">
                        Erstellen von RESTful APIs
                    </p>
                </dt>
                <dd class="ml-10 mt-2 text-base/7 text-gray-600">
                    Die Teilnehmer lernen, wie man RESTful APIs mit Spring Boot erstellt. Dabei werden HTTP-Verben, Request- und
                    Response-Handling sowie die Nutzung von JSON zur Kommunikation zwischen Frontend und Backend behandelt.                </dd>
            </div>
            <div class="relative">
                <dt>
                    <svg class="absolute mt-1 size-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                    </svg>
                    <p class="ml-10 text-lg/8 font-semibold text-gray-900">Datenbankintegration mit Spring Data JPA</p>
                </dt>
                <dd class="ml-10 mt-2 text-base/7 text-gray-600">
                    In diesem Thema geht es um die Integration von Datenbanken in Spring Boot-Anwendungen. Teilnehmer lernen,
                    wie man mit Spring Data
                    JPA und Hibernate Daten persistent speichert, Abfragen durchführt und einfache Datenbankoperationen umsetzt.
                </dd>
            </div>
            <div class="relative">
                <dt>
                    <svg class="absolute mt-1 size-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                    </svg>
                    <p class="ml-10 text-lg/8 font-semibold text-gray-900">Spring Boot und Security</p>
                </dt>
                <dd class="ml-10 mt-2 text-base/7 text-gray-600">
                    Die Integration von Spring Security wird behandelt, um Anwendungen sicher zu machen.
                    Es geht um die Authentifizierung, Autorisierung,
                    Passwortverschlüsselung und die Implementierung von JWT-Token für eine sichere API-Kommunikation.
                </dd>
            </div>
            <div class="relative">
                <dt>
                    <svg class="absolute mt-1 size-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                    </svg>
                    <p class="ml-10 text-lg/8 font-semibold text-gray-900">Erstellung von Microservices mit Spring Boot</p>
                </dt>
                <dd class="ml-10 mt-2 text-base/7 text-gray-600">
                    Teilnehmer lernen, wie man mit Spring Boot Microservices erstellt. Es wird gezeigt, wie verschiedene
                    kleine, unabhängige Services miteinander
                    kommunizieren und wie man REST und gRPC für die Kommunikation zwischen Microservices nutzt.
                </dd>
            </div>
            <div class="relative">
                <dt>
                    <svg class="absolute mt-1 size-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                    </svg>
                    <p class="ml-10 text-lg/8 font-semibold text-gray-900">Konfiguration und Profile in Spring Boot</p>
                </dt>
                <dd class="ml-10 mt-2 text-base/7 text-gray-600">
                    In diesem Thema wird erklärt, wie man Spring Boot-Projekte konfiguriert, Umgebungsprofile
                    erstellt und unterschiedliche Konfigurationen für Dev-, Test- und Produktionsumgebungen nutzt.
                </dd>
            </div>
            <div class="relative">
                <dt>
                    <svg class="absolute mt-1 size-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                    </svg>
                    <p class="ml-10 text-lg/8 font-semibold text-gray-900">Fehlerbehandlung und Logging</p>
                </dt>
                <dd class="ml-10 mt-2 text-base/7 text-gray-600">
                    Die Teilnehmer erfahren, wie man Fehler in Spring Boot-Anwendungen behandelt, einschließlich Exception Handling,
                    benutzerdefinierter Fehlerantworten und der Nutzung von SLF4J und Logback für effizientes Logging.
                </dd>
            </div>
            <div class="relative">
                <dt>
                    <svg class="absolute mt-1 size-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                    </svg>
                    <p class="ml-10 text-lg/8 font-semibold text-gray-900">Testing in Spring Boot</p>
                </dt>
                <dd class="ml-10 mt-2 text-base/7 text-gray-600">
                    In diesem Thema wird der Fokus auf das Testen von Spring Boot-Anwendungen gelegt. Teilnehmer
                    lernen, wie man Unit-Tests, Integrationstests
                    und Mocking-Techniken verwendet, um die Qualität und Zuverlässigkeit der Anwendung sicherzustellen.
                </dd>
            </div>
        </dl>
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
                <p class="text-sm/6 text-gray-400 text-center">Copyright &copy; 2024 MaxaBit IT-Solutions, Inc. All rights reserved. <br> Kurse in: Köln - Bonn - Frankfurt</p>
            </div>
        </div>
    </footer>
</div>


</body>
</html>
