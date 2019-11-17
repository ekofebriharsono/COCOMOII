<?php
include 'koneksi.php';

  $username = $_POST['username'];
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);


  $sql = "INSERT INTO user (nama,email,username,password) VALUES('$nama','$email','$username','$password')";
  $results = mysqli_query($con,$sql);
  
  if($results) {
      header('Location: ../login.php?register_sukses=1');
    }else {
      header('Location: ../register.php?gagal=1');
    }
    
?>