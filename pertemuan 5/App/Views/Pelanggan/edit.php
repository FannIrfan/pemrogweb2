<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Update Pelanggan</title>
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

        input[type="text"] {
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
        }

        button:hover {
            background-color: #45a049;
        }

        /* Responsivitas */
        @media (max-width: 600px) {
            .container {
                padding: 10px;
                margin: 10px;
            }
            label, input[type="text"], button {
                font-size: 0.9em;
            }
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header>
        <h1>Update Pelanggan</h1>
    </header>

    <!-- Kontainer utama -->
    <div class="container">
        <form action="index.php?controller=pelanggan&action=update" method="POST">
            <label for="id_pelanggan">ID Pelanggan:</label>
            <input type="text" name="id_pelanggan" value="<?= htmlspecialchars($pelanggan['id_pelanggan']) ?>" required>

            <label for="nama_pelanggan">Nama Pelanggan:</label>
            <input type="text" name="nama_pelanggan" value="<?= htmlspecialchars($pelanggan['nama_pelanggan']) ?>" required>

            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" value="<?= htmlspecialchars($pelanggan['alamat']) ?>" required>

            <button type="submit">Update</button>
        </form>
    </div>

</body>

</html>
