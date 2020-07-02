<a href="{{ route($route) }}">
    <div class="bg-white mb-2 shadow-lg border-2 border-transparent hover:border-blue-700">
        <div class="px-4 py-3">
            <h3 class="text-xl underline hover:no-underline">{{ $title }}</h3>
            <p class="my-1">{{ $section }}</p>
            <ul class="ml-3 text-gray-800">
                <li class="mb-1">
                    <svg class="inline text-blue-700 w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M20 10a10 10 0 11-20 0 10 10 0 0120 0zm-2 0a8 8 0 10-16 0 8 8 0 0016 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                    </svg>
                    <span class="ml-1">{{ $bullet_1 }}</span>
                </li>
                @if(isset($bullet_2))
                <li class="mb-1">
                    <svg class="inline text-blue-700 w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M20 10a10 10 0 11-20 0 10 10 0 0120 0zm-2 0a8 8 0 10-16 0 8 8 0 0016 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                    </svg>
                    <span class="ml-1">{{ $bullet_2 }}</span>
                </li>
                @endif
            </ul>
        </div>
    </div>
</a>

