<div class="flex mx-8 my-10">
    <div class="w-1/3 md:w-1/4 mr-8">
        <img class="object-cover" src="{{ asset("img/{$img}") }}" alt="{{ $title }}">
    </div>
    <div class="w-2/3 md:w-3/4">
        <h3 class="text-2xl mb-3">{{ $title }}</h3>

        <div class="flex flex-col lg:flex-row mb-3 text-gray-800">

            <div class="flex-1 mb-1 lg:mb-0 lg:w-1/3">{{ $age }}</div>

            <div class="flex-1 mb-1 lg:mb-0 lg:w-1/3 flex items-center">
                <svg class="fill-current text-blue-700 w-4 h-4 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M10 20a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm-1-7.59V4h2v5.59l3.95 3.95-1.41 1.41L9 10.41z"/>
                </svg>
                <span class="ml-2">{{ $playing_time }}</span>
            </div>


            <div class="flex-1 lg:w-1/3 flex items-center">
                <svg class="fill-current text-blue-700 w-4 h-4 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M7 8a4 4 0 110-8 4 4 0 010 8zm0 1c2.15 0 4.2.4 6.1 1.09L12 16h-1.25L10 20H4l-.75-4H2L.9 10.09A17.93 17.93 0 017 9zm8.31.17c1.32.18 2.59.48 3.8.92L18 16h-1.25L16 20h-3.96l.37-2h1.25l1.65-8.83zM13 0a4 4 0 11-1.33 7.76 5.96 5.96 0 000-7.52C12.1.1 12.53 0 13 0z"/>
                </svg>
                <span class="ml-2">{{ $players }}</span>
            </div>
        </div>

        <div class="bg-blue-700 p-3 mb-2">
            <div class="text-left text-white">{{ $teaser }}</div>
        </div>

        <div class="flex justify-end">
            <a class="bg-orange-400 py-1 px-3 rounded-md hover:bg-orange-500 inline-flex items-center" href="{{ $url }}" target="_blank">
                <svg class="fill-current w-4 h-4 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M4 2h16l-3 9H4a1 1 0 100 2h13v2H4a3 3 0 010-6h.33L3 5 2 2H0V0h3a1 1 0 011 1v1zm1 18a2 2 0 110-4 2 2 0 010 4zm10 0a2 2 0 110-4 2 2 0 010 4z"/>
                </svg>
                <span class="ml-2">Kaufen</span>
            </a>
        </div>
    </div>
</div>
