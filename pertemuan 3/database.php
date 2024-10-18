<?php
class Database {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "db_php";
    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function tampilData() {
        $sql = "SELECT * FROM tb_users";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function tambahData($nama, $jenis_kelamin, $no_hp, $email, $alamat, $foto) {
        $sql = "INSERT INTO tb_users (nama, jenis_kelamin, no_hp, email, alamat, foto) 
                VALUES ('$nama', '$jenis_kelamin', '$no_hp', '$email', '$alamat', '$foto')";
        return $this->conn->query($sql);
    }

    public function editData($id) {
        $sql = "SELECT * FROM tb_users WHERE id = $id";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }

    public function updateData($id, $nama, $jenis_kelamin, $no_hp, $email, $alamat, $foto) {
        $sql = "UPDATE tb_users SET nama='$nama', jenis_kelamin='$jenis_kelamin', no_hp='$no_hp', 
                email='$email', alamat='$alamat', foto='$foto' WHERE id=$id";
        return $this->conn->query($sql);
    }

    public function hapusData($id) {
        $sql = "DELETE FROM tb_users WHERE id=$id";
        return $this->conn->query($sql);
    }

    public function detailData($id) {
        $sql = "SELECT * FROM tb_users WHERE id=$id";
        return $this->conn->query($sql)->fetch_assoc();
    }
}
?>
