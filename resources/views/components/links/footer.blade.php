@props(['route'])

<a href="{{ route($route) }}" class="hover:underline {{ request()->routeIs($route) ? 'underline' : '' }}">
    {{ $slot }}
</a>
