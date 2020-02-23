
<?php
 $con = mysqli_connect("localhost", "root", "hacked200613", "cocomoii");

 $idProject = $_GET['idProject'];
$namaProject = "fdgdfg";

$sql = "SELECT nama_project from project where id_project=$idProject";
$res = mysqli_query($con,$sql);
if ($res){
    $row = mysqli_fetch_array($res);
    $namaProject = $row['nama_project'];
} 

function rupiah($angka){
                                    
    $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
    return $hasil_rupiah;

}


require('fpdf/fpdf.php');
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,7,$namaProject,0,1,'C');
$pdf->SetFont('Arial','B',12);
// $pdf->Cell(190,7,'Peroide 1 Januari - 31 Desember 2018',0,1,'C');

$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(15,6,'Modul',1,0);
$pdf->Cell(30,6,'Personnel',1,0);
$pdf->Cell(30,6,'Profit',1,0);
$pdf->Cell(30,6,'total + Profit',1,0);
$pdf->Cell(25,6,'Non Personnel',1,0);
$pdf->Cell(25,6,'Tax',1,0);
$pdf->Cell(30,6,'Cost Estimate',1,1);

$pdf->SetFont('Arial','',10);
$no = 0;
$tbldetail = mysqli_query($con, "SELECT all_cost_user.personel_direct_cost_before_profit, all_cost_user.profit, all_cost_user.personel_direct_cost, all_cost_user.non_personel_direct_cost, all_cost_user.owner_estimate_before_tax, all_cost_user.tax, all_cost_user.owner_cost_estimate from modul 
JOIN all_cost_user ON modul.id_modul = all_cost_user.id_modul 
JOIN project ON modul.id_project = project.id_project 
WHERE modul.id_project = $idProject");
while ($row = mysqli_fetch_array($tbldetail)){
    $no++;
    $pdf->Cell(15,6,$no,1,0);
    $pdf->Cell(30,6,rupiah($row['personel_direct_cost_before_profit']),1,0);
    $pdf->Cell(30,6,rupiah($row['profit']),1,0);
    $pdf->Cell(30,6,rupiah($row['personel_direct_cost']),1,0);
    $pdf->Cell(25,6,rupiah($row['non_personel_direct_cost']),1,0);
    $pdf->Cell(25,6,rupiah($row['tax']),1,0);
    $pdf->Cell(30,6,rupiah($row['owner_cost_estimate']),1,1);
}
$pdf->Cell(18,6,'',0,1);
$pdf->Cell(27,6,"==========================================================================================",0,1);
$pdf->Output();
?>
