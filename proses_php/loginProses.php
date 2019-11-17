<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "select * from user where username='$username' and password='$password'";
$data = mysqli_query($con,$sql);
$cek = mysqli_num_rows($data);

if($cek > 0){
    while($row = mysqli_fetch_array($data)){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    $_SESSION['nama'] = $row['nama'];
    $_SESSION['id_user'] = $row['id_user'];

    header("location:../index.php");
    }
}else{
	header("location:../login.php?pesan=gagal");
}

?>