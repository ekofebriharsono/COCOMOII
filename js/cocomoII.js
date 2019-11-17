var UFPGlobal = 0;
var KLOCGlobal = 0;
var PMGlobal = 0;
var EMGlobal = 0;
var EGlobal = 0;
var TotalGajiGlobal = 0;

function hitungStepOne(){

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
  }

  function hitungStepTwo(){
    var SLOC_Conversion_ratios = document.getElementById("valueStepTwo").value;

            switch(SLOC_Conversion_ratios) {
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
         
    if (SLOC_Conversion_ratios==""){ //jika tidak ada buah yg dipilih  
        alert("Please Selected 1 Language!");
    }
    else {
        var SIZE = SLOC_Conversion_ratios * UFPGlobal;
        document.getElementById("SLOC").value = SLOC_Conversion_ratios;
        document.getElementById("SIZE").value = SIZE;
        KLOCGlobal = SIZE / 1000;

    }
   
  }

  function pointSLOC(point){
    document.getElementById("valueStepTwo").value = point;
  }

  function hitungStepThree(){
    var Precedentedness = document.getElementById("Precedentedness").value;
    var DevelopmentFlexibility = document.getElementById("DevelopmentFlexibility").value;
    var Architecture = document.getElementById("Architecture").value;
    var TeamCohesion = document.getElementById("TeamCohesion").value;
    var ProcessMaturity = document.getElementById("ProcessMaturity").value;

    var E = "";
    var B = 0.91;

    switch(Precedentedness) {
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

    switch(DevelopmentFlexibility) {
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

    switch(Architecture) {
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

    switch(TeamCohesion) {
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

    switch(ProcessMaturity) {
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
    
    document.getElementById("totalStepThree").value = E;
    document.getElementById("PrecedentednessValue").value = Precedentedness;
    document.getElementById("DevelopmentFlexibilityValue").value = DevelopmentFlexibility;
    document.getElementById("ArchitectureValue").value = Architecture;
    document.getElementById("TeamCohesionValue").value = TeamCohesion;
    document.getElementById("ProcessMaturityValue").value = ProcessMaturity;


    EGlobal = E;
  }

  function hitungStepFour(){
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

    // switch(RequiredSoftwareReliability) {
    //   case "very_low":
    //       RequiredSoftwareReliability = 0.82;
    //     break;
    //   case "low":
    //       RequiredSoftwareReliability = 0.92;
    //     break;
    //   case "nominal":
    //       RequiredSoftwareReliability = 1.00;
    //     break;
    //   case "height":
    //       RequiredSoftwareReliability = 1.10;
    //     break;
    //   case "very_height":
    //       RequiredSoftwareReliability = 1.26;
    //     break;
    //   case "extra_height":
    //       RequiredSoftwareReliability = 0.00;
    //     break;
    //   default:
    // }

    // switch(DataBaseSize) {
    //   case "very_low":
    //       DataBaseSize = 0.00;
    //     break;
    //   case "low":
    //       DataBaseSize = 0.90;
    //     break;
    //   case "nominal":
    //       DataBaseSize = 1.00;
    //     break;
    //   case "height":
    //       DataBaseSize = 1.14;
    //     break;
    //   case "very_height":
    //       DataBaseSize = 1.28;
    //     break;
    //   case "extra_height":
    //       DataBaseSize = 0.00;
    //     break;
    //   default:
    // }

    // switch(ProductComplexity) {
    //   case "very_low":
    //       ProductComplexity = 0.73;
    //     break;
    //   case "low":
    //       ProductComplexity = 0.87;
    //     break;
    //   case "nominal":
    //       ProductComplexity = 1.00;
    //     break;
    //   case "height":
    //       ProductComplexity = 1.17;
    //     break;
    //   case "very_height":
    //       ProductComplexity = 1.34;
    //     break;
    //   case "extra_height":
    //       ProductComplexity = 1.74;
    //     break;
    //   default:
    // }

    // switch(DevelopedforReusability) {
    //   case "very_low":
    //       DevelopedforReusability = 0.00;
    //     break;
    //   case "low":
    //       DevelopedforReusability = 0.95;
    //     break;
    //   case "nominal":
    //       DevelopedforReusability = 1.00;
    //     break;
    //   case "height":
    //       DevelopedforReusability = 1.07;
    //     break;
    //   case "very_height":
    //       DevelopedforReusability = 1.15;
    //     break;
    //   case "extra_height":
    //       DevelopedforReusability = 1.24;
    //     break;
    //   default:
    // }

    // switch(DocumentationMatchtoLifecycleNeeds) {
    //   case "very_low":
    //       DocumentationMatchtoLifecycleNeeds = 0.81;
    //     break;
    //   case "low":
    //       DocumentationMatchtoLifecycleNeeds = 0.91;
    //     break;
    //   case "nominal":
    //       DocumentationMatchtoLifecycleNeeds = 1.00;
    //     break;
    //   case "height":
    //       DocumentationMatchtoLifecycleNeeds = 1.11;
    //     break;
    //   case "very_height":
    //       DocumentationMatchtoLifecycleNeeds = 1.23;
    //     break;
    //   case "extra_height":
    //       DocumentationMatchtoLifecycleNeeds = 0.00;
    //     break;
    //   default:
    // }

    // switch(AnalystCapability) {
    //   case "very_low":
    //       AnalystCapability = 1.42;
    //     break;
    //   case "low":
    //       AnalystCapability = 1.19;
    //     break;
    //   case "nominal":
    //       AnalystCapability = 1.00;
    //     break;
    //   case "height":
    //       AnalystCapability = 0.85;
    //     break;
    //   case "very_height":
    //       AnalystCapability = 0.71;
    //     break;
    //   case "extra_height":
    //       AnalystCapability = 0.00;
    //     break;
    //   default:
    // }

    // switch(ProgrammerCapability) {
    //   case "very_low":
    //       ProgrammerCapability = 1.34;
    //     break;
    //   case "low":
    //       ProgrammerCapability = 1.15;
    //     break;
    //   case "nominal":
    //       ProgrammerCapability = 1.00;
    //     break;
    //   case "height":
    //       ProgrammerCapability = 0.85;
    //     break;
    //   case "very_height":
    //       ProgrammerCapability = 0.76;
    //     break;
    //   case "extra_height":
    //       ProgrammerCapability = 0.00;
    //     break;
    //   default:
    // }

    // switch(PersonnelContinuity) {
    //   case "very_low":
    //       PersonnelContinuity = 1.29;
    //     break;
    //   case "low":
    //       PersonnelContinuity = 1.12;
    //     break;
    //   case "nominal":
    //       PersonnelContinuity = 1.00;
    //     break;
    //   case "height":
    //       PersonnelContinuity = 0.90;
    //     break;
    //   case "very_height":
    //       PersonnelContinuity = 0.81;
    //     break;
    //   case "extra_height":
    //       PersonnelContinuity = 0.00;
    //     break;
    //   default:
    // }

    // switch(ApplicationExperience) {
    //   case "very_low":
    //       ApplicationExperience = 1.22;
    //     break;
    //   case "low":
    //       ApplicationExperience = 1.10;
    //     break;
    //   case "nominal":
    //       ApplicationExperience = 1.00;
    //     break;
    //   case "height":
    //       ApplicationExperience = 0.88;
    //     break;
    //   case "very_height":
    //       ApplicationExperience = 0.81;
    //     break;
    //   case "extra_height":
    //       ApplicationExperience = 0.00;
    //     break;
    //   default:
    // }

    // switch(PlatformExperience) {
    //   case "very_low":
    //       PlatformExperience = 1.19;
    //     break;
    //   case "low":
    //       PlatformExperience = 1.09;
    //     break;
    //   case "nominal":
    //       PlatformExperience = 1.00;
    //     break;
    //   case "height":
    //       PlatformExperience = 0.91;
    //     break;
    //   case "very_height":
    //       PlatformExperience = 0.81;
    //     break;
    //   case "extra_height":
    //       PlatformExperience = 0.00;
    //     break;
    //   default:
    // }

    // switch(TimeConstraint) {
    //   case "very_low":
    //       TimeConstraint = 0.00;
    //     break;
    //   case "low":
    //       TimeConstraint = 0.00;
    //     break;
    //   case "nominal":
    //       TimeConstraint = 1.00;
    //     break;
    //   case "height":
    //       TimeConstraint = 1.11;
    //     break;
    //   case "very_height":
    //       TimeConstraint = 1.29;
    //     break;
    //   case "extra_height":
    //       TimeConstraint = 1.63;
    //     break;
    //   default:
    // }

    // switch(StorageConstraint) {
    //   case "very_low":
    //       StorageConstraint = 0.00;
    //     break;
    //   case "low":
    //       StorageConstraint = 0.00;
    //     break;
    //   case "nominal":
    //       StorageConstraint = 1.00;
    //     break;
    //   case "height":
    //       StorageConstraint = 1.05;
    //     break;
    //   case "very_height":
    //       StorageConstraint = 1.17;
    //     break;
    //   case "extra_height":
    //       StorageConstraint = 1.46;
    //     break;
    //   default:
    // }

    // switch(PlatformVolatility) {
    //   case "very_low":
    //       PlatformVolatility = 0.00;
    //     break;
    //   case "low":
    //       PlatformVolatility = 0.87;
    //     break;
    //   case "nominal":
    //       PlatformVolatility = 1.00;
    //     break;
    //   case "height":
    //       PlatformVolatility = 1.15;
    //     break;
    //   case "very_height":
    //       PlatformVolatility = 1.30;
    //     break;
    //   case "extra_height":
    //       PlatformVolatility = 0.00;
    //     break;
    //   default:
    // }

    // switch(UseofSoftwareTools) {
    //   case "very_low":
    //       UseofSoftwareTools = 1.17;
    //     break;
    //   case "low":
    //       UseofSoftwareTools = 1.09;
    //     break;
    //   case "nominal":
    //       UseofSoftwareTools = 1.00;
    //     break;
    //   case "height":
    //       UseofSoftwareTools = 0.90;
    //     break;
    //   case "very_height":
    //       UseofSoftwareTools = 0.78;
    //     break;
    //   case "extra_height":
    //       UseofSoftwareTools = 0.00;
    //     break;
    //   default:
    // }

    // switch(MultisiteDevelopment) {
    //   case "very_low":
    //       MultisiteDevelopment = 1.22;
    //     break;
    //   case "low":
    //       MultisiteDevelopment = 1.09;
    //     break;
    //   case "nominal":
    //       MultisiteDevelopment = 1.00;
    //     break;
    //   case "height":
    //       MultisiteDevelopment = 0.93;
    //     break;
    //   case "very_height":
    //       MultisiteDevelopment = 0.86;
    //     break;
    //   case "extra_height":
    //       MultisiteDevelopment = 0.80;
    //     break;
    //   default:
    // }

    

    // var i;
    // sizeE = KLOCGlobal;
    // for(i=0;i<(EGlobal-1);i++) {
    //   sizeE = sizeE * KLOCGlobal;
    // }

    sizeE = Math.pow(KLOCGlobal, EGlobal);

    EM = RequiredSoftwareReliability * DataBaseSize * ProductComplexity * DevelopedforReusability * DocumentationMatchtoLifecycleNeeds * AnalystCapability * ProgrammerCapability * PersonnelContinuity * ApplicationExperience * PlatformExperience * TimeConstraint * StorageConstraint * PlatformVolatility *LanguageandToolsetExperience* UseofSoftwareTools * MultisiteDevelopment * RequiredDevelopmentSchedule ;
    
    PM = A * sizeE * EM;
    
    document.getElementById("totalStepFour").value = EM;
    document.getElementById("totalStepFourPM").value = PM;
    PMGlobal = PM;
    EMGlobal = EM;

  }

  function pointRequiredSoftwareReliability(point){
    document.getElementById("resultRequiredSoftwareReliability").value = point;
  }

  function pointDataBaseSize(point){
    document.getElementById("resultDataBaseSize").value = point;
  }

  function pointProductComplexity(point){
    document.getElementById("resultProductComplexity").value = point;
  }

  function pointDevelopedforReusability(point){
    document.getElementById("resultDevelopedforReusability").value = point;
  }

  function pointDocumentationMatchtoLifecycleNeeds(point){
    document.getElementById("resultDocumentationMatchtoLifecycleNeeds").value = point;
  }

  function pointAnalystCapability(point){
    document.getElementById("resultAnalystCapability").value = point;
  }

  function pointProgrammerCapability(point){
    document.getElementById("resultProgrammerCapability").value = point;
  }
  
  function pointPersonnelContinuity(point){
    document.getElementById("resultPersonnelContinuity").value = point;
  }

  function pointApplicationExperience(point){
    document.getElementById("resultApplicationExperience").value = point;
  }

  function pointPlatformExperience(point){
    document.getElementById("resultPlatformExperience").value = point;
  }

  function pointLanguageandToolsetExperience(point){
    document.getElementById("resultLanguageandToolsetExperience").value = point;
  }

  function pointTimeConstraint(point){
    document.getElementById("resultTimeConstraint").value = point;
  }

  function pointStorageConstraint(point){
    document.getElementById("resultStorageConstraint").value = point;
  }

  function pointPlatformVolatility(point){
    document.getElementById("resultPlatformVolatility").value = point;
  }

  function pointLanguageandToolsetExperience(point){
    document.getElementById("resultLanguageandToolsetExperience").value = point;
  }

  function pointUseofSoftwareTools(point){
    document.getElementById("resultUseofSoftwareTools").value = point;
  }

  function pointMultisiteDevelopment(point){
    document.getElementById("resultMultisiteDevelopment").value = point;
  }

  function pointRequiredDevelopmentSchedule(point){
    document.getElementById("resultRequiredDevelopmentSchedule").value = point;
  }


  function hitungGaji(){
    var gaji = document.getElementById("gaji").value;
    var metodeGaji = document.getElementById("metodeGaji").value;
    var totalGaji = 0;

    switch(metodeGaji) {
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

  function getValueRequirements(point){
    document.getElementById("valueRequirements").value = point;
  }

  function getValueSpecifications(point){
    document.getElementById("valueSpecifications").value = point;
  }

  function getValueDesign(point){
    document.getElementById("valueDesign").value = point;
  }

  function getValueImplementation(point){
    document.getElementById("valueImplementation").value = point;
  }

  function getValueIntegration(point){
    document.getElementById("valueIntegration").value = point;
  }

  function getValueAcceptance(point){
    document.getElementById("valueAcceptance").value = point;
  }

  function getValueProjectManagement(point){
    document.getElementById("valueProjectManagement").value = point;
  }

  function getValueConfiguration(point){
    document.getElementById("valueConfiguration").value = point;
  }

  function getValueQuality(point){
    document.getElementById("valueQuality").value = point;
  }

  function getValueDocumentations(point){
    document.getElementById("valueDocumentations").value = point;
  }

  function getValueTraining(point){
    document.getElementById("valueTraining").value = point;
  }

  function getValueEvaluation(point){
    document.getElementById("valueEvaluation").value = point;
  }

  function hitungTotalCostOfActivityWaterfall(){
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

    // var ActivityRequirements = EMGlobal * Requirements * TotalGajiGlobal;
    // var ActivitySpecifications = EMGlobal * Specifications * TotalGajiGlobal;
    // var ActivityDesign = EMGlobal * Design * TotalGajiGlobal;
    // var ActivityImplementation = EMGlobal * Implementation * TotalGajiGlobal;
    // var ActivityIntegration = EMGlobal * Integration * TotalGajiGlobal;
    // var ActivityAcceptance = EMGlobal * Acceptance * TotalGajiGlobal;
    // var ActivityProjectManagement = EMGlobal * ProjectManagement * TotalGajiGlobal;
    // var ActivityConfiguration = EMGlobal * Configuration * TotalGajiGlobal;
    // var ActivityQuality = EMGlobal * Quality * TotalGajiGlobal;
    // var ActivityDocumentations = EMGlobal * Documentations * TotalGajiGlobal;
    // var ActivityTraining = EMGlobal * Training * TotalGajiGlobal;
    // var ActivityEvaluation = EMGlobal * Evaluation * TotalGajiGlobal;

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
    var ActivityTraining = PMGlobal * (Training/ 100);
    var ActivityEvaluation = PMGlobal * (Evaluation / 100);

    var totalActivityWaterfall = ActivityRequirements + ActivitySpecifications + ActivityDesign + ActivityImplementation + ActivityIntegration + ActivityAcceptance + ActivityProjectManagement + ActivityConfiguration + ActivityQuality + ActivityDocumentations + ActivityTraining + ActivityEvaluation ;

    document.getElementById("valueTotalCostOfActivityWaterfall").value = totalActivityWaterfall;
    document.getElementById("totalRequirements").value = ActivityRequirements;
    document.getElementById("totalSpecifications").value = ActivitySpecifications;
    document.getElementById("totalDesign").value = ActivityDesign;
    document.getElementById("totalImplementation").value = ActivityImplementation;
    document.getElementById("totalIntegration").value = ActivityIntegration;
    document.getElementById("totalAcceptance").value = ActivityAcceptance;
    document.getElementById("totalProjectManagement").value = ActivityProjectManagement;
    document.getElementById("totalConfiguration").value = ActivityConfiguration;
    document.getElementById("totalQuality").value = ActivityQuality;
    document.getElementById("totalDocumentations").value = ActivityDocumentations;
    document.getElementById("totalTraining").value = ActivityTraining;
    document.getElementById("totalEvaluation").value = ActivityEvaluation;

  }



