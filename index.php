<?php 
session_start();
include 'proses_php/koneksi.php';
if(isset($_SESSION['username'])==""){
    echo "<script>window.open('login.php?pesan=belum_login','_self')</script>";
    } else { 
?>
<!DOCTYPE html>
<html>
<link rel="shortcut icon" href="image/logo_stikom_warna.png" type="image/png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="style/css/style.css" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<head>
  <meta name="Author" content="Eko Febri Harsono">
  <meta name="description" content="COCOMO II">
  <meta name="keywords"
    content="COCOMO tool, COCOMO Suite tool, COCOMO, COCOMO II - Constructive Cost Model, COCOMO Suite of Constructive Cost Models, Expert COSYSMO - Systems Engineering Cost Model Risk Advisor, ODC COQUALMO - Orthogonal Defect Classification Constructive Quality Model, COSYSMO, COSYSMO and COCOMO Cost Models with Monte Carlo Risk Analysis, software cost estimation, systems cost estimation, cost estimation, Ray Madachy, Raymond Madachy">
</head>

<body>

  <?php include('navbar.php'); ?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-4">
        <div class="box-content">
          <div class="row">
            <div class="col-12">
              <div class="box-content" style="height:120px;">
                <h1 class="text-center "></h1>

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <form id="regInfo" method="GET" action="https://en.wikipedia.org/wiki/COCOMO">
                <h1>Info</h1>
                <div class="tab1">
                </div>

                <div style="overflow:auto;">
                  <div style="float:right;">
                    <p class="text-justify">COCOMO II (Constructive Cost Model) adalah sebuah model algoritma estimasi
                      biaya perangkat lunak yang didesain oleh Barry Boehm untuk memperoleh perkiraan dari jumlah
                      orang-bulan yang diperlukan untuk mengembangkan suatu produk perangkat lunak.</p>
                    <button type="submit">more</button>
                  </div>
                </div>

              </form>
            </div>

          </div>
        </div>
      </div>
      <div class="col-8">
        <div class="box-content">
          <div class="row">
            <div class="col-4">
              <form id="regBox" method="POST" action="#">
                <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "select COUNT(id_project) as totalproject from project where id_user = $idUser";
                $res = mysqli_query($con,$sql);
                $result = mysqli_num_rows($res);
                if($res){
                  if($result > 0){
                    $row = mysqli_fetch_array($res); ?>
                <h4><?php echo $row['totalproject']; ?></h4>
                <?php
                  }
                }
                ?>
                <p>Project</p>
              </form>
            </div>
            <div class="col-4">
              <form id="regBox" method="POST" action="#">
              <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT COUNT(modul.id_modul) as totalmodul
                FROM project   
                INNER JOIN modul  
                ON project.id_project = modul.id_project WHERE project.id_user=$idUser";
                $res = mysqli_query($con,$sql);
                $result = mysqli_num_rows($res);
                if($res){
                  if($result > 0){
                    $row = mysqli_fetch_array($res); ?>
                <h4><?php echo $row['totalmodul']; ?></h4>
                <?php
                  }
                }
                ?>
                <p>Modul</p>
              </form>
            </div>
            <div class="col-4">
              <form id="regBox" method="POST" action="#">
                <h4>3.000.000</h4>
                <p>Profit</p>
              </form>
            </div>
          </div>
        </div>
        <div class="box-content border-top">
          <form id="regForm" method="POST" action="tambah_project.php">
            <h1>COCOMO II</h1>
            <div class="tab">
              <center>
                <p><b>Welcome back sir!</b></p>
              </center>
            </div>

            <div style="overflow:auto;">
              <div style="float:right;">
                <button type="submit">Get Started</button>
              </div>
            </div>

            <div style="text-align:center;margin-top:40px;">
              <p>&copy; 2019 LUG</p>
            </div>
          </form>
        </div>


      </div>
    </div>
  </div>

</body>

<script src="js/formPagination.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</html>
<?php 
}
?>