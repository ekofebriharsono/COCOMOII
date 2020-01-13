var UFPGlobal = 0;
var KLOCGlobal = 0;
var PMGlobal = 0;
var EMGlobal = 0;
var EGlobal = 0;
var TotalGajiGlobal = 0;

var KOMAActivityRequirements = 0;
var KOMAActivitySpecifications = 0;
var KOMAActivityDesign = 0;
var KOMAActivityImplementation = 0;
var KOMAActivityIntegration = 0;
var KOMAActivityAcceptance = 0;
var KOMAActivityProjectManagement = 0;
var KOMAActivityConfiguration = 0;
var KOMAActivityQuality = 0;
var KOMAActivityDocumentations = 0;
var KOMAActivityTraining = 0;
var KOMAActivityEvaluation = 0;

function hitungStepOne() {

  //Default Value
  //IFL
  var defaultValueLowILF = 7;
  var defaultValueAverageILF = 10;
  var defaultValueHeightILF = 15;
  //EIF
  var defaultValueLowEIF = 5;
  var defaultValueAverageEIF = 7;
  var defaultValueHeightEIF = 10;
  //EIF
  var defaultValueLowEI = 3;
  var defaultValueAverageEI = 4;
  var defaultValueHeightEI = 6;
  //EIF
  var defaultValueLowEO = 4;
  var defaultValueAverageEO = 5;
  var defaultValueHeightEO = 7;
  //EIF
  var defaultValueLowEQ = 3;
  var defaultValueAverageEQ = 4;
  var defaultValueHeightEQ = 6;

  //Get Value From Input StepOne
  var ILF_LOW = document.getElementById("ILF_LOW").value;
  var ILF_AVERAGE = document.getElementById("ILF_AVERAGE").value;
  var ILF_HEIGHT = document.getElementById("ILF_HEIGHT").value;

  var EIF_LOW = document.getElementById("EIF_LOW").value;
  var EIF_AVERAGE = document.getElementById("EIF_AVERAGE").value;
  var EIF_HEIGHT = document.getElementById("EIF_HEIGHT").value;

  var EI_LOW = document.getElementById("EI_LOW").value;
  var EI_AVERAGE = document.getElementById("EI_AVERAGE").value;
  var EI_HEIGHT = document.getElementById("EI_HEIGHT").value;

  var EO_LOW = document.getElementById("EO_LOW").value;
  var EO_AVERAGE = document.getElementById("EO_AVERAGE").value;
  var EO_HEIGHT = document.getElementById("EO_HEIGHT").value;

  var EQ_LOW = document.getElementById("EQ_LOW").value;
  var EQ_AVERAGE = document.getElementById("EQ_AVERAGE").value;
  var EQ_HEIGHT = document.getElementById("EQ_HEIGHT").value;

  //Hitung Point
  var PointILF_Low = defaultValueLowILF * ILF_LOW;
  var PointILF_Average = defaultValueAverageILF * ILF_AVERAGE;
  var PointILF_Height = defaultValueHeightILF * ILF_HEIGHT;

  var PointEIF_Low = defaultValueLowEIF * EIF_LOW;
  var PointEIF_Average = defaultValueAverageEIF * EIF_AVERAGE;
  var PointEIF_Height = defaultValueHeightEIF * EIF_HEIGHT;

  var PointEI_Low = defaultValueLowEI * EI_LOW;
  var PointEI_Average = defaultValueAverageEI * EI_AVERAGE;
  var PointEI_Height = defaultValueHeightEI * EI_HEIGHT;

  var PointEO_Low = defaultValueLowEO * EO_LOW;
  var PointEO_Average = defaultValueAverageEO * EO_AVERAGE;
  var PointEO_Height = defaultValueHeightEO * EO_HEIGHT;

  var PointEQ_Low = defaultValueLowEQ * EQ_LOW;
  var PointEQ_Average = defaultValueAverageEQ * EQ_AVERAGE;
  var PointEQ_Height = defaultValueHeightEQ * EQ_HEIGHT;

  //Hitung Total Point
  var TotalPointILF = PointILF_Low + PointILF_Average + PointILF_Height;
  var TotalPointEIF = PointEIF_Low + PointEIF_Average + PointEIF_Height;
  var TotalPointEI = PointEI_Low + PointEI_Average + PointEI_Height;
  var TotalPointEO = PointEO_Low + PointEO_Average + PointEO_Height;
  var TotalPointEQ = PointEQ_Low + PointEQ_Average + PointEQ_Height;

  //Hitung UFP (Total Keseluruhan)
  var UFP = TotalPointILF + TotalPointEIF + TotalPointEI + TotalPointEO + TotalPointEQ;

  document.getElementById("UFP").value = UFP;
  UFPGlobal = UFP;
  document.getElementById("UFPFromStepOne").value = UFPGlobal;
  document.getElementById("resultTotalUFP").innerHTML = UFPGlobal;

}

