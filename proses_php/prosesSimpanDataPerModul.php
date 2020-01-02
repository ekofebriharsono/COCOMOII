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

    $PREC = $_POST['valueRequirements'];
    $PSPE = $_POST['valueSpecifications'];
    $PDES = $_POST['valueDesign'];
    $PIMP = $_POST['valueImplementation'];
    $PINT = $_POST['valueIntegration'];
    $PACC = $_POST['valueAcceptance'];
    $PPRO = $_POST['valueProjectManagement'];
    $PCON = $_POST['valueConfiguration'];
    $PQUA = $_POST['valueQuality'];
    $PDOC = $_POST['valueDocumentations'];
    $PTRA = $_POST['valueTraining'];
    $PEVA = $_POST['valueEvaluation'];

    $REC = $_POST['totalRequirements'];
    $SPE = $_POST['totalSpecifications'];
    $DES = $_POST['totalDesign'];
    $IMP = $_POST['totalImplementation'];
    $INT = $_POST['totalIntegration'];
    $ACC = $_POST['totalAcceptance'];
    $PRO = $_POST['totalProjectManagement'];
    $CON = $_POST['totalConfiguration'];
    $QUA = $_POST['totalQuality'];
    $DOC = $_POST['totalDocumentations'];
    $TRA = $_POST['totalTraining'];
    $EVA = $_POST['totalEvaluation'];

    $TotalCostOfActivityWaterfall = $_POST['valueTotalCostOfActivityWaterfall'];

    $PersonelDirectCostBeforeProfit = $_POST['PersonelDirectCostBeforeProfit'];
    $totalProfitIDR = $_POST['totalProfitIDR'];
    $PersonelDirectCost = $_POST['PersonelDirectCost'];
    $NonPersonnelDirectCost = $_POST['NonPersonnelDirectCost'];
    $OwnerCostEstimateBeforeTaxes = $_POST['OwnerCostEstimateBeforeTaxes'];
    $ValueAddedTax = $_POST['ValueAddedTax'];
    $OwnerCostEstimate = $_POST['OwnerCostEstimate'];

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

    $sqlREC = "INSERT INTO activity_user (id_activity, id_modul, persen, value) VALUES ('rec',$id_modul,$PREC,$REC)";
    $sqlSPE = "INSERT INTO activity_user (id_activity, id_modul, persen, value) VALUES ('spe',$id_modul,$PSPE,$SPE)";
    $sqlDES = "INSERT INTO activity_user (id_activity, id_modul, persen, value) VALUES ('des',$id_modul,$PDES,$DES)";
    $sqlIMP = "INSERT INTO activity_user (id_activity, id_modul, persen, value) VALUES ('imp',$id_modul,$PIMP,$IMP)";
    $sqlINT = "INSERT INTO activity_user (id_activity, id_modul, persen, value) VALUES ('int',$id_modul,$PINT,$INT)";
    $sqlACC = "INSERT INTO activity_user (id_activity, id_modul, persen, value) VALUES ('acc',$id_modul,$PACC,$ACC)";
    $sqlPRO = "INSERT INTO activity_user (id_activity, id_modul, persen, value) VALUES ('pro',$id_modul,$PPRO,$PRO)";
    $sqlCON = "INSERT INTO activity_user (id_activity, id_modul, persen, value) VALUES ('con',$id_modul,$PCON,$CON)";
    $sqlQUA = "INSERT INTO activity_user (id_activity, id_modul, persen, value) VALUES ('qua',$id_modul,$PQUA,$QUA)";
    $sqlDOC = "INSERT INTO activity_user (id_activity, id_modul, persen, value) VALUES ('doc',$id_modul,$PDOC,$DOC)";
    $sqlTRA = "INSERT INTO activity_user (id_activity, id_modul, persen, value) VALUES ('tra',$id_modul,$PTRA,$TRA)";
    $sqlEVA = "INSERT INTO activity_user (id_activity, id_modul, persen, value) VALUES ('eva',$id_modul,$PEVA,$EVA)";

    $sqlAllCost = "INSERT INTO all_cost_user (id_modul, personel_direct_cost_before_profit, profit, personel_direct_cost, non_personel_direct_cost, owner_estimate_before_tax, tax, owner_cost_estimate) 
    VALUES ($id_modul, $PersonelDirectCostBeforeProfit, $totalProfitIDR, $PersonelDirectCost, $NonPersonnelDirectCost, $OwnerCostEstimateBeforeTaxes, $ValueAddedTax, $OwnerCostEstimate )";
  
    $sqlTotalCostOfActivityWaterfall = "INSERT INTO total_activity_user (id_modul, value) VALUES ($id_modul,$TotalCostOfActivityWaterfall)";

    $sqlUpdateTotalInProject ="UPDATE modul SET total = '$OwnerCostEstimate' WHERE id_modul= $id_modul";
    $sqlUpdateStatusModul ="UPDATE modul SET status = 1 WHERE id_modul= '$id_modul'";

    $resultsILF = mysqli_query($con,$sqlILF);
    $resultsEIF = mysqli_query($con,$sqlEIF);
    $resultsEI = mysqli_query($con,$sqlEI);
    $resultsEO = mysqli_query($con,$sqlEO);
    $resultsEQ = mysqli_query($con,$sqlEQ);

    $resultsUFP = mysqli_query($con,$sqlUFP);

    $resultSIZE = mysqli_query($con, $sqlSIZE);

    $resultPREC = mysqli_query($con, $sqlPREC);
    $resultFLEX = mysqli_query($con, $sqlFLEX);
    $resultRESL = mysqli_query($con, $sqlRESL);
    $resultTEAM = mysqli_query($con, $sqlTEAM);
    $resultPMAT = mysqli_query($con, $sqlPMAT);

    $resultE = mysqli_query($con, $sqlE);

    $resultTotalEM = mysqli_query($con, $sqlTotalEM);
    $resultTotalPM = mysqli_query($con, $sqlTotalPM);

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

    $resultREC = mysqli_query($con, $sqlREC);
    $resultSPE = mysqli_query($con, $sqlSPE);
    $resultDES = mysqli_query($con, $sqlDES);
    $resultIMP = mysqli_query($con, $sqlIMP);
    $resultINT = mysqli_query($con, $sqlINT);
    $resultACC = mysqli_query($con, $sqlACC);
    $resultPRO = mysqli_query($con, $sqlPRO);
    $resultCON = mysqli_query($con, $sqlCON);
    $resultQUA = mysqli_query($con, $sqlQUA);
    $resultDOC = mysqli_query($con, $sqlDOC);
    $resultTRA = mysqli_query($con, $sqlTRA);
    $resultEVA = mysqli_query($con, $sqlEVA);

    $resultAllCost = mysqli_query($con, $sqlAllCost);

    $resultTotalCostOfActivityWaterfall = mysqli_query($con, $sqlTotalCostOfActivityWaterfall);

    $resultsUpdateTotalInProject = mysqli_query($con,$sqlUpdateTotalInProject);
    $resultsUpdateStatusModul = mysqli_query($con,$sqlUpdateStatusModul);

    if($resultAllCost && $resultsILF && $resultsEIF && $resultsEI && $resultsEO && $resultsEQ && $resultsUpdateTotalInProject && $resultsUpdateStatusModul && $resultsUFP && $resultSIZE && $resultPREC && $resultFLEX && $resultRESL && $resultTEAM && $resultPMAT && $resultE) {
      header('Location: ../tambah_project.php?project='.$id_project);
    }else {
      header('Location: ../tambah_project.php?gagal=1');
    }

    
}





?>