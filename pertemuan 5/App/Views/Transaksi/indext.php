<head>
    <meta charset="UTF-8">

    <meta charset="UTF-8">
    <title>Halaman Transaksi</title>
    <style>
        /* Gaya untuk Navbar */
/* Mengatur font global dan margin padding */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    color: #333;
    padding-bottom: 60px; /* Sesuaikan dengan tinggi footer jika ada */
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
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    text-align: center;
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

/* Gaya untuk kontainer utama */
.container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}

/* Gaya untuk tautan tambah data */
.tambah-data {
    display: inline-block;
    margin-bottom: 15px;
    color: #4CAF50;
    text-decoration: none;
    font-weight: bold;
}

.tambah-data:hover {
    text-decoration: underline;
}

/* Gaya untuk tabel */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 10px;
    text-align: left;
}

th {
    background-color: #007BFF; /* Ubah warna header tabel menjadi biru */
    color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #ddd;
}

/* Tombol gaya */
button, .btn {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

button:hover, .btn:hover {
    background-color: #45a049;
}

/* Gaya untuk tautan tambah data yang terlihat seperti tombol */
.tambah-data {
    display: inline-block;
    margin-bottom: 15px;
    color: white;
    background-color: #4CAF50; /* Warna hijau yang sama dengan navbar */
    padding: 10px 20px;
    font-weight: bold;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease, transform 0.3s ease;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.tambah-data:hover {
    background-color: #45a049;
    transform: scale(1.05); /* Membesarkan sedikit saat dihover */
    text-decoration: none;
}


    </style>
    <title>Daftar Transaksi</title>
</head>

<h1 class="page-title">Daftar Transaksi</h1>

<nav>
        <ul>
            <li><a href="index.php?controller=home&action=index">Home</a></li>
            <li><a href="index.php?controller=barang&action=index">Barang</a></li>
            <li><a href="index.php?controller=pelanggan&action=index">Pelanggan</a></li>
            <li><a href="index.php?controller=transaksi&action=index">Transaksi</a></li>
        </ul>
    </nav>
<a href="index.php?controller=transaksi&action=create" class="tambah-data">Tambah Data</a>
<table border="1">
    <tr>
        <th>No</th>
        <th>ID Transaksi</th>
        <th>Kode Barang</th>
        <th>ID Pelanggan</th>
        <th>Jumlah</th>
        <th>Total Harga</th>
        <th>Tanggal Transaksi</th>
        <th>Aksi</th>
    </tr>

    <?php foreach ($transaksiList as $key => $transaksi): ?>
        <tr>
            <td><?= $key + 1 ?></td>
            <td><?= $transaksi['id_transaksi'] ?></td>
            <td><?= $transaksi['kode_barang'] ?></td>
            <td><?= $transaksi['id_pelanggan'] ?></td>
            <td><?= $transaksi['jumlah'] ?></td>
            <td><?= $transaksi['total_harga'] ?></td>
            <td><?= $transaksi['tanggal_transaksi'] ?></td>
            <td><a href="index.php?controller=transaksi&action=detail&id=<?= $transaksi['id_transaksi'] ?>">Detail</a></td>

        </tr>
    <?php endforeach; ?>



</table>