<?php
$koneksi = mysqli_connect('localhost','root','','lat_uts_web');
if(!$koneksi){
    die("koneksi gagal:". mysqli_connect_error());
}
else{
    echo "koneksi berhasil";
}
?>