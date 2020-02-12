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

  <?php include('navbar.php');
    if(isset($_POST['project'])!=''){ ?>

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
              <form id="regBox" method="GET" action="https://en.wikipedia.org/wiki/COCOMO">
                <h6>Module</h6>
                <h5 class="text-warning"><?php echo $_POST['nama_modul']; ?></h5>
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <form id="regInfo" method="GET" action="https://en.wikipedia.org/wiki/COCOMO">

                <h1 class="text-warning">Documentation</h1>

                <a href="#modal1" class="text-warning stretched-link" data-toggle="modal" data-target="#modal1">1.
                  UFP</a>
                <br>
                <a href="#modal2" class="text-warning stretched-link" data-toggle="modal" data-target="#modal2">2.
                  SLOC</a>
                <br>
                <a href="#modal3" class="text-warning stretched-link" data-toggle="modal" data-target="#modal3">3.
                  SF</a>
                <br>
                <a href="#modal4" class="text-warning stretched-link" data-toggle="modal" data-target="#modal4">4.
                  EM</a>
                <br>
                <a href="#modal5" class="text-warning stretched-link" data-toggle="modal" data-target="#modal5">5.
                  Activity</a>
                <br>
                <a href="#modal6" class="text-warning stretched-link" data-toggle="modal" data-target="#modal6">6.
                  Salary</a>
                <br>
                <a href="#modal7" class="text-warning stretched-link" data-toggle="modal" data-target="#modal7">7.
                  Cost Per Activity</a>
                <br>
                <a href="#modal8" class="text-warning stretched-link" data-toggle="modal" data-target="#modal8">8.
                  Profit</a>
                <br>
                <a href="#modal9" class="text-warning stretched-link" data-toggle="modal" data-target="#modal9">9.
                  Non Personnel Direct Cost</a>
                <br>
                <a href="#modal10" class="text-warning stretched-link" data-toggle="modal" data-target="#modal10">10.
                  Tax</a>
<hr>
                  <a href="http://www.dmi.usherb.ca/~frappier/IFT721/COCOMOII.PDF" target = '_blank' rel="noopener noreferrer" class="text-warning stretched-link" >
                  Manual COCOMO II</a>

                <?php include('modal_documentaion/modal_ufp.php'); ?>
                <?php include('modal_documentaion/modal_sloc.php'); ?>
                <?php include('modal_documentaion/modal_sf.php'); ?>
                <?php include('modal_documentaion/modal_em.php'); ?>
                <?php include('modal_documentaion/modal_activity.php'); ?>
                <?php include('modal_documentaion/modal_salary.php'); ?>
                <?php include('modal_documentaion/modal_cost_activity.php'); ?>
                <?php include('modal_documentaion/modal_profit.php'); ?>
                <?php include('modal_documentaion/modal_non_personnel.php'); ?>
                <?php include('modal_documentaion/modal_tax.php'); ?>

              </form>
            </div>
            <!-- <div class="col-12">
              <form id="regInfo" method="GET" action="https://en.wikipedia.org/wiki/COCOMO">

                <h1 class="text-warning">Information</h1>

                <center> <a href="#modalPerhitungan" class="text-warning stretched-link" data-toggle="modal"
                    data-target="#modalPerhitungan">Lihat Detail Perhitungan</a>
                </center>
                <table hidden class="table">
                  <tr>
                    <td>
                      Total UFP
                    </td>
                    <td>
                      <p id="resultTotalUFP">0</p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Size in SLOC
                    </td>
                    <td>
                      <p id="resultTotalSize">0</p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Scale Factor
                    </td>
                    <td>
                      <p id="resultTotalScaleFactor">0</p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Total Effort Multiplier
                    </td>
                    <td>
                      <p id="resultTotalEffortMultiplier">0</p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Person Month
                    </td>
                    <td>
                      <p id="resultTotalPersonMonth">0</p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      total Method
                    </td>
                    <td>
                      <p id="resultTotalMethod">0</p>
                    </td>
                  </tr>
                </table>
                <div style="text-align:center;margin-top:40px;">
                  <p>&copy; 2019 LUG by <a href="https://github.com/ekofebriharsono"
                      class="text-warning stretched-link">Maseko</a></p>
                </div>
              </form>
            </div> -->
            <div class="col-12">
              <form id="regInfo" method="GET" action="javascript:history.back()">
                <center> <button type="submit" name="submitDeleteProject"
                    style="background-color: #df2929; color:white;">Cancel</button></center>
              </form>
            </div>
          </div>

        </div>
      </div>
      <div class="col-8">
        <div class="box-content">
          <div class="row">
            <div class="col-12">
              <form id="regBoxModuleRumus" action="proses_php/prosesSimpanDataPerModul.php" method="post">
                <input hidden type="text" name="id_modul" value="<?php echo $_POST['id_modul']; ?>">
                <input hidden type="text" name="id_project" value="<?php echo $_POST['project']; ?>">

                <?php include('step_cocomoII/stepOne.php'); ?>

                <?php include('step_cocomoII/stepTwo.php'); ?>

                <?php include('step_cocomoII/stepThree.php'); ?>

                <?php include('step_cocomoII/stepFour.php'); ?>

                <?php include('step_cocomoII/stepFive.php'); ?>

                <?php include('step_cocomoII/stepSix.php'); ?>

                <?php include('step_cocomoII/stepSeven.php'); ?>

                <?php include('step_cocomoII/stepEight.php'); ?>

                <?php include('step_cocomoII/stepNine.php'); ?>

                <?php include('step_cocomoII/stepTen.php'); ?>

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
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
</body>

<script src="js/formPagination.js"></script>
<script src="js/cocomoII.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

</html>
<?php 
}
?>