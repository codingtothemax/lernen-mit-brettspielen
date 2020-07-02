@props(['route'])

<a href="{{ route($route) }}" class="block py-2 px-4 hover:bg-gray-200 hover:text-blue-700 {{ request()->routeIs($route) ? 'bg-gray-200 text-blue-700' : '' }}">
    {{ $slot }}
</a>
