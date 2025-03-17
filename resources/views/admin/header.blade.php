<!-- Navbar -->
<nav class="main-header navbar navbar-expand bg-success navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="text-white fas fa-bars"></i></a>
        </li>
    </ul>
    
    <div class="container-fluid d-flex justify-content-center">
        <ul class="navbar-nav">
            <li id="clock" class="fs-3 fw-bold text-white"></li>
        </ul>
    </div>

    <!-- Right navbar links -->
    <ul class="ml-auto navbar-nav">
        {{-- <li id="clock" class="fs-3 fw-bold mt-3"></li> --}}
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="text-white fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-light nav-link" style="border: none; background: none;">
                    <i class="text-white fas fa-sign-out-alt"></i>
                </button>
            </form>
        </li>
    </ul>
</nav>