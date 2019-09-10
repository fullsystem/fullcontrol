<aside class="main-sidebar sidebar-light">
    <div class="sidebar">
        @include('skeleton::app.user')

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Simple Link</p>
                    </a>
                    <a class="nav-link" href="{{ route('logout') }}">
                        <i class="fas fa-th"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>