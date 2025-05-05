<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Antrian | PN TONDANO</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
    <script src="{{ asset('js/date-time.js') }}"></script>
</head>

<body class="hold-transition sidebar-mini overflow-hidden">
    <div class="wrapper">

        <!-- Header -->
        @include('admin.header')

        <!-- Sidebar -->
        @include('admin.sidebar')

        <div class="content-wrapper">
            <div class="container">
                <div class="row g-4 justify-content-center py-20">
                    <!-- Meja Inzage -->
                    <div class="col-md-6">
                        <div class="text-center card-body">
                            <button type="button" class="py-4 btn btn-success w-100" data-bs-toggle="modal"
                                data-bs-target="#modal-inzage" style="height:250px">
                                <h1 class="text-uppercase fs-1 fw-bold">Meja Inzage</h1>
                            </button>
                            @include('ptsp.modal.meja-inzage-modal')
                        </div>
                    </div>

                    <!-- Meja Pidana -->
                    <div class="col-md-6">
                        <div class="text-center card-body">
                            <button type="button" class="py-4 btn btn-primary w-100" data-bs-toggle="modal"
                                data-bs-target="#modal-pidana" style="height:250px">
                                <h1 class="text-uppercase fs-1">Meja Pidana</h1>
                            </button>
                            @include('ptsp.modal.meja-pidana-modal')
                        </div>
                    </div>

                    <!-- Meja Perdata -->
                    <div class="col-md-6">
                        <div class="text-center card-body">
                            <button type="button" class="py-4 btn btn-warning w-100" data-bs-toggle="modal"
                                data-bs-target="#modal-perdata" style="height:250px">
                                <h1 class="text-uppercase fs-1">Meja Perdata</h1>
                            </button>
                            @include('ptsp.modal.meja-perdata-modal')
                        </div>
                    </div>

                    <!-- Meja Hukum -->
                    <div class="col-md-6">
                        <div class="text-center card-body">
                            <button type="button" class="py-4 btn btn-danger w-100" data-bs-toggle="modal"
                                data-bs-target="#modal-hukum" style="height:250px">
                                <h1 class="text-uppercase fs-1">Meja Hukum</h1>
                            </button>
                            @include('ptsp.modal.meja-hukum-modal')
                        </div>
                    </div>

                    <!-- Meja Umum -->
                    <div class="col-md-6">
                        <div class="text-center card-body">
                            <button type="button" class="py-4 btn btn-info w-100" data-bs-toggle="modal"
                                data-bs-target="#modal-umum" style="height:250px">
                                <h1 class="text-uppercase fs-1">Meja Umum</h1>
                            </button>
                            {{-- @include('ptsp.modal.meja-umum-modal') --}}
                        </div>
                    </div>

                    <!-- Meja Sidang -->
                    <div class="col-md-6">
                        <div class="text-center card-body">
                            <button type="button" class="py-4 btn btn-secondary w-100" data-bs-toggle="modal"
                                data-bs-target="#modal-sidang" style="height:250px">
                                <h1 class="text-uppercase fs-1">Meja Pojok E-Court</h1>
                            </button>
                            {{-- @include('ptsp.modal.meja-pojok-e-court-modal') --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.footer')

    </div>

    <!-- script yang dibutuhkan -->
    <script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>
    <!-- Bootstrap JS + Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
