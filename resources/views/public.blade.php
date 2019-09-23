@extends('skeleton::empty')

@push('styles')

@endpush

@push('scripts')

@endpush

@section('page-content')
    <aside class="guest" style="background-image: url('{{ config('skeleton.public.assets.image') }}')">
        @if (config('skeleton.public.credits.url', null))
            <div class="credits">
                Photo: <a href="{{ config('skeleton.public.credits.url') }}" target="_blank">{{ config('skeleton.public.credits.text') }}</a>
            </div>
        @endif
    </aside>

    <main class="guest">
        <section class="brand">
            <div class="container">
                <h1>{{ config('app.name', 'Skeleton') }}</h1>
            </div>
        </section>

        <section class="content">
            <div class="container">
                <h6>@yield('page-description')</h6>
                @yield('content')
            </div>
        </section>

        <section class="footer">
            <div class="container">
                @yield('footer')
            </div>
        </section>
    </main>
@endsection
