<?php 
session_start();
include 'proses_php/koneksi.php';

function rupiah($angka){
                                    
  $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
  return $hasil_rupiah;

}

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
                <h1 class="text-warning">Information</h1>
                <div class="tab1">
                </div>
                <div style="overflow:auto;">
                  <div style="float:right;">
                    <p class="text-justify">COCOMO II (Constructive Cost Model) is a software cost estimation algorithm
                      model designed by Barry Boehm to obtain an estimate of the number of people required to develop a
                      software product.</p>
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
                <p>Project</p>
                <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "select COUNT(id_project) as totalproject from project where id_user = $idUser";
                $res = mysqli_query($con,$sql);
                $result = mysqli_num_rows($res);
                if($res){
                  if($result > 0){
                    $row = mysqli_fetch_array($res); ?>
                <h4 class="text-warning"><?php echo $row['totalproject']; ?></h4>
                <?php
                  }
                }
                ?>
              </form>
            </div>
            <div class="col-4">
              <form id="regBox" method="POST" action="#">
                <p>Profit</p>
                <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "select sum(all_cost_user.profit) as profit from modul JOIN project ON modul.id_project = project.id_project JOIN all_cost_user ON modul.id_modul = all_cost_user.id_modul JOIN user ON user.id_user = project.id_user WHERE project.id_user = $idUser";
                $res = mysqli_query($con,$sql);
                $result = mysqli_num_rows($res);
                if($res){
                  if($result > 0){
                    $row = mysqli_fetch_array($res); ?>
                <h4 class="text-warning"><?php echo rupiah($row['profit']); ?></h4>
                <?php
                  }
                }
                ?>
              </form>
            </div>
            <div class="col-4">
              <form id="regBox" method="POST" action="#">
                <p>Tax</p>
                <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "select sum(all_cost_user.tax) as tax from modul JOIN project ON modul.id_project = project.id_project JOIN all_cost_user ON modul.id_modul = all_cost_user.id_modul JOIN user ON user.id_user = project.id_user WHERE project.id_user = $idUser";
                $res = mysqli_query($con,$sql);
                $result = mysqli_num_rows($res);
                if($res){
                  if($result > 0){
                    $row = mysqli_fetch_array($res); ?>
                <h4 class="text-warning"><?php echo rupiah($row['tax']); ?></h4>
                <?php
                  }
                }
                ?>
              </form>
            </div>
          </div>
        </div>
        <div class="box-content border-top">
          <form id="regForm" method="POST" action="tambah_project.php">
            <h1>COCOMO II</h1>
            <div class="tab">
              <center>
                <p>
                  Hello world, welcome to the software development cost calculation site using the COCOMO II
                  method!</p>
              </center>
            </div>
            <div style="overflow:auto;">
              <div style="float:right;">
                <button type="submit">Get Started</button>
              </div>
            </div>
            <div style="text-align:center;margin-top:40px;">
              <p>&copy; 2019 LUG by <a href="https://github.com/ekofebriharsono"
                  class="text-warning stretched-link">Maseko</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>

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