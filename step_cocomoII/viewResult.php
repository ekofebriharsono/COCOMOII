<?php 
session_start();
include '../proses_php/koneksi.php';

$idProject = $_POST['idProject'];

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
</head>

<body>
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
            <td><?php echo $d['size_in_sloc']; ?></td>
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
            <td colspan="3">
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
                <?php echo $d['value']; ?>
            </td>
            <?php
                }
            }
            ?>
        </tr>



    </table>


</body>

</html>
<?php 
}
?>