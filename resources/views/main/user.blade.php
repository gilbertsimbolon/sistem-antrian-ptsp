<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meja Hukum | PN TONDANO</title>

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
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Header -->
        @include('admin.header')

        <!-- Sidebar -->
        @include('admin.sidebar')

        <div class="content-wrapper">
            <div class="px-4" border-radius: 10px;">
                <h1 class="text-center">Pengguna</h1>
                <div class="mb-3 d-flex justify-content-between align-items-center">
                    <div id="custom-export"></div>
                    <div id="custom-search" class="dataTables_filter"></div>
                </div>
                <table id="hukumTable" class="table table-bordered table-head-fixed" style="background-color: #e6f4ea;">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>No Telepon</th>
                            <th>Jenis Kelamin</th>
                            <th>Keperluan</th>
                            <th>Jam Input</th>
                            <th>Tanggal Input</th>
                            <th style="width: 150px" class="text-nowrap">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($dataHukum as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->no_telepon }}</td>
                            <td>{{ $item->jenis_kelamin }}</td>
                            <td>{{ $item->keperluan }}</td>
                            <td>{{ $item->created_at->format('H:i') }}</td>
                            <td>{{ $item->created_at->format('d-m-Y') }}</td>
                            <td class="text-nowrap">
                                <div class="gap-2 d-flex">
                                    <!-- Tombol Edit, buka modal -->
                                    <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#edit-modal{{ $item->id }}" style="width: 70px">
                                        Edit
                                    </button>
                                    @include('ptsp.modal.edit-meja-hukum')

                                    <!-- Form Hapus -->
                                    <form action="{{ route('hukum.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" style="width: 70px"
                                            onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center text-muted">Data belum ada</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        @include('admin.footer')

    </div>
    <!-- JQUERY (Pindahkan ke paling atas dari semua JS) -->
    <script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>

    <!-- DataTables + Export Script -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>

    <!-- Bootstrap JS (setelah jQuery & DataTables) -->
    <script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AdminLTE -->
    <script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>

    <script>
        $(document).ready(function() {
        const table = $('#hukumTable').DataTable({
            paging: false,
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'excelHtml5',
                    text: 'Export ke Excel',
                    className: 'btn btn-success',
                    exportOptions: {
                        columns: ':not(:last-child)' // kecuali kolom Aksi
                    }
                }
            ],
            language: {
                search: "Cari:",
                lengthMenu: "Tampilkan _MENU_ data",
                info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                paginate: {
                    previous: "Sebelumnya",
                    next: "Berikutnya"
                },
                zeroRecords: "Data tidak ditemukan"
            },
            initComplete: function() {
                // Pindahkan tombol dan search ke tempat custom
                table.buttons().container().appendTo('#custom-export');
                $('#hukumTable_filter').appendTo('#custom-search');
                $('.dt-button').removeClass('dt-button').addClass('btn btn-success me-2');
            }
        });
    });
    </script>

</body>

</html>