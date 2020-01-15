<?php 
session_start();
include '../proses_php/koneksi.php';

$idProject = $_SESSION['project'];
$namaProject = "";

$sql = "SELECT nama_project from project where id_project='$idProject'";
$res = mysqli_query($con,$sql);
if ($res){
    $row = mysqli_fetch_array($res);
    $namaProject = $row['nama_project'];
}

if(isset($_SESSION['username'])==""){
    echo "<script>window.open('login.php?pesan=belum_login','_self')</script>";
    } else { 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result</title>

    <style type="text/css">
        body {
            font-family: Calibri;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid #3c3c3c;
            padding: 3px 8px;

        }

        a {
            background: blue;
            color: #fff;
            padding: 8px 10px;
            text-decoration: none;
            border-radius: 2px;
        }
    </style>
</head>

<body>

    <?php  if(isset($_GET['excel'])=="true"){
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Pegawai.xls");
 } ?>

    <center>
        <h1>Result Data Proyek <?php echo $namaProject; ?><br /></h1>
    </center>
    <?php  if(!isset($_GET['excel'])){ ?>
    <center>
        <a href="viewResult.php?excel=true">EXPORT KE EXCEL</a>
    </center>

    <?php } ?>
    <?php 
                $idUser = $_SESSION['id_user'];
                $totalModul = 0;
                $sql = "SELECT COUNT(modul.id_modul) as totalmodul
                FROM project   
                INNER JOIN modul  
                ON project.id_project = modul.id_project WHERE project.id_project='$idProject'";
                $res = mysqli_query($con,$sql);
                $result = mysqli_num_rows($res);
                if($res){
                  if($result > 0){
                    $row = mysqli_fetch_array($res);
                    $totalModul = $row['totalmodul'];
                  }
                }
            ?>

    <table border="1">
        <tr>
            <td rowspan="2">
                <center><b>User Function Type</b></center>
            </td>
            <td rowspan="2">
                <center><b>Level of Complexity</b></center>
            </td>
            <td colspan="<?php echo $totalModul; ?>">
                <center><b>Modul-ID</b></center>
            </td>
        </tr>
        <tr>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul as idmodul
                FROM project   
                INNER JOIN modul  
                ON project.id_project = modul.id_project WHERE project.id_project='$idProject'";
                $res = mysqli_query($con,$sql);
                $no = 0;
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        $no++; ?>
            <td>
                <center><b><?php echo $no; ?></b></center>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td rowspan="4">ILF</td>
        </tr>
        <tr>
            <td>Low</td>
            <?php 

$idUser = $_SESSION['id_user'];
$sql = "SELECT ufp_complexity_weight.low FROM 
project 
INNER JOIN modul 
ON project.id_project = modul.id_project 
INNER JOIN ufp_complexity_weight 
ON modul.id_modul = ufp_complexity_weight.id_modul 
WHERE project.id_project='$idProject' and ufp_complexity_weight.id_ufp = 'ilf_ufp'";
$res = mysqli_query($con,$sql);
if($res){
    while($d = mysqli_fetch_array($res)){ 
 echo '<td>'.$d['low'].'</td>'; 
}
}

?>
        </tr>
        <tr>
            <td>Average</td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT ufp_complexity_weight.average FROM 
                project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN ufp_complexity_weight 
                ON modul.id_modul = ufp_complexity_weight.id_modul 
                WHERE project.id_project='$idProject' and ufp_complexity_weight.id_ufp = 'ilf_ufp'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['average']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>Height</td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT ufp_complexity_weight.height FROM 
                project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN ufp_complexity_weight 
                ON modul.id_modul = ufp_complexity_weight.id_modul 
                WHERE project.id_project='$idProject' and ufp_complexity_weight.id_ufp = 'ilf_ufp'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['height']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td rowspan="4">EIF</td>
        </tr>
        <tr>
            <td>Low</td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT ufp_complexity_weight.low FROM 
                project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN ufp_complexity_weight 
                ON modul.id_modul = ufp_complexity_weight.id_modul 
                WHERE project.id_project='$idProject' and ufp_complexity_weight.id_ufp = 'eif_ufp'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['low']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>Average</td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT ufp_complexity_weight.average FROM 
                project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN ufp_complexity_weight 
                ON modul.id_modul = ufp_complexity_weight.id_modul 
                WHERE project.id_project='$idProject' and ufp_complexity_weight.id_ufp = 'eif_ufp'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['average']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>Height</td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT ufp_complexity_weight.height FROM 
                project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN ufp_complexity_weight 
                ON modul.id_modul = ufp_complexity_weight.id_modul 
                WHERE project.id_project='$idProject' and ufp_complexity_weight.id_ufp = 'eif_ufp'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['height']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td rowspan="4">EI</td>
        </tr>
        <tr>
            <td>Low</td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT ufp_complexity_weight.low FROM 
                project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN ufp_complexity_weight 
                ON modul.id_modul = ufp_complexity_weight.id_modul 
                WHERE project.id_project='$idProject' and ufp_complexity_weight.id_ufp = 'ei_ufp'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['low']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>Average</td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT ufp_complexity_weight.average FROM 
                project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN ufp_complexity_weight 
                ON modul.id_modul = ufp_complexity_weight.id_modul 
                WHERE project.id_project='$idProject' and ufp_complexity_weight.id_ufp = 'ei_ufp'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['average']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>Height</td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT ufp_complexity_weight.height FROM 
                project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN ufp_complexity_weight 
                ON modul.id_modul = ufp_complexity_weight.id_modul 
                WHERE project.id_project='$idProject' and ufp_complexity_weight.id_ufp = 'ei_ufp'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['height']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td rowspan="4">EO</td>
        </tr>
        <tr>
            <td>Low</td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT ufp_complexity_weight.low FROM 
                project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN ufp_complexity_weight 
                ON modul.id_modul = ufp_complexity_weight.id_modul 
                WHERE project.id_project='$idProject' and ufp_complexity_weight.id_ufp = 'eo_ufp'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['low']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>Average</td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT ufp_complexity_weight.average FROM 
                project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN ufp_complexity_weight 
                ON modul.id_modul = ufp_complexity_weight.id_modul 
                WHERE project.id_project='$idProject' and ufp_complexity_weight.id_ufp = 'eo_ufp'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['average']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>Height</td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT ufp_complexity_weight.height FROM 
                project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN ufp_complexity_weight 
                ON modul.id_modul = ufp_complexity_weight.id_modul 
                WHERE project.id_project='$idProject' and ufp_complexity_weight.id_ufp = 'eo_ufp'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['height']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td rowspan="4">EQ</td>
        </tr>
        <tr>
            <td>Low</td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT ufp_complexity_weight.low FROM 
                project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN ufp_complexity_weight 
                ON modul.id_modul = ufp_complexity_weight.id_modul 
                WHERE project.id_project='$idProject' and ufp_complexity_weight.id_ufp = 'eq_ufp'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['low']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>Average</td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT ufp_complexity_weight.average FROM 
                project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN ufp_complexity_weight 
                ON modul.id_modul = ufp_complexity_weight.id_modul 
                WHERE project.id_project='$idProject' and ufp_complexity_weight.id_ufp = 'eq_ufp'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['average']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>Height</td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT ufp_complexity_weight.height FROM 
                project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN ufp_complexity_weight 
                ON modul.id_modul = ufp_complexity_weight.id_modul 
                WHERE project.id_project='$idProject' and ufp_complexity_weight.id_ufp = 'eq_ufp'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['height']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
    </table>


    <hr>


    <table border="1">
        <tr>
            <td rowspan="2">
                <center><b>User Function Type</b></center>
            </td>
            <td rowspan="2">
                <center><b>Level of Complexity</b></center>
            </td>
            <td colspan="<?php echo $totalModul; ?>">
                <center><b>Modul-ID</b></center>
            </td>
        </tr>
        <tr>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul as idmodul
                FROM project   
                INNER JOIN modul  
                ON project.id_project = modul.id_project WHERE project.id_project='$idProject'";
                $res = mysqli_query($con,$sql);
                $no = 0;
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        $no++; ?>
            <td>
                <center><b><?php echo $no; ?></b></center>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td rowspan="4">ILF</td>
        </tr>
        <tr>
            <td>Low</td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT ufp_complexity_weight.low FROM 
                project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN ufp_complexity_weight 
                ON modul.id_modul = ufp_complexity_weight.id_modul 
                WHERE project.id_project='$idProject' and ufp_complexity_weight.id_ufp = 'ilf_ufp'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['low']*7; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>Average</td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT ufp_complexity_weight.average FROM 
                project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN ufp_complexity_weight 
                ON modul.id_modul = ufp_complexity_weight.id_modul 
                WHERE project.id_project='$idProject' and ufp_complexity_weight.id_ufp = 'ilf_ufp'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['average']*10; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>Height</td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT ufp_complexity_weight.height FROM 
                project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN ufp_complexity_weight 
                ON modul.id_modul = ufp_complexity_weight.id_modul 
                WHERE project.id_project='$idProject' and ufp_complexity_weight.id_ufp = 'ilf_ufp'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['height']*15; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td rowspan="4">EIF</td>
        </tr>
        <tr>
            <td>Low</td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT ufp_complexity_weight.low FROM 
                project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN ufp_complexity_weight 
                ON modul.id_modul = ufp_complexity_weight.id_modul 
                WHERE project.id_project='$idProject' and ufp_complexity_weight.id_ufp = 'eif_ufp'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['low']*5; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>Average</td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT ufp_complexity_weight.average FROM 
                project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN ufp_complexity_weight 
                ON modul.id_modul = ufp_complexity_weight.id_modul 
                WHERE project.id_project='$idProject' and ufp_complexity_weight.id_ufp = 'eif_ufp'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['average']*7; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>Height</td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT ufp_complexity_weight.height FROM 
                project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN ufp_complexity_weight 
                ON modul.id_modul = ufp_complexity_weight.id_modul 
                WHERE project.id_project='$idProject' and ufp_complexity_weight.id_ufp = 'eif_ufp'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['height']*10; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td rowspan="4">EI</td>
        </tr>
        <tr>
            <td>Low</td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT ufp_complexity_weight.low FROM 
                project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN ufp_complexity_weight 
                ON modul.id_modul = ufp_complexity_weight.id_modul 
                WHERE project.id_project='$idProject' and ufp_complexity_weight.id_ufp = 'ei_ufp'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['low']*3; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>Average</td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT ufp_complexity_weight.average FROM 
                project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN ufp_complexity_weight 
                ON modul.id_modul = ufp_complexity_weight.id_modul 
                WHERE project.id_project='$idProject' and ufp_complexity_weight.id_ufp = 'ei_ufp'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['average']*4; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>Height</td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT ufp_complexity_weight.height FROM 
                project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN ufp_complexity_weight 
                ON modul.id_modul = ufp_complexity_weight.id_modul 
                WHERE project.id_project='$idProject' and ufp_complexity_weight.id_ufp = 'ei_ufp'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['height']*6; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td rowspan="4">EO</td>
        </tr>
        <tr>
            <td>Low</td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT ufp_complexity_weight.low FROM 
                project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN ufp_complexity_weight 
                ON modul.id_modul = ufp_complexity_weight.id_modul 
                WHERE project.id_project='$idProject' and ufp_complexity_weight.id_ufp = 'eo_ufp'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['low']*4; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>Average</td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT ufp_complexity_weight.average FROM 
                project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN ufp_complexity_weight 
                ON modul.id_modul = ufp_complexity_weight.id_modul 
                WHERE project.id_project='$idProject' and ufp_complexity_weight.id_ufp = 'eo_ufp'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['average']*5; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>Height</td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT ufp_complexity_weight.height FROM 
                project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN ufp_complexity_weight 
                ON modul.id_modul = ufp_complexity_weight.id_modul 
                WHERE project.id_project='$idProject' and ufp_complexity_weight.id_ufp = 'eo_ufp'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['height']*7; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td rowspan="4">EQ</td>
        </tr>
        <tr>
            <td>Low</td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT ufp_complexity_weight.low FROM 
                project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN ufp_complexity_weight 
                ON modul.id_modul = ufp_complexity_weight.id_modul 
                WHERE project.id_project='$idProject' and ufp_complexity_weight.id_ufp = 'eq_ufp'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['low']*3; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>Average</td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT ufp_complexity_weight.average FROM 
                project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN ufp_complexity_weight 
                ON modul.id_modul = ufp_complexity_weight.id_modul 
                WHERE project.id_project='$idProject' and ufp_complexity_weight.id_ufp = 'eq_ufp'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['average']*4; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>Height</td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT ufp_complexity_weight.height FROM 
                project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN ufp_complexity_weight 
                ON modul.id_modul = ufp_complexity_weight.id_modul 
                WHERE project.id_project='$idProject' and ufp_complexity_weight.id_ufp = 'eq_ufp'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['height']*6; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td colspan="2"><b>TOTAL (UFP)</b></td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul, ufp_complexity_weight.low, ufp_complexity_weight.average, ufp_complexity_weight.height, ufp_user.value FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN ufp_complexity_weight 
                ON modul.id_modul = ufp_complexity_weight.id_modul 
                INNER JOIN ufp_user 
                ON modul.id_modul = ufp_user.id_modul 
                WHERE project.id_project='$idProject' and ufp_complexity_weight.id_ufp = 'ei_ufp'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
    </table>

    <hr>

    <table border="1">
        <tr>
            <td>
                <b>Modul-ID</b>
            </td>
            <td>
                <b>UFP</b>
            </td>
            <td>
                <b>SLOC COnvertion Ratio</b>
            </td>
            <td>
                <b>Size in SLOC</b>
            </td>
            <td>
                <b>Size in KSLOC</b>
            </td>
        </tr>

        <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul, ufp_user.value, size_user.sloc_convertion_ratio, size_user.size_in_sloc FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN ufp_user 
                ON modul.id_modul = ufp_user.id_modul 
                INNER JOIN size_user 
                ON modul.id_modul = size_user.id_modul WHERE project.id_project='$idProject'";
                $res = mysqli_query($con,$sql);
                $no = 0;
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        $no++;
                        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $d['value']; ?></td>
            <td><?php echo $d['sloc_convertion_ratio']; ?></td>
            <td><?php echo $d['size_in_sloc']; ?></td>
            <td><?php echo $d['size_in_sloc']/1000; ?></td>
        </tr>
        <?php
                }
            }
            ?>

    </table>

    <hr>

    <table border="1">
        <tr>
            <td rowspan="2">
                <center><b>Scale Factor</b></center>
            </td>
            <td colspan="<?php echo $totalModul; ?>">
                <center><b>Modul-ID</b></center>
            </td>
        </tr>

        <tr>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul as idmodul   
                FROM project  
                INNER JOIN modul  
                ON project.id_project = modul.id_project WHERE project.id_project='$idProject'";
                $res = mysqli_query($con,$sql);
                $no = 0;
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        $no++; ?>
            <td>
                <center><b><?php echo $no; ?></b></center>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                PREC
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul, sf_user.value FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN sf_user 
                ON modul.id_modul = sf_user.id_modul 
                WHERE project.id_project='$idProject' and sf_user.id_sf = 'prec'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                FLEX
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul, sf_user.value FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN sf_user 
                ON modul.id_modul = sf_user.id_modul 
                WHERE project.id_project='$idProject' and sf_user.id_sf = 'flex'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                RESL
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul, sf_user.value FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN sf_user 
                ON modul.id_modul = sf_user.id_modul 
                WHERE project.id_project='$idProject' and sf_user.id_sf = 'resl'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                TEAM
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul, sf_user.value FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN sf_user 
                ON modul.id_modul = sf_user.id_modul 
                WHERE project.id_project='$idProject' and sf_user.id_sf = 'team'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                PMAT
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul, sf_user.value FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN sf_user 
                ON modul.id_modul = sf_user.id_modul 
                WHERE project.id_project='$idProject' and sf_user.id_sf = 'pmat'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
    </table>

    <hr>

    <table border="1">
        <tr>
            <td><b>Modul-ID</b></td>
            <td><b>E</b></td>
        </tr>

        <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul, e_user.value FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN e_user 
                ON modul.id_modul = e_user.id_modul 
                WHERE project.id_project='$idProject'";
                $res = mysqli_query($con,$sql);
                $no = 0;
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        $no++;
                        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $d['value']; ?></td>
        </tr>
        <?php
                }
            }
            ?>
    </table>

    <hr>

    <table border="1">
        <tr>
            <td rowspan="2">
                <center><b>Effort Multiplier</b></center>
            </td>
            <td colspan="<?php echo $totalModul; ?>">
                <center><b>Modul-ID</b></center>
            </td>
        </tr>

        <tr>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul as idmodul   
                FROM project  
                INNER JOIN modul  
                ON project.id_project = modul.id_project WHERE project.id_project='$idProject'";
                $res = mysqli_query($con,$sql);
                $no = 0;
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        $no++; ?>
            <td>
                <center><b><?php echo $no; ?></b></center>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                RELY
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul, em_user.value FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN em_user 
                ON modul.id_modul = em_user.id_modul 
                WHERE project.id_project='$idProject' and em_user.id_em = 'rely'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                DATA
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul, em_user.value FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN em_user 
                ON modul.id_modul = em_user.id_modul 
                WHERE project.id_project='$idProject' and em_user.id_em = 'data'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                CPLX
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul, em_user.value FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN em_user 
                ON modul.id_modul = em_user.id_modul 
                WHERE project.id_project='$idProject' and em_user.id_em = 'cplx'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                RUSE
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul, em_user.value FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN em_user 
                ON modul.id_modul = em_user.id_modul 
                WHERE project.id_project='$idProject' and em_user.id_em = 'ruse'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                DOCU
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul, em_user.value FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN em_user 
                ON modul.id_modul = em_user.id_modul 
                WHERE project.id_project='$idProject' and em_user.id_em = 'docu'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                TIME
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul, em_user.value FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN em_user 
                ON modul.id_modul = em_user.id_modul 
                WHERE project.id_project='$idProject' and em_user.id_em = 'time'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                STOR
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul, em_user.value FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN em_user 
                ON modul.id_modul = em_user.id_modul 
                WHERE project.id_project='$idProject' and em_user.id_em = 'stor'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                PVOL
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul, em_user.value FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN em_user 
                ON modul.id_modul = em_user.id_modul 
                WHERE project.id_project='$idProject' and em_user.id_em = 'pvol'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                ACAP
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul, em_user.value FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN em_user 
                ON modul.id_modul = em_user.id_modul 
                WHERE project.id_project='$idProject' and em_user.id_em = 'acap'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                PCAP
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul, em_user.value FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN em_user 
                ON modul.id_modul = em_user.id_modul 
                WHERE project.id_project='$idProject' and em_user.id_em = 'pcap'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                PCON
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul, em_user.value FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN em_user 
                ON modul.id_modul = em_user.id_modul 
                WHERE project.id_project='$idProject' and em_user.id_em = 'pcon'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                APEX
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul, em_user.value FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN em_user 
                ON modul.id_modul = em_user.id_modul 
                WHERE project.id_project='$idProject' and em_user.id_em = 'apex'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                PLEX
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul, em_user.value FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN em_user 
                ON modul.id_modul = em_user.id_modul 
                WHERE project.id_project='$idProject' and em_user.id_em = 'plex'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                LTEX
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul, em_user.value FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN em_user 
                ON modul.id_modul = em_user.id_modul 
                WHERE project.id_project='$idProject' and em_user.id_em = 'ltex'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                TOOL
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul, em_user.value FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN em_user 
                ON modul.id_modul = em_user.id_modul 
                WHERE project.id_project='$idProject' and em_user.id_em = 'tool'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                SITE
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul, em_user.value FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN em_user 
                ON modul.id_modul = em_user.id_modul 
                WHERE project.id_project='$idProject' and em_user.id_em = 'site'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                SCED
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul, em_user.value FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN em_user 
                ON modul.id_modul = em_user.id_modul 
                WHERE project.id_project='$idProject' and em_user.id_em = 'sced'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>

        <tr>
            <td><b>TOTAL (EM)</b></td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT total_em_user.value FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN total_em_user 
                ON modul.id_modul = total_em_user.id_modul 
                WHERE project.id_project='$idProject'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>

    </table>

    <hr>

    <table border="1">
        <tr>
            <td>
                <b>Modul-ID</b>
            </td>
            <td>
                <b>Size (KSLOC)</b>
            </td>
            <td>
                <b>E</b>
            </td>
            <td>
                <b>Total EM</b>
            </td>
            <td>
                <b>Hasil</b>
            </td>
        </tr>

        <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul, size_user.size_in_sloc , e_user.value as valueE, total_em_user.value as valueEM, pm_user.value as valuePM FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN e_user 
                ON modul.id_modul = e_user.id_modul 
                INNER JOIN size_user
                ON modul.id_modul = size_user.id_modul 
                INNER JOIN total_em_user
                ON modul.id_modul = total_em_user.id_modul 
                INNER JOIN pm_user
                ON modul.id_modul = pm_user.id_modul 
                WHERE project.id_project='$idProject'";
                $res = mysqli_query($con,$sql);
                $no = 0;
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        $no++;
                        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $d['size_in_sloc']/1000; ?></td>
            <td><?php echo $d['valueE']; ?></td>
            <td><?php echo $d['valueEM']; ?></td>
            <td><?php echo $d['valuePM']; ?></td>
        </tr>
        <?php
                }
            }
            ?>

    </table>

    <hr>

    <table border="1">
        <tr>
            <td rowspan="2">
                <center><b>No</b></center>
            </td>
            <td rowspan="2">
                <center><b>Activity</b></center>
            </td>
            <td rowspan="2">
                <center><b>%</b></center>
            </td>
            <td colspan="<?php echo $totalModul; ?>">
                <center><b>Modul-ID</b></center>
            </td>
        </tr>
        <tr>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul as idmodul   
                FROM project  
                INNER JOIN modul  
                ON project.id_project = modul.id_project WHERE project.id_project='$idProject'";
                $res = mysqli_query($con,$sql);
                $no = 0;
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        $no++; ?>
            <td>
                <center><b><?php echo $no; ?></b></center>
            </td>
            <?php
                }
            }
            ?>
        </tr>

        <tr>
            <td>
                1
            </td>
            <td>
                Requirement
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $no = 0;
                $sql = "SELECT modul.id_modul, activity_user.persen, activity_user.value  FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN activity_user 
                ON modul.id_modul = activity_user.id_modul 
                WHERE project.id_project='$idProject' and activity_user.id_activity = 'rec'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        $no++;
                        ?>
            <?php if($no == 1){ ?>

            <td>
                <?php echo $d['persen']; ?>
            </td>

            <?php    }

                        ?>

            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                2
            </td>
            <td>
                Specifications
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $no = 0;
                $sql = "SELECT modul.id_modul, activity_user.persen, activity_user.value  FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN activity_user 
                ON modul.id_modul = activity_user.id_modul 
                WHERE project.id_project='$idProject' and activity_user.id_activity = 'spe'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        $no++;
                        ?>
            <?php if($no == 1){ ?>

            <td>
                <?php echo $d['persen']; ?>
            </td>

            <?php    }

                        ?>

            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                3
            </td>
            <td>
                Design
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $no = 0;
                $sql = "SELECT modul.id_modul, activity_user.persen, activity_user.value  FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN activity_user 
                ON modul.id_modul = activity_user.id_modul 
                WHERE project.id_project='$idProject' and activity_user.id_activity = 'des'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        $no++;
                        ?>
            <?php if($no == 1){ ?>

            <td>
                <?php echo $d['persen']; ?>
            </td>

            <?php    }

                        ?>

            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                4
            </td>
            <td>
                Implementation
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $no = 0;
                $sql = "SELECT modul.id_modul, activity_user.persen, activity_user.value  FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN activity_user 
                ON modul.id_modul = activity_user.id_modul 
                WHERE project.id_project='$idProject' and activity_user.id_activity = 'imp'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        $no++;
                        ?>
            <?php if($no == 1){ ?>

            <td>
                <?php echo $d['persen']; ?>
            </td>

            <?php    }

                        ?>

            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                5
            </td>
            <td>
                Integration Testing
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $no = 0;
                $sql = "SELECT modul.id_modul, activity_user.persen, activity_user.value  FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN activity_user 
                ON modul.id_modul = activity_user.id_modul 
                WHERE project.id_project='$idProject' and activity_user.id_activity = 'int'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        $no++;
                        ?>
            <?php if($no == 1){ ?>

            <td>
                <?php echo $d['persen']; ?>
            </td>

            <?php    }

                        ?>

            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                6
            </td>
            <td>
                Acceptance & deployment
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $no = 0;
                $sql = "SELECT modul.id_modul, activity_user.persen, activity_user.value  FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN activity_user 
                ON modul.id_modul = activity_user.id_modul 
                WHERE project.id_project='$idProject' and activity_user.id_activity = 'acc'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        $no++;
                        ?>
            <?php if($no == 1){ ?>

            <td>
                <?php echo $d['persen']; ?>
            </td>

            <?php    }

                        ?>

            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                7
            </td>
            <td>
                Project Management
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $no = 0;
                $sql = "SELECT modul.id_modul, activity_user.persen, activity_user.value  FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN activity_user 
                ON modul.id_modul = activity_user.id_modul 
                WHERE project.id_project='$idProject' and activity_user.id_activity = 'pro'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        $no++;
                        ?>
            <?php if($no == 1){ ?>

            <td>
                <?php echo $d['persen']; ?>
            </td>

            <?php    }

                        ?>

            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                8
            </td>
            <td>
                Configuration Management
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $no = 0;
                $sql = "SELECT modul.id_modul, activity_user.persen, activity_user.value  FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN activity_user 
                ON modul.id_modul = activity_user.id_modul 
                WHERE project.id_project='$idProject' and activity_user.id_activity = 'con'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        $no++;
                        ?>
            <?php if($no == 1){ ?>

            <td>
                <?php echo $d['persen']; ?>
            </td>

            <?php    }

                        ?>

            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                9
            </td>
            <td>
                Quality Assurance
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $no = 0;
                $sql = "SELECT modul.id_modul, activity_user.persen, activity_user.value  FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN activity_user 
                ON modul.id_modul = activity_user.id_modul 
                WHERE project.id_project='$idProject' and activity_user.id_activity = 'qua'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        $no++;
                        ?>
            <?php if($no == 1){ ?>

            <td>
                <?php echo $d['persen']; ?>
            </td>

            <?php    }

                        ?>

            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                10
            </td>
            <td>
                Documentations
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $no = 0;
                $sql = "SELECT modul.id_modul, activity_user.persen, activity_user.value  FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN activity_user 
                ON modul.id_modul = activity_user.id_modul 
                WHERE project.id_project='$idProject' and activity_user.id_activity = 'doc'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        $no++;
                        ?>
            <?php if($no == 1){ ?>

            <td>
                <?php echo $d['persen']; ?>
            </td>

            <?php    }

                        ?>

            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                11
            </td>
            <td>
                Training & support
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $no = 0;
                $sql = "SELECT modul.id_modul, activity_user.persen, activity_user.value  FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN activity_user 
                ON modul.id_modul = activity_user.id_modul 
                WHERE project.id_project='$idProject' and activity_user.id_activity = 'tra'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        $no++;
                        ?>
            <?php if($no == 1){ ?>

            <td>
                <?php echo $d['persen']; ?>
            </td>

            <?php    }

                        ?>

            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td>
                12
            </td>
            <td>
                Evaluation & testing
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $no = 0;
                $sql = "SELECT modul.id_modul, activity_user.persen, activity_user.value  FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN activity_user 
                ON modul.id_modul = activity_user.id_modul 
                WHERE project.id_project='$idProject' and activity_user.id_activity = 'eva'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        $no++;
                        ?>
            <?php if($no == 1){ ?>

            <td>
                <?php echo $d['persen']; ?>
            </td>

            <?php    }

                        ?>

            <td>
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>
        <tr>
            <td colspan="2">
                <b>Total</b>
            </td>
            <?php 
                $idUser = $_SESSION['id_user'];
                $sql = "SELECT modul.id_modul, total_activity_user.value  FROM project 
                INNER JOIN modul 
                ON project.id_project = modul.id_project 
                INNER JOIN total_activity_user 
                ON modul.id_modul = total_activity_user.id_modul 
                WHERE project.id_project='$idProject'";
                $res = mysqli_query($con,$sql);
                if($res){
                    while($d = mysqli_fetch_array($res)){ 
                        ?>
            <td>
                100
            </td>
            <td>
                <?php echo $d['value']; ?>
            </td>

            <?php
                }
            }
            ?>
        </tr>



    </table>

    <hr>

    <table border="1"> 
            <tr>
                <td style="width:150px;"><center><b>Position In Project Team</b></center></td>
                <td style="width:150px;"><center><b>Minimum Requirement</b></center></td>
                <td style="width:190px;"><center><b>Payment Rate For Private Sector in Person Month Rate(PMR) Requirement</b></center></td>
                <td style="width:150px;"><center><b>Payment Rate For Public Sector (70% OF Private Sector[6])</b></center></td>
            </tr>
            <tr>
                <td style="width:150px;">Project Management</td>
                <td style="width:150px;">Minimal Undergraduate And Experience > 4 years</td>
                <td style="width:150px;"><center>18,250,000</center></td>
                <td style="width:150px;"><center>12,775,000</center></td>
            </tr>
            <tr>
                <td style="width:150px;">System Analyst</td>
                <td style="width:150px;">Minimal Undergraduate And Experience > 3 years</td>
                <td style="width:150px;"><center>12,000,000</center></td>
                <td style="width:150px;"><center>8,400,000</center></td>
            </tr>
            <tr>
                <td style="width:150px;">Programmer</td>
                <td style="width:150px;">Experience 1-2 years</td>
                <td style="width:150px;"><center>11,000,000</center></td>
                <td style="width:150px;"><center>7,700,000</center></td>
            </tr>
            <tr>
                <td style="width:150px;">System Testing</td>
                <td style="width:150px;">Experience 1-2 years</td>
                <td style="width:150px;"><center>9,300,000</center></td>
                <td style="width:150px;"><center>6,510,000</center></td>
            </tr>
            <tr>
                <td style="width:150px;">Technical Support</td>
                <td style="width:150px;">Experience 1-2 years</td>
                <td style="width:150px;"><center>9,300,000</center></td>
                <td style="width:150px;"><center>6,510,000</center></td>
            </tr>
            <tr>
                <td style="width:150px;">Documenter</td>
                <td style="width:150px;">Experience 1-2 years</td>
                <td style="width:150px;"><center>5,000,000</center></td>
                <td style="width:150px;"><center>3,500,000</center></td>
            </tr>
    </table>

        <hr>
        <table border="1">
            <tr>
                <td style="width:150px;" colspan="3px;"></td>
                <td style="width:150px;"><center><b>Payrate (IDR/Month)</b></center></td>
                <td style="width:150px;"colspan="4px;"><center><b>Project ID (Person Month)</b></center></td>
            </tr>
            <tr>
                <td><center><b>No</b></center></td>
                <td><center><b>Activity</b></center></td>
                <td><center><b>Used by</b></center></td>
                <td><center><b>Index = 1</b></center></td>
                <td><center><b>1</b></center></td>
                <td><center><b>2</b></center></td>
                <td><center><b>3</b></center></td>
                <td><center><b>4</b></center></td>
            </tr>
            <tr>
            <td colspan="3px;"></td>
            <td><center><b>Index</b></center></td>
            <td><center><b>0,923</b></center></td>
            <td><center><b>0,923</b></center></td>
            <td><center><b>0,923</b></center></td>
            <td><center><b>0,923</b></center></td>
            </tr>
            <tr>
                <td colspan="8px">Software Development Phase</td>
            </tr>
            <tr>
                <td><center>1</center></td>
                <td><center>Requirements</center></td>
                <td><center>System Analyst</center></td>
                <td><center>12,000,000</center></td>
                <td><center>8,750,040</center></td> <!--  siji -->
                <td><center>7,667,923</center></td>
                <td><center>4,805,945</center></td>
                <td><center>5,668,620</center></td>
            </tr>
            <tr>
                <td><center>2</center></td>
                <td><center>Spesification</center></td>
                <td><center>System Analyst</center></td>
                <td><center>12,000,000</center></td>
                <td><center>50,285,040</center></td>
                <td><center>44,238,015</center></td>
                <td><center>27,726,606</center></td>
                <td><center>32,703,579</center></td>
            </tr>
            <tr>
                <td><center>3</center></td>
                <td><center>Design</center></td>
                <td><center>System Analyst</center></td>
                <td><center>12,000,000</center></td>
                <td><center>41,535,000</center></td>
                <td><center>36,504,554</center></td>
                <td><center>22,879,585</center></td>
                <td><center>26,986,509</center></td>
            </tr>
            <tr>
                <td><center>4</center></td>
                <td><center>Implementation</center></td>
                <td><center>Programmer</center></td>
                <td><center>11,000,000</center></td>
                <td><center>380,432,910</center></td>
                <td><center>334,324,700</center></td>
                <td><center>209,541,259</center></td>
                <td><center>247,154,271</center></td>
            </tr>
            <tr>
                <td><center>5</center></td>
                <td><center>Integration Testing</center></td>
                <td><center>System Testing</center></td>
                <td><center>9,300,000</center></td>
                <td><center>37,082,448</center></td>
                <td><center>32,608,332</center></td>
                <td><center>20,437,589</center></td>
                <td><center>24,106,172</center></td>
            </tr>
            <tr>
                <td><center>6</center></td>
                <td><center>Acceptance & Deployment</center></td>
                <td><center>System Testing</center></td>
                <td><center>9,300,000</center></td>
                <td><center>32,361,303</center></td>
                <td><center>28,443,405</center></td>
                <td><center>17,827,181</center></td>
                <td><center>21,027,190</center></td>
            </tr>

            <tr>
                <td colspan="3px">Ongoing Activities & Quality And Testing</td>
            </tr>
            <tr>
                <td><center>7</center></td>
                <td><center>Project Management</center></td>
                <td><center>Project Manager</center></td>
                <td><center>18,250,000</center></td>
                <td><center>28,972,970</center></td>
                <td><center>25,416,378</center></td>
                <td><center>15,929,962</center></td>
                <td><center>18,789,417</center></td>
            </tr>
            <tr>
                <td><center>8</center></td>
                <td><center>Configuration Management</center></td>
                <td><center>System Analyst</center></td>
                <td><center>12,000,000</center></td>
                <td><center>26,693,160</center></td>
                <td><center>23,462,532</center></td>
                <td><center>14,705,370</center></td>
                <td><center>17,345,009</center></td>
            </tr>
            <tr>
                <td><center>9</center></td>
                <td><center>Quality Assurance</center></td>
                <td><center>System Testing</center></td>
                <td><center>9,300,000</center></td>
                <td><center>3,776,916</center></td>
                <td><center>3,352,258</center></td>
                <td><center>2,101,061</center></td>
                <td><center>2,478,205</center></td>
            </tr>
            <tr>
                <td><center>10</center></td>
                <td><center>Documentation</center></td>
                <td><center>Documenter</center></td>
                <td><center>5,000,000</center></td>
                <td><center>30,320,550</center></td>
                <td><center>26,652,039</center></td>
                <td><center>16,704,424</center></td>
                <td><center>19,702,897</center></td>
            </tr>
            <tr>
                <td><center>11</center></td>
                <td><center>Training & Support</center></td>
                <td><center>Technical Support</center></td>
                <td><center>9,300,000</center></td>
                <td><center>3,605,238</center></td>
                <td><center>3,149,091</center></td>
                <td><center>1,973,724</center></td>
                <td><center>2,328,010</center></td>
            </tr>
            <tr>
                <td><center>12</center></td>
                <td><center>Evaluation & Testing</center></td>
                <td><center>System Testing</center></td>
                <td><center>9,300,000</center></td>
                <td><center>9,613,968</center></td>
                <td><center>8,482,230</center></td>
                <td><center>5,270,320</center></td>
                <td><center>6,106,608</center></td>
            </tr>
            <tr>
            <td colspan="4px"><center>Total</center></td>
            <td><center>653,429,543</center></td>
            <td><center>574,301,457</center></td>
            <td><center>359,949,026</center></td>
            <td><center>424,560,488</center></td>
            </tr>
    </table>
    <hr>
    <table border="1">
            <tr>
                <td style="width:150px;"><center><b>Project ID</b></center></td>
                <td style="width:150px;"><center><b>Personel Direct Cost before Profit (IDR)</b></center></td>
                <td style="width:190px;"><center><b>Profit (IDR)</b></center></td>
                <td style="width:190px;"><center><b>Personel Direct Cost (IDR)</b></center></td>
            </tr>
            <tr>
                <td style="width:150px;"><center>1</center></td>
                <td style="width:150px;"><center>653,429,543</center></td>
                <td style="width:190px;"><center>65,342,954</center></td>
                <td style="width:190px;"><center>718,772,497</center></td>
            </tr>
            <tr>
                <td style="width:150px;"><center>2</center></td>
                <td style="width:150px;"><center>574,301,457</center></td>
                <td style="width:190px;"><center>574,430,146</center></td>
                <td style="width:190px;"><center>631,731,603</center></td>
            </tr>
            <tr>
                <td style="width:150px;"><center>3</center></td>
                <td style="width:150px;"><center>359,949,026</center></td>
                <td style="width:190px;"><center>35,994,903</center></td>
                <td style="width:190px;"><center>395,943,929</center></td>
            </tr>
            <tr>
                <td style="width:150px;"><center>4</center></td>
                <td style="width:150px;"><center>424,560,488</center></td>
                <td style="width:190px;"><center>42,456,049</center></td>
                <td style="width:190px;"><center>467,016,537</center></td>
            </tr>
    </table>

    <hr>
    <table border="1">
            <tr>
                <td rowspan="2"><center><b>No</b></center></td>
                <td rowspan="2"><center><b>Cost Driver of Non-Personnel Direct Cost</b></center></td>
                <td style="width:190px;" colspan="4px"><center><b>Project ID (IDR)</b></center></td>
            </tr>
            <tr>
                <td><center>1</center></td>
                <td><center>2</center></td>
                <td><center>3</center></td>
                <td><center>4</center></td>
            </tr>

            <tr>
                <td colspan="2px">Reimbursable</td>
                <td ><center>14,700,000</center></td>
                <td ><center>5,060,000</center></td>
                <td ><center>15,900,000</center></td>
                <td ><center>19,100,000</center></td>
            </tr>

            <tr>
                <td><center>1</center></td>
                <td><center>Documents for Travel Abroad</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
            </tr>

            <tr>
                <td><center>2</center></td>
                <td><center>Transportation Ticket</center></td>
                <td><center>3,500,000</center></td>
                <td><center>2,760,000</center></td>
                <td><center>5,000,000</center></td>
                <td><center>5,300,000</center></td>
            </tr>

            <tr>
                <td><center>3</center></td>
                <td><center>Excess Baggage</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
            </tr>
            <tr>
                <td><center>4</center></td>
                <td><center>Unaccompanied Baggage</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
            </tr>
            <tr>
                <td><center>5</center></td>
                <td><center>Local/inland travel</center></td>
                <td><center>1,200,000</center></td>
                <td><center>2,300,000</center></td>
                <td><center>3,300,000</center></td>
                <td><center>5,000,000</center></td>
            </tr>
            <tr>
                <td><center>6</center></td>
                <td><center>The Cost of Purchasing Project Needs</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
            </tr>
            <tr>
                <td><center>7</center></td>
                <td><center>Instalation Cost of Phone/internet/website</center></td>
                <td><center>10,000,000</center></td>
                <td><center>0</center></td>
                <td><center>7,600,000</center></td>
                <td><center>8,800,000</center></td>
            </tr>
            <tr>
                <td colspan="2px">Fixed Unit Rate</td>
                <td ><center>24,750,00</center></td>
                <td ><center>25,600,000</center></td>
                <td ><center>16,050,000</center></td>
                <td ><center>23,310,000</center></td>
            </tr>
            <tr>
                <td><center>8</center></td>
                <td><center>Rent a vechile</center></td>
                <td><center>5,600,000</center></td>
                <td><center>7,400,000</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
            </tr>
            <tr>
                <td><center>9</center></td>
                <td><center>Rent the project office</center></td>
                <td><center>3,000,000</center></td>
                <td><center>5,000,000</center></td>
                <td><center>0</center></td>
                <td><center>7,000,000</center></td>
            </tr>
            <tr>
                <td><center>10</center></td>
                <td><center>Rent office equipment</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
            </tr>
            <tr>
                <td><center>11</center></td>
                <td><center>Rent office furniture</center></td>
                <td><center>2,000,000</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
            </tr>
            <tr>
                <td><center>12</center></td>
                <td><center>Operational Cost of The Project Office</center></td>
                <td><center>850,000</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>1,200,000</center></td>
            </tr>
            <tr>
                <td><center>13</center></td>
                <td><center>Office Consumabled</center></td>
                <td><center>800,000</center></td>
                <td><center>1,200,000</center></td>
                <td><center>2,300,000</center></td>
                <td><center>760,000</center></td>
            </tr>
            <tr>
                <td><center>14</center></td>
                <td><center>Computer and Printer Consumables</center></td>
                <td><center>1,500,000</center></td>
                <td><center>3,000,000</center></td>
                <td><center>2,500,000</center></td>
                <td><center>2,500,000</center></td>
            </tr>
            <tr>
                <td><center>15</center></td>
                <td><center>Communication Costs</center></td>
                <td><center>3,500,000</center></td>
                <td><center>2,500,000</center></td>
                <td><center>4,750,000</center></td>
                <td><center>3,350,000</center></td>
            </tr>
            <tr>
                <td><center>16</center></td>
                <td><center>Per Diem Allowwance</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
            </tr>
            <tr>
                <td><center>17</center></td>
                <td><center>Housing Allowwance</center></td>
                <td><center>0</center></td>
                <td><center>00</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
            </tr>
            <tr>
                <td><center>18</center></td>
                <td><center>Temporaray Loadging</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
            </tr>
            <tr>
                <td><center>19</center></td>
                <td><center>Relocation Allowwance</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
            </tr>
            <tr>
                <td><center>20</center></td>
                <td><center>Out Of Station Allowwance</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
            </tr>
            <tr>
                <td><center>21</center></td>
                <td><center>Eksternal Task Lodging</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
            </tr>
            <tr>
                <td><center>22</center></td>
                <td><center>Annual Leave</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
            </tr>
            <tr>
                <td><center>23</center></td>
                <td><center>Reporting Costs</center></td>
                <td><center>7,500,000</center></td>
                <td><center>6,500,000</center></td>
                <td><center>6,500,000</center></td>
                <td><center>8,500,000</center></td>
            </tr>
            <tr>
                <td><center>24</center></td>
                <td><center>Rent Supporting Equipment</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
            </tr>
            <tr>
                <td colspan="2px">Lumpsum</td>
                <td ><center>3,800,00</center></td>
                <td ><center>5,000,000</center></td>
                <td ><center>6,900,000</center></td>
                <td ><center>4,800,000</center></td>
            </tr>
            <tr>
                <td><center>25</center></td>
                <td><center>Secondary Data Collection</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
            </tr>
            <tr>
                <td><center>26</center></td>
                <td><center style="width:150px;">Seminar, workshop, socialization, training, dissemination, discussion, coordination, among agencies, and Focus Group discussion</center></td>
                <td><center>3,800,000</center></td>
                <td><center>5,000,000</center></td>
                <td><center>6,900,000</center></td>
                <td><center>4,800,000</center></td>
            </tr>
            <tr>
                <td><center>27</center></td>
                <td><center>Survey</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
            </tr>
            <tr>
                <td><center>28</center></td>
                <td><center>Laboratory Test</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
            </tr>
            <tr>
                <td><center>29</center></td>
                <td><center>Copyright</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
            </tr>
            </tr>
            <tr>
                <td colspan="2px"><center>Total of Non-Personel Direct Costs</center></td>
                <td><center>43,250,000</center></td>
                <td><center>35,660,000</center></td>
                <td><center>38,850,000</center></td>
                <td><center>47,210,000</center></td>
            </tr>
    </table>

    <table border="1">
            <tr>
                <td>Modul-ID</td>
                <td>Personnel Direct Cost Before Profit (IDR)</td>
                <td>Profit (IDR)</td>
                <td>Personnel Direct Cost (IDR)</td>
                <td>Non-Personnel Direct Cost (IDR)</td>
                <td>Owner Estimate Before Taxes (IDR)</td>
                <td>Tax (Value Added Tax 10%) (IDR)</td>
                <td>Owner Cost Estimate (IDR)</td>
            </tr>
            <tr>
                <td>1</td>
                <td>653,429,543</td>
                <td>65,342,954</td>
                <td>718,772,497</td>
                <td>43,250,000</td>
                <td>762,022,497</td>
                <td>76,202,250</td>
                <td>838,224,747</td>
            </tr>
    </table>

</body>

</html>


<?php 
}
?>