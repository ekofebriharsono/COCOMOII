<?php
include 'koneksi.php';
session_start();

if(isset($_POST['id_modul'])){

    // // required
     $id_modul = $_POST['id_modul'];
     $id_project = $_POST['id_project'];

    // Data step 1
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

    $UFP = $_POST['UFP'];

    //Query Step 1
    $sqlComplexityWeight = "INSERT INTO ufp_complexity_weight (id_ufp,id_modul,low,average,height) VALUES 
    ('ilf_ufp',$id_modul,$ILF_LOW,$ILF_AVERAGE,$ILF_HEIGHT),
    ('eif_ufp',$id_modul,$EIF_LOW,$EIF_AVERAGE,$EIF_HEIGHT),
    ('ei_ufp',$id_modul,$EI_LOW,$EI_AVERAGE,$EI_HEIGHT),
    ('eo_ufp',$id_modul,$EO_LOW,$EO_AVERAGE,$EO_HEIGHT),
    ('eq_ufp',$id_modul,$EQ_LOW,$EQ_AVERAGE,$EQ_HEIGHT)";
    $sqlUFP = "INSERT INTO ufp_user (id_modul, value) VALUES ($id_modul,$UFP)";
    $resultComplexityWeight = mysqli_query($con,$sqlComplexityWeight);
    $resultsUFP = mysqli_query($con,$sqlUFP);

    // Result Step 1
    if($resultComplexityWeight && $resultsUFP){
      echo "Berhasil menyimpan data UFP!".'</br>';
    }else{
      echo "Gagal menyimpan data UFP!".'</br>';
    }

    // Data Step 2
    $SLOC = $_POST['SLOC'];
    $SIZE = $_POST['SIZE'];

    // Query Step 2
    $sqlSIZE = "INSERT INTO size_user (id_modul, sloc_convertion_ratio, size_in_sloc) VALUES ($id_modul,$SLOC,$SIZE)";
    $resultSIZE = mysqli_query($con, $sqlSIZE);

    // Result Step 2
    if($resultSIZE){
      echo "Berhasil menyimpan data Size!".'</br>';
    }else{
      echo "Gagal menyimpan data Size!".'</br>';
    }

    // Data Step 3
    $PrecedentednessValue = $_POST['PrecedentednessValue'];
    $DevelopmentFlexibilityValue = $_POST['DevelopmentFlexibilityValue'];
    $ArchitectureValue = $_POST['ArchitectureValue'];
    $TeamCohesionValue = $_POST['TeamCohesionValue'];
    $ProcessMaturityValue = $_POST['ProcessMaturityValue'];

    $E = $_POST['E'];

    // Query Step 3
    $sqlScaleFactor = "INSERT INTO sf_user (id_sf, id_modul, value) VALUES 
    ('prec',$id_modul,$PrecedentednessValue),
    ('flex',$id_modul,$DevelopmentFlexibilityValue),
    ('resl',$id_modul,$ArchitectureValue),
    ('team',$id_modul,$TeamCohesionValue),
    ('pmat',$id_modul,$ProcessMaturityValue)";
    $sqlE = "INSERT INTO e_user (id_modul, value) VALUES ($id_modul,$E)";
    $resultScaleFactor = mysqli_query($con,$sqlScaleFactor);
    $resultE = mysqli_query($con,$sqlE);

    //Result Step 3
    if($resultScaleFactor && $resultE){
      echo "Berhasil menyimpan data Scale Factor & Effort!".'</br>';
    }else{
      echo "Gagal menyimpan data Scale Factor & Effort!".'</br>';
    }

    // Data Step 4
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

    $totalEM = $_POST['totalEM'];
    $totalPM = $_POST['totalPM'];

    // Query Step 4
    $sqlEffortMultiplier = "INSERT INTO em_user (id_em, id_modul, value) VALUES
     ('rely',$id_modul,$RELY),
     ('data',$id_modul,$DATA),
     ('cplx',$id_modul,$CPLX),
     ('ruse',$id_modul,$RUSE),
     ('docu',$id_modul,$DOCU),
     ('time',$id_modul,$TIME),
     ('stor',$id_modul,$STOR),
     ('pvol',$id_modul,$PVOL),
     ('acap',$id_modul,$ACAP),
     ('pcap',$id_modul,$PCAP),
     ('pcon',$id_modul,$PCON),
     ('apex',$id_modul,$APEX),
     ('plex',$id_modul,$PLEX),
     ('ltex',$id_modul,$LTEX),
     ('tool',$id_modul,$TOOL),
     ('site',$id_modul,$SITE),
     ('sced',$id_modul,$SCED)";

    $sqlTotalEM = "INSERT INTO total_em_user (id_modul, value) VALUES ($id_modul,$totalEM)";

    $sqlTotalPM = "INSERT INTO pm_user (id_modul, value) VALUES ($id_modul,$totalPM)";

    $resultEffortMultiplier = mysqli_query($con,$sqlEffortMultiplier);
    $resultTotalEM = mysqli_query($con,$sqlTotalEM);
    $resultTotalPM = mysqli_query($con,$sqlTotalPM);

        //Result Step 4
    if($resultEffortMultiplier && $resultTotalEM && $resultTotalPM){
      echo "Berhasil menyimpan data Effort Multiplier & Person Month!".'</br>';
    }else{
      echo "Gagal menyimpan data Effort Multiplier & Person Month!".'</br>';
    }

    // Data Step 5
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

    // Data Step 7
    $RequirementsPayrate = $_POST['RequirementsPayrate'];
    $valueRequirementsPayrate = $_POST['valueRequirementsPayrate'];

    $SpecificationsPayrate = $_POST['SpecificationsPayrate'];
    $valueSpecificationsPayrate = $_POST['valueSpecificationsPayrate'];

    $DesignPayrate = $_POST['DesignPayrate'];
    $valueDesignPayrate = $_POST['valueDesignPayrate'];

    $ImplementationPayrate = $_POST['ImplementationPayrate'];
    $valueImplementationPayrate = $_POST['valueImplementationPayrate'];

    $IntegrationPayrate = $_POST['IntegrationPayrate'];
    $valueIntegrationPayrate = $_POST['valueIntegrationPayrate'];

    $AcceptancePayrate = $_POST['AcceptancePayrate'];
    $valueAcceptancePayrate = $_POST['valueAcceptancePayrate'];

    $ProjectManagementPayrate = $_POST['ProjectManagementPayrate'];
    $valueProjectManagementPayrate = $_POST['valueProjectManagementPayrate'];

    $ConfigurationPayrate = $_POST['ConfigurationPayrate'];
    $valueConfigurationPayrate = $_POST['valueConfigurationPayrate'];

    $QualityPayrate = $_POST['QualityPayrate'];
    $valueQualityPayrate = $_POST['valueQualityPayrate'];

    $DocumentationsPayrate = $_POST['DocumentationsPayrate'];
    $valueDocumentationsPayrate = $_POST['valueDocumentationsPayrate'];

    $TrainingPayrate = $_POST['TrainingPayrate'];
    $valueTrainingPayrate = $_POST['valueTrainingPayrate'];

    $EvaluationPayrate = $_POST['EvaluationPayrate'];
    $valueEvaluationPayrate = $_POST['valueEvaluationPayrate'];

    $valueTotalCostOfActivityWaterfallWithPayrate = $_POST['valueTotalCostOfActivityWaterfallWithPayrate'];


    // Query Step 5
    $sqlActivity = "INSERT INTO activity_user (id_activity, id_modul, persen, value,used, payrate, total) VALUES 
    ('rec',$id_modul,$PREC,$REC,'System Analyst',$RequirementsPayrate,$valueRequirementsPayrate),
    ('spe',$id_modul,$PSPE,$SPE,'System Analyst',$SpecificationsPayrate,$valueSpecificationsPayrate),
    ('des',$id_modul,$PDES,$DES,'System Analyst',$DesignPayrate,$valueDesignPayrate),
    ('imp',$id_modul,$PIMP,$IMP,'Programmer',$ImplementationPayrate,$valueImplementationPayrate),
    ('int',$id_modul,$PINT,$INT,'System Testing',$IntegrationPayrate,$valueIntegrationPayrate),
    ('acc',$id_modul,$PACC,$ACC,'System Testing',$AcceptancePayrate,$valueAcceptancePayrate),
    ('pro',$id_modul,$PPRO,$PRO,'Project Manager',$ProjectManagementPayrate,$valueProjectManagementPayrate),
    ('con',$id_modul,$PCON,$CON,'System Analyst',$ConfigurationPayrate,$valueConfigurationPayrate),
    ('qua',$id_modul,$PQUA,$QUA,'System Testing',$QualityPayrate,$valueQualityPayrate),
    ('doc',$id_modul,$PDOC,$DOC,'Documenter',$DocumentationsPayrate,$valueDocumentationsPayrate),
    ('tra',$id_modul,$PTRA,$TRA,'Technical Support',$TrainingPayrate,$valueTrainingPayrate),
    ('eva',$id_modul,$PEVA,$EVA,'System Testing',$EvaluationPayrate,$valueEvaluationPayrate)";

    $sqlTotalCostOfActivityWaterfall = "INSERT INTO total_activity_user (id_modul, value, total) VALUES ($id_modul,$TotalCostOfActivityWaterfall,$valueTotalCostOfActivityWaterfallWithPayrate)";

    $resultsqlActivity = mysqli_query($con, $sqlActivity);
    $resultsqlTotalCostOfActivityWaterfall = mysqli_query($con, $sqlTotalCostOfActivityWaterfall);

    //Result Step 5
    if($resultsqlActivity && $resultsqlTotalCostOfActivityWaterfall){
      echo "Berhasil menyimpan data Activity!".'</br>';
    }else{
      echo "Gagal menyimpan data Activity!".'</br>';
    }

    //step 6
    $salaryPublicPM = $_POST['salaryPublicPM'];
    $salaryPublicSA = $_POST['salaryPublicSA'];
    $salaryPublicP = $_POST['salaryPublicP'];
    $salaryPublicST = $_POST['salaryPublicST'];
    $salaryPublicTS = $_POST['salaryPublicTS'];
    $salaryPublicD = $_POST['salaryPublicD'];

    $salaryPrivatePM = $_POST['salaryPrivatePM'];
    $salaryPrivateSA = $_POST['salaryPrivateSA'];
    $salaryPrivateP = $_POST['salaryPrivateP'];
    $salaryPrivateST = $_POST['salaryPrivateST'];
    $salaryPrivateTS = $_POST['salaryPrivateTS'];
    $salaryPrivateD = $_POST['salaryPrivateD'];

    // Query Step 6
    $sqlPayrateUser = "INSERT INTO pay_rate_user (id_modul, position, requirement, private, public) VALUES 
    ($id_modul, 'Project Manager', 'minimal undergraduate and experience > 4 years',$salaryPrivatePM, $salaryPublicPM),
    ($id_modul, 'System Analyst', 'minimal undergraduate and experience > 3 years',$salaryPrivateSA, $salaryPublicSA),
    ($id_modul, 'Programmer', 'Experience 1-2 years',$salaryPrivateP, $salaryPublicP),
    ($id_modul, 'System Testing', 'Experience 1-2 years',$salaryPrivateST, $salaryPublicST),
    ($id_modul, 'Technical Support', 'Experience 1-2 years',$salaryPrivateTS, $salaryPublicTS),
    ($id_modul, 'Documenter', 'Experience 1-2 years',$salaryPrivateD, $salaryPublicD)";

    $resultSqlPayrateUser = mysqli_query($con, $sqlPayrateUser);

    //Result Step 6
    if($resultSqlPayrateUser){
      echo "Berhasil menyimpan data Payrate user!".'</br>';
    }else{
      echo "Gagal menyimpan data Payrate user!".'</br>';
    }

    // Data Step 9
    $dfta = $_POST['dfta'];
    $tt = $_POST['tt'];
    $eb = $_POST['eb'];
    $ub = $_POST['ub'];
    $lt = $_POST['lt'];
    $tcoppn = $_POST['tcoppn'];
    $icop = $_POST['icop'];
    $rav = $_POST['rav'];
    $rtpo = $_POST['rtpo'];
    $roe = $_POST['roe'];
    $rof = $_POST['rof'];
    $ocotpo = $_POST['ocotpo'];
    $oc = $_POST['oc'];
    $capc = $_POST['capc'];
    $cc = $_POST['cc'];
    $pda = $_POST['pda'];
    $ha = $_POST['ha'];
    $tl = $_POST['tl'];
    $ra = $_POST['ra'];
    $oosa = $_POST['oosa'];
    $etl = $_POST['etl'];
    $al = $_POST['al'];
    $rc = $_POST['rc'];
    $rse = $_POST['rse'];
    $sdc = $_POST['sdc'];
    $seminar = $_POST['seminar'];
    $s = $_POST['s'];
    $labt = $_POST['labt'];
    $c = $_POST['c'];

    $totalNonPersonel = $_POST['totalNonPersonel'];

    // Query Step 9
    $sqlNonpersonnel = "INSERT INTO non_personel (id_modul, name, biaya) VALUES 
    ($id_modul,'Documents for Travel Abroad',$dfta),
    ($id_modul,'Transportation Ticket',$tt),
    ($id_modul,'Excess Baggage',$eb),
    ($id_modul,'Unaccompanied Baggage',$ub),
    ($id_modul,'Local/inland travel',$lt),
    ($id_modul,'The Cost of Purchasing Project Needs',$tcoppn),
    ($id_modul,'Instalation Cost of Phone/internet/website',$icop),
    ($id_modul,'Rent a vechile',$rav),
    ($id_modul,'Rent the project office',$rtpo),
    ($id_modul,'Rent office equipment',$roe),
    ($id_modul,'Rent office furniture',$rof),
    ($id_modul,'Operational Cost of The Project Office',$ocotpo),
    ($id_modul,'Office Consumabled',$oc),
    ($id_modul,'Computer and Printer Consumables',$capc),
    ($id_modul,'Communication Costs',$cc),
    ($id_modul,'Per Diem Allowwance',$pda),
    ($id_modul,'Housing Allowwance',$ha),
    ($id_modul,'Temporaray Loadging',$tl),
    ($id_modul,'Relocation Allowwance',$ra),
    ($id_modul,'Eksternal Task Lodging',$etl),
    ($id_modul,'Annual Leave',$al),
    ($id_modul,'Reporting Costs',$rc),
    ($id_modul,'Rent Supporting Equipment',$rse),
    ($id_modul,'Secondary Data Collection',$sdc),
    ($id_modul,'Seminar, workshop, socialization, training, dissemination, discussion, coordination, among agencies, and Focus Group discussion',$seminar),
    ($id_modul,'Survey',$s),
    ($id_modul,'Laboratory Test',$labt),
    ($id_modul,'Copyright',$c)";

    $resultsqlNonpersonnel = mysqli_query($con, $sqlNonpersonnel);

    // Result Step 9 
    if($resultsqlNonpersonnel){
      echo "Berhasil menyimpan data Non Personnel!".'</br>';
    }else{
      echo "Gagal menyimpan data Non Personnel!".'</br>';
    }

    // Data Step 10
    $PersonelDirectCostBeforeProfit = $_POST['PersonelDirectCostBeforeProfit'];
    $totalProfitIDR = $_POST['totalProfitIDR'];
    $PersonelDirectCost = $_POST['PersonelDirectCost'];
    $NonPersonnelDirectCost = $_POST['NonPersonnelDirectCost'];
    $OwnerCostEstimateBeforeTaxes = $_POST['OwnerCostEstimateBeforeTaxes'];
    $ValueAddedTax = $_POST['ValueAddedTax'];
    $OwnerCostEstimate = $_POST['OwnerCostEstimate'];

    // Query Step 10
    $sqlAllCost = "INSERT INTO all_cost_user (id_modul, personel_direct_cost_before_profit, profit, personel_direct_cost, non_personel_direct_cost, owner_estimate_before_tax, tax, owner_cost_estimate) 
    VALUES ($id_modul, $PersonelDirectCostBeforeProfit, $totalProfitIDR, $PersonelDirectCost, $NonPersonnelDirectCost, $OwnerCostEstimateBeforeTaxes, $ValueAddedTax, $OwnerCostEstimate )";
    $resultsqlAllCost = mysqli_query($con, $sqlAllCost);

    //Result Step 10
    if($resultsqlAllCost){
      echo "Berhasil menyimpan data Total Proyek!".'</br>';
    }else{
      echo "Gagal menyimpan data Total Proyek!".'</br>';
    }

    // Update Data
    $sqlUpdateTotalInProject ="UPDATE modul SET total = '$OwnerCostEstimate' WHERE id_modul= $id_modul";
    $sqlUpdateStatusModul ="UPDATE modul SET status = 1 WHERE id_modul= '$id_modul'";

    $resultsqlUpdateTotalInProject = mysqli_query($con, $sqlUpdateTotalInProject);
    $resultsqlUpdateStatusModul = mysqli_query($con, $sqlUpdateStatusModul);

    if($resultsqlUpdateTotalInProject && $resultsqlUpdateStatusModul){
      echo "Berhasil Mengupdate data Total Proyek!".'</br>';
    } else {
      echo "Gagal Mengupdate data Total Proyek!".'</br>';
    }

    $profit = $_POST['profit'];
    $tax = $_POST['tax'];

    $sqlProfit = "INSERT INTO profit_user (id_modul, total) VALUES ($id_modul, $profit)";
    $sqlTax = "INSERT INTO tax_user (id_modul, total) VALUES ($id_modul, $tax)";

    $resultsqlProfit = mysqli_query($con, $sqlProfit);
    $resultsqlTax = mysqli_query($con, $sqlTax);

    if($resultsqlProfit && $resultsqlTax){
     // header('Location: ../tambah_project.php?project='.$id_project);
    }else {
    //  header('Location: ../tambah_project.php?gagal=1');
    }

    
}





?>