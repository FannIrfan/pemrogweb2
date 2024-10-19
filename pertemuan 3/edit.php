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
    <title>OOP PHP CRUD - Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Edit Data Pengguna</h2>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </div>
        <hr>

        <form method="POST" action="proses.php?aksi=update" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $data[0]['id']; ?>">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data[0]['nama']; ?>" required>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $data[0]['email']; ?>" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" required><?php echo $data[0]['alamat']; ?></textarea>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nohp" class="form-label">No HP</label>
                    <input type="text" class="form-control" id="nohp" name="nohp" value="<?php echo $data[0]['nohp']; ?>" required>
                </div>
                <div class="col-md-6">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="Laki-laki" <?php echo ($data[0]['jenis_kelamin'] == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                        <option value="Perempuan" <?php echo ($data[0]['jenis_kelamin'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto">
                <img src="uploads/<?php echo $data[0]['foto']; ?>" width="60" height="60">
            </div>
            <button type="submit" class="btn btn-primary">Update Data</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2024 | Akhmad Irfan Fadhlurrohman</p>
    </footer>
</body>
</html>
