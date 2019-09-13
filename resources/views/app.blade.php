@extends('skeleton::empty')

@section('body-class', 'hold-transition sidebar-mini')

@section('page-content')
    <aside class="app">
        <input type="checkbox" id="toggled" />

        <section class="brand">
            <h3>{{ config('app.name', 'Skeleton') }}</h3>
        </section>

        <nav>
            <ul>
                <li><a href="#">Menu Item</a></li>
                <li><a href="#">Menu Item</a></li>
            </ul>
        </nav>

        <section class="bottom">
            <a href="/logout">
                <i class="fas fa-power-off"></i>
            </a>
        </section>
    </aside>

    <main class="app">
        <label id="aside-toggle" for="toggled">&#9776;</label>
    </main>
@endsection