function hitungStepTwo() {
  var SLOC_Conversion_ratios = document.getElementById("valueStepTwo").value;

  switch (SLOC_Conversion_ratios) {
    case "Access":
      SLOC_Conversion_ratios = 38;
      break;
    case "Ada 83":
      SLOC_Conversion_ratios = 71;
      break;
    case "Ada 95":
      SLOC_Conversion_ratios = 49;
      break;
    case "AI Shell":
      SLOC_Conversion_ratios = 49;
      break;
    case "Jovial":
      SLOC_Conversion_ratios = 107;
      break;
    case "Lips":
      SLOC_Conversion_ratios = 64;
      break;
    case "Machine Code":
      SLOC_Conversion_ratios = 640;
      break;
    case "Modula 2":
      SLOC_Conversion_ratios = 80;
      break;
    case "APL":
      SLOC_Conversion_ratios = 32;
      break;
    case "Assembly - Basic":
      SLOC_Conversion_ratios = 320;
      break;
    case "Basic - ANSI":
      SLOC_Conversion_ratios = 64;
      break;
    case "Basic - Compiled":
      SLOC_Conversion_ratios = 91;
      break;
    case "Basic - Visual":
      SLOC_Conversion_ratios = 32;
      break;
    case "C":
      SLOC_Conversion_ratios = 128;
      break;
    case "C++":
      SLOC_Conversion_ratios = 55;
      break;
    case "Cobol (ANSI 85)":
      SLOC_Conversion_ratios = 91;
      break;
    case "Database - Default":
      SLOC_Conversion_ratios = 40;
      break;
    case "Fifth Generation Language":
      SLOC_Conversion_ratios = 4;
      break;
    case "First Generation Language":
      SLOC_Conversion_ratios = 320;
      break;
    case "Fourth":
      SLOC_Conversion_ratios = 64;
      break;
    case "Fourtran 77":
      SLOC_Conversion_ratios = 107;
      break;
    case "Fourtran 95":
      SLOC_Conversion_ratios = 71;
      break;
    case "Fourth Generation Language":
      SLOC_Conversion_ratios = 20;
      break;
    case "Height Level Language":
      SLOC_Conversion_ratios = 64;
      break;
    case "HTML 3.0":
      SLOC_Conversion_ratios = 15;
      break;
    case "Java":
      SLOC_Conversion_ratios = 35;
      break;
    case "Pascal":
      SLOC_Conversion_ratios = 91;
      break;
    case "PERL":
      SLOC_Conversion_ratios = 27;
      break;
    case "Prolog":
      SLOC_Conversion_ratios = 64;
      break;
    case "Query - Default":
      SLOC_Conversion_ratios = 13;
      break;
    case "Report Generator":
      SLOC_Conversion_ratios = 89;
      break;
    case "Second Generation Language":
      SLOC_Conversion_ratios = 107;
      break;
    case "Simulation - Default":
      SLOC_Conversion_ratios = 46;
      break;
    case "Spreadsheet":
      SLOC_Conversion_ratios = 6;
      break;
    case "Third Generation Language":
      SLOC_Conversion_ratios = 80;
      break;
    case "Unix Shell Scripts":
      SLOC_Conversion_ratios = 107;
      break;
    case "USR 1":
      SLOC_Conversion_ratios = 1;
      break;
    case "USR 2":
      SLOC_Conversion_ratios = 1;
      break;
    case "USR 3":
      SLOC_Conversion_ratios = 1;
      break;
    case "USR 3":
      SLOC_Conversion_ratios = 1;
      break;
    case "USR 4":
      SLOC_Conversion_ratios = 1;
      break;
    case "USR 5":
      SLOC_Conversion_ratios = 1;
      break;
    case "Visual Basic 5.0":
      SLOC_Conversion_ratios = 29;
      break;
    case "Visual C++":
      SLOC_Conversion_ratios = 34;
      break;
    default:
      // code block
  }

  if (SLOC_Conversion_ratios == "") { //jika tidak ada buah yg dipilih  
    alert("Please Selected 1 Language!");
  } else {
    var SIZE = SLOC_Conversion_ratios * UFPGlobal;
    document.getElementById("SLOC").value = SLOC_Conversion_ratios;
    document.getElementById("SIZE").value = SIZE;
    KLOCGlobal = SIZE / 1000;
    document.getElementById("resultTotalSize").innerHTML = KLOCGlobal;
  }

}

