<?php
    include 'database.php';
    $db = new Database;

    $id = $_GET['id'];
    $data = $db->editData($id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Detail Data Pengguna</h2>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </div>
        <hr>

        <div class="card">
            <img src="uploads/<?php echo $data[0]['foto']; ?>" class="card-img-top" alt="Foto Pengguna">
            <div class="card-body">
                <h5 class="card-title"><?php echo $data[0]['nama']; ?></h5>
                <p class="card-text"><strong>Alamat:</strong> <?php echo $data[0]['alamat']; ?></p>
                <p class="card-text"><strong>No HP:</strong> <?php echo $data[0]['nohp']; ?></p>
                <p class="card-text"><strong>Email:</strong> <?php echo $data[0]['email']; ?></p>
                <p class="card-text"><strong>Jenis Kelamin:</strong> <?php echo $data[0]['jenis_kelamin']; ?></p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 | Akhmad Irfan Fadhlurrohman</p>
    </footer>
</body>
</html>
