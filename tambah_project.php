<?php 
session_start();
include 'proses_php/koneksi.php';
if(isset($_SESSION['username'])==""){
    echo "<script>window.open('login.php?pesan=belum_login','_self')</script>";
    } else { 
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="style/css/style.css" rel="stylesheet">

<head>
  <link rel="shortcut icon" href="image/logo_stikom_warna.png" type="image/png">
  <meta name="Author" content="Eko Febri Harsono">
  <meta name="description" content="COCOMO II">
  <meta name="keywords"
    content="COCOMO tool, COCOMO Suite tool, COCOMO, COCOMO II - Constructive Cost Model, COCOMO Suite of Constructive Cost Models, Expert COSYSMO - Systems Engineering Cost Model Risk Advisor, ODC COQUALMO - Orthogonal Defect Classification Constructive Quality Model, COSYSMO, COSYSMO and COCOMO Cost Models with Monte Carlo Risk Analysis, software cost estimation, systems cost estimation, cost estimation, Ray Madachy, Raymond Madachy">
</head>

<body>

  <?php include('navbar.php'); ?>

  <div id="regForm">
    <h1>New Project</h1>
    <div class="tab">
      <table border="0">
        <tr>
          <td colspan="2">
            Nama Project
          </td>
        </tr>
        <tr>
          <form action="proses_php/prosesTambahProject.php" method="post">
            <?php if(isset($_GET['project'])){ 
              $idProject = $_GET['project'];
              
              $_SESSION['project'] = $_GET['project'];
              $sql = "select * from project where id_project='$idProject'";
              $data = mysqli_query($con,$sql);
              $row = mysqli_fetch_array($data);
              $isAvaiable = false;

              if ($row['id_project']!=""){
                $isAvaiable = true;
              }  else {
                $isAvaiable = false;
              }
              ?>
            <td><input placeholder="Nama Project" value="<?php echo $row['nama_project']; ?>" type="text"
                oninput="this.className = ''" name="namaProject"></td>
            <td>
              <input readonly hidden value="<?php echo $row['id_project']; ?>" type="text" oninput="this.className = ''"
                name="idProject">
              <button type="submit" name="submitEditProject">Edit</button></td>
            <?php } else { ?>
            <td><input placeholder="Nama Project" type="text" oninput="this.className = ''" name="namaProject"></td>
            <td><button type="submit" name="submitNewProject">Submit</button></td>
            <?php } ?>
          </form>
        </tr>
      </table>

      <hr>

      <?php if(isset($_GET['project'])){ ?>
      <table border="0">
        <tr>
          <td colspan="2">
            Nama Modul
          </td>
        </tr>
        <tr>
          <form action="proses_php/prosesTambahModul.php" method="post">
            <td>
              <input placeholder="Nama Modul" type="text" oninput="this.className = ''" name="namaModul">
              <input placeholder="Nama Modul" type="text" oninput="this.className = ''" name="idProject" hidden readonly
                value="<?php echo @$_GET['project']; ?>">
            </td>
            <?php if($isAvaiable){ ?>
            <td><button type="submit" name="submitNewModul">Tambah</button></td>
            <?php } ?>
          </form>
        </tr>
      </table>

      <?php } ?>

      <br>


      <?php 
        if(isset($_GET['project'])){ 
           $idProject = $_GET['project'];
           
           $_SESSION['project'] = $_GET['project'];
           $sql = "select * from modul where id_project='$idProject'";
           $data = mysqli_query($con,$sql);
           $no = 0;
           $isAllCounted = false;
           ?>
      <table border="1" style="width: auto;">
        <tr>
          <td>
            <center>No.</center>
          </td>
          <td>
            <center>Nama Modul</center>
          </td>
          <td>
            <center>Total</center>
          </td>
          <td colspan="2">
            <center>Aksi</center>
          </td>
        </tr>

        <?php 
           while($d = mysqli_fetch_array($data)){
            $no++;
          ?>
        <tr>
          <td>
            <center><?php echo $no; ?></center>
          </td>
          <td><?php echo $d['nama_modul']; ?></td>
          <td>
            <center><?php echo $d['total']; ?></center>
          </td>
          <td>
            <form action="cocomoii.php" method="post">
              <input hidden type="text" name="project" value="<?php echo $d['id_project']; ?>">
              <input hidden type="text" name="nama_modul" value="<?php echo $d['nama_modul']; ?>">
              <input hidden type="text" name="id_modul" value="<?php echo $d['id_modul']; ?>">
              <?php if ($d['status']==1){ $isAllCounted = true; ?>
              <button type="submit" name="submitEditData">Edit Data</button>
              <?php } else { $isAllCounted = false; ?>
              <button type="submit" name="submitIsiData">Isi Data</button>
              <?php } ?>
            </form>
          </td>
          <td>
            <form action="proses_php/prosesTambahModul.php" method="post">
              <input hidden type="text" name="idModul" value="<?php echo $d['id_modul']; ?>">
              <input hidden type="text" name="idProject" value="<?php echo $d['id_project']; ?>">
              <button type="submit" name="submitDeleteModul" style="background-color: #df2929;">Delete</button>
            </form>
          </td>
        </tr>
        <?php } ?>

        <?php if ($isAllCounted) { ?>
        <tr>
          <td>
            <form action="step_cocomoII/viewResult.php" method="post">

              <input hidden type="text" name="idProject" value="<?php echo $idProject; ?>">
              <button type="submit">View Result</button>
            </form>
          </td>
        </tr>
        <?php } ?>

      </table>
      <table>
        <tr>
          <td>Profit </td>
        </tr>
        <tr>
          <td>
            <input type="number" name="profit" value="0" id="profit">
          </td>

          <?php if($isAvaiable){ ?>
          <td><button type="submit" name="submitProfit">Tambah</button></td>
          <?php } ?>

        </tr>
      </table>
      <hr>
      <table>
        <tr>
          <td>Total Proyek </td>
        </tr>
        <tr>
          <td>
            <input type="text" readonly name="totalProyek" value="0" id="profit">
          </td>
        </tr>
      </table>
    </div>

    <?php } ?>

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