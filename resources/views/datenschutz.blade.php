<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Datenschutz</title>
    <meta name="description" content="XXXXX">
    <meta name="keywords" content="SEO, Suchmaschinenoptimierung, Anfänger, Tipps">
    <meta name="robots" content="index, follow">

    <meta property="og:title" content="XXXXX">
    <meta property="og:description" content="YYYYYY">
    <meta property="og:image" content="https://example.com/images/seo-tipps.png">
    <meta property="og:url" content="https://maxabit.de">

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
            <a href="#" class="text-sm/6 font-semibold text-white">Kurse</a>
            <a href="#" class="text-sm/6 font-semibold text-white">Entwicklung</a>
            <a href="#" class="text-sm/6 font-semibold text-white">Über uns</a>
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

</div>
</body>
</html>
