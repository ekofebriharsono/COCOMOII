<?php
include 'koneksi.php';
session_start();

if(isset($_POST['id_modul'])){

    $id_modul = $_POST['id_modul'];
    $id_project = $_POST['id_project'];

    $ILF_LOW = $_POST['ILF_LOW'];
    $ILF_AVERAGE = $_POST['ILF_AVERAGE'];
    $ILF_HEIGHT = $_POST['ILF_HEIGHT'];

    $EIF_LOW = $_POST['EIF_LOW'];
    $EIF_AVERAGE = $_POST['EIF_AVERAGE'];
    $EIF_HEIGHT = $_POST['EIF_HEIGHT'];

    $EI_LOW = $_POST['EI_LOW'];
    $EI_AVERAGE = $_POST['EI_AVERAGE'];
    $EI_HEIGHT = $_POST['EI_HEIGHT'];

    $EO_LOW = $_POST['EO_LOW'];
    $EO_AVERAGE = $_POST['EO_AVERAGE'];
    $EO_HEIGHT = $_POST['EO_HEIGHT'];

    $EQ_LOW = $_POST['EQ_LOW'];
    $EQ_AVERAGE = $_POST['EQ_AVERAGE'];
    $EQ_HEIGHT = $_POST['EQ_HEIGHT'];

    $valueTotalCostOfActivityWaterfall = $_POST['valueTotalCostOfActivityWaterfall'];

    $UFP = $_POST['UFP'];

    $SLOC = $_POST['SLOC'];
    $SIZE = $_POST['SIZE'];

    $PrecedentednessValue = $_POST['PrecedentednessValue'];
    $DevelopmentFlexibilityValue = $_POST['DevelopmentFlexibilityValue'];
    $ArchitectureValue = $_POST['ArchitectureValue'];
    $TeamCohesionValue = $_POST['TeamCohesionValue'];
    $ProcessMaturityValue = $_POST['ProcessMaturityValue'];

    $E = $_POST['E'];

    $totalEM = $_POST['totalEM'];
    $totalPM = $_POST['totalPM'];

    $RELY = $_POST['resultRequiredSoftwareReliability'];
    $DATA = $_POST['resultDataBaseSize'];
    $CPLX = $_POST['resultProductComplexity'];
    $RUSE = $_POST['resultDevelopedforReusability'];
    $DOCU = $_POST['resultDocumentationMatchtoLifecycleNeeds'];
    $TIME = $_POST['resultTimeConstraint'];
    $STOR = $_POST['resultStorageConstraint'];
    $PVOL = $_POST['resultPlatformVolatility'];
    $ACAP = $_POST['resultAnalystCapability'];
    $PCAP = $_POST['resultProgrammerCapability'];
    $PCON = $_POST['resultPersonnelContinuity'];
    $APEX = $_POST['resultApplicationExperience'];
    $PLEX = $_POST['resultPlatformExperience'];
    $LTEX = $_POST['resultLanguageandToolsetExperience'];
    $TOOL = $_POST['resultUseofSoftwareTools'];
    $SITE = $_POST['resultMultisiteDevelopment'];
    $SCED = $_POST['resultRequiredDevelopmentSchedule'];



    $sqlILF = "INSERT INTO ufp_complexity_weight (id_ufp,id_modul,low,average,height) VALUES ('ilf_ufp',$id_modul,$ILF_LOW,$ILF_AVERAGE,$ILF_HEIGHT)";
    $sqlEIF = "INSERT INTO ufp_complexity_weight (id_ufp,id_modul,low,average,height) VALUES ('eif_ufp',$id_modul,$EIF_LOW,$EIF_AVERAGE,$EIF_HEIGHT)";
    $sqlEI = "INSERT INTO ufp_complexity_weight (id_ufp,id_modul,low,average,height) VALUES ('ei_ufp',$id_modul,$EI_LOW,$EI_AVERAGE,$EI_HEIGHT)";
    $sqlEO = "INSERT INTO ufp_complexity_weight (id_ufp,id_modul,low,average,height) VALUES ('eo_ufp',$id_modul,$EO_LOW,$EO_AVERAGE,$EO_HEIGHT)";
    $sqlEQ = "INSERT INTO ufp_complexity_weight (id_ufp,id_modul,low,average,height) VALUES ('eq_ufp',$id_modul,$EQ_LOW,$EQ_AVERAGE,$EQ_HEIGHT)";
    $sqlUFP = "INSERT INTO ufp_user (id_modul, value) VALUES ($id_modul,$UFP)";
    $sqlSIZE = "INSERT INTO size_user (id_modul, sloc_convertion_ratio, size_in_sloc) VALUES ($id_modul,$SLOC,$SIZE)";
    $sqlPREC = "INSERT INTO sf_user (id_sf, id_modul, value) VALUES ('prec',$id_modul,$PrecedentednessValue)";
    $sqlFLEX = "INSERT INTO sf_user (id_sf, id_modul, value) VALUES ('flex',$id_modul,$DevelopmentFlexibilityValue)";
    $sqlRESL = "INSERT INTO sf_user (id_sf, id_modul, value) VALUES ('resl',$id_modul,$ArchitectureValue)";
    $sqlTEAM = "INSERT INTO sf_user (id_sf, id_modul, value) VALUES ('team',$id_modul,$TeamCohesionValue)";
    $sqlPMAT = "INSERT INTO sf_user (id_sf, id_modul, value) VALUES ('pmat',$id_modul,$ProcessMaturityValue)";
    $sqlE = "INSERT INTO e_user (id_modul, value) VALUES ($id_modul,$E)";
    $sqlTotalEM = "INSERT INTO total_em_user (id_modul, value) VALUES ($id_modul,$totalEM)";
    $sqlTotalPM = "INSERT INTO pm_user (id_modul, value) VALUES ($id_modul,$totalPM)";

    $sqlRELY = "INSERT INTO em_user (id_em, id_modul, value) VALUES ('rely',$id_modul,$RELY)";
    $sqlDATA = "INSERT INTO em_user (id_em, id_modul, value) VALUES ('data',$id_modul,$DATA)";
    $sqlCPLX = "INSERT INTO em_user (id_em, id_modul, value) VALUES ('cplx',$id_modul,$CPLX)";
    $sqlRUSE = "INSERT INTO em_user (id_em, id_modul, value) VALUES ('ruse',$id_modul,$RUSE)";
    $sqlDOCU = "INSERT INTO em_user (id_em, id_modul, value) VALUES ('docu',$id_modul,$DOCU)";
    $sqlTIME = "INSERT INTO em_user (id_em, id_modul, value) VALUES ('time',$id_modul,$TIME)";
    $sqlSTOR = "INSERT INTO em_user (id_em, id_modul, value) VALUES ('stor',$id_modul,$STOR)";
    $sqlPVOL = "INSERT INTO em_user (id_em, id_modul, value) VALUES ('pvol',$id_modul,$PVOL)";
    $sqlACAP = "INSERT INTO em_user (id_em, id_modul, value) VALUES ('acap',$id_modul,$ACAP)";
    $sqlPCAP = "INSERT INTO em_user (id_em, id_modul, value) VALUES ('pcap',$id_modul,$PCAP)";
    $sqlPCON = "INSERT INTO em_user (id_em, id_modul, value) VALUES ('pcon',$id_modul,$PCON)";
    $sqlAPEX = "INSERT INTO em_user (id_em, id_modul, value) VALUES ('apex',$id_modul,$APEX)";
    $sqlPLEX = "INSERT INTO em_user (id_em, id_modul, value) VALUES ('plex',$id_modul,$PLEX)";
    $sqlLTEX = "INSERT INTO em_user (id_em, id_modul, value) VALUES ('ltex',$id_modul,$LTEX)";
    $sqlTOOL = "INSERT INTO em_user (id_em, id_modul, value) VALUES ('tool',$id_modul,$TOOL)";
    $sqlSITE = "INSERT INTO em_user (id_em, id_modul, value) VALUES ('site',$id_modul,$SITE)";
    $sqlSCED = "INSERT INTO em_user (id_em, id_modul, value) VALUES ('sced',$id_modul,$SCED)";


    $sqlUpdateTotalInProject ="UPDATE modul SET total = '$valueTotalCostOfActivityWaterfall' WHERE id_modul= $id_modul";
    $sqlUpdateStatusModul ="UPDATE modul SET status = 1 WHERE id_modul= '$id_modul'";

    // $resultsILF = mysqli_query($con,$sqlILF);
    // $resultsEIF = mysqli_query($con,$sqlEIF);
    // $resultsEI = mysqli_query($con,$sqlEI);
    // $resultsEO = mysqli_query($con,$sqlEO);
    // $resultsEQ = mysqli_query($con,$sqlEQ);
    // $resultsUFP = mysqli_query($con,$sqlUFP);
    // $resultSIZE = mysqli_query($con, $sqlSIZE);
    // $resultPREC = mysqli_query($con, $sqlPREC);
    // $resultFLEX = mysqli_query($con, $sqlFLEX);
    // $resultRESL = mysqli_query($con, $sqlRESL);
    // $resultTEAM = mysqli_query($con, $sqlTEAM);
    // $resultPMAT = mysqli_query($con, $sqlPMAT);
    // $resultE = mysqli_query($con, $sqlE);
    // $resultTotalEM = mysqli_query($con, $sqlTotalEM);
    // $resultTotalPM = mysqli_query($con, $sqlTotalPM);
    $resultRELY = mysqli_query($con, $sqlRELY);
    $resultDATA = mysqli_query($con, $sqlDATA);
    $resultCPLX = mysqli_query($con, $sqlCPLX);
    $resultRUSE = mysqli_query($con, $sqlRUSE);
    $resultDOCU = mysqli_query($con, $sqlDOCU);
    $resultTIME = mysqli_query($con, $sqlTIME);
    $resultSTOR = mysqli_query($con, $sqlSTOR);
    $resultPVOL = mysqli_query($con, $sqlPVOL);
    $resultACAP = mysqli_query($con, $sqlACAP);
    $resultPCAP = mysqli_query($con, $sqlPCAP);
    $resultPCON = mysqli_query($con, $sqlPCON);
    $resultAPEX = mysqli_query($con, $sqlAPEX);
    $resultPLEX = mysqli_query($con, $sqlPLEX);    
    $resultLTEX = mysqli_query($con, $sqlLTEX);
    $resultTOOL = mysqli_query($con, $sqlTOOL);
    $resultSITE = mysqli_query($con, $sqlSITE);
    $resultSCED = mysqli_query($con, $sqlSCED);


    // $resultsUpdateTotalInProject = mysqli_query($con,$sqlUpdateTotalInProject);
    // $resultsUpdateStatusModul = mysqli_query($con,$sqlUpdateStatusModul);

    // if($resultsILF && $resultsEIF && $resultsEI && $resultsEO && $resultsEQ && $resultsUpdateTotalInProject && $resultsUpdateStatusModul && $resultsUFP && $resultSIZE && $resultPREC && $resultFLEX && $resultRESL && $resultTEAM && $resultPMAT && $resultE) {
    //   header('Location: ../tambah_project.php?project='.$id_project);
    // }else {
    //   header('Location: ../tambah_project.php?gagal=1');
    // }

    
}





?>