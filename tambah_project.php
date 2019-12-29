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
                                <h1 class="text-warning">Infomation</h1>
                                <div class="tab1">
                                </div>
                                <div style="overflow:auto;">
                                    <div style="float:right;">
                                        <p class="text-justify">New Project is a feature of adding or editing projects
                                            and modules to calculate or determine the estimated total cost of developing
                                            a software project using the COCOMO II method</p>
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
                    <div class="row">
                        <div class="col-6">
                            <form id="regBox" method="POST" action="proses_php/prosesTambahProject.php">
                                <h6>Project Name</h6>
                                <table border="0">
                                    <tr>
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
                                        <td><input placeholder="Project Name"
                                                value="<?php echo $row['nama_project']; ?>" type="text"
                                                oninput="this.className = ''" name="namaProject"></td>
                                        <td>
                                            <input readonly hidden value="<?php echo $row['id_project']; ?>" type="text"
                                                oninput="this.className = ''" name="idProject">
                                            <button type="submit" name="submitEditProject">Change</button></td>
                                        <?php } else { ?>
                                        <td><input placeholder="Project Name" type="text" oninput="this.className = ''"
                                                name="namaProject"></td>
                                        <td><button type="submit" name="submitNewProject">Submit</button></td>
                                        <?php } ?>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <div class="col-6">
                            <form id="regBox" method="POST" action="#">
                                <h6>Total</h6>
                                <h5 class="text-warning">Rp. 1.000.000.000</h5>
                            </form>
                        </div>
                    </div>
                </div>
                <?php if(isset($_GET['project'])){      
                                if($isAvaiable){ ?>
                <div class="box-content">
                    <div class="row">
                        <div class="col-6">
                            <div id="regBox">
                                <h6>Module Name</h6>
                                <table border="0">
                                    <tr>
                                        <form action="proses_php/prosesTambahModul.php" method="post">
                                            <td>
                                                <input placeholder="Module Name" type="text"
                                                    oninput="this.className = ''" name="namaModul">
                                                <input placeholder="Nama Modul" type="text"
                                                    oninput="this.className = ''" name="idProject" hidden readonly
                                                    value="<?php echo @$_GET['project']; ?>">
                                            </td>
                                            <td><button type="submit" name="submitNewModul">Add</button></td>
                                        </form>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="regBox">
                                <h6>Profit</h6>
                                <table border="0">
                                    <tr>
                                        <form action="#" method="post">
                                            <td>
                                                <input placeholder="Profit" type="number" oninput="this.className = ''"
                                                    name="profit">
                                                <input placeholder="Nama Modul" type="text"
                                                    oninput="this.className = ''" name="idProject" hidden readonly
                                                    value="<?php echo @$_GET['project']; ?>">
                                            </td>
                                            <td><button type="submit" name="submitProfit">Save</button></td>
                                        </form>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="box-content">
                        <div class="row">
                            <div class="col-12">
                                <div id="regBoxModuleData">
                                    <h6>Modoule Data</h6>
                                    <?php 
                                        if(isset($_GET['project'])){ 
                                        $idProject = $_GET['project'];
                                        
                                        $_SESSION['project'] = $_GET['project'];
                                        $sql = "select * from modul where id_project='$idProject'";
                                        $data = mysqli_query($con,$sql);
                                        $no = 0;
                                        $isAllCounted = false;
                                        ?>
                                    <table class="table table-hover">
                                        <tr>
                                            <td>
                                                <center>No</center>
                                            </td>
                                            <td>
                                                <center>Module Name</center>
                                            </td>
                                            <td>
                                                <center>Total</center>
                                            </td>
                                            <td colspan="2">
                                                <center>Action</center>
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
                                                    <input hidden type="text" name="project"
                                                        value="<?php echo $d['id_project']; ?>">
                                                    <input hidden type="text" name="nama_modul"
                                                        value="<?php echo $d['nama_modul']; ?>">
                                                    <input hidden type="text" name="id_modul"
                                                        value="<?php echo $d['id_modul']; ?>">
                                                    <?php if ($d['status']==1){ $isAllCounted = true; ?>
                                                    <button type="submit" name="submitEditData">Change Data</button>
                                                    <?php } else { $isAllCounted = false; ?>
                                                    <button type="submit" name="submitIsiData">Add Data</button>
                                                    <?php } ?>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="proses_php/prosesTambahModul.php" method="post">
                                                    <input hidden type="text" name="idModul"
                                                        value="<?php echo $d['id_modul']; ?>">
                                                    <input hidden type="text" name="idProject"
                                                        value="<?php echo $d['id_project']; ?>">
                                                    <button type="submit" name="submitDeleteModul"
                                                        style="background-color: #df2929;">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php } ?>

                                        <?php if ($isAllCounted) { ?>
                                        <tr>
                                            <td>
                                                <form action="step_cocomoII/viewResult.php" method="post">

                                                    <input hidden type="text" name="idProject"
                                                        value="<?php echo $idProject; ?>">
                                                    <button type="submit">View Result</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </table>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } } else { ?>
            <div class="box-content">
                <div class="col-12">
                    <div id="regForm">
                        <h1>COCOMO II</h1>
                        <div style="text-align:center;margin-top:40px;">
                            <p>&copy; 2019 LUG by <a href="https://github.com/ekofebriharsono"
                                    class="text-warning stretched-link">Maseko</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php   }?>
        </div>
    </div>
    </div>

</body>

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