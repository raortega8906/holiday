<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/admin/calendar')}}" class="brand-link">
        <img src="/adminlte/img/logo_sist.png" alt="AdminLTE Logo" class="brand-image elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Sistema Vacaciones</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/adminlte/img/avatar04.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{url('/')}}" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{url('/admin/user')}}" class="nav-link brand-link">
                        <i class="nav-icon fas fa-user ml-2 mb-3"></i>
                        <p>
                            Empleados
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/admin/calendar')}}" class="nav-link">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>
                            Calendario
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-plane-departure"></i>
                        <p>
                            Vacaciones
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/admin')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Vacaciones | Historial</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/holiday')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Vacaciones | Solicitud</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
