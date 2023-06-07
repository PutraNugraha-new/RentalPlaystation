<!DOCTYPE html>
<html>
<head>
    <title>Struk Transaksi</title>
    <script>
        window.onload = function() {
            window.print(); // Fungsi untuk mencetak halaman otomatis saat halaman terbuka
        };
    </script>
    <style>
        @media print {
        @page {
            size: Letter;
        }
    }
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            line-height: 1.4;
        }

        .container {
            width: 300px;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            margin-bottom: 10px;
            border-bottom: 1px solid #000;
            padding-bottom: 5px;
        }

        .header h1 {
            font-size: 24px;
            margin: 5px 0;
        }

        .header p {
            margin: 2px 0;
        }

        .transaction-details {
            margin-bottom: 10px;
        }

        .transaction-details p {
            margin: 3px 0;
        }

        .transaction-details p:last-child {
            border-bottom: 1px solid #000;
            padding-bottom: 3px;
        }

        .footer {
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Struk Transaksi</h1>
            <p>Amaco Rental Playstation</p>
            <p>Telp: 12345678</p>
        </div>

        <div class="transaction-details">
            <h3>Detail Transaksi:</h3>
            <?php foreach($transaction as $data): ?>
                <p>No Transaksi: <?= $data->no_transaksi ?></p>
                <p>Tanggal Peminjaman: <?= $data->tgl_peminjaman ?></p>
                <p>Nama Pelanggan: <?= $data->nama_pelanggan ?></p>
                <p>No Telepon: <?= $data->no_telp ?></p>
                <p>Alamat Pelanggan: <?= $data->alamat ?></p>
                <p>Playstation: <?= $data->nama_ps ?></p>
                <p>Lama Peminjaman: <?= $data->lama_peminjaman ?> Jam</p>
                <p>Total Harga: <?= $data->total_harga ?></p>
                <p>Tunai: <?= $data->tunai ?></p>
                <p>Kembalian: <?= $data->kembalian ?></p>
            <?php endforeach; ?>
        </div>

        <div class="footer">
            <p>Terima kasih atas kunjungan Anda!</p>
        </div>
    </div>
</body>
</html>
