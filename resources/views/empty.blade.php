<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('page-title') - {{ config('app.name', 'Skeleton') }}</title>
    @stack('styles')
</head>

<body class="@yield('body-class') @yield('page-name')">
    @yield('page-content')
</body>

@stack('scripts')

</html>
