<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Nomor Antrian Inzage</title>
    <style>
        @page {
            size: 80mm 200mm;
            /* Ukuran kertas thermal printer (misalnya) */
            margin: 0mm;
            /* Mengurangi margin untuk mencetak lebih banyak */
        }

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            font-size: 12px;
            /* Ukuran font kecil */
            width: 80mm;
            /* Pastikan lebar body sesuai dengan ukuran kertas */
            height: 200mm;
            /* Sesuaikan tinggi dengan ukuran kertas */
        }

        /* Sembunyikan semua elemen saat print, kecuali yang ada dalam modal */
        body * {
            visibility: hidden;
        }

        /* Modal yang akan dicetak tetap tampil */
        .modal-print * {
            visibility: visible;
        }

        /* Membuat modal print yang akan dicetak */
        .modal-print {
            display: block;
            /* Memastikan modal dicetak */
            text-align: center;
            font-weight: bold;
            margin-top: 0;
        }

        .kop {
            text-align: center;
            margin-bottom: 10px;
        }

        .kop img {
            width: 50px;
            /* Ukuran logo */
            margin-bottom: 10px;
        }

        .kop h2,
        .kop h3 {
            margin: 0;
            font-size: 14px;
        }

        .nomor {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            margin: 10px 0;
        }

        .detail {
            text-align: center;
            margin-top: 10px;
            font-weight: bold;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 10px;
        }

        .qr-code {
            text-align: center;
            margin-top: 20px;
        }

        .footer p {
            margin: 0;
        }

        /* Menghindari pemecahan halaman */
        body {
            page-break-before: always;
        }
    </style>
</head>

<body onload="window.print()">
    <div class="modal-print">
        <div class="kop">
            <img style="width: 50px; height: 70px;" src="{{ asset('img/logo-ma.png') }}" alt="Logo Mahkamah Agung" />
            <img style="width: 60px; height: 70px;" src="{{ asset('img/logo-pntondano.png') }}"
                alt="Logo Pengadilan Negeri Tondano">
            <h2>MAHKAMAH AGUNG REPUBLIK INDONESIA</h2>
            <h3>PENGADILAN NEGERI TONDANO</h3>
            <p>Jl. Sam Ratulangi No. 99, Tondano, Sulawesi Utara</p>
            <p>{{ \Carbon\Carbon::parse($data->created_at)->format('d-m-Y') }}</p>
        </div>

        <div class="nomor">
            MEJA INZAGE<br>
            NOMOR ANTRIAN<br>
            {{ $nomor }}
        </div>

        <div class="detail">
            <p>Nama: {{ $data->nama }}</p>
        </div>

        <div class="qr-code">
            {!! $qrCode !!}
        </div>

        <div class="footer">
            Terima kasih telah menggunakan layanan PTSP Pengadilan Negeri Tondano
        </div>
    </div>
</body>

</html>
