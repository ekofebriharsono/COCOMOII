<?php
include 'koneksi.php';
session_start();

if(isset($_POST['submitNewProject'])){

  $namaProject = $_POST['namaProject'];
  $idUser = $_SESSION['id_user'];
  $idProject = date('His'.'dmY');

  $sql = "INSERT INTO project (id_project,id_user,nama_project) VALUES('$idProject',$idUser,'$namaProject')";
  $results = mysqli_query($con,$sql);

  if($results) {
    header('Location: ../tambah_project.php?project='.$idProject);
  }else {
    header('Location: ../tambah_project.php?gagal=1');
  }
}

if(isset($_POST['submitEditProject'])){

  $namaProject = $_POST['namaProject'];
  $idProject = $_POST['idProject'];

  $sql = "UPDATE project SET nama_project = '$namaProject' WHERE id_project='$idProject'";
  $results = mysqli_query($con,$sql);
  if($results) {
    header('Location: ../tambah_project.php?project='.$idProject);
  }else {
    header('Location: ../tambah_project.php?gagal=1');
  }
}

if(isset($_GET['submitDeleteProject'])){

  $idProject = $_GET['idProject'];

  $sqlDeleteProject = "DELETE FROM project WHERE id_project='$idProject';";
  $sqlDeleteAllModulInProject = "DELETE FROM modul WHERE id_project='$idProject';";

  $resultsProject = mysqli_query($con,$sqlDeleteProject);
  $resultsModul = mysqli_query($con,$sqlDeleteAllModulInProject);

  if($resultsProject && $resultsModul) {
    header('Location: ../project.php');
  }else {
    header('Location: ../project.php?gagal=1');
  }
}
  
?>