function pointSLOC(point) {
  document.getElementById("valueStepTwo").value = point;
}

function hitungStepThree() {

  var Precedentedness = document.getElementById("Precedentedness").value;
  var DevelopmentFlexibility = document.getElementById("DevelopmentFlexibility").value;
  var Architecture = document.getElementById("Architecture").value;
  var TeamCohesion = document.getElementById("TeamCohesion").value;
  var ProcessMaturity = document.getElementById("ProcessMaturity").value;

  var E = "";
  var B = 0.91;

  switch (Precedentedness) {
    case "very_low":
      Precedentedness = 6.20;
      break;
    case "low":
      Precedentedness = 4.96;
      break;
    case "nominal":
      Precedentedness = 3.72;
      break;
    case "height":
      Precedentedness = 2.48;
      break;
    case "very_height":
      Precedentedness = 1.24;
      break;
    case "extra_height":
      Precedentedness = 0.00;
      break;
    default:
  }

  switch (DevelopmentFlexibility) {
    case "very_low":
      DevelopmentFlexibility = 5.07;
      break;
    case "low":
      DevelopmentFlexibility = 4.96;
      break;
    case "nominal":
      DevelopmentFlexibility = 3.04;
      break;
    case "height":
      DevelopmentFlexibility = 2.03;
      break;
    case "very_height":
      DevelopmentFlexibility = 1.01;
      break;
    case "extra_height":
      DevelopmentFlexibility = 0.00;
      break;
    default:
  }

  switch (Architecture) {
    case "very_low":
      Architecture = 7.07;
      break;
    case "low":
      Architecture = 5.65;
      break;
    case "nominal":
      Architecture = 4.24;
      break;
    case "height":
      Architecture = 2.83;
      break;
    case "very_height":
      Architecture = 1.41;
      break;
    case "extra_height":
      Architecture = 0.00;
      break;
    default:
  }

  switch (TeamCohesion) {
    case "very_low":
      TeamCohesion = 5.48;
      break;
    case "low":
      TeamCohesion = 4.38;
      break;
    case "nominal":
      TeamCohesion = 3.29;
      break;
    case "height":
      TeamCohesion = 2.19;
      break;
    case "very_height":
      TeamCohesion = 1.10;
      break;
    case "extra_height":
      TeamCohesion = 0.00;
      break;
    default:
  }

  switch (ProcessMaturity) {
    case "very_low":
      ProcessMaturity = 7.80;
      break;
    case "low":
      ProcessMaturity = 6.24;
      break;
    case "nominal":
      ProcessMaturity = 4.68;
      break;
    case "height":
      ProcessMaturity = 3.12;
      break;
    case "very_height":
      ProcessMaturity = 1.56;
      break;
    case "extra_height":
      ProcessMaturity = 0.00;
      break;
    default:
  }

  var totalScaleFactors = Precedentedness + DevelopmentFlexibility + Architecture + TeamCohesion + ProcessMaturity;

  E = B + (0.01 * totalScaleFactors);

  var Efixed = E.toFixed(4);

  document.getElementById("totalStepThree").value = Efixed;
  document.getElementById("PrecedentednessValue").value = Precedentedness;
  document.getElementById("DevelopmentFlexibilityValue").value = DevelopmentFlexibility;
  document.getElementById("ArchitectureValue").value = Architecture;
  document.getElementById("TeamCohesionValue").value = TeamCohesion;
  document.getElementById("ProcessMaturityValue").value = ProcessMaturity;

  document.getElementById("resultTotalScaleFactor").innerHTML = Efixed;

  EGlobal = Efixed;
}

