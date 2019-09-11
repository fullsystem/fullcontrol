@extends('skeleton::empty')

@push('styles')

@endpush

@push('scripts')

@endpush

@section('page-content')
    <aside class="guest" style="background-image: url('{{ config('skeleton.public.assets.image') }}')">
        @if (config('skeleton.public.credits.url', null))
            <div class="credits">
                Photo Credits: <a href="{{ config('skeleton.public.credits.url') }}" target="_blank">{{ config('skeleton.public.credits.text') }}</a>
            </div>
        @endif
    </aside>

    <main class="guest">
        <section class="header">
            <h1>{{ config('app.name', 'Skeleton') }}</h1>
        </section>

        <section class="content">
            <h6>@yield('page-description')</h6>
            @yield('content')
        </section>

        <section class="footer">@yield('footer')</section>
    </main>
@endsection