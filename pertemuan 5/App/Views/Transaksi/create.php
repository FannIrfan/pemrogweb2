<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Transaksi</title>
    <style>
        /* Mengatur font global dan margin padding */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
            padding-bottom: 60px;
        }

        /* Gaya untuk judul halaman */
        .page-title {
            text-align: center;
            font-size: 2em;
            color: white;
            background-color: #4CAF50; /* Warna hijau yang sama dengan navbar */
            padding: 20px;
            margin: 0;
        }

        /* Gaya untuk Navbar */
        nav {
            background-color: #4CAF50;
            padding: 10px 0;
            margin-bottom: 20px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            padding: 8px 16px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        nav ul li a:hover {
            background-color: #45a049;
        }

        /* Gaya untuk form container */
        .form-container {
            width: 80%;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        /* Gaya untuk judul form */
        .form-title {
            font-size: 1.5em;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        /* Gaya untuk label dan input form */
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        input[type="number"],
        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        /* Gaya untuk total harga */
        #total_harga {
            font-weight: bold;
            color: #4CAF50;
        }

        /* Gaya untuk tombol simpan */
        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <!-- Judul Halaman -->
    <h2 class="page-title">Tambah Transaksi</h2>

    <!-- Form Container -->
    <div class="form-container">
        <h3 class="form-title">Formulir Transaksi</h3>
        <form action="index.php?controller=transaksi&action=store" method="POST">
            <label for="id_transaksi">ID Transaksi:</label>
            <input type="number" name="id_transaksi" required>

            <label for="kode_barang">Kode Barang:</label>
            <input type="text" name="kode_barang" required>

            <label for="id_pelanggan">ID Pelanggan:</label>
            <input type="text" name="id_pelanggan" required>

            <label for="jumlah">Jumlah:</label>
            <input type="number" name="jumlah" required>

            <label for="harga_barang">Harga Barang:</label>
            <input type="number" name="harga_barang" required>

            <label for="tanggal_transaksi">Tanggal Transaksi:</label>
            <input type="date" name="tanggal_transaksi" required>

            <!-- Menampilkan total harga yang dihitung secara otomatis -->
            <p>Total Harga: <span id="total_harga">0</span></p>

            <button type="submit">Simpan</button>
        </form>
    </div>

    <!-- Script JavaScript untuk menghitung total harga secara otomatis -->
    <script>
        document.querySelector("input[name='jumlah']").addEventListener("input", calculateTotal);
        document.querySelector("input[name='harga_barang']").addEventListener("input", calculateTotal);

        function calculateTotal() {
            let jumlah = parseFloat(document.querySelector("input[name='jumlah']").value) || 0;
            let hargaBarang = parseFloat(document.querySelector("input[name='harga_barang']").value) || 0;
            let total = jumlah * hargaBarang;
            document.getElementById("total_harga").innerText = total;
        }
    </script>
</body>

</html>
