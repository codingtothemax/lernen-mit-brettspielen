<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Lernen mit Brettspielen</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

    @yield('meta')
</head>
<body class="bg-gray-200">
    <div>
        <div class="bg-white">
            <div class="container mx-auto h-24 flex justify-between">
                <div class="ml-2 md:ml-0 text-xl sm:text-2xl md:text-4xl flex items-center">
                    <a href="{{ route('home') }}">Lernen mit Brettspielen</a>
                </div>
                <div class="flex items-end">
                    <img class="h-16 md:h-20" src="{{ asset('img/header.jpg') }}" alt="Header">
                </div>
            </div>
        </div>
        <div class="bg-blue-700">
            <nav class="hidden md:block container mx-auto">
                <div class="font-semibold flex text-white">
                    <x-links.nav route="home">Home</x-links.nav>
                    <x-links.nav route="creativity">Kreative Spiele</x-links.nav>
                    <x-links.nav route="language">Rund um Sprache</x-links.nav>
                    <x-links.nav route="numbers">Zahlen und Rechnen</x-links.nav>
                    <x-links.nav route="places">Geografie</x-links.nav>
                </div>
            </nav>

            <div class="md:hidden" x-data="{ open: false }">
                <div class="font-semibold text-white">
                    <div class="flex justify-end py-2 px-4 mr-2 cursor-pointer">
                        <svg x-show="!open" class="fill-current w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" @click="open = true">
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                        </svg>
                        <svg x-show="open" class="fill-current w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" @click="open = false">
                            <path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/>
                        </svg>
                    </div>
                    <div x-show.transition="open" @click.away="open = false">
                        <x-links.mobile-nav route="home">Home</x-links.mobile-nav>
                        <x-links.mobile-nav route="creativity">Kreative Spiele</x-links.mobile-nav>
                        <x-links.mobile-nav route="language">Rund um Sprache</x-links.mobile-nav>
                        <x-links.mobile-nav route="numbers">Zahlen und Rechnen</x-links.mobile-nav>
                        <x-links.mobile-nav route="places">Geografie</x-links.mobile-nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto">
            <div class="my-10">
                <div class="flex">
                    <div class="flex-1 lg:w-2/3 bg-white lg:mr-6 shadow-lg">
                        <div class="m-4 text-justify">
                            @yield('content')
                        </div>
                    </div>
                    <div class="hidden lg:block lg:w-1/3 lg:ml-6">
                        @yield('sidebar')
                    </div>
                </div>
            </div>
        </div>

        <footer class="bg-blue-800">
            <div class="container mx-auto flex text-white">
                <div class="w-1/2 md:w-1/3">
                    <ul class="text-sm ml-6 my-6 space-y-1">
                        <li><x-links.footer route="home">Home</x-links.footer></li>
                        <li><x-links.footer route="creativity">Kreative Spiele</x-links.footer></li>
                        <li><x-links.footer route="language">Rund um Sprache</x-links.footer></li>
                        <li><x-links.footer route="numbers">Zahlen und Rechnen</x-links.footer></li>
                        <li><x-links.footer route="places">Geografie</x-links.footer></li>
                    </ul>
                </div>
                <div class="md:w-1/3">&nbsp;</div>
                <div class="w-1/2 md:w-1/3">
                    <ul class="text-sm my-6 space-y-1 ">
                        <li><x-links.footer route="imprint">Impressum</x-links.footer></li>
                        <li><x-links.footer route="legal">Datenschutz</x-links.footer></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>

</body>
</html>
