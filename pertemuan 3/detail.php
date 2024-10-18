<?php
include 'database.php';
$db = new Database();
$id = $_GET['id'];
$user = $db->detailData($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Detail Pengguna</title>
</head>
<body>
    <div class="container">
        <div class="card my-5">
            <div class="card-header">
                Detail Pengguna
            </div>
            <div class="card-body">
                <img src="uploads/<?= $user['foto'] ?>" alt="Foto Pengguna" class="img-thumbnail mb-3" width="150">
                <h5 class="card-title">Nama: <?= $user['nama'] ?></h5>
                <p class="card-text">Jenis Kelamin: <?= $user['jenis_kelamin'] ?></p>
                <p class="card-text">No HP: <?= $user['no_hp'] ?></p>
                <p class="card-text">Email: <?= $user['email'] ?></p>
                <p class="card-text">Alamat: <?= $user['alamat'] ?></p>
                <a href="index.php" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</body>
</html>
