<?php
include 'database.php';
$db = new Database();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = $db->getDataById($id);

    if ($data) {
        $foto = $data['foto'];

        // Hapus data pengguna dari database
        $db->hapusData($id);

        // Hapus file foto dari folder
        $target_dir = "uploads/";
        if (file_exists($target_dir . $foto)) {
            unlink($target_dir . $foto);
        }

        header('Location: index.php');
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "ID tidak valid.";
}
?>
