@extends('skeleton::empty')

@push('styles')
    <link rel="stylesheet" href="{{ asset('skeleton/css/public.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('skeleton/js/public.js') }}"></script>
@endpush

@section('page-content')
    <section class="wrapper full-height">
        <div class="image"></div>
        <div class="page full-height">
            <header>{{ config('app.name', 'Skeleton') }}</header>

            <main>
                <cite>@yield('page-description')</cite>
                @yield('content')
            </main>

            <footer>@yield('footer')</footer>
        </div>
    </section>
@endsection