function hitungStepFour() {

  var RequiredSoftwareReliability = document.getElementById("resultRequiredSoftwareReliability").value;
  var DataBaseSize = document.getElementById("resultDataBaseSize").value;
  var ProductComplexity = document.getElementById("resultProductComplexity").value;
  var DevelopedforReusability = document.getElementById("resultDevelopedforReusability").value;
  var DocumentationMatchtoLifecycleNeeds = document.getElementById("resultDocumentationMatchtoLifecycleNeeds").value;
  var TimeConstraint = document.getElementById("resultTimeConstraint").value;
  var StorageConstraint = document.getElementById("resultStorageConstraint").value;
  var PlatformVolatility = document.getElementById("resultPlatformVolatility").value;
  var AnalystCapability = document.getElementById("resultAnalystCapability").value;
  var ProgrammerCapability = document.getElementById("resultProgrammerCapability").value;
  var PersonnelContinuity = document.getElementById("resultPersonnelContinuity").value;
  var ApplicationExperience = document.getElementById("resultApplicationExperience").value;
  var PlatformExperience = document.getElementById("resultPlatformExperience").value;
  var LanguageandToolsetExperience = document.getElementById("resultLanguageandToolsetExperience").value;
  var UseofSoftwareTools = document.getElementById("resultUseofSoftwareTools").value;
  var MultisiteDevelopment = document.getElementById("resultMultisiteDevelopment").value;
  var RequiredDevelopmentSchedule = document.getElementById("resultRequiredDevelopmentSchedule").value;


  var EM = 0;
  var PM = 0;
  var A = 2.94;
  var sizeE = 0;

  sizeE = Math.pow(KLOCGlobal, EGlobal);

  EM = RequiredSoftwareReliability * DataBaseSize * ProductComplexity * DevelopedforReusability * DocumentationMatchtoLifecycleNeeds * AnalystCapability * ProgrammerCapability * PersonnelContinuity * ApplicationExperience * PlatformExperience * TimeConstraint * StorageConstraint * PlatformVolatility * LanguageandToolsetExperience * UseofSoftwareTools * MultisiteDevelopment * RequiredDevelopmentSchedule;

  PM = A * sizeE * EM;
  PMGlobal = PM.toFixed(2);
  EMGlobal = EM.toFixed(4);

  document.getElementById("totalStepFour").value = EMGlobal;
  document.getElementById("totalStepFourPM").value = PMGlobal;
  PMGlobal = PM;
  EMGlobal = EM;

  document.getElementById("resultTotalEffortMultiplier").innerHTML = EMGlobal;
  document.getElementById("resultTotalPersonMonth").innerHTML = PMGlobal;

}

function pointRequiredSoftwareReliability(point) {
  document.getElementById("resultRequiredSoftwareReliability").value = point;
}

function pointDataBaseSize(point) {
  document.getElementById("resultDataBaseSize").value = point;
}

function pointProductComplexity(point) {
  document.getElementById("resultProductComplexity").value = point;
}

function pointDevelopedforReusability(point) {
  document.getElementById("resultDevelopedforReusability").value = point;
}

function pointDocumentationMatchtoLifecycleNeeds(point) {
  document.getElementById("resultDocumentationMatchtoLifecycleNeeds").value = point;
}

function pointAnalystCapability(point) {
  document.getElementById("resultAnalystCapability").value = point;
}

function pointProgrammerCapability(point) {
  document.getElementById("resultProgrammerCapability").value = point;
}

function pointPersonnelContinuity(point) {
  document.getElementById("resultPersonnelContinuity").value = point;
}

function pointApplicationExperience(point) {
  document.getElementById("resultApplicationExperience").value = point;
}

function pointPlatformExperience(point) {
  document.getElementById("resultPlatformExperience").value = point;
}

