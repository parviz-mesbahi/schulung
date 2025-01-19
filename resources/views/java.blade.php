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

{{--    <link rel="alternate" href="https://maxabit.de/" hreflang="de">--}}
    <link rel="icon" href="favicon.svg" type="image/svg+xml">

    <script src="https://cdn.tailwindcss.com"></script>



</head>
<body >
<!-- Header -->
<header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-6 lg:px-8 bg-gray-900 " aria-label="Global ">
        <div class="flex lg:flex-1">
            <a  href="{{ url('/') }}" class="">
                <span class="text-blue-800 text-4xl font-serif font-extrabold"> MaxaBit</span>
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
            <a href="{{ url('/') }}" class="text-sm/6 font-semibold text-white">Home</a>
            <a href="{{ url('/entwicklung')}}" class="text-sm/6 font-semibold text-white">Entwicklung</a>
            <a href="{{ url('/kurs') }}" class="text-sm/6 font-semibold text-white">Kurse</a>
            <a href="{{ url('/ueberuns') }}" class="text-sm/6 font-semibold text-white">Über uns</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="{{ url('/kontakt') }}" class="text-sm/6 font-semibold text-white">Kurs buchen </a>
        </div>
    </nav>
</header>
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-white">
  <body class="h-full">
  ```
-->
<div>
    <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
    <div class="relative z-50 lg:hidden" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-900/80" aria-hidden="true"></div>

        <div class="fixed inset-0 flex">
            <div class="relative mr-16 flex w-full max-w-xs flex-1">
                <div class="absolute left-full top-0 flex w-16 justify-center pt-5">
                    <button type="button" class="-m-2.5 p-2.5">
                        <span class="sr-only">Close sidebar</span>
                        <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Sidebar component, swap this element with another sidebar if you like -->
                <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-white px-6 pb-4">
                    <div class="flex h-16 shrink-0 items-center">
{{--                        <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">--}}
                        <a href="{{url('/')}}"> <span class="font-bold text-indigo-700"> MaxaBit</span> </a>
                    </div>
                    <nav class="flex flex-1 flex-col">
                        <ul role="list" class="flex flex-1 flex-col gap-y-7">
                            <li>
                                <ul role="list" class="-mx-2 space-y-1">
                                    <li>
                                        <!-- Current: "bg-gray-50 text-indigo-600", Default: "text-gray-700 hover:text-indigo-600 hover:bg-gray-50" -->
                                        <a href="#" class="group flex gap-x-3 rounded-md bg-gray-50 p-2 text-sm/6 font-semibold text-indigo-600">
{{--                                            <svg class="size-6 shrink-0 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">--}}
{{--                                                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />--}}
{{--                                            </svg>--}}
                                            <svg fill="#0000ff" width="20px" height="20px" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" id="arrow">
                                                <path d="M8.29289 2.29289C8.68342 1.90237 9.31658 1.90237 9.70711 2.29289L14.2071 6.79289C14.5976 7.18342 14.5976 7.81658 14.2071 8.20711L9.70711 12.7071C9.31658 13.0976 8.68342 13.0976 8.29289 12.7071C7.90237 12.3166 7.90237 11.6834 8.29289 11.2929L11 8.5H1.5C0.947715 8.5 0.5 8.05228 0.5 7.5C0.5 6.94772 0.947715 6.5 1.5 6.5H11L8.29289 3.70711C7.90237 3.31658 7.90237 2.68342 8.29289 2.29289Z"/>
                                            </svg>
                                            Über den Kurs
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                                            <svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                            </svg>
                                            Einführung
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                                            <svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                                            </svg>
                                            Kontroll-Strukturen
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                                            <svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                            </svg>
                                            Arrays
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                                            <svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H9.75" />
                                            </svg>
                                            Klasse
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                                            <svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H9.75" />
                                            </svg>
                                            Konstruktoren
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                                            <svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                                            </svg>
                                            Vererbung
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                                            <svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                                            </svg>
                                            Interfaces
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                                            <svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                                            </svg>
                                            Exceptions
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                                            <svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                                            </svg>
                                            Strings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                                            <svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                                            </svg>
                                            Enum
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                                            <svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                                            </svg>
                                            Collections
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                                            <svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                                            </svg>
                                            Filehandling
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                                            <svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                                            </svg>
                                            Datum und Zeit
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                                            <svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                                            </svg>
                                            Lambada
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                                            <svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                                            </svg>
                                            Swing
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="text-xs/6 font-semibold text-gray-400">Your teams</div>
                                <ul role="list" class="-mx-2 mt-2 space-y-1">
                                    <li>
                                        <!-- Current: "bg-gray-50 text-indigo-600", Default: "text-gray-700 hover:text-indigo-600 hover:bg-gray-50" -->
                                        <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                                            <span class="flex size-6 shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white text-[0.625rem] font-medium text-gray-400 group-hover:border-indigo-600 group-hover:text-indigo-600">H</span>
                                            <span class="truncate">Übungen</span>
                                        </a>
                                    </li>
{{--                                    <li>--}}
{{--                                        <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">--}}
{{--                                            <span class="flex size-6 shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white text-[0.625rem] font-medium text-gray-400 group-hover:border-indigo-600 group-hover:text-indigo-600">T</span>--}}
{{--                                            <span class="truncate">Tailwind Labs</span>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">--}}
{{--                                            <span class="flex size-6 shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white text-[0.625rem] font-medium text-gray-400 group-hover:border-indigo-600 group-hover:text-indigo-600">W</span>--}}
{{--                                            <span class="truncate">Workcation</span>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
                                </ul>
                            </li>
                            <li class="mt-auto">
                                <a href="{{ url('/') }}" class="group -mx-2 flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                                    <svg class="size-6 shrink-0 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>
                                    Home
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Static sidebar for desktop -->
    <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="flex grow flex-col gap-y-5 overflow-y-auto border-r border-gray-200 bg-white px-6 pb-4">
            <div class="flex h-16 shrink-0 items-center">
{{--                <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">--}}
                <a href="{{url('/')}}"> <span class="font-bold text-indigo-700"> MaxaBit</span> </a>
            </div>
            <nav class="flex flex-1 flex-col">
                <ul role="list" class="flex flex-1 flex-col gap-y-7">
                    <li>
                        <ul role="list" class="-mx-2 space-y-1">
                            <li>
                                <!-- Current: "bg-gray-50 text-indigo-600", Default: "text-gray-700 hover:text-indigo-600 hover:bg-gray-50" -->
                                <a href="ueber-kurs" class="group flex gap-x-3 rounded-md bg-gray-50 p-2 text-sm/6 font-semibold text-indigo-600">
{{--                                    <span class="flex size-6 shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white text-[0.625rem] font-medium text-gray-400 group-hover:border-indigo-600 group-hover:text-indigo-600">E</span>--}}
                                    <svg fill="#0000ff" width="20px" height="20px" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" id="arrow">
                                        <path d="M8.29289 2.29289C8.68342 1.90237 9.31658 1.90237 9.70711 2.29289L14.2071 6.79289C14.5976 7.18342 14.5976 7.81658 14.2071 8.20711L9.70711 12.7071C9.31658 13.0976 8.68342 13.0976 8.29289 12.7071C7.90237 12.3166 7.90237 11.6834 8.29289 11.2929L11 8.5H1.5C0.947715 8.5 0.5 8.05228 0.5 7.5C0.5 6.94772 0.947715 6.5 1.5 6.5H11L8.29289 3.70711C7.90237 3.31658 7.90237 2.68342 8.29289 2.29289Z"/>
                                    </svg>
                                    Über den Kurs
                                </a>
                            </li>
                            <li>
                                <!-- Current: "bg-gray-50 text-indigo-600", Default: "text-gray-700 hover:text-indigo-600 hover:bg-gray-50" -->
                                <a href="einfuehrung"     class="group flex gap-x-3 rounded-md bg-gray-50 p-2 text-sm/6 font-semibold text-indigo-600">
{{--                                    <span class="flex size-6 shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white text-[0.625rem] font-medium text-gray-400 group-hover:border-indigo-600 group-hover:text-indigo-600">E</span>--}}
                                    <svg width="20px" height="20px" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                        <clipPath id="a">
                                            <circle cx="50" cy="50" r="50"/>
                                        </clipPath>
                                        <g fill-rule="evenodd" clip-rule="evenodd" clip-path="url(#a)">
                                            <circle fill="#24AE5F" cx="50" cy="50" r="50"/>
                                            <path fill="#E57D25" d="M34 50.5a2.5 2.5 0 0 0 2.5 2.5h66a2.5 2.5 0 1 0 0-5h-66a2.5 2.5 0 0 0-2.5 2.5z"/>
                                            <path fill="#FBF063" d="M23 31l16 17h44L67 31H23z"/>
                                            <path fill="#F0C419" d="M67 70l16-17H39L23 70h44z"/>
                                        </g>
                                    </svg>
                                    Einführung
                                </a>
                            </li>
                            <li>
                                <a href="kontroll-struktur" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-indigo-600 hover:bg-gray-50 hover:text-indigo-400">
{{--                                    <span class="flex size-6 shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white text-[0.625rem] font-medium text-gray-400 group-hover:border-indigo-600 group-hover:text-indigo-600">E</span>--}}
                                    <svg width="20px" height="20px" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                        <clipPath id="a">
                                            <circle cx="50" cy="50" r="50"/>
                                        </clipPath>
                                        <g fill-rule="evenodd" clip-rule="evenodd" clip-path="url(#a)">
                                            <circle fill="#24AE5F" cx="50" cy="50" r="50"/>
                                            <path fill="#E57D25" d="M34 50.5a2.5 2.5 0 0 0 2.5 2.5h66a2.5 2.5 0 1 0 0-5h-66a2.5 2.5 0 0 0-2.5 2.5z"/>
                                            <path fill="#FBF063" d="M23 31l16 17h44L67 31H23z"/>
                                            <path fill="#F0C419" d="M67 70l16-17H39L23 70h44z"/>
                                        </g>
                                    </svg>
                                    Kontroll-Strukturen
                                </a>
                            </li>
                            <li>
                                <a href="arrays" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
{{--                                    <span class="flex size-6 shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white text-[0.625rem] font-medium text-gray-400 group-hover:border-indigo-600 group-hover:text-indigo-600">A</span>--}}
                                    <svg width="20px" height="20px" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                        <clipPath id="a">
                                            <circle cx="50" cy="50" r="50"/>
                                        </clipPath>
                                        <g fill-rule="evenodd" clip-rule="evenodd" clip-path="url(#a)">
                                            <circle fill="#24AE5F" cx="50" cy="50" r="50"/>
                                            <path fill="#E57D25" d="M34 50.5a2.5 2.5 0 0 0 2.5 2.5h66a2.5 2.5 0 1 0 0-5h-66a2.5 2.5 0 0 0-2.5 2.5z"/>
                                            <path fill="#FBF063" d="M23 31l16 17h44L67 31H23z"/>
                                            <path fill="#F0C419" d="M67 70l16-17H39L23 70h44z"/>
                                        </g>
                                    </svg>
                                    Arrays

                                </a>
                            </li>
                            <li>
                                <a href="klasse" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                                    <svg width="20px" height="20px" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                        <clipPath id="a">
                                            <circle cx="50" cy="50" r="50"/>
                                        </clipPath>
                                        <g fill-rule="evenodd" clip-rule="evenodd" clip-path="url(#a)">
                                            <circle fill="#24AE5F" cx="50" cy="50" r="50"/>
                                            <path fill="#E57D25" d="M34 50.5a2.5 2.5 0 0 0 2.5 2.5h66a2.5 2.5 0 1 0 0-5h-66a2.5 2.5 0 0 0-2.5 2.5z"/>
                                            <path fill="#FBF063" d="M23 31l16 17h44L67 31H23z"/>
                                            <path fill="#F0C419" d="M67 70l16-17H39L23 70h44z"/>
                                        </g>
                                    </svg>
                                    Klasse
                                </a>
                            </li>
                            <li>
                                <a href="konstruktoren" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                                    <svg width="20px" height="20px" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                        <clipPath id="a">
                                            <circle cx="50" cy="50" r="50"/>
                                        </clipPath>
                                        <g fill-rule="evenodd" clip-rule="evenodd" clip-path="url(#a)">
                                            <circle fill="#24AE5F" cx="50" cy="50" r="50"/>
                                            <path fill="#E57D25" d="M34 50.5a2.5 2.5 0 0 0 2.5 2.5h66a2.5 2.5 0 1 0 0-5h-66a2.5 2.5 0 0 0-2.5 2.5z"/>
                                            <path fill="#FBF063" d="M23 31l16 17h44L67 31H23z"/>
                                            <path fill="#F0C419" d="M67 70l16-17H39L23 70h44z"/>
                                        </g>
                                    </svg>
                                    Konstruktoren
                                </a>
                            </li>
                            <li>
                                <a href="vererbung" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                                    <svg width="20px" height="20px" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                        <clipPath id="a">
                                            <circle cx="50" cy="50" r="50"/>
                                        </clipPath>
                                        <g fill-rule="evenodd" clip-rule="evenodd" clip-path="url(#a)">
                                            <circle fill="#24AE5F" cx="50" cy="50" r="50"/>
                                            <path fill="#E57D25" d="M34 50.5a2.5 2.5 0 0 0 2.5 2.5h66a2.5 2.5 0 1 0 0-5h-66a2.5 2.5 0 0 0-2.5 2.5z"/>
                                            <path fill="#FBF063" d="M23 31l16 17h44L67 31H23z"/>
                                            <path fill="#F0C419" d="M67 70l16-17H39L23 70h44z"/>
                                        </g>
                                    </svg>
                                    Vererbung
                                </a>
                            <li>
                                <a href="interfaces" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                                    <svg width="20px" height="20px" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                        <clipPath id="a">
                                            <circle cx="50" cy="50" r="50"/>
                                        </clipPath>
                                        <g fill-rule="evenodd" clip-rule="evenodd" clip-path="url(#a)">
                                            <circle fill="#24AE5F" cx="50" cy="50" r="50"/>
                                            <path fill="#E57D25" d="M34 50.5a2.5 2.5 0 0 0 2.5 2.5h66a2.5 2.5 0 1 0 0-5h-66a2.5 2.5 0 0 0-2.5 2.5z"/>
                                            <path fill="#FBF063" d="M23 31l16 17h44L67 31H23z"/>
                                            <path fill="#F0C419" d="M67 70l16-17H39L23 70h44z"/>
                                        </g>
                                    </svg>
                                    Interfaces

                                </a>
                            </li>
                            <li>
                                <a href="exceptions" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                                    <svg width="20px" height="20px" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                        <clipPath id="a">
                                            <circle cx="50" cy="50" r="50"/>
                                        </clipPath>
                                        <g fill-rule="evenodd" clip-rule="evenodd" clip-path="url(#a)">
                                            <circle fill="#24AE5F" cx="50" cy="50" r="50"/>
                                            <path fill="#E57D25" d="M34 50.5a2.5 2.5 0 0 0 2.5 2.5h66a2.5 2.5 0 1 0 0-5h-66a2.5 2.5 0 0 0-2.5 2.5z"/>
                                            <path fill="#FBF063" d="M23 31l16 17h44L67 31H23z"/>
                                            <path fill="#F0C419" d="M67 70l16-17H39L23 70h44z"/>
                                        </g>
                                    </svg>
                                    Exceptions

                                </a>
                            </li>
                            <li>
                                <a href="string" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                                    <svg width="20px" height="20px" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                        <clipPath id="a">
                                            <circle cx="50" cy="50" r="50"/>
                                        </clipPath>
                                        <g fill-rule="evenodd" clip-rule="evenodd" clip-path="url(#a)">
                                            <circle fill="#24AE5F" cx="50" cy="50" r="50"/>
                                            <path fill="#E57D25" d="M34 50.5a2.5 2.5 0 0 0 2.5 2.5h66a2.5 2.5 0 1 0 0-5h-66a2.5 2.5 0 0 0-2.5 2.5z"/>
                                            <path fill="#FBF063" d="M23 31l16 17h44L67 31H23z"/>
                                            <path fill="#F0C419" d="M67 70l16-17H39L23 70h44z"/>
                                        </g>
                                    </svg>                                    Strings-Stringbuilder

                                </a>
                            </li>
                            <li>
                                <a href="wrapper-klassen" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                                    <svg width="20px" height="20px" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                        <clipPath id="a">
                                            <circle cx="50" cy="50" r="50"/>
                                        </clipPath>
                                        <g fill-rule="evenodd" clip-rule="evenodd" clip-path="url(#a)">
                                            <circle fill="#24AE5F" cx="50" cy="50" r="50"/>
                                            <path fill="#E57D25" d="M34 50.5a2.5 2.5 0 0 0 2.5 2.5h66a2.5 2.5 0 1 0 0-5h-66a2.5 2.5 0 0 0-2.5 2.5z"/>
                                            <path fill="#FBF063" d="M23 31l16 17h44L67 31H23z"/>
                                            <path fill="#F0C419" d="M67 70l16-17H39L23 70h44z"/>
                                        </g>
                                    </svg>
                                    Wrapper-Klassen

                                </a>
                            </li>
                            <li>
                                <a href="enums" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                                    <svg width="20px" height="20px" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                        <clipPath id="a">
                                            <circle cx="50" cy="50" r="50"/>
                                        </clipPath>
                                        <g fill-rule="evenodd" clip-rule="evenodd" clip-path="url(#a)">
                                            <circle fill="#24AE5F" cx="50" cy="50" r="50"/>
                                            <path fill="#E57D25" d="M34 50.5a2.5 2.5 0 0 0 2.5 2.5h66a2.5 2.5 0 1 0 0-5h-66a2.5 2.5 0 0 0-2.5 2.5z"/>
                                            <path fill="#FBF063" d="M23 31l16 17h44L67 31H23z"/>
                                            <path fill="#F0C419" d="M67 70l16-17H39L23 70h44z"/>
                                        </g>
                                    </svg>
                                    Enums

                                </a>
                            </li>
                            <li>
                                <a href="ollections" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                                    <svg width="20px" height="20px" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                        <clipPath id="a">
                                            <circle cx="50" cy="50" r="50"/>
                                        </clipPath>
                                        <g fill-rule="evenodd" clip-rule="evenodd" clip-path="url(#a)">
                                            <circle fill="#24AE5F" cx="50" cy="50" r="50"/>
                                            <path fill="#E57D25" d="M34 50.5a2.5 2.5 0 0 0 2.5 2.5h66a2.5 2.5 0 1 0 0-5h-66a2.5 2.5 0 0 0-2.5 2.5z"/>
                                            <path fill="#FBF063" d="M23 31l16 17h44L67 31H23z"/>
                                            <path fill="#F0C419" d="M67 70l16-17H39L23 70h44z"/>
                                        </g>
                                    </svg>
                                    Collections

                                </a>
                            </li>
                            <li>
                                <a href="filehandling" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                                    <svg width="20px" height="20px" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                        <clipPath id="a">
                                            <circle cx="50" cy="50" r="50"/>
                                        </clipPath>
                                        <g fill-rule="evenodd" clip-rule="evenodd" clip-path="url(#a)">
                                            <circle fill="#24AE5F" cx="50" cy="50" r="50"/>
                                            <path fill="#E57D25" d="M34 50.5a2.5 2.5 0 0 0 2.5 2.5h66a2.5 2.5 0 1 0 0-5h-66a2.5 2.5 0 0 0-2.5 2.5z"/>
                                            <path fill="#FBF063" d="M23 31l16 17h44L67 31H23z"/>
                                            <path fill="#F0C419" d="M67 70l16-17H39L23 70h44z"/>
                                        </g>
                                    </svg>
                                    Filehandling
                                </a>
                            </li>
                            <li>
                                <a href="datum-zeit" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                                    <svg width="20px" height="20px" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                        <clipPath id="a">
                                            <circle cx="50" cy="50" r="50"/>
                                        </clipPath>
                                        <g fill-rule="evenodd" clip-rule="evenodd" clip-path="url(#a)">
                                            <circle fill="#24AE5F" cx="50" cy="50" r="50"/>
                                            <path fill="#E57D25" d="M34 50.5a2.5 2.5 0 0 0 2.5 2.5h66a2.5 2.5 0 1 0 0-5h-66a2.5 2.5 0 0 0-2.5 2.5z"/>
                                            <path fill="#FBF063" d="M23 31l16 17h44L67 31H23z"/>
                                            <path fill="#F0C419" d="M67 70l16-17H39L23 70h44z"/>
                                        </g>
                                    </svg>
                                    Datum und Zeit
                                </a>
                            </li>
                            <li>
                                <a href="lambda-ausdrücke" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                                    <svg width="20px" height="20px" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                        <clipPath id="a">
                                            <circle cx="50" cy="50" r="50"/>
                                        </clipPath>
                                        <g fill-rule="evenodd" clip-rule="evenodd" clip-path="url(#a)">
                                            <circle fill="#24AE5F" cx="50" cy="50" r="50"/>
                                            <path fill="#E57D25" d="M34 50.5a2.5 2.5 0 0 0 2.5 2.5h66a2.5 2.5 0 1 0 0-5h-66a2.5 2.5 0 0 0-2.5 2.5z"/>
                                            <path fill="#FBF063" d="M23 31l16 17h44L67 31H23z"/>
                                            <path fill="#F0C419" d="M67 70l16-17H39L23 70h44z"/>
                                        </g>
                                    </svg>
                                    Lambda-Ausdrücke
                                </a>
                            </li>
                            <li>
                                <a href="swing" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                                    <svg width="20px" height="20px" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                        <clipPath id="a">
                                            <circle cx="50" cy="50" r="50"/>
                                        </clipPath>
                                        <g fill-rule="evenodd" clip-rule="evenodd" clip-path="url(#a)">
                                            <circle fill="#24AE5F" cx="50" cy="50" r="50"/>
                                            <path fill="#E57D25" d="M34 50.5a2.5 2.5 0 0 0 2.5 2.5h66a2.5 2.5 0 1 0 0-5h-66a2.5 2.5 0 0 0-2.5 2.5z"/>
                                            <path fill="#FBF063" d="M23 31l16 17h44L67 31H23z"/>
                                            <path fill="#F0C419" d="M67 70l16-17H39L23 70h44z"/>
                                        </g>
                                    </svg>
                                    Swing
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="text-xs/6 font-semibold text-gray-400">Übungen</div>
                        <ul role="list" class="-mx-2 mt-2 space-y-1">
                            <li>
                                <!-- Current: "bg-gray-50 text-indigo-600", Default: "text-gray-700 hover:text-indigo-600 hover:bg-gray-50" -->
                                <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                                    <span class="flex size-6 shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white text-[0.625rem] font-medium text-gray-400 group-hover:border-indigo-600 group-hover:text-indigo-600">Ü</span>
                                    <span class="truncate">Übungen</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="mt-auto">
                        <a href="#" class="group -mx-2 flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                            <svg class="size-6 shrink-0 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>
                            Home
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="lg:pl-72">
        <div class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 border-b border-gray-200 bg-white px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8">
{{--            <button type="button" class="-m-2.5 p-2.5 text-gray-700 lg:hidden">--}}
{{--                <span class="sr-only">Open sidebar</span>--}}
{{--                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />--}}
{{--                </svg>--}}
{{--            </button>--}}

            <!-- Separator -->
            <div class="h-6 w-px bg-gray-200 lg:hidden" aria-hidden="true"></div>

            <div class="flex flex-1 gap-x-4 self-stretch lg:gap-x-6">
{{--                <form class="grid flex-1 grid-cols-1" action="#" method="GET">--}}
{{--                    <input type="search" name="search" aria-label="Search" class="col-start-1 row-start-1 block size-full bg-white pl-8 text-base text-gray-900 outline-none placeholder:text-gray-400 sm:text-sm/6" placeholder="Search">--}}
{{--                    <svg class="pointer-events-none col-start-1 row-start-1 size-5 self-center text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">--}}
{{--                        <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11ZM2 9a7 7 0 1 1 12.452 4.391l3.328 3.329a.75.75 0 1 1-1.06 1.06l-3.329-3.328A7 7 0 0 1 2 9Z" clip-rule="evenodd" />--}}
{{--                    </svg>--}}
{{--                </form>--}}
                <div class="flex items-center gap-x-4 lg:gap-x-6">
{{--                    <button type="button" class="-m-2.5 p-2.5 text-gray-400 hover:text-gray-500">--}}
{{--                        <span class="sr-only">View notifications</span>--}}
{{--                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />--}}
{{--                        </svg>--}}
{{--                    </button>--}}

                    <!-- Separator -->
                    <div class="hidden lg:block lg:h-6 lg:w-px lg:bg-gray-200" aria-hidden="true"></div>

                    <!-- Profile dropdown -->
                    <div class="relative">
                        <button type="button" class="-m-1.5 flex items-center p-1.5" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <img class="size-8 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            <span class="hidden lg:flex lg:items-center"><span class="ml-4 text-sm/6 font-semibold text-gray-900" aria-hidden="true">Topics</span>
                        <svg class="ml-2 size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                         <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                        </svg>
                     </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    <div class="lg:pl-0">
        <div class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 border-b border-gray-200 bg-white px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8">
{{--            sdsdfsdfsdf--}}
            {{--            <button type="button" class="-m-2.5 p-2.5 text-gray-700 lg:hidden">--}}
{{--                <span class="sr-only">Open sidebar</span>--}}
{{--                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />--}}
{{--                </svg>--}}
{{--            </button>--}}

{{--            <!-- Separator -->--}}
{{--            <div class="h-6 w-px bg-gray-200 lg:hidden" aria-hidden="true"></div>--}}

{{--            <div class="flex flex-1 gap-x-4 self-stretch lg:gap-x-6">--}}
{{--                <form class="grid flex-1 grid-cols-1" action="#" method="GET">--}}
{{--                    <input type="search" name="search" aria-label="Search" class="col-start-1 row-start-1 block size-full bg-white pl-8 text-base text-gray-900 outline-none placeholder:text-gray-400 sm:text-sm/6" placeholder="Search">--}}
{{--                    <svg class="pointer-events-none col-start-1 row-start-1 size-5 self-center text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">--}}
{{--                        <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11ZM2 9a7 7 0 1 1 12.452 4.391l3.328 3.329a.75.75 0 1 1-1.06 1.06l-3.329-3.328A7 7 0 0 1 2 9Z" clip-rule="evenodd" />--}}
{{--                    </svg>--}}
{{--                </form>--}}
{{--                <div class="flex items-center gap-x-4 lg:gap-x-6">--}}
{{--                    <button type="button" class="-m-2.5 p-2.5 text-gray-400 hover:text-gray-500">--}}
{{--                        <span class="sr-only">View notifications</span>--}}
{{--                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />--}}
{{--                        </svg>--}}
{{--                    </button>--}}

{{--                    <!-- Separator -->--}}
{{--                    <div class="hidden lg:block lg:h-6 lg:w-px lg:bg-gray-200" aria-hidden="true"></div>--}}

{{--                    <!-- Profile dropdown -->--}}
{{--                    <div class="relative">--}}
{{--                        <button type="button" class="-m-1.5 flex items-center p-1.5" id="user-menu-button" aria-expanded="false" aria-haspopup="true">--}}
{{--                            <span class="sr-only">Open user menu</span>--}}
{{--                            <img class="size-8 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">--}}
{{--                            <span class="hidden lg:flex lg:items-center">--}}
{{--                <span class="ml-4 text-sm/6 font-semibold text-gray-900" aria-hidden="true">Tom Cook</span>--}}
{{--                <svg class="ml-2 size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">--}}
{{--                  <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />--}}
{{--                </svg>--}}
{{--              </span>--}}
{{--                        </button>--}}

{{--                        <!----}}
{{--                          Dropdown menu, show/hide based on menu state.--}}

{{--                          Entering: "transition ease-out duration-100"--}}
{{--                            From: "transform opacity-0 scale-95"--}}
{{--                            To: "transform opacity-100 scale-100"--}}
{{--                          Leaving: "transition ease-in duration-75"--}}
{{--                            From: "transform opacity-100 scale-100"--}}
{{--                            To: "transform opacity-0 scale-95"--}}
{{--                        -->--}}
{{--                        <div class="absolute right-0 z-10 mt-2.5 w-32 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">--}}
{{--                            <!-- Active: "bg-gray-50 outline-none", Not Active: "" -->--}}
{{--                            <a href="#" class="block px-3 py-1 text-sm/6 text-gray-900" role="menuitem" tabindex="-1" id="user-menu-item-0">Your profile</a>--}}
{{--                            <a href="#" class="block px-3 py-1 text-sm/6 text-gray-900" role="menuitem" tabindex="-1" id="user-menu-item-1">Sign out</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <main class="py-10">--}}
{{--            <div class="px-4 sm:px-6 lg:px-8">--}}
{{--                <!-- Your content -->--}}
{{--            </div>--}}
{{--        </main>--}}
    </div>
</div>

        <div class="mx-6 my-6">
            @foreach($data as $item)
                {!! $item->content !!}
            @endforeach
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