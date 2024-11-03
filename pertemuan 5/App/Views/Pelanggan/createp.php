<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Pelanggan</title>
    <style>
        /* Mengatur font global dan margin padding */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #4CAF50;
        }

        /* Kontainer Form */
        .form-container {
            width: 50%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Gaya untuk tautan kembali */
        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <h1>Tambah Pelanggan</h1>
    <div class="form-container">
        <form action="index.php?controller=pelanggan&action=store" method="POST">
            <label for="id_pelanggan">ID Pelanggan:</label>
            <input type="text" name="id_pelanggan" required>

            <label for="nama_pelanggan">Nama Pelanggan:</label>
            <input type="text" name="nama_pelanggan" required>

            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" required>

            <input type="submit" value="Simpan">
        </form>

        <a href="index.php?controller=pelanggan&action=index" class="back-link">Kembali</a>
    </div>
</body>

</html>
