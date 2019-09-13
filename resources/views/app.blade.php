@extends('skeleton::empty')

@section('body-class', 'hold-transition sidebar-mini')

@section('page-content')
    <input type="checkbox" id="aside-app-toggled"/>

    <aside class="app">
        <section class="profile">
            <img src="/skeleton/img/no-profile.jpg"/>
            <h6>{{ Auth::user()->name }}</h6>
        </section>

        <ul class="navigation">
            <li><a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="#"><i class="fas fa-book-open"></i> Posts</a></li>
            <li><a href="#"><i class="fas fa-signal"></i> Notifications</a></li>
            <li><a href="#"><i class="fas fa-comment-dollar"></i> Sales</a></li>
            <li><a href="#"><i class="fas fa-chart-bar"></i> Reports</a></li>
        </ul>

        <section class="bottom">
            <a href="/settings"><i class="fas fa-cog"></i> Settings</a>
            <a href="/logout"><i class="fas fa-power-off"></i> Logout</a>
        </section>
    </aside>

    <main class="app">
        <label id="aside-toggle" for="aside-app-toggled">&#9776;</label>
    </main>
@endsection
