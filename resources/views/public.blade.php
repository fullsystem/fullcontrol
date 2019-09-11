@extends('skeleton::empty')

@push('styles')
    <link rel="stylesheet" href="{{ asset('skeleton/css/public.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('skeleton/js/public.js') }}"></script>
@endpush

@section('page-content')
    <section class="wrapper full-height">
        <div class="image" style="background-image: url('{{ config('skeleton.public.assets.image') }}')">
            @if (config('skeleton.public.credits.url', null))
                <section class="credits">
                    Photo Credits: <a href="{{ config('skeleton.public.credits.url') }}" target="_blank">{{ config('skeleton.public.credits.text') }}</a>
                </section>
            @endif
        </div>
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