<?php 
session_start();
include 'proses_php/koneksi.php';
if(isset($_SESSION['username'])==""){
    echo "<script>window.open('login.php?pesan=belum_login','_self')</script>";
    } else { ?>
<!DOCTYPE html>
<html>
<link rel="shortcut icon" href="image/logo_stikom_warna.png" type="image/png">
<link href="style/css/style.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
                    <p class="text-justify">Projects are historical features or registered projects that have been
                      calculated or not yet counted will be saved into the system</p>
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
      <div class="col-8">
        <div class="box-content">
          <div id="regForm">
            <h1>PROJECT COCOMO II</h1>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for project name.." title="Type in a name">
            
            <hr>
            
            <table class="table table-hover" id="myTable">
              <thead>
                <tr>
                  <th>
                    <center><b>No.</b></center>
                  </th>
                  <th>
                    <center><b>Project Name</b></center>
                  </th>
                  <th colspan="2">
                    <center><b>Action</b></center>
                  </th>
                </tr>
              </thead>
              <?php 
                $id_user =  $_SESSION['id_user'];
                $sql = "select * from project where id_user='$id_user'";
                $data = mysqli_query($con,$sql);
                $no = 0;
                while($d = mysqli_fetch_array($data)){
                  $no++; ?>
              <tr>
                <td>
                  <center><?php echo $no; ?></center>
                </td>
                <td><?php echo $d['nama_project']; ?></td>
                <td>
                  <form action="tambah_project.php" method="get">
                    <input hidden type="text" name="project" value="<?php echo $d['id_project']; ?>">
                    <button type="submit">Change Data</button>
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
                  <button type="submit">Add New Project</button>
                </form>
              </div>
            </div>
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

<script>
  function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

</html>
<?php 
}
?>