function pointLanguageandToolsetExperience(point) {
  document.getElementById("resultLanguageandToolsetExperience").value = point;
}

function pointTimeConstraint(point) {
  document.getElementById("resultTimeConstraint").value = point;
}

function pointStorageConstraint(point) {
  document.getElementById("resultStorageConstraint").value = point;
}

function pointPlatformVolatility(point) {
  document.getElementById("resultPlatformVolatility").value = point;
}

function pointLanguageandToolsetExperience(point) {
  document.getElementById("resultLanguageandToolsetExperience").value = point;
}

function pointUseofSoftwareTools(point) {
  document.getElementById("resultUseofSoftwareTools").value = point;
}

function pointMultisiteDevelopment(point) {
  document.getElementById("resultMultisiteDevelopment").value = point;
}

function pointRequiredDevelopmentSchedule(point) {
  document.getElementById("resultRequiredDevelopmentSchedule").value = point;
}


function hitungGaji() {
  var gaji = document.getElementById("gaji").value;
  var metodeGaji = document.getElementById("metodeGaji").value;
  var totalGaji = 0;

  switch (metodeGaji) {
    case "pwr":
      totalGaji = gaji / 4.1;
      break;
    case "pdr":
      totalGaji = (gaji / 22) * 1.1;
      break;
    case "phr":
      totalGaji = (gaji / 8) * 1.3;
      break;
  }

  document.getElementById("totalGaji").value = totalGaji;
  TotalGajiGlobal = totalGaji;

}

function getValueRequirements(point) {
  document.getElementById("valueRequirements").value = point;
}

function getValueSpecifications(point) {
  document.getElementById("valueSpecifications").value = point;
}

function getValueDesign(point) {
  document.getElementById("valueDesign").value = point;
}

function getValueImplementation(point) {
  document.getElementById("valueImplementation").value = point;
}

function getValueIntegration(point) {
  document.getElementById("valueIntegration").value = point;
}

function getValueAcceptance(point) {
  document.getElementById("valueAcceptance").value = point;
}

function getValueProjectManagement(point) {
  document.getElementById("valueProjectManagement").value = point;
}

function getValueConfiguration(point) {
  document.getElementById("valueConfiguration").value = point;
}

function getValueQuality(point) {
  document.getElementById("valueQuality").value = point;
}

function getValueDocumentations(point) {
  document.getElementById("valueDocumentations").value = point;
}

function getValueTraining(point) {
  document.getElementById("valueTraining").value = point;
}

function getValueEvaluation(point) {
  document.getElementById("valueEvaluation").value = point;
}

