<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('page-title') - {{ config('app.name', 'Skeleton') }}</title>
    <link rel="stylesheet" href="{{ asset('skeleton/css/skeleton.css') }}">
    @stack('styles')
</head>

<body class="@yield('page-name')">
    @yield('page-content')
</body>

<script src="{{ asset('skeleton/js/skeleton.js') }}"></script>
@stack('scripts')
</html>
