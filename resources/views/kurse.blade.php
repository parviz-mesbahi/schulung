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
         "@type": "Organization",
         "name": "MaxaBit IT-Solutions",
         "sameAs": "https://maxabit.de"
        }
    }
</script>

    <link rel="alternate" href="https://maxabit.de/" hreflang="de">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body >
<nav class="flex items-center justify-between p-6 lg:px-8 bg-slate-700" >
    <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">MaxaBit IT-Solutions</span>
            <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="">
        </a>
    </div>

    <div class="lg:flex lg:gap-x-12 ">
        <a href="{{ url('/') }}" class="text-sm/6 font-semibold text-white">Home</a>
        <a href="{{ url('/ueberuns') }}" class="text-sm/6 font-semibold text-white">Über uns</a>
        <a href="{{ url('/kontakt') }}" class="text-sm/6 font-semibold text-white">Kontakt</a>
    </div>
</nav>
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
                <h2 class="text-2xl font-semibold">Effektive IT-Schulungen – Praxisnah und Innovativ</h2>
                <blockquote class="text-xl/4  text-gray-900 sm:text-2xl/9">


                    <p>Die Zufriedenheit unserer Kursteilnehmer liegt uns besonders am Herzen. Unser Ziel ist es, Ihnen nicht nur Wissen zu vermitteln, sondern auch Ihre Fähigkeiten durch moderne und praxisnahe Ansätze nachhaltig zu verbessern.

                        Wir setzen auf innovative Methoden, die Ihnen den Einstieg erleichtern und komplexe
                        Themen verständlich machen.
                        Durch praxisorientierte Übungen stellen wir sicher, dass Sie das Gelernte direkt anwenden können.
                    </p>
                    <p>
                    <p class="text-3xl  mb-2 mt-10 text-indigo-600">Kursformat:</p>

                    <ul class="list-decimal pl-4 space-y-2 ">
                        <li class="text-lg font-medium">
                            <strong>Dauer:</strong> Abhängig vom Kursumfang beträgt die Dauer 3 bis 5 Tage.
                        </li>
                        <li class="text-lg font-medium">
                            <strong>Format:</strong> Sowohl Online- als auch Präsenzteilnahme möglich
                        </li>
                        <li class="text-lg font-medium">
                            <strong>Kosten:</strong> Variieren je nach Anzahl der Tage und der Teilnehmer.
                        </li>
                        <li class="text-lg font-medium">
                            <strong>Art:</strong> Einzelunterricht oder Gruppenunterricht
                        </li>
                        <li class="text-lg font-medium">
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