function hitungTotalCostOfActivityWaterfall() {
  var Requirements = document.getElementById("valueRequirements").value;
  var Specifications = document.getElementById("valueSpecifications").value;
  var Design = document.getElementById("valueDesign").value;
  var Implementation = document.getElementById("valueImplementation").value;
  var Integration = document.getElementById("valueIntegration").value;
  var Acceptance = document.getElementById("valueAcceptance").value;
  var ProjectManagement = document.getElementById("valueProjectManagement").value;
  var Configuration = document.getElementById("valueConfiguration").value;
  var Quality = document.getElementById("valueQuality").value;
  var Documentations = document.getElementById("valueDocumentations").value;
  var Training = document.getElementById("valueTraining").value;
  var Evaluation = document.getElementById("valueEvaluation").value;

  var ActivityRequirements = PMGlobal * (Requirements / 100);
  var ActivitySpecifications = PMGlobal * (Specifications / 100);
  var ActivityDesign = PMGlobal * (Design / 100);
  var ActivityImplementation = PMGlobal * (Implementation / 100);
  var ActivityIntegration = PMGlobal * (Integration / 100);
  var ActivityAcceptance = PMGlobal * (Acceptance / 100);
  var ActivityProjectManagement = PMGlobal * (ProjectManagement / 100);
  var ActivityConfiguration = PMGlobal * (Configuration / 100);
  var ActivityQuality = PMGlobal * (Quality / 100);
  var ActivityDocumentations = PMGlobal * (Documentations / 100);
  var ActivityTraining = PMGlobal * (Training / 100);
  var ActivityEvaluation = PMGlobal * (Evaluation / 100);

  KOMAActivityRequirements = ActivityRequirements.toFixed(2);
  KOMAActivitySpecifications = ActivitySpecifications.toFixed(2);
  KOMAActivityDesign = ActivityDesign.toFixed(2);
  KOMAActivityImplementation = ActivityImplementation.toFixed(2);
  KOMAActivityIntegration = ActivityIntegration.toFixed(2);
  KOMAActivityAcceptance = ActivityAcceptance.toFixed(2);
  KOMAActivityProjectManagement = ActivityProjectManagement.toFixed(2);
  KOMAActivityConfiguration = ActivityConfiguration.toFixed(2);
  KOMAActivityQuality = ActivityQuality.toFixed(2);
  KOMAActivityDocumentations = ActivityDocumentations.toFixed(2);
  KOMAActivityTraining = ActivityTraining.toFixed(2);
  KOMAActivityEvaluation = ActivityEvaluation.toFixed(2);

  var totalActivityWaterfall = ActivityRequirements + ActivitySpecifications + ActivityDesign + ActivityImplementation + ActivityIntegration + ActivityAcceptance + ActivityProjectManagement + ActivityConfiguration + ActivityQuality + ActivityDocumentations + ActivityTraining + ActivityEvaluation;

  totalActivityWaterfall = totalActivityWaterfall.toFixed(2);

  document.getElementById("valueTotalCostOfActivityWaterfall").value = totalActivityWaterfall;
  document.getElementById("totalRequirements").value = KOMAActivityRequirements;
  document.getElementById("totalSpecifications").value = KOMAActivitySpecifications;
  document.getElementById("totalDesign").value = KOMAActivityDesign;
  document.getElementById("totalImplementation").value = KOMAActivityImplementation;
  document.getElementById("totalIntegration").value = KOMAActivityIntegration;
  document.getElementById("totalAcceptance").value = KOMAActivityAcceptance;
  document.getElementById("totalProjectManagement").value = KOMAActivityProjectManagement;
  document.getElementById("totalConfiguration").value = KOMAActivityConfiguration;
  document.getElementById("totalQuality").value = KOMAActivityQuality;
  document.getElementById("totalDocumentations").value = KOMAActivityDocumentations;
  document.getElementById("totalTraining").value = KOMAActivityTraining;
  document.getElementById("totalEvaluation").value = KOMAActivityEvaluation;

  document.getElementById("resultTotalMethod").innerHTML = totalActivityWaterfall;

}

function hitungPaymentRate() {

  var salaryPublicPM = document.getElementById("salaryPublicPM").value;
  var salaryPublicSA = document.getElementById("salaryPublicSA").value;
  var salaryPublicP = document.getElementById("salaryPublicP").value;
  var salaryPublicST = document.getElementById("salaryPublicST").value;
  var salaryPublicTS = document.getElementById("salaryPublicTS").value;
  var salaryPublicD = document.getElementById("salaryPublicD").value;

  TsalaryPublicPM = salaryPublicPM * 0.7;
  TsalaryPublicSA = salaryPublicSA * 0.7;
  TsalaryPublicP = salaryPublicP * 0.7;
  TsalaryPublicST = salaryPublicST * 0.7;
  TsalaryPublicTS = salaryPublicTS * 0.7;
  TsalaryPublicD = salaryPublicD * 0.7;

  document.getElementById("salaryPrivatePM").value = TsalaryPublicPM.toFixed(0);
  document.getElementById("salaryPrivateSA").value = TsalaryPublicSA.toFixed(0);
  document.getElementById("salaryPrivateP").value = TsalaryPublicP.toFixed(0);
  document.getElementById("salaryPrivateST").value = TsalaryPublicST.toFixed(0);
  document.getElementById("salaryPrivateTS").value = TsalaryPublicTS.toFixed(0);
  document.getElementById("salaryPrivateD").value = TsalaryPublicD.toFixed(0);

  document.getElementById("RequirementsPayrate").value = salaryPublicSA;
  document.getElementById("SpecificationsPayrate").value = salaryPublicSA;
  document.getElementById("DesignPayrate").value = salaryPublicSA;
  document.getElementById("ImplementationPayrate").value = salaryPublicP;
  document.getElementById("IntegrationPayrate").value = salaryPublicST;
  document.getElementById("AcceptancePayrate").value = salaryPublicST;
  document.getElementById("ProjectManagementPayrate").value = salaryPublicPM;
  document.getElementById("ConfigurationPayrate").value = salaryPublicSA;
  document.getElementById("QualityPayrate").value = salaryPublicST;
  document.getElementById("DocumentationsPayrate").value = salaryPublicD;
  document.getElementById("TrainingPayrate").value = salaryPublicTS;
  document.getElementById("EvaluationPayrate").value = salaryPublicST;


}

