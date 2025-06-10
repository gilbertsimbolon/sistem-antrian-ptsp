<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Pengguna | PN TONDANO</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
    <script src="{{ asset('js/date-time.js') }}"></script>
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">

    <style>
        .btn-action {
            padding: 0.35rem 0.6rem;
            font-size: 0.85rem;
            transition: background-color 0.3s ease;
        }

        .btn-action:hover {
            opacity: 0.85;
        }

        .btn-warning:hover {
            background-color: #e0a800 !important;
        }

        .btn-danger:hover {
            background-color: #c82333 !important;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Header -->
        @include('admin.header')

        <!-- Sidebar -->
        @include('admin.sidebar')

        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 px-3 py-2">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title text-bold text-uppercase" style="font-size: 1.75rem;">Data Pengguna</div>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Role</th>
                                        <th class="text-center" style="width: 120px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($user as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>*******************</td>
                                        <td>{{ $item->role }}</td>
                                        <td class="text-center text-nowrap gap-2">
                                            <div class="d-flex justify-content-center gap-2">
                                                <!-- Tombol Edit -->
                                                <button type="button" class="btn btn-warning btn-action" data-bs-toggle="modal"
                                                    data-bs-target="#edit-modal{{ $item->id }}" title="Edit">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                @include('components.modal-user')

                                                <!-- Tombol Hapus -->
                                                <form action="{{ route('user.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin hapus?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-action" title="Hapus">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="text-center text-muted">Data belum ada</td>
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

        @include('admin.footer')

    </div>

    <!-- JQUERY -->
    <script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>

    <!-- DataTables + Export Script -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AdminLTE -->
    <script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
