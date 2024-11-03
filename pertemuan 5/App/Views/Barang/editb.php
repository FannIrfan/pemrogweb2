<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Barang</title>
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

        /* Kontainer utama */
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        /* Gaya form */
        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="number"] {
            padding: 10px;
            margin: 5px 0 15px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
            width: 100%;
        }

        button {
            padding: 10px;
            background-color: var(--primary-color);
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Tombol batal */
        a {
            display: inline-block;
            padding: 10px;
            background-color: #f44336;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            margin-top: 10px;
        }

        a:hover {
            background-color: #e53935;
        }

        /* Responsivitas */
        @media (max-width: 600px) {
            .container {
                padding: 10px;
                margin: 10px;
            }
            label, input[type="text"], input[type="number"], button, a {
                font-size: 0.9em;
            }
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header>
        <h1>Edit Barang</h1>
    </header>

    <!-- Kontainer utama -->
    <div class="container">
        <form action="index.php?controller=barang&action=update" method="POST">
            <input type="hidden" name="kode_barang" value="<?= htmlspecialchars($barang['kode_barang']) ?>">

            <label for="nama_barang">Nama Barang:</label>
            <input type="text" name="nama_barang" value="<?= htmlspecialchars($barang['nama_barang']) ?>" required>

            <label for="harga">Harga:</label>
            <input type="number" name="harga" value="<?= htmlspecialchars($barang['harga']) ?>" required>

            <label for="stok">Stok:</label>
            <input type="number" name="stok" value="<?= htmlspecialchars($barang['stok']) ?>" required>

            <button type="submit">Update</button>
            <a href="index.php?controller=barang&action=index">Batal</a>
        </form>
    </div>

</body>

</html>
