<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
        <img src="{{ asset('img/logo-pntondano.png') }}" alt="Logo PN Tondano"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PN Tondano</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="text-sm nav-header">MENU</li>
                <li class="nav-item">
                    <a href="{{ url('admin/user') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Pengguna</p>
                    </a>
                </li>

                <li class="text-sm nav-header">PELAYANAN TERPADU SATU PINTU</li>

                <!-- Antrian -->
                <li class="nav-item">
                    <a href="{{ url('ptsp/antrian') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Antrian</p>
                    </a>
                </li>


                <!-- BUKU TAMU -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Buku Tamu
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="pl-4 nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('ptsp/meja-inzage') }}" class="nav-link">
                                <p>Meja Inzage</p>
                            </a>
                        </li>
                        <li class="nav-item"><a href="{{ url('ptsp/meja-umum') }}" class="nav-link">
                                <p>Meja Umum</p>
                            </a></li>
                        <li class="nav-item"><a href="{{ url('ptsp/meja-perdata') }}" class="nav-link">
                                <p>Meja Perdata</p>
                            </a></li>
                        <li class="nav-item"><a href="{{ url('ptsp/meja-pidana') }}" class="nav-link">
                                <p>Meja Pidana</p>
                            </a></li>
                        <li class="nav-item"><a href="{{ url('ptsp/meja-hukum') }}" class="nav-link">
                                <p>Meja Hukum</p>
                            </a></li>
                        <li class="nav-item"><a href="{{ url('ptsp/meja-pojok-e-court') }}" class="nav-link">
                                <p>Meja Pojok E-Court</p>
                            </a></li>
                    </ul>
                </li>

                <!-- PEMANGGILAN ANTRIAN -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-bullhorn"></i>
                        <p>
                            Pemanggilan Antrian
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="pl-4 nav nav-treeview">
                        <li class="nav-item"><a href="{{ url('ptsp/pegawai/meja-inzage') }}" class="nav-link">
                                <p>Meja Inzage</p>
                            </a></li>
                        <li class="nav-item"><a href="{{ url('ptsp/pegawai/meja-umum') }}" class="nav-link">
                                <p>Meja Umum</p>
                            </a></li>
                        <li class="nav-item"><a href="{{ url('ptsp/pegawai/meja-perdata') }}" class="nav-link">
                                <p>Meja Perdata</p>
                            </a></li>
                        <li class="nav-item"><a href="{{ url('ptsp/pegawai/meja-pidana') }}" class="nav-link">
                                <p>Meja Pidana</p>
                            </a></li>
                        <li class="nav-item"><a href="{{ url('ptsp/pegawai/meja-hukum') }}" class="nav-link">
                                <p>Meja Hukum</p>
                            </a></li>
                        <li class="nav-item"><a href="{{ url('ptsp/pegawai/meja-pojok-e-court') }}" class="nav-link">
                                <p>Meja Pojok E-Court</p>
                            </a></li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
