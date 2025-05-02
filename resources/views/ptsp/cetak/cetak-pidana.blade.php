<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor Antrian Pidana</title>
    <style>
        .kop {
            text-align: center;
            margin-bottom: 10px;
        }

        .kop img {
            width: 50px;
            height: auto;
            margin: 0 5px 5px;
        }

        .kop h2,
        .kop h3 {
            margin: 0;
            font-size: 16px;
        }

        .kop p {
            margin: 0;
            font-size: 12px;
        }

        .nomor {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            margin: 15px 0;
        }

        .detail {
            text-align: center;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .qr-code {
            text-align: center;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
        }

        @media print {
            body {
                margin: 0;
                background: white;
            }

            .container {
                border: none;
                box-shadow: none;
                padding: 0;
                width: 100%;
            }

            @page {
                size: auto;
                margin: 5mm;
            }
        }
    </style>
</head>

<body>
    <div class="container justify-center align-items-center">
        <div class="kop">
            <img style="width: 50px; height: 70px" src="{{ asset('img/logo-ma.png') }}" alt="Logo MA">
            <img style="width: 60px; height: 70px" src="{{ asset('img/logo-pntondano.png') }}" alt="Logo PN Tondano">
            <h2>MAHKAMAH AGUNG REPUBLIK INDONESIA</h2>
            <h3>PENGADILAN NEGERI TONDANO</h3>
            <p>Jl. Manguni No.75, Kembuan, Kec. Tondano Utara, Kabupaten Minahasa, Sulawesi Utara</p>
            <p>Telp. (0431) 321122</p>
            <p>{{ \Carbon\Carbon::parse($data->created_at)->format('d-m-Y') }}</p>
        </div>

        <div class="nomor">
            MEJA PIDANA<br>
            NOMOR ANTRIAN<br>
            {{ $nomor }}
        </div>

        <div class="detail">
            Nama: {{ $data->nama }}
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
