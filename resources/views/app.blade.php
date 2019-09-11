@extends('skeleton::empty')

@section('body-class', 'hold-transition sidebar-mini')

@section('page-content')
    <aside>
        <section class="brand">{{ config('app.name', 'Skeleton') }}</section>

        <nav>
            <ul>
                <li><a href="#">Menu Item</a></li>
                <li><a href="#">Menu Item</a></li>
            </ul>
        </nav>

        <section class="bottom">
            <a href="/logout">Logout</a>
        </section>
    </aside>

    <main>MAIN</main>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('skeleton/css/app.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('skeleton/js/app.js') }}"></script>
@endpush