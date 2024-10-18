<?php
include 'database.php';
$db = new Database();
$data = $db->tampilData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>PHP OOP CRUD</title>
</head>
<body>
    <div class="container">
        <h2 class="my-4">Daftar Pengguna</h2>
        <a href="input.php" class="btn btn-primary mb-3">Tambah Data</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>No HP</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $data->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['jenis_kelamin'] ?></td>
                    <td><?= $row['no_hp'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning">Edit</a>
                        <a href="proses.php?hapus=<?= $row['id'] ?>" class="btn btn-danger">Hapus</a>
                        <a href="detail.php?id=<?= $row['id'] ?>" class="btn btn-info">Detail</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
