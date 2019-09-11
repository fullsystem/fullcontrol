@extends('skeleton::empty')

@push('styles')
    <link rel="stylesheet" href="{{ asset('skeleton/css/public.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('skeleton/js/public.js') }}"></script>
@endpush

@section('page-content')
    <section class="wrapper full-height">
        <div class="image" style="background-image: url('{{ config('skeleton.assets.public.image') }}')"></div>
        <div class="page full-height">
            <header>{{ config('app.name', 'Skeleton') }}</header>

            <main>
                <h1>@yield('page-description')</h1>

                @yield('content')
            </main>

            <footer>@yield('footer')</footer>
        </div>
    </section>
@endsection