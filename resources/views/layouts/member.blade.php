<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
@include("layouts.nav-main")
<div class="w-full flex mt-4">
    @include("layouts.nav-member")
    <main class="grow">
        {{ $slot }}
    </main>
</div>
</body>
</html>
