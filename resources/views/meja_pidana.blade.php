<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Antrian PTSP | PN TONDANO</title>

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

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <div class="row p-2">
                <div class="col-12">
                    <!-- Button Modal -->
                    <div class="container-fluid d-flex justify-content-end">
                        <button type="button" class="btn btn-success small-box" data-toggle="modal"
                            data-target="#exampleModalCenter" style="width: 330px; height: 45px;">
                            <div class="p-3 inner d-flex align-items-center justify-content-between"
                                style="height: 100%">
                                <h3 class="m-0 text-white">TAMBAH ANTRIAN</h3>
                            </div>
                        </button>
                    </div>

                    @include('components.modal-tambah-antrian')

                    <!-- Tabel Meja Pidana -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title m-0">Meja Pidana</h3>
                            <div class="d-flex justify-content-end">
                                <div class="input-group input-group-sm" style="width: 200px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Cari...">
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
                                        <th>Kuasa Hukum Penggugat</th>
                                        <th>Kuasa Hukum Tergugat</th>
                                        <th>Ruang Sidang</th>
                                        <th>Hakim</th>
                                        <th>Panitera</th>
                                        <th>Tanggal Sidang</th>
                                        <th>Waktu Mulai</th>
                                        <th>Waktu Selesai</th>
                                        <th>Status</th>
                                        <th>Waktu Pencatatan</th>
                                        <th>Terakhir Diperbarui</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($antrian_pidana as $antrian)
                                    <tr>
                                        <td>{{ $antrian->nomor_perkara }}</td>
                                        <td>{{ $antrian->nama_penggugat }}</td>
                                        <td>{{ $antrian->nama_tergugat }}</td>
                                        <td>{{ $antrian->kuasa_hukum_penggugat ?? '-' }}</td>
                                        <td>{{ $antrian->kuasa_hukum_tergugat ?? '-' }}</td>
                                        <td>{{ $antrian->ruang_sidang }}</td>
                                        <td>{{ $antrian->hakim }}</td>
                                        <td>{{ $antrian->panitera }}</td>
                                        <td>{{ $antrian->tanggal_sidang }}</td>
                                        <td>{{ $antrian->sidang_mulai }}</td>
                                        <td>{{ $antrian->sidang_akhir }}</td>
                                        <td>
                                            @if ($antrian->status == 'menunggu')
                                            <span class="badge badge-warning">Menunggu</span>
                                            @elseif ($antrian->status == 'diproses')
                                            <span class="badge badge-primary">Diproses</span>
                                            @elseif ($antrian->status == 'selesai')
                                            <span class="badge badge-success">Selesai</span>
                                            @elseif ($antrian->status == 'dibatalkan')
                                            <span class="badge badge-danger">Dibatalkan</span>
                                            @else
                                            <span class="badge badge-secondary">{{ ucfirst($item->status) }}</span>
                                            @endif
                                        </td>
                                        <td>{{ $antrian->created_at->format('d-m-Y H:i') }}</td>
                                        <td>{{ $antrian->updated_at->format('d-m-Y H:i') }}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="13" class="text-center">Belum ada data antrian</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <div class="p-3">
                <h5>Informasi</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        @include('admin.footer')

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>
</body>

</html>