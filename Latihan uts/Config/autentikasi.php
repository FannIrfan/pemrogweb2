<?php
include ('config.php');
$username =$_POST['username'];
$password =$_POST['password'];

$query = mysqli_query("SELECT * FROM tb__users WHERE username='$username' AND password='$password'");
if(mysqli_num_rows($query)==1){
echo $username;
echo $password;
}
else{
    echo "login tidak berhasil";
}
?>