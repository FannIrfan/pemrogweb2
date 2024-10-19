<?php

class Database {
    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $database = "database_php";
    public $koneksi;

    public function __construct() {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (mysqli_connect_error()) {
            echo "Koneksi database gagal: " . mysqli_connect_error();
        }
    }

    public function tampilData() {
        $data = mysqli_query($this->koneksi, "SELECT * FROM tb_users");
        while ($row = mysqli_fetch_assoc($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }

    public function tambahData($nama, $alamat, $nohp, $email, $jenis_kelamin, $foto) {
        $fotoNama = $this->uploadFoto($foto);
        mysqli_query($this->koneksi, "INSERT INTO tb_users (nama, alamat, nohp, email, jenis_kelamin, foto) VALUES ('$nama', '$alamat', '$nohp', '$email', '$jenis_kelamin', '$fotoNama')");
    }

    public function editData($id) {
        $data = mysqli_query($this->koneksi, "SELECT * FROM tb_users WHERE id='$id'");
        return mysqli_fetch_all($data, MYSQLI_ASSOC);
    }

    public function updateData($id, $nama, $alamat, $nohp, $email, $jenis_kelamin, $foto) {
        if ($foto['name'] != '') {
            $fotoNama = $this->uploadFoto($foto);
            mysqli_query($this->koneksi, "UPDATE tb_users SET nama='$nama', alamat='$alamat', nohp='$nohp', email='$email', jenis_kelamin='$jenis_kelamin', foto='$fotoNama' WHERE id='$id'");
        } else {
            mysqli_query($this->koneksi, "UPDATE tb_users SET nama='$nama', alamat='$alamat', nohp='$nohp', email='$email', jenis_kelamin='$jenis_kelamin' WHERE id='$id'");
        }
    }

    public function hapusData($id) {
        mysqli_query($this->koneksi, "DELETE FROM tb_users WHERE id='$id'");
    }

    private function uploadFoto($file) {
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($file["name"]);
        move_uploaded_file($file["tmp_name"], $targetFile);
        return basename($file["name"]);
    }
}
?>
