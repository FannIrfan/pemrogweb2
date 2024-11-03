<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Detail Transaksi</title>
    <style>
        /* Deklarasi warna sebagai variabel */
        :root {
            --primary-color: #4CAF50;
            --secondary-color: #007BFF;
            --background-color: #f4f4f4;
            --text-color: #333;
        }

        /* Gaya global */
        body {
            font-family: Arial, sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            margin: 0;
            padding: 0;
        }

        /* Header gaya */
        header {
            background-color: var(--primary-color);
            color: #fff;
            padding: 15px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        /* Gaya navigasi */
        nav {
            text-align: center;
            margin-top: 20px;
        }

        nav a {
            color: var(--secondary-color);
            text-decoration: none;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* Kontainer utama */
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        /* Gaya kartu untuk detail transaksi */
        .card {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            background-color: #f9f9f9;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        .card h2 {
            font-size: 1.8em;
            color: var(--primary-color);
            margin-bottom: 15px;
        }

        .card p {
            margin: 10px 0;
            font-size: 1em;
        }

        .card p strong {
            color: var(--text-color);
        }

        /* Gaya footer */
        footer {
            background-color: var(--primary-color);
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* Responsivitas */
        @media (max-width: 600px) {
            .container {
                padding: 10px;
                margin: 10px;
            }
            .card h2 {
                font-size: 1.5em;
            }
            .card p {
                font-size: 0.9em;
            }
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header>
        <h1>Detail Transaksi</h1>
    </header>

    <!-- Navigasi kembali ke daftar transaksi -->
    

    <!-- Kontainer utama -->
    <div class="container">
        <!-- Kartu detail transaksi -->
        <div class="card">
            <h2>Detail Transaksi ID: <?= htmlspecialchars($transaksiDetail['id_transaksi']) ?></h2>
            <p><strong>Nama Barang:</strong> <?= htmlspecialchars($transaksiDetail['nama_barang']) ?></p>
            <p><strong>Nama Pelanggan:</strong> <?= htmlspecialchars($transaksiDetail['nama_pelanggan']) ?></p>
            <p><strong>Jumlah:</strong> <?= htmlspecialchars($transaksiDetail['jumlah']) ?></p>
            <p><strong>Total Harga:</strong> Rp <?= number_format(htmlspecialchars($transaksiDetail['total_harga']), 0, ',', '.') ?></p>
            <p><strong>Tanggal Transaksi:</strong> <?= htmlspecialchars($transaksiDetail['tanggal_transaksi']) ?></p>
        </div>
    </div>

    <nav>
        <a href="index.php?controller=transaksi&action=index">Kembali ke Daftar Transaksi</a>
    </nav>

    <!-- Footer -->
    <footer>
        &copy; 2024 - Sistem Informasi Penjualan
    </footer>
</body>

</html>
