<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sisten Antrian PTSP | PN TONDANO</title>

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

        @include('admin.header')

        @include('admin.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <div class="row p-2">
                <div class="col-12">
                    <!-- Button Modal -->
                    <div class="container-fluid d-flex justify-content-end">
                        <button type="button" class="btn btn-success small-box" data-toggle="modal" data-target="#exampleModalCenter"
                            style="width: 330px; height: 45px;">
                            <div class="p-3 inner d-flex align-items-center justify-content-between" style="height: 100%">
                                <h3 class="m-0 text-white">TAMBAH ANTRIAN</h3>
                            </div>
                        </button>

                        @include('components.modal-tambah-antrian')
                    </div>

                    <!-- Tabel Meja Pidana -->
                    <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Meja Pidana</h3>

                        <div class="card-tools d-flex align-items-center gap-3">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                            <th>Nomor Perkara</th>
                            <th>Nama Penggugat</th>
                            <th>Nama Tergugat</th>
                            <th>Kuasa hukum penggugat (jika ada)</th>
                            <th>Kuasa hukum tergugat (jika ada)</th>
                            <th>Ruang Sidang</th>
                            <th>Hakim yang menangani kasus</th>
                            <th>Panitera</th>
                            <th>Tanggal Sidang</th>
                            <th>Waktu Sidang</th>
                            <th>Status</th>
                            <th>Waktu Pencatatan</th>
                            <th>Terakhir Diperbarui</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>11-7-2014</td>
                            <td><span class="tag tag-success">Approved</span></td>
                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                            <td>Lorem</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

        </div>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        @include('admin.footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
