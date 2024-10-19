<?php
    include 'database.php';
    $db = new Database;

    $data = $db->tampilData();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <title>OOP PHP CRUD</title>
  </head>
  <body>
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Data Pengguna</h1>
            <a href="input.php" class="btn btn-primary mb-3">Tambah Data</a>
        </div>
        <hr>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Email</th>
                    <th>Jenis Kelamin</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['nama'] . "</td>";
                    echo "<td>" . $row['alamat'] . "</td>";
                    echo "<td>" . $row['nohp'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['jenis_kelamin'] . "</td>";
                    echo "<td><img src='uploads/" . $row['foto'] . "' width='60' height='60'></td>";
                    echo "<td class='text-center'>
                        <a href='edit.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm mb-1'>Edit</a>
                        <a href='detail.php?id=" . $row['id'] . "' class='btn btn-info btn-sm mb-1'>Detail</a>
                        <a href='proses.php?id=" . $row['id'] . "&aksi=hapus' class='btn btn-danger btn-sm mb-1'>Hapus</a>
                    </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <footer>
        <p>&copy; 2024 | Akhmad Irfan Fadhlurrohman</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
