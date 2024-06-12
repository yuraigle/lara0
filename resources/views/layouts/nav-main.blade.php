<nav class="main flex">
    <ul class="flex grow">
        <li class="brand"><a href="/">@include('layouts.logo')</a></li>
        <li{!! request()->routeIs('about') ? ' class="active"' : '' !!}>
            <a href="{{ route('about') }}">About</a>
        </li>
        <li{!! request()->routeIs('contact') ? ' class="active"' : '' !!}>
            <a href="{{ route('contact') }}">Contact</a>
        </li>
    </ul>

    <ul class="flex">
        @guest
            <li><a href="{{ route('login') }}">Login</a></li>
        @endguest
        @auth
            <li><a href="{{ route('dashboard') }}">{{ Auth::user()->name }}</a></li>
        @endauth
    </ul>
</nav>