function hitungStepSeven() {
  var RequirementsPayrate = document.getElementById("RequirementsPayrate").value;
  var SpecificationsPayrate = document.getElementById("SpecificationsPayrate").value;
  var DesignPayrate = document.getElementById("DesignPayrate").value;
  var ImplementationPayrate = document.getElementById("ImplementationPayrate").value;
  var IntegrationPayrate = document.getElementById("IntegrationPayrate").value;
  var AcceptancePayrate = document.getElementById("AcceptancePayrate").value;
  var ProjectManagementPayrate = document.getElementById("ProjectManagementPayrate").value;
  var ConfigurationPayrate = document.getElementById("ConfigurationPayrate").value;
  var QualityPayrate = document.getElementById("QualityPayrate").value;
  var DocumentationsPayrate = document.getElementById("DocumentationsPayrate").value;
  var TrainingPayrate = document.getElementById("TrainingPayrate").value;
  var EvaluationPayrate = document.getElementById("EvaluationPayrate").value;

  RequirementsPayrate = 0.923 * KOMAActivityRequirements * RequirementsPayrate;
  SpecificationsPayrate = 0.923 * KOMAActivitySpecifications * SpecificationsPayrate;
  DesignPayrate = 0.923 * KOMAActivityDesign * DesignPayrate;
  ImplementationPayrate = 0.923 * KOMAActivityImplementation * ImplementationPayrate;
  IntegrationPayrate = 0.923 * KOMAActivityIntegration * IntegrationPayrate;
  AcceptancePayrate = 0.923 * KOMAActivityAcceptance * AcceptancePayrate;
  ProjectManagementPayrate = 0.923 * KOMAActivityProjectManagement * ProjectManagementPayrate;
  ConfigurationPayrate = 0.923 * KOMAActivityConfiguration * ConfigurationPayrate;
  QualityPayrate = 0.923 * KOMAActivityQuality * QualityPayrate;
  DocumentationsPayrate = 0.923 * KOMAActivityDocumentations * DocumentationsPayrate;
  TrainingPayrate = 0.923 * KOMAActivityTraining * TrainingPayrate;
  EvaluationPayrate = 0.923 * KOMAActivityEvaluation * EvaluationPayrate;

  document.getElementById("valueRequirementsPayrate").value = RequirementsPayrate.toFixed(0);
  document.getElementById("valueSpecificationsPayrate").value = SpecificationsPayrate.toFixed(0);
  document.getElementById("valueDesignPayrate").value = DesignPayrate.toFixed(0);
  document.getElementById("valueImplementationPayrate").value = ImplementationPayrate.toFixed(0);
  document.getElementById("valueIntegrationPayrate").value = IntegrationPayrate.toFixed(0);
  document.getElementById("valueAcceptancePayrate").value = AcceptancePayrate.toFixed(0);
  document.getElementById("valueProjectManagementPayrate").value = ProjectManagementPayrate.toFixed(0);
  document.getElementById("valueConfigurationPayrate").value = ConfigurationPayrate.toFixed(0);
  document.getElementById("valueQualityPayrate").value = QualityPayrate.toFixed(0);
  document.getElementById("valueDocumentationsPayrate").value = DocumentationsPayrate.toFixed(0);
  document.getElementById("valueTrainingPayrate").value = TrainingPayrate.toFixed(0);
  document.getElementById("valueEvaluationPayrate").value = EvaluationPayrate.toFixed(0);

  var totalStepSeven = RequirementsPayrate + SpecificationsPayrate + DesignPayrate + ImplementationPayrate + IntegrationPayrate + AcceptancePayrate + ProjectManagementPayrate + ConfigurationPayrate + QualityPayrate + DocumentationsPayrate + TrainingPayrate + EvaluationPayrate;

  document.getElementById("valueTotalCostOfActivityWaterfallWithPayrate").value = totalStepSeven.toFixed(0);
  document.getElementById("costBeforeProfit").value = totalStepSeven.toFixed(0);

}

