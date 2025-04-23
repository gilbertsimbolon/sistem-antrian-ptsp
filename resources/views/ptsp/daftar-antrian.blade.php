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

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Header -->
        @include('admin.header')

        <!-- Sidebar -->
        @include('admin.sidebar')

        <div class="content-wrapper">
            <h1 class="text-center text-uppercase fs-1 mt-2">Daftar Antrian</h1>
                <div class="px-4 py-3" border-radius: 10px;">
                    <table class="table table-bordered table-head-fixed" style="background-color: #e6f4ea;">
                        <thead>
                            <tr class="text-center">
                                <th class="bg-success">Meja Inzage</th>
                                <th class="bg-primary">Meja Pidana</th>
                                <th class="bg-warning">Meja Perdata</th>
                                <th class="bg-danger">Meja Hukum</th>
                                <th class="bg-info">Meja Umum</th>
                                <th class="bg-secondary">Meja Sidang</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td></td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            {{-- @empty
                            <tr>
                                <td colspan="8" class="text-center text-muted">Belum ada antrian.</td>
                            </tr> --}}
                        </tbody>
                    </table>
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
