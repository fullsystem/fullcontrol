<nav class="main-header navbar navbar-expand navbar-light bg-transparent border-bottom-0">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>

        @yield('top-links')
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-th"></i>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <div class="navbar-modules">
                    @for($i=1; $i<=10; $i++)
                        <div class="navbar-module">
                            <a href="#">
                                <i class="fas fa-tachometer-alt"></i> Dashboard
                            </a>
                        </div>
                    @endfor
                </div>
            </div>
        </li>
    </ul>
</nav>