function hitungProfit() {
  var profit = document.getElementById("profit").value;
  var costz = document.getElementById("costBeforeProfit").value;

  profit = profit / 100;

  var totalProfit = costz * profit;
  var totalCostWithProfit = Number(costz) + Number(totalProfit);

  document.getElementById("totalProfit").value = totalProfit.toFixed(0);
  document.getElementById("costWithProfit").value = totalCostWithProfit.toFixed(0);

  document.getElementById("PersonelDirectCostBeforeProfit").value = costz;
  document.getElementById("totalProfitIDR").value = totalProfit.toFixed(0);
  document.getElementById("PersonelDirectCost").value = totalCostWithProfit.toFixed(0);

}

function hitungNonPersonel() {
  var dfta = document.getElementById("dfta").value;
  var tt = document.getElementById("tt").value;
  var eb = document.getElementById("eb").value;
  var ub = document.getElementById("ub").value;
  var lt = document.getElementById("lt").value;
  var tcoppn = document.getElementById("tcoppn").value;
  var icop = document.getElementById("icop").value;
  var rav = document.getElementById("rav").value;
  var rtpo = document.getElementById("rtpo").value;
  var roe = document.getElementById("roe").value;
  var rof = document.getElementById("rof").value;
  var ocotpo = document.getElementById("ocotpo").value;
  var oc = document.getElementById("oc").value;
  var capc = document.getElementById("capc").value;
  var cc = document.getElementById("cc").value;
  var pda = document.getElementById("pda").value;
  var ha = document.getElementById("ha").value;
  var tl = document.getElementById("tl").value;
  var ra = document.getElementById("ra").value;
  var oosa = document.getElementById("oosa").value;
  var etl = document.getElementById("etl").value;
  var al = document.getElementById("al").value;
  var rc = document.getElementById("rc").value;
  var rse = document.getElementById("rse").value;
  var sdc = document.getElementById("sdc").value;
  var seminar = document.getElementById("seminar").value;
  var s = document.getElementById("s").value;
  var labt = document.getElementById("labt").value;
  var c = document.getElementById("c").value;



  var total = Number(dfta) + Number(tt) + Number(eb) + Number(ub) + Number(lt) + Number(tcoppn) + Number(icop) + Number(rav) + Number(rtpo) + Number(roe) +
    Number(rof) + Number(ocotpo) + Number(oc) + Number(capc) + Number(cc) + Number(pda) + Number(ha) +
    Number(tl) + Number(ra) + Number(oosa) + Number(etl) + Number(al) + Number(rc) + Number(rse) + Number(sdc)+ Number(seminar)+ Number(s)+ Number(labt)+ Number(c);

  document.getElementById("totalNonPersonel").value = total.toFixed(0);
  document.getElementById("NonPersonnelDirectCost").value = total.toFixed(0);

}

function hitungTax() {

  var NonPersonnelDirectCost = document.getElementById("NonPersonnelDirectCost").value;
  var PersonelDirectCost = document.getElementById("PersonelDirectCost").value;
  var tax = document.getElementById("tax").value;

  var totalOwnerCostEstimateBeforeTax = Number(NonPersonnelDirectCost) + Number(PersonelDirectCost);

  tax = tax / 100;

  var totalTax = tax * totalOwnerCostEstimateBeforeTax;
  var OwnerCostEstimate = Number(totalTax) + Number(totalOwnerCostEstimateBeforeTax);

  document.getElementById("OwnerCostEstimateBeforeTaxes").value = totalOwnerCostEstimateBeforeTax.toFixed(0);
  document.getElementById("ValueAddedTax").value = totalTax.toFixed(0);
  document.getElementById("OwnerCostEstimate").value = OwnerCostEstimate.toFixed(0);


}