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

                {{-- Masyarakat --}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Masyarakat
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        {{-- Sistem Antrian PTSP --}}
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-desktop"></i>
                                <p>
                                    Sistem Antrian PTSP
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('ptsp/antrian') }}" class="nav-link">
                                        <p>Antrian PTSP</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('ptsp/meja-inzage') }}" class="nav-link">
                                        <p>Meja Inzage</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('ptsp/meja-umum') }}" class="nav-link">
                                        <p>Meja Umum</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('ptsp/meja-perdata') }}" class="nav-link">
                                        <p>Meja Perdata</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('ptsp/meja-pidana') }}" class="nav-link">
                                        <p>Meja Pidana</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('ptsp/meja-pengaduan-umum-atau-hukum') }}" class="nav-link">
                                        <p>Meja Pengaduan Umum/Hukum</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('ptsp/meja-pojok-e-court') }}" class="nav-link">
                                        <p>Meja Pojok E-Court</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        {{-- Sistem Antrian Sidang --}}
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-gavel"></i>
                                <p>
                                    Sistem Antrian Sidang
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/sidang-pidana" class="nav-link">
                                        <p>Sidang Pidana</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/meja-perdata" class="nav-link">
                                        <p>Sidang Perdata</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/meja-hukum" class="nav-link">
                                        <p>Sidang Hukum</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </li>

                {{-- Daftar Antrian PTSP Khusus Pegawai --}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>
                            Antrian PTSP Pegawai
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('ptsp/data-antrian/meja-inzage') }}" class="nav-link">
                                <p>Meja Inzage</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('ptsp/data-antrian/meja-umum') }}" class="nav-link">
                                <p>Meja Umum</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('ptsp/data-antrian/meja-perdata') }}" class="nav-link">
                                <p>Meja Perdata</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('ptsp/data-antrian/meja-pidana') }}" class="nav-link">
                                <p>Meja Pidana</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('ptsp/data-antrian/meja-pengaduan-umum-atau-hukum') }}" class="nav-link">
                                <p>Meja Pengaduan Umum/Hukum</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('ptsp/data-antrian/meja-pojok-e-court') }}" class="nav-link">
                                <p>Meja Pojok E-Court</p>
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
