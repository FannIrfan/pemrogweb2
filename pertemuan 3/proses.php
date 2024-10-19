<?php
include 'database.php';
$db = new Database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->tambahData($_POST['nama'], $_POST['alamat'], $_POST['nohp'], $_POST['email'], $_POST['jenis_kelamin'], $_FILES['foto']);
    header("location:index.php");
} elseif ($aksi == "update") {
    $db->updateData($_POST['id'], $_POST['nama'], $_POST['alamat'], $_POST['nohp'], $_POST['email'], $_POST['jenis_kelamin'], $_FILES['foto']);
    header("location:index.php");
} elseif ($aksi == "hapus") {
    $db->hapusData($_GET['id']);
    header("location:index.php");
}
?>
