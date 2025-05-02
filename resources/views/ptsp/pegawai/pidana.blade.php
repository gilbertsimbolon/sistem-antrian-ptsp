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
            <h1 class="text-center">Antrian Meja Pidana</h1>
            <div class="px-4 py-3" border-radius: 10px;">
                <table class="table table-bordered table-head-fixed" style="background-color: #e6f4ea;">
                    <thead>
                        <tr>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Nomor Antrian</th>
                            <th style="width: 150px" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($antrianPidana as $item)
                        <tr id="row-{{ $item->id }}">
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->nomor_antrian }}</td>
                            <td class="text-nowrap">
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-sm btn-success" style="width: 70px"
                                        onclick="panggil('{{ $item->nama }}', '{{ $item->nomor_antrian }}', '{{ $item->jenis_kelamin }}', 'row-{{ $item->id }}')">
                                        Panggil
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center text-muted">Data antrian belum ada.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        @include('admin.footer')

    </div>

    <script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>
    <!-- Bootstrap JS + Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function panggil(nama, nomor, jenisKelamin, rowId) {
            let sapaan = "Bapak";
            if (jenisKelamin.toLowerCase() === "perempuan") {
                sapaan = "Ibu";
            }
    
            const kalimat = `Atas nama ${sapaan} ${nama}, dengan nomor antrian ${nomor}, silakan menuju meja pidana.`;
            const suara = new SpeechSynthesisUtterance(kalimat);
            suara.lang = 'id-ID';
            suara.volume = 1;
            suara.rate = 1;
            suara.pitch = 1;
    
            suara.onend = function () {
                const row = document.getElementById(rowId);
                if (row) {
                    row.remove();
                }
    
                // Simpan ID yang sudah dipanggil ke localStorage
                let sudahDipanggil = JSON.parse(localStorage.getItem('sudahDipanggil')) || [];
                if (!sudahDipanggil.includes(rowId)) {
                    sudahDipanggil.push(rowId);
                    localStorage.setItem('sudahDipanggil', JSON.stringify(sudahDipanggil));
                }
            };
    
            window.speechSynthesis.speak(suara);
        }
    
        // Saat halaman diload, sembunyikan yang sudah dipanggil
        window.addEventListener('DOMContentLoaded', function () {
            let sudahDipanggil = JSON.parse(localStorage.getItem('sudahDipanggil')) || [];
            sudahDipanggil.forEach(function (rowId) {
                const row = document.getElementById(rowId);
                if (row) {
                    row.remove();
                }
            });
        });
    </script>
</body>

</html>