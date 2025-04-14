<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
        <img src="{{ asset('img/logo-pntondano.png') }}" alt="Logo PN Tondano" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">PN Tondano</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
                {{-- sistem antrian ptsp --}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <p>
                            Sistem Antrian PTSP
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/meja-inzage" class="nav-link">
                                <p>Meja Inzage</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/meja-umum" class="nav-link">
                                <p>Meja Umum</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/meja-perdata" class="nav-link">
                                <p>Meja Perdata</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/meja-pidana" class="nav-link">
                                <p>Meja Pidana</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/meja-pengaduan-umum" class="nav-link">
                                <p>Meja Pengaduan Umum/Hukum</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/meja-pojok-e-court" class="nav-link">
                                <p>Meja Pojok E-Court</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- sistem antrian sidang --}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
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
        </nav>
    </div>
</aside>
