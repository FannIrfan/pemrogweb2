?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
</head>
<body>
    <h1>Pendaftaran</h1>
    <form action="/pendaftaran/store" method="POST">
        <input type="text" name="name" placeholder="Nama Lengkap" required>
        <input type="date" name="tanggal_lahir" required>
        <textarea name="alamat" placeholder="Alamat" required></textarea>
        <input type="text" name="ijazah" placeholder="Nomor Ijazah" required>
        <input type="text" name="kk" placeholder="Nomor KK" required>
        <button type="submit">Daftar</button>
    </form>
</body>
</html>

<?php