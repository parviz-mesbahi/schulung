<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impressum – Rechtliche Informationen zu Maxabit</title>
    <meta name="description" content="Finde alle relevanten rechtlichen Hinweise und Informationen zu unserem Unternehmen.">
    <meta name="robots" content="noindex, follow">
    <link rel="icon" href="favicon.svg" type="image/svg+xml">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
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
<div class="ml-10 mt-40">
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
            <p class="text-sm/6 text-gray-400 text-center">Copyright &copy; 2024 MaxaBit IT-Solutions, Inc. All rights reserved. <br> Kurse in: Köln - Bonn - Frankfurt</p>
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
