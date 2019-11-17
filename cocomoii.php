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

  <?php if(isset($_POST['project'])!=''){ ?>

  <form id="regForm" action="proses_php/prosesSimpanDataPerModul.php" method="post">
    <h1>Modul "<?php echo $_POST['nama_modul']; ?>"</h1>

    <input hidden type="text" name="id_modul" value="<?php echo $_POST['id_modul']; ?>">
    <input hidden type="text" name="id_project" value="<?php echo $_POST['project']; ?>">

    <?php include('step_cocomoII/stepOne.php'); ?>

    <?php include('step_cocomoII/stepTwo.php'); ?>

    <?php include('step_cocomoII/stepThree.php'); ?>

    <?php include('step_cocomoII/stepFour.php'); ?>

    <?php include('step_cocomoII/stepFive.php'); ?>

    <div style="overflow:auto;">
      <div style="float:right;">
        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button type="button" id="nextBtn" name="submitDataCocomo" onclick="nextPrev(1)">Next</button>
      </div>
    </div>

    <div style="text-align:center;margin-top:40px;">
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>

      <p>&copy; 2019 LUG</p>
    </div>
  </form>

  <?php } ?>

</body>

<script src="js/formPagination.js"></script>
<script src="js/cocomoII.js"></script>

</html>
<?php 
}
?>