<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto grid max-w-2xl grid-cols-1 items-start gap-x-8 gap-y-16 sm:gap-y-24 lg:mx-0 lg:max-w-none lg:grid-cols-2">
            <div class="lg:pr-4">
                <div class="relative overflow-hidden rounded-3xl bg-gray-900 px-2 pb-2 pt-64 shadow-2xl sm:px-12 lg:max-w-lg lg:px-8 lg:pb-8 xl:px-10 xl:pb-10">
                    <img class="absolute inset-0 size-full object-cover brightness-125 saturate-0" src="https://images.unsplash.com/photo-1630569267625-157f8f9d1a7e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2669&q=80" alt="">
                    <div class="absolute inset-0 bg-gray-900 mix-blend-multiply"></div>
                    <div class="absolute left-1/2 top-1/2 -ml-16 -translate-x-1/2 -translate-y-1/2 transform-gpu blur-3xl" aria-hidden="true">
                        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-40" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                    </div>
                    <figure class="relative isolate">
                        <svg viewBox="0 0 162 128" fill="none" aria-hidden="true" class="absolute -left-2 -top-4 -z-10 h-32 stroke-white/20">
                            <path id="0ef284b8-28c2-426e-9442-8655d393522e" d="M65.5697 118.507L65.8918 118.89C68.9503 116.314 71.367 113.253 73.1386 109.71C74.9162 106.155 75.8027 102.28 75.8027 98.0919C75.8027 94.237 75.16 90.6155 73.8708 87.2314C72.5851 83.8565 70.8137 80.9533 68.553 78.5292C66.4529 76.1079 63.9476 74.2482 61.0407 72.9536C58.2795 71.4949 55.276 70.767 52.0386 70.767C48.9935 70.767 46.4686 71.1668 44.4872 71.9924L44.4799 71.9955L44.4726 71.9988C42.7101 72.7999 41.1035 73.6831 39.6544 74.6492C38.2407 75.5916 36.8279 76.455 35.4159 77.2394L35.4047 77.2457L35.3938 77.2525C34.2318 77.9787 32.6713 78.3634 30.6736 78.3634C29.0405 78.3634 27.5131 77.2868 26.1274 74.8257C24.7483 72.2185 24.0519 69.2166 24.0519 65.8071C24.0519 60.0311 25.3782 54.4081 28.0373 48.9335C30.703 43.4454 34.3114 38.345 38.8667 33.6325C43.5812 28.761 49.0045 24.5159 55.1389 20.8979C60.1667 18.0071 65.4966 15.6179 71.1291 13.7305C73.8626 12.8145 75.8027 10.2968 75.8027 7.38572C75.8027 3.6497 72.6341 0.62247 68.8814 1.1527C61.1635 2.2432 53.7398 4.41426 46.6119 7.66522C37.5369 11.6459 29.5729 17.0612 22.7236 23.9105C16.0322 30.6019 10.618 38.4859 6.47981 47.558L6.47976 47.558L6.47682 47.5647C2.4901 56.6544 0.5 66.6148 0.5 77.4391C0.5 84.2996 1.61702 90.7679 3.85425 96.8404L3.8558 96.8445C6.08991 102.749 9.12394 108.02 12.959 112.654L12.959 112.654L12.9646 112.661C16.8027 117.138 21.2829 120.739 26.4034 123.459L26.4033 123.459L26.4144 123.465C31.5505 126.033 37.0873 127.316 43.0178 127.316C47.5035 127.316 51.6783 126.595 55.5376 125.148L55.5376 125.148L55.5477 125.144C59.5516 123.542 63.0052 121.456 65.9019 118.881L65.5697 118.507Z" />
                            <use href="#0ef284b8-28c2-426e-9442-8655d393522e" x="86" />
                        </svg>
{{--                        <img src="https://tailwindui.com/plus/img/logos/workcation-logo-white.svg" alt="" class="h-12 w-auto">--}}
                        <img class="rounded-xl bg-indigo-50 lg:rounded-3xl"
                             src="{{ asset('images/studentin.webp') }}" alt="">
                        <blockquote class="mt-6 text-xl/8 font-semibold text-white">
                            <p>“ Der Kurs ist ideal für Studierende, Entwickler und IT-Interessierte, die ein solides Fundament
                                in der Java-Programmierung aufbauen oder ihre Kenntnisse vertiefen möchten. Starten Sie jetzt und entdecken Sie,
                                wie Java die Grundlage für innovative und skalierbare Softwarelösungen weltweit schafft!”</p>
                        </blockquote>
                        <figcaption class="mt-6 text-sm/6 text-gray-300">
                            <a href="{{ url('/kontakt') }}" class="inline-block px-6 py-2.5 bg-blue-500
                            text-white font-semibold text-center rounded-lg hover:bg-blue-700 focus:outline-none
                            focus:ring-2 focus:ring-blue-300">
                            Kurs buchen
                            </a>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div>
                <div class="text-base/7 text-gray-700 lg:max-w-lg">
{{--                    <p class="text-base/7 font-semibold text-indigo-600">Zum Java Kurs</p>--}}
                    <h3 class="mt-2 text-pretty text-2xl font-semibold tracking-tight text-gray-900 sm:text-4xl">
                        Java: Ihr Einstieg in die Welt der Programmierung
                    </h3>
                    <div class="max-w-xl">
                        <p class="mt-6">
                            In diesem Kurs lernen Sie die Grundlagen und fortgeschrittenen Konzepte der Programmiersprache Java,
                            die eine der beliebtesten und vielseitigsten Sprachen der Welt ist. Der Kurs kombiniert eine Einführung
                            in die Sprache mit praktischen Übungen, sodass Sie die Möglichkeit haben, Ihr Wissen direkt anzuwenden.
                            Egal ob Anfänger oder Entwickler mit Vorkenntnissen,
                            dieser Kurs bietet wertvolle Einblicke in die Welt der Java-Programmierung.
                        </p>
                        <p class="text-3xl  mb-2 mt-10">Kursinhalte:</p>
                        <ul class="list-decimal pl-8 space-y-2 ">
                            <li class="text-lg font-medium">
                                Grundlagen der Java-Programmierung:
{{--                                <ul class="list-circle pl-6 space-y-1 text-gray-600">--}}
{{--                                    <li class="text-base font-normal">- Einführung in die Java-Plattform</li>--}}
{{--                                    <li class="text-base font-normal">- Installation und Nutzung der Entwicklungsumgebung</li>--}}
{{--                                    <li class="text-base font-normal">- Grundlegende Syntax und Programmierkonzepte</li>--}}
{{--                                </ul>--}}
                            </li>
                            <li class="text-lg font-medium">
                                Kontrollstrukturen und Methoden:
{{--                                <ul class="list-circle pl-6 space-y-1 text-gray-600">--}}
{{--                                    <li class="text-base font-normal">- Schleifen (for, while, do-while)</li>--}}
{{--                                    <li class="text-base font-normal">- Entscheidungsstrukturen (if-else, switch)</li>--}}
{{--                                    <li class="text-base font-normal">- Definition und Aufruf von Methoden</li>--}}
{{--                                    <li class="text-base font-normal">- Parameterübergabe und Rückgabewerte</li>--}}
{{--                                </ul>--}}
                            </li>
                            <li class="text-lg font-medium">
                                Objektorientierte Programmierung (OOP) mit Java:
{{--                                <ul class="list-circle pl-6 space-y-1 text-gray-600">--}}
{{--                                    <li class="text-base font-normal">- Klassen, Objekte und Konstruktore</li>--}}
{{--                                    <li class="text-base font-normal">- Vererbung, Polymorphismus und Abstraktion</li>--}}
{{--                                    <li class="text-base font-normal">- Schnittstellen und Pakete</li>--}}
{{--                                    <li class="text-base font-normal">- Zugriffskontrolle (public, private, protected)</li>--}}
{{--                                </ul>--}}
                            </li>
                            <li class="text-lg font-medium">
                                Fehlerbehandlung und Debugging:
{{--                                <ul class="list-circle pl-6 space-y-1 text-gray-600">--}}
{{--                                    <li class="text-base font-normal">- Umgang mit Ausnahmen (try, catch, finally)</li>--}}
{{--                                    <li class="text-base font-normal">- Eigene Ausnahmeklassen erstellen</li>--}}
{{--                                    <li class="text-base font-normal">- Debugging-Tools und Techniken</li>--}}
{{--                                    <li class="text-base font-normal">- Eigene Ausnahmeklassen erstellen</li>--}}
{{--                                </ul>--}}
                            </li>
                            <li class="text-lg font-medium">
                                Fortgeschrittene Java-Konzepte:
{{--                                <ul class="list-circle pl-6 space-y-1 text-gray-600">--}}
{{--                                    <li class="text-base font-normal">- Generics und Collections-Framework (Listen, Sets, Maps)</li>--}}
{{--                                    <li class="text-base font-normal">- Lambda-Ausdrücke und funktionale Programmierung</li>--}}
{{--                                    <li class="text-base font-normal">- Arbeiten mit Streams und File I/O</li>--}}
{{--                                    <li class="text-base font-normal">- Multithreading und parallele Programmierung</li>--}}
{{--                                </ul>--}}
                            </li>

                            <li class="text-lg font-medium">
                                Datenbanken und Java:
{{--                                <ul class="list-circle pl-6 space-y-1 text-gray-600">--}}
{{--                                    <li class="text-base font-normal">- Verbindung zu Datenbanken mit JDBC</li>--}}
{{--                                    <li class="text-base font-normal">- Lambda-Ausdrücke und funktionale Programmierung</li>--}}
{{--                                    <li class="text-base font-normal">- CRUD-Operationen (Create, Read, Update, Delete)</li>--}}
{{--                                    <li class="text-base font-normal">- Grundlagen von Hibernate und JPA</li>--}}
{{--                                </ul>--}}
                            </li>

                            <li class="text-lg font-medium">
                                Grafische Benutzeroberflächen (GUIs):
{{--                                <ul class="list-circle pl-6 space-y-1 text-gray-600">--}}
{{--                                    <li class="text-base font-normal">- Erstellung von GUIs mit JavaFX oder Swing</li>--}}
{{--                                    <li class="text-base font-normal">- Event-Handling und Benutzerinteraktion</li>--}}
{{--                                    <li class="text-base font-normal">- Event-Handling und Benutzerinteraktion</li>--}}
{{--                                    <li class="text-base font-normal">- Erstellung kleiner Desktop-Anwendungen</li>--}}
{{--                                </ul>--}}
                            </li>
                        </ul>
                        <p class="mt-8">
                        <h3 class="text-2xl">Lernziele:</h3>
                        Durch das Beherrschen der grundlegenden und fortgeschrittenen Konzepte der Java-Programmierung,
                        die Entwicklung von robusten und skalierbaren Anwendungen sowie das Verständnis der objektorientierten Programmierung
                        und deren Anwendung in Java erlangen Sie die Fähigkeit,
                        Java in Datenbankanwendungen, Webprojekten und Desktop-Anwendungen effektiv einzusetzen.
                        </p>
                        <p class="mt-8">
                        <h3 class="text-2xl"> Voraussetzungen:</h3>
                        Keine Vorkenntnisse erforderlich – der Kurs startet bei den Grundlagen.
                        Idealerweise erste Erfahrungen mit einer Programmiersprache (optional).
                        </p>
                        <p class="mt-8 font-bold">
                            Zielgruppe:
                            Der Kurs richtet sich an Einsteiger, die Java von Grund auf lernen möchten, sowie an Entwickler,
                            die ihre Kenntnisse vertiefen und Java für professionelle Anwendungen nutzen möchten. Besonders geeignet für Studierende der Informatik,
                            Softwareentwickler und Interessierte an objektorientierter Programmierung.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto grid max-w-2xl grid-cols-1 items-start gap-x-8 gap-y-16 sm:gap-y-24 lg:mx-0 lg:max-w-none lg:grid-cols-2">
            <div class="lg:pr-4">
                <div class="relative overflow-hidden rounded-3xl bg-gray-900 px-6 pb-9 pt-64 shadow-2xl sm:px-12 lg:max-w-lg lg:px-8 lg:pb-8 xl:px-10 xl:pb-10">
                    <img class="absolute inset-0 size-full object-cover brightness-125 saturate-0" src="https://images.unsplash.com/photo-1630569267625-157f8f9d1a7e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2669&q=80" alt="">
                    <div class="absolute inset-0 bg-gray-900 mix-blend-multiply"></div>
                    <div class="absolute left-1/2 top-1/2 -ml-16 -translate-x-1/2 -translate-y-1/2 transform-gpu blur-3xl" aria-hidden="true">
                        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-40" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                    </div>
                    <figure class="relative isolate">
                        <svg viewBox="0 0 162 128" fill="none" aria-hidden="true" class="absolute -left-2 -top-4 -z-10 h-32 stroke-white/20">
                            <path id="0ef284b8-28c2-426e-9442-8655d393522e" d="M65.5697 118.507L65.8918 118.89C68.9503 116.314 71.367 113.253 73.1386 109.71C74.9162 106.155 75.8027 102.28 75.8027 98.0919C75.8027 94.237 75.16 90.6155 73.8708 87.2314C72.5851 83.8565 70.8137 80.9533 68.553 78.5292C66.4529 76.1079 63.9476 74.2482 61.0407 72.9536C58.2795 71.4949 55.276 70.767 52.0386 70.767C48.9935 70.767 46.4686 71.1668 44.4872 71.9924L44.4799 71.9955L44.4726 71.9988C42.7101 72.7999 41.1035 73.6831 39.6544 74.6492C38.2407 75.5916 36.8279 76.455 35.4159 77.2394L35.4047 77.2457L35.3938 77.2525C34.2318 77.9787 32.6713 78.3634 30.6736 78.3634C29.0405 78.3634 27.5131 77.2868 26.1274 74.8257C24.7483 72.2185 24.0519 69.2166 24.0519 65.8071C24.0519 60.0311 25.3782 54.4081 28.0373 48.9335C30.703 43.4454 34.3114 38.345 38.8667 33.6325C43.5812 28.761 49.0045 24.5159 55.1389 20.8979C60.1667 18.0071 65.4966 15.6179 71.1291 13.7305C73.8626 12.8145 75.8027 10.2968 75.8027 7.38572C75.8027 3.6497 72.6341 0.62247 68.8814 1.1527C61.1635 2.2432 53.7398 4.41426 46.6119 7.66522C37.5369 11.6459 29.5729 17.0612 22.7236 23.9105C16.0322 30.6019 10.618 38.4859 6.47981 47.558L6.47976 47.558L6.47682 47.5647C2.4901 56.6544 0.5 66.6148 0.5 77.4391C0.5 84.2996 1.61702 90.7679 3.85425 96.8404L3.8558 96.8445C6.08991 102.749 9.12394 108.02 12.959 112.654L12.959 112.654L12.9646 112.661C16.8027 117.138 21.2829 120.739 26.4034 123.459L26.4033 123.459L26.4144 123.465C31.5505 126.033 37.0873 127.316 43.0178 127.316C47.5035 127.316 51.6783 126.595 55.5376 125.148L55.5376 125.148L55.5477 125.144C59.5516 123.542 63.0052 121.456 65.9019 118.881L65.5697 118.507Z" />
                            <use href="#0ef284b8-28c2-426e-9442-8655d393522e" x="86" />
                        </svg>
                        <img src="https://tailwindui.com/plus/img/logos/workcation-logo-white.svg" alt="" class="h-12 w-auto">
                        <blockquote class="mt-6 text-xl/8 font-semibold text-white">
                            <p>“Dieser Kurs bietet nicht nur die theoretischen Grundlagen von Algorithmen,
                                sondern auch wertvolle praktische Erfahrungen,
                                um das Wissen direkt in realen Projekten und Anwendungen zu nutzen.”
                            </p>
                        </blockquote>
                        <figcaption class="mt-6 text-sm/6 text-gray-300">
                            <a href="{{ url('/kontakt') }}" class="inline-block px-6 py-2.5 bg-blue-500
                            text-white font-semibold text-center rounded-lg hover:bg-blue-700 focus:outline-none
                            focus:ring-2 focus:ring-blue-300">
                                Kurs buchen
                            </a>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div>
                <div class="text-base/7 text-gray-700 lg:max-w-lg">
                    {{--                    <p class="text-base/7 font-semibold text-indigo-600">Zum Java Kurs</p>--}}
                    <h3 class="mt-2 text-pretty text-2xl font-semibold tracking-tight text-gray-900 sm:text-4xl">
                        Algorithmus: <br>Der Schlüssel zu effizientem Programmieren
                    </h3>
                    <div class="max-w-xl">
                        <p class="mt-6">
                            In diesem Kurs werden grundlegende und fortgeschrittene Konzepte der Algorithmen entwickelt, analysiert und angewendet.
                            Sie lernen, wie man Probleme systematisch mit effizienten Algorithmen löst und wie man die Komplexität von Algorithmen bewertet.
                            Der Kurs bietet eine ausgewogene Mischung aus theoretischen Grundlagen und praktischen Übungen,
                            sodass Sie die erlernten Konzepte direkt in realen Anwendungen einsetzen können.
                        </p>
                        <p class="text-3xl  mb-2 mt-10">Kursinhalte:</p>
                        <ul class="list-decimal pl-8 space-y-2 ">
                            <li class="text-lg font-medium">
                                Grundlagen der Algorithmen:
{{--                                <ul class="list-circle pl-6 space-y-1 text-gray-600">--}}
{{--                                    <li class="text-base font-normal">- Definition von Algorithmen</li>--}}
{{--                                    <li class="text-base font-normal">- Datenstrukturen (Arrays, Listen, Bäume, Graphen)</li>--}}
{{--                                    <li class="text-base font-normal">-  Komplexitätsanalyse (O-Notation)</li>--}}
{{--                                </ul>--}}
                            </li>
                            <li class="text-lg font-medium">
                                Sortier- und Suchalgorithmen:
{{--                                <ul class="list-circle pl-6 space-y-1 text-gray-600">--}}
{{--                                    <li class="text-base font-normal">- Algorithmen wie Bubble Sort, Quick Sort, Merge Sort</li>--}}
{{--                                    <li class="text-base font-normal">- Binäre Suche und ihre Optimierungen</li>--}}
{{--                                </ul>--}}
                            </li>
                            <li class="text-lg font-medium">
                                Graphalgorithmen:
{{--                                <ul class="list-circle pl-6 space-y-1 text-gray-600">--}}
{{--                                    <li class="text-base font-normal">- Tiefensuche und Breitensuche</li>--}}
{{--                                    <li class="text-base font-normal">- Dijkstra-Algorithmus und kürzeste Wege</li>--}}
{{--                                    <li class="text-base font-normal">- Kruskal- und Prim-Algorithmus für Minimum Spanning Trees</li>--}}
{{--                                </ul>--}}
                            </li>
                            <li class="text-lg font-medium">
                                Dynamische Programmierung:
{{--                                <ul class="list-circle pl-6 space-y-1 text-gray-600">--}}
{{--                                    <li class="text-base font-normal">- Konzept der Rekursion und Memoisierung</li>--}}
{{--                                    <li class="text-base font-normal">- Knapsack-Problem, Fibonacci-Zahlen, Longest Common Subsequence</li>--}}
{{--                                </ul>--}}
                            </li>
                            <li class="text-lg font-medium">
                                Algorithmische Optimierung:
{{--                                <ul class="list-circle pl-6 space-y-1 text-gray-600">--}}
{{--                                    <li class="text-base font-normal">- Entscheidungsbäume und Greedy-Techniken</li>--}}
{{--                                    <li class="text-base font-normal">- Huffman-Codierung, Kruskal-Algorithmus</li>--}}
{{--                                </ul>--}}
                            </li>
                        </ul>
                        <p class="mt-8">
                           <h3 class="text-2xl">Lernziele:</h3>
                            Verständnis für die Wichtigkeit der Wahl des richtigen Algorithmus in verschiedenen Szenarien.
                            Fähigkeit, Komplexität von Algorithmen zu analysieren und zu bewerten.
                            Praktische Anwendung von Algorithmen zur Lösung realer Probleme.
                            Verbesserung der Problemlösungsfähigkeiten durch algorithmische Denkweise.
                        </p>
                        <p class="mt-8">
                        <h3 class="text-2xl"> Voraussetzungen:</h3>
                            Grundkenntnisse in Programmierung (idealerweise in einer Sprache wie Python, Java oder C++)
                            Grundverständnis von Datenstrukturen wie Arrays und Listen.
                        </p>
                        <p class="mt-8 font-bold">
                            Zielgruppe:
                            Der Kurs richtet sich an Studierende der Informatik, Softwareentwickler, Datenwissenschaftler und alle,
                            die ihre algorithmischen Fähigkeiten vertiefen und ihre Problemlösungsansätze verbessern möchten.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto grid max-w-2xl grid-cols-1 items-start gap-x-8 gap-y-16 sm:gap-y-24 lg:mx-0 lg:max-w-none lg:grid-cols-2">
            <div class="lg:pr-4">
                <div class="relative overflow-hidden rounded-3xl bg-gray-900 px-6 pb-9 pt-64 shadow-2xl sm:px-12 lg:max-w-lg lg:px-8 lg:pb-8 xl:px-10 xl:pb-10">
                    <img class="absolute inset-0 size-full object-cover brightness-125 saturate-0" src="https://images.unsplash.com/photo-1630569267625-157f8f9d1a7e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2669&q=80" alt="">
                    <div class="absolute inset-0 bg-gray-900 mix-blend-multiply"></div>
                    <div class="absolute left-1/2 top-1/2 -ml-16 -translate-x-1/2 -translate-y-1/2 transform-gpu blur-3xl" aria-hidden="true">
                        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-40" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                    </div>
                    <figure class="relative isolate">
                        <svg viewBox="0 0 162 128" fill="none" aria-hidden="true" class="absolute -left-2 -top-4 -z-10 h-32 stroke-white/20">
                            <path id="0ef284b8-28c2-426e-9442-8655d393522e" d="M65.5697 118.507L65.8918 118.89C68.9503 116.314 71.367 113.253 73.1386 109.71C74.9162 106.155 75.8027 102.28 75.8027 98.0919C75.8027 94.237 75.16 90.6155 73.8708 87.2314C72.5851 83.8565 70.8137 80.9533 68.553 78.5292C66.4529 76.1079 63.9476 74.2482 61.0407 72.9536C58.2795 71.4949 55.276 70.767 52.0386 70.767C48.9935 70.767 46.4686 71.1668 44.4872 71.9924L44.4799 71.9955L44.4726 71.9988C42.7101 72.7999 41.1035 73.6831 39.6544 74.6492C38.2407 75.5916 36.8279 76.455 35.4159 77.2394L35.4047 77.2457L35.3938 77.2525C34.2318 77.9787 32.6713 78.3634 30.6736 78.3634C29.0405 78.3634 27.5131 77.2868 26.1274 74.8257C24.7483 72.2185 24.0519 69.2166 24.0519 65.8071C24.0519 60.0311 25.3782 54.4081 28.0373 48.9335C30.703 43.4454 34.3114 38.345 38.8667 33.6325C43.5812 28.761 49.0045 24.5159 55.1389 20.8979C60.1667 18.0071 65.4966 15.6179 71.1291 13.7305C73.8626 12.8145 75.8027 10.2968 75.8027 7.38572C75.8027 3.6497 72.6341 0.62247 68.8814 1.1527C61.1635 2.2432 53.7398 4.41426 46.6119 7.66522C37.5369 11.6459 29.5729 17.0612 22.7236 23.9105C16.0322 30.6019 10.618 38.4859 6.47981 47.558L6.47976 47.558L6.47682 47.5647C2.4901 56.6544 0.5 66.6148 0.5 77.4391C0.5 84.2996 1.61702 90.7679 3.85425 96.8404L3.8558 96.8445C6.08991 102.749 9.12394 108.02 12.959 112.654L12.959 112.654L12.9646 112.661C16.8027 117.138 21.2829 120.739 26.4034 123.459L26.4033 123.459L26.4144 123.465C31.5505 126.033 37.0873 127.316 43.0178 127.316C47.5035 127.316 51.6783 126.595 55.5376 125.148L55.5376 125.148L55.5477 125.144C59.5516 123.542 63.0052 121.456 65.9019 118.881L65.5697 118.507Z" />
                            <use href="#0ef284b8-28c2-426e-9442-8655d393522e" x="86" />
                        </svg>
                        <img src="https://tailwindui.com/plus/img/logos/workcation-logo-white.svg" alt="" class="h-12 w-auto">
                        <blockquote class="mt-6 text-xl/8 font-semibold text-white">
                            <p>“Der Kurs ist ideal für Studierende, Entwickler und IT-Interessierte, die ein solides Fundament
                                im Datenbankmanagement aufbauen oder ihre Kenntnisse in SQL und Datenbanktechnologien vertiefen möchten.
                                Starten Sie jetzt und entdecken Sie,
                                wie effiziente Datenbanklösungen die Welt der Daten revolutionieren können!”
                            </p>
                        </blockquote>
                        <figcaption class="mt-6 text-sm/6 text-gray-300">
                            <a href="{{ url('/kontakt') }}" class="inline-block px-6 py-2.5 bg-blue-500
                            text-white font-semibold text-center rounded-lg hover:bg-blue-700 focus:outline-none
                            focus:ring-2 focus:ring-blue-300">
                                Kurs buchen
                            </a>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div>
                <div class="text-base/7 text-gray-700 lg:max-w-lg">
                    {{--                    <p class="text-base/7 font-semibold text-indigo-600">Zum Java Kurs</p>--}}
                    <h3 class="mt-2 text-pretty text-2xl font-semibold tracking-tight text-gray-900 sm:text-4xl">
                        Grundlagen und Konzepte der Datenbankverwaltung
                    </h3>
                    <div class="max-w-xl">
                        <p class="mt-6 mb-2">
                            Erlernen Sie die Kunst der Datenbankverwaltung! In unserem Kurs erhalten Sie
                            fundierte Kenntnisse über relationale Datenbanken, von der Modellierung bis hin zur
                            Optimierung und Abfragegestaltung. Dieser Kurs ist ideal für Anfänger und Fortgeschrittene,
                            die ihre Fähigkeiten in der Datenbankentwicklung und -verwaltung ausbauen möchten.
                        </p>
                        <p class="text-3xl  mb-2 mt-10">Kursinhalte:</p>
                        <ul class="list-decimal pl-8 space-y-2 ">
                            <li class="text-lg font-medium">
                                Einführung in Datenbanken
                                <ul class="list-circle pl-6 space-y-1 text-gray-600">
                                    <li class="text-base font-normal">- Grundlagen und Definitionen</li>
                                    <li class="text-base font-normal">- Relationale Datenbanken</li>
                                    <li class="text-base font-normal">- Überblick über gängige Systeme</li>
                                </ul>
                            </li>
                            <li class="text-lg font-medium">
                                Datenmodellierung:
                                <ul class="list-circle pl-6 space-y-1 text-gray-600">
                                    <li class="text-base font-normal">- Normalisierung und Entwurf von Tabellen</li>
                                    <li class="text-base font-normal">- Erstellung von ER-Diagrammen</li>
                                    <li class="text-base font-normal">- Praxisbeispiele und Fallstudien</li>
                                </ul>
                            </li>
                            <li class="text-lg font-medium">
                                SQL – Structured Query Language:
                                <ul class="list-circle pl-6 space-y-1 text-gray-600">
                                    <li class="text-base font-normal">- Grundlagen von SQL-Abfragen</li>
                                    <li class="text-base font-normal">- Daten einfügen, aktualisieren, löschen und abfragen</li>
                                    <li class="text-base font-normal">- Joins, Aggregationen und Subqueries</li>
                                </ul>
                            </li>
                            <li class="text-lg font-medium">
                                Datenbank-Optimierung:
                                <ul class="list-circle pl-6 space-y-1 text-gray-600">
                                    <li class="text-base font-normal">Indexierung und Performance-Verbesserungen</li>
                                    <li class="text-base font-normal">Transaktionen und Concurrency Control</li>
                                    <li class="text-base font-normal">Sicherheitsaspekte in Datenbanken</li>
                                </ul>
                            </li>
                            <li class="text-lg font-medium">
                                Projektarbeit:
                                <ul class="list-circle pl-6 space-y-1 text-gray-600">
                                    <li class="text-base font-normal">- Entwicklung einer eigenen Datenbanklösung</li>
                                    <li class="text-base font-normal">- Praxisorientierte Anwendungen</li>
                                </ul>
                            </li>
                        </ul>
                        </p>
                        <p class="mt-8">
                        <p class="text-3xl  mb-2 mt-10">Kursziele:</p>
                        Durch das Verstehen der Funktionsweise von Datenbanken und ihrer verschiedenen Arten sowie dem
                        Erwerben von Kompetenzen in SQL-Technologien sind Sie in der Lage,
                        effiziente Datenbanklösungen für reale Probleme zu erstellen.
                        </p>
                        <p class="mt-8 font-bold">
                            Zielgruppe:
                            Die Zielgruppe dieses Kurses sind IT-Fachkräfte, Datenbankentwickler und Softwareentwickler,
                            die ihre Fähigkeiten im Bereich Datenbankmanagement und SQL-Technologien erweitern möchten,
                            um effektive und skalierbare Datenbanklösungen für reale Geschäftsprobleme zu entwickeln.
                            Diese Zielgruppe umfasst sowohl Berufseinsteiger als auch erfahrene Fachleute,
                            die ihre Kenntnisse vertiefen und auf dem neuesten Stand der Technik bleiben möchten.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto grid max-w-2xl grid-cols-1 items-start gap-x-8 gap-y-16 sm:gap-y-24 lg:mx-0 lg:max-w-none lg:grid-cols-2">
            <div class="lg:pr-4">
                <div class="relative overflow-hidden rounded-3xl bg-gray-900 px-6 pb-9 pt-64 shadow-2xl sm:px-12 lg:max-w-lg lg:px-8 lg:pb-8 xl:px-10 xl:pb-10">
                    <img class="absolute inset-0 size-full object-cover brightness-125 saturate-0" src="https://images.unsplash.com/photo-1630569267625-157f8f9d1a7e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2669&q=80" alt="">
                    <div class="absolute inset-0 bg-gray-900 mix-blend-multiply"></div>
                    <div class="absolute left-1/2 top-1/2 -ml-16 -translate-x-1/2 -translate-y-1/2 transform-gpu blur-3xl" aria-hidden="true">
                        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-40" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                    </div>
                    <figure class="relative isolate">
                        <svg viewBox="0 0 162 128" fill="none" aria-hidden="true" class="absolute -left-2 -top-4 -z-10 h-32 stroke-white/20">
                            <path id="0ef284b8-28c2-426e-9442-8655d393522e" d="M65.5697 118.507L65.8918 118.89C68.9503 116.314 71.367 113.253 73.1386 109.71C74.9162 106.155 75.8027 102.28 75.8027 98.0919C75.8027 94.237 75.16 90.6155 73.8708 87.2314C72.5851 83.8565 70.8137 80.9533 68.553 78.5292C66.4529 76.1079 63.9476 74.2482 61.0407 72.9536C58.2795 71.4949 55.276 70.767 52.0386 70.767C48.9935 70.767 46.4686 71.1668 44.4872 71.9924L44.4799 71.9955L44.4726 71.9988C42.7101 72.7999 41.1035 73.6831 39.6544 74.6492C38.2407 75.5916 36.8279 76.455 35.4159 77.2394L35.4047 77.2457L35.3938 77.2525C34.2318 77.9787 32.6713 78.3634 30.6736 78.3634C29.0405 78.3634 27.5131 77.2868 26.1274 74.8257C24.7483 72.2185 24.0519 69.2166 24.0519 65.8071C24.0519 60.0311 25.3782 54.4081 28.0373 48.9335C30.703 43.4454 34.3114 38.345 38.8667 33.6325C43.5812 28.761 49.0045 24.5159 55.1389 20.8979C60.1667 18.0071 65.4966 15.6179 71.1291 13.7305C73.8626 12.8145 75.8027 10.2968 75.8027 7.38572C75.8027 3.6497 72.6341 0.62247 68.8814 1.1527C61.1635 2.2432 53.7398 4.41426 46.6119 7.66522C37.5369 11.6459 29.5729 17.0612 22.7236 23.9105C16.0322 30.6019 10.618 38.4859 6.47981 47.558L6.47976 47.558L6.47682 47.5647C2.4901 56.6544 0.5 66.6148 0.5 77.4391C0.5 84.2996 1.61702 90.7679 3.85425 96.8404L3.8558 96.8445C6.08991 102.749 9.12394 108.02 12.959 112.654L12.959 112.654L12.9646 112.661C16.8027 117.138 21.2829 120.739 26.4034 123.459L26.4033 123.459L26.4144 123.465C31.5505 126.033 37.0873 127.316 43.0178 127.316C47.5035 127.316 51.6783 126.595 55.5376 125.148L55.5376 125.148L55.5477 125.144C59.5516 123.542 63.0052 121.456 65.9019 118.881L65.5697 118.507Z" />
                            <use href="#0ef284b8-28c2-426e-9442-8655d393522e" x="86" />
                        </svg>
                        <img src="https://tailwindui.com/plus/img/logos/workcation-logo-white.svg" alt="" class="h-12 w-auto">
                        <blockquote class="mt-6 text-xl/8 font-semibold text-white">
                            <p>“ Der Kurs ist ideal für Studierende, Entwickler und IT-Interessierte, die ein solides Fundament
                                in der Entwicklung moderner Webanwendungen und Microservices mit Spring Boot aufbauen oder ihre
                                Kenntnisse vertiefen möchten. Starten Sie jetzt und entdecken Sie,
                                wie Spring Boot die Welt der Softwareentwicklung effizienter und leistungsfähiger macht!”
                            </p>
                        </blockquote>

                        <figcaption class="mt-6 text-sm/6 text-gray-300">
                            <a href="{{ url('/kontakt') }}" class="inline-block px-6 py-2.5 bg-blue-500
                            text-white font-semibold text-center rounded-lg hover:bg-blue-700 focus:outline-none
                            focus:ring-2 focus:ring-blue-300">
                                Kurs buchen
                            </a>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div>
                <div class="text-base/7 text-gray-700 lg:max-w-lg">
                    {{--                    <p class="text-base/7 font-semibold text-indigo-600">Zum Java Kurs</p>--}}
                    <h3 class="mt-2 text-pretty text-2xl font-semibold tracking-tight text-gray-900 sm:text-4xl">
                        Java Spring Boot – Effiziente Webentwicklung leicht gemacht
                    </h3>
                    <div class="max-w-xl">
                        <p class="mt-6 mb-2">
                            Dieser Kurs bietet eine umfassende Einführung in Java Spring Boot, das führende Framework für
                            die schnelle und effiziente Entwicklung von Webanwendungen und Microservices. Sie lernen, wie Sie moderne,
                            sichere und skalierbare Anwendungen erstellen, die den Anforderungen von Unternehmen gerecht werden.
                            Der Kurs kombiniert Theorie mit praktischen Übungen und Projekten,
                            um Ihnen ein solides Verständnis für Spring Boot und seine Einsatzmöglichkeiten zu vermitteln.
                        </p>
                        <p class="text-3xl  mb-2 mt-10">Kursinhalte:</p>
                        <ul class="list-decimal pl-8 space-y-2 ">
                            <li class="text-lg font-medium">
                                Einführung in Spring Boot:
                                <ul class="list-circle pl-6 space-y-1 text-gray-600">
                                    <li class="text-base font-normal">- Grundlagen und Vorteile von Spring Boot</li>
                                    <li class="text-base font-normal">- Einrichtung der Entwicklungsumgebung</li>
                                    <li class="text-base font-normal">- Struktur und Aufbau eines Spring-Boot-Projekts</li>
                                </ul>
                            </li>
                            <li class="text-lg font-medium">
                                Spring Boot Essentials:
                                <ul class="list-circle pl-6 space-y-1 text-gray-600">
                                    <li class="text-base font-normal">- Dependency Injection und Inversion of Control (IoC)</li>
                                    <li class="text-base font-normal">- Konfiguration und Nutzung von Starter-Modulen</li>
                                    <li class="text-base font-normal">- Erstellung und Testen von RESTful APIs</li>
                                </ul>
                            </li>
                            <li class="text-lg font-medium">
                                Datenbankintegration:
                                <ul class="list-circle pl-6 space-y-1 text-gray-600">
                                    <li class="text-base font-normal">- Arbeiten mit Spring Data JPA und Hibernate</li>
                                    <li class="text-base font-normal">- CRUD-Operationen und Datenbankabfragen</li>
                                    <li class="text-base font-normal">- Nutzung von MySQL, PostgreSQL</li>
                                    <li class="text-base font-normal">- Einführung in Flyway für Datenbank-Migrationen</li>
                                </ul>
                            </li>
                            <li class="text-lg font-medium">
                                Sicherheitskonzepte:
                                <ul class="list-circle pl-6 space-y-1 text-gray-600">
                                    <li class="text-base font-normal">Implementierung von Spring Security</li>
                                    <li class="text-base font-normal">Authentifizierung und Autorisierung</li>
                                    <li class="text-base font-normal">Integration von JWT (JSON Web Tokens) für sichere APIs</li>
                                </ul>
                            </li>
                            <li class="text-lg font-medium">
                                Microservices-Architektur:
                                <ul class="list-circle pl-6 space-y-1 text-gray-600">
                                    <li class="text-base font-normal">- Aufbau und Konfiguration von Microservices</li>
                                    <li class="text-base font-normal">- Kommunikation zwischen Microservices mit REST und Messaging-Systemen</li>
                                </ul>
                            </li>
                            <li class="text-lg font-medium">
                                Fehlerbehandlung und Logging:
                                <ul class="list-circle pl-6 space-y-1 text-gray-600">
                                    <li class="text-base font-normal">- Exception Handling und Fehlerantworten</li>
                                    <li class="text-base font-normal">- Logging und Monitoring mit Spring Boot Actuator</li>
                                    <li class="text-base font-normal">-  Integration von Tools wie Logback und SLF4J</li>
                                </ul>
                            </li>


                        </ul>
                        </p>
                        <p class="mt-8">
                        <p class="text-3xl  mb-2 mt-10">Kursziele:</p>
                        Durch das Beherrschen der Grundlagen und fortgeschrittenen Konzepte von Spring Boot,
                        die Entwicklung skalierbarer und sicherer Webanwendungen sowie Microservices und das Verständnis
                        der Integration von Datenbanken und Sicherheitsmechanismen erlangen Sie die Fähigkeit,
                        Spring Boot effektiv in modernen Entwicklungs- und Deployment-Szenarien
                        </p>

                        <p class="mt-8">
                        <h3 class="text-2xl"> Voraussetzungen:</h3>
                        Grundkenntnisse in Java und objektorientierter Programmierung.
                        Basiswissen über Datenbanken und SQL (empfohlen, aber nicht zwingend).
                        </p>

                        <p class="mt-8 font-bold">
                            Zielgruppe:
                            Der Kurs richtet sich an Softwareentwickler, Webentwickler und IT-Fachkräfte,
                            die Spring Boot für die Entwicklung moderner Anwendungen einsetzen möchten.
                            Er eignet sich sowohl für Einsteiger im Bereich Frameworks als auch für erfahrene Entwickler, die ihre Kenntnisse
                        </p>
                    </div>
                </div>
            </div>
        </div>
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
                <p class="text-sm/6 text-gray-400 text-center">Copyright &copy; 2024 MaxaBit IT-Solutions, Inc. All rights reserved. In: Köln - Bonn - Frankfurt</p>
            </div>
        </div>
    </footer>
</div>

</body>
</html>
