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

<head>
  <meta name="Author" content="Eko Febri Harsono">
  <meta name="description" content="COCOMO II">
  <meta name="keywords"
    content="COCOMO tool, COCOMO Suite tool, COCOMO, COCOMO II - Constructive Cost Model, COCOMO Suite of Constructive Cost Models, Expert COSYSMO - Systems Engineering Cost Model Risk Advisor, ODC COQUALMO - Orthogonal Defect Classification Constructive Quality Model, COSYSMO, COSYSMO and COCOMO Cost Models with Monte Carlo Risk Analysis, software cost estimation, systems cost estimation, cost estimation, Ray Madachy, Raymond Madachy">
</head>

<body>

  <?php include('navbar.php'); ?>

  <div id="regForm">
    <h1>PROJECT COCOMO II</h1>
    <div class="tab">
      <hr>
    </div>

    <table border="1" style="width: auto;">
      <tr>
        <td>
          <center>No.</center>
        </td>
        <td>
          <center>Nama Project</center>
        </td>
        <td>
          <center>Total</center>
        </td>
        <td colspan="2">
          <center>Aksi</center>
        </td>
      </tr>
      <?php 
          $id_user =  $_SESSION['id_user'];
          $sql = "select * from project where id_user='$id_user'";
          $data = mysqli_query($con,$sql);
          $no = 0;
          while($d = mysqli_fetch_array($data)){
            $no++;
        ?>
      <tr>
        <td>
          <center><?php echo $no; ?></center>
        </td>
        <td><?php echo $d['nama_project']; ?></td>
        <td>
          <center><?php echo $d['total']; ?></center>
        </td>
        <td>
          <form action="tambah_project.php" method="get">
            <input hidden type="text" name="project" value="<?php echo $d['id_project']; ?>">
            <button type="submit">Edit</button>
          </form>
        </td>
        <td>
          <form action="proses_php/prosesTambahProject.php" method="get">
            <input hidden type="text" name="idProject" value="<?php echo $d['id_project']; ?>">
            <button type="submit" name="submitDeleteProject" style="background-color: #df2929;">Delete</button>
          </form>
        </td>
      </tr>
      <?php } ?>
    </table>

    <div style="overflow:auto;">
      <div style="float:right;">
        <form action="tambah_project.php">
          <button type="submit">Tambah Project</button>
        </form>
      </div>
    </div>

    <div style="text-align:center;margin-top:40px;">
      <p>&copy; 2019 LUG</p>
    </div>
  </div>

</body>

<script src="js/formPagination.js"></script>

</html>
<?php 
}
?>