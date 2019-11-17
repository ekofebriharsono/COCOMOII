<?php
include 'koneksi.php';
session_start();

if(isset($_POST['submitNewModul'])){

    $namaProject = $_POST['namaModul'];
    $idProject = $_POST['idProject'];

    $sql = "INSERT INTO modul (id_project,nama_modul) VALUES('$idProject','$namaProject')";
    $results = mysqli_query($con,$sql);

    if($results) {
      header('Location: ../tambah_project.php?project='.$idProject);
    }else {
      header('Location: ../tambah_project.php?gagal=1');
    }
}

if(isset($_POST['submitDeleteModul'])){

    $idModul = $_POST['idModul'];
    $idProject = $_POST['idProject'];

    $sqlDeleteModul = "DELETE FROM modul WHERE id_modul=$idModul;";
    $sqlDeleteAllDataUFP = "DELETE FROM ufp_complexity_weight WHERE id_modul=$idModul;";
    $sqlDeleteEM = "DELETE FROM em_user WHERE id_modul=$idModul";
    $sqlDeleteE = "DELETE FROM e_user WHERE id_modul=$idModul";
    $sqlDeletePM = "DELETE FROM pm_user WHERE id_modul=$idModul";
    $sqlDeleteSF = "DELETE FROM sf_user WHERE id_modul=$idModul";
    $sqlDeleteSIZE = "DELETE FROM size_user WHERE id_modul=$idModul";
    $sqlDeleteTotalEM = "DELETE FROM total_em_user WHERE id_modul=$idModul";


    $resultsDeleteModul = mysqli_query($con,$sqlDeleteModul);
    $resultsDeleteAllDataUFP = mysqli_query($con,$sqlDeleteAllDataUFP);
    $resultsDeleteEM = mysqli_query($con,$sqlDeleteEM);
    $resultsDeleteE = mysqli_query($con,$sqlDeleteE);
    $resultsDeletePM = mysqli_query($con,$sqlDeletePM);
    $resultsDeleteSF = mysqli_query($con,$sqlDeleteSF);
    $resultsDeleteSIZE = mysqli_query($con,$sqlDeleteSIZE);
    $resultsDeleteTotalEM = mysqli_query($con,$sqlDeleteTotalEM);


    if($resultsDeleteModul && $resultsDeleteAllDataUFP) {
      header('Location: ../tambah_project.php?project='.$idProject);
    }else {
      header('Location: ../tambah_project.php?gagal=1');
    }
}
  
?>