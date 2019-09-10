@extends('skeleton::empty')

@push('styles')
    <link rel="stylesheet" href="{{ asset('skeleton/css/public.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('skeleton/js/public.js') }}"></script>
@endpush

@section('page-content')
    <div class="flex-container">
        <div class="flex-item col-70 bg"></div>
        <div class="flex-item col-30">
            <div class="container">
                <p class="brand">{{ config('app.name', 'Skeleton') }}</p>
                <p class="description">@yield('page-description')</p>

                @yield('content')
            </div>
        </div>
    </div>
@endsection