<div class="tab">
  <p>EM (Effort Multipliers)</p>
  <table class="table">
    <tr>
      <td rowspan="2">
        <center><b>Product</b></center>
      </td>
      <td colspan="6">
        <center><b>Weight</b></center>
      </td>
    </tr>
    <tr>
      <td> <b> Very Low </b> </td>
      <td> <b>Low</b> </td>
      <td> <b>Nominal</b> </td>
      <td> <b>Height</b> </td>
      <td> <b>Very Height</b> </td>
      <td> <b>Extra Height</b> </td>
    </tr>
    <tr>
      <td> Required Software Reliability
        <input type="text" hidden id="resultRequiredSoftwareReliability" name="resultRequiredSoftwareReliability"
          value="1.00">
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.82" onclick="pointRequiredSoftwareReliability(this.value)"
            name="RequiredSoftwareReliability">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.92" onclick="pointRequiredSoftwareReliability(this.value)"
            name="RequiredSoftwareReliability">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.00" checked onclick="pointRequiredSoftwareReliability(this.value)"
            name="RequiredSoftwareReliability">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.10" onclick="pointRequiredSoftwareReliability(this.value)"
            name="RequiredSoftwareReliability">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.26" onclick="pointRequiredSoftwareReliability(this.value)"
            name="RequiredSoftwareReliability">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.0" disabled onclick="pointRequiredSoftwareReliability(this.value)"
            name="RequiredSoftwareReliability">
          <span class="checkmark"></span>
        </label>
      </td>
    </tr>
    <tr>
      <td> Data Base Size
        <input type="text" hidden id="resultDataBaseSize" name="resultDataBaseSize" value="1.00">
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.0" disabled onclick="pointDataBaseSize(this.value)" name="DataBaseSize">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.90" onclick="pointDataBaseSize(this.value)" name="DataBaseSize">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.00" checked onclick="pointDataBaseSize(this.value)" name="DataBaseSize">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.14" onclick="pointDataBaseSize(this.value)" name="DataBaseSize">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.28" onclick="pointDataBaseSize(this.value)" name="DataBaseSize">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.0" disabled onclick="pointDataBaseSize(this.value)" name="DataBaseSize">
          <span class="checkmark"></span>
        </label>
      </td>
    </tr>
    <tr>
      <td> Product Complexity
        <input type="text" hidden id="resultProductComplexity" name="resultProductComplexity" value="1.00">
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.73" onclick="pointProductComplexity(this.value)" name="ProductComplexity">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.87" onclick="pointProductComplexity(this.value)" name="ProductComplexity">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.00" checked onclick="pointProductComplexity(this.value)"
            name="ProductComplexity">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.17" onclick="pointProductComplexity(this.value)" name="ProductComplexity">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.34" onclick="pointProductComplexity(this.value)" name="ProductComplexity">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.74" onclick="pointProductComplexity(this.value)" name="ProductComplexity">
          <span class="checkmark"></span>
        </label>
      </td>
    </tr>
    <tr>
      <td> Developed for Reusability
        <input type="text" hidden id="resultDevelopedforReusability" name="resultDevelopedforReusability" value="1.00">
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.0" disabled onclick="pointDevelopedforReusability(this.value)"
            name="DevelopedforReusability">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.95" onclick="pointDevelopedforReusability(this.value)"
            name="DevelopedforReusability">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.00" checked onclick="pointDevelopedforReusability(this.value)"
            name="DevelopedforReusability">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.07" onclick="pointDevelopedforReusability(this.value)"
            name="DevelopedforReusability">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.15" onclick="pointDevelopedforReusability(this.value)"
            name="DevelopedforReusability">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.24" onclick="pointDevelopedforReusability(this.value)"
            name="DevelopedforReusability">
          <span class="checkmark"></span>
        </label>
      </td>
    </tr>
    <tr>
      <td> Documentation Match to Lifecycle Needs
        <input type="text" hidden id="resultDocumentationMatchtoLifecycleNeeds"
          name="resultDocumentationMatchtoLifecycleNeeds" value="1.00">
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.81" onclick="pointDocumentationMatchtoLifecycleNeeds(this.value)"
            name="DocumentationMatchtoLifecycleNeeds">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.91" onclick="pointDocumentationMatchtoLifecycleNeeds(this.value)"
            name="DocumentationMatchtoLifecycleNeeds">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.00" checked onclick="pointDocumentationMatchtoLifecycleNeeds(this.value)"
            name="DocumentationMatchtoLifecycleNeeds">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.11" onclick="pointDocumentationMatchtoLifecycleNeeds(this.value)"
            name="DocumentationMatchtoLifecycleNeeds">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.23" onclick="pointDocumentationMatchtoLifecycleNeeds(this.value)"
            name="DocumentationMatchtoLifecycleNeeds">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.0" disabled onclick="pointDocumentationMatchtoLifecycleNeeds(this.value)"
            name="DocumentationMatchtoLifecycleNeeds">
          <span class="checkmark"></span>
        </label>
      </td>
    </tr>
    <tr>
      <td>Time Constraint
        <input type="text" hidden id="resultTimeConstraint" name="resultTimeConstraint" value="1.00">
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.0" disabled onclick="pointTimeConstraint(this.value)" name="TimeConstraint">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.0" disabled onclick="pointTimeConstraint(this.value)" name="TimeConstraint">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.00" checked onclick="pointTimeConstraint(this.value)" name="TimeConstraint">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.11" onclick="pointTimeConstraint(this.value)" name="TimeConstraint">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.29" onclick="pointTimeConstraint(this.value)" name="TimeConstraint">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.63" onclick="pointTimeConstraint(this.value)" name="TimeConstraint">
          <span class="checkmark"></span>
        </label>
      </td>
    </tr>
    <tr>
      <td>Storage Constraint
        <input type="text" hidden id="resultStorageConstraint" name="resultStorageConstraint" value="1.00">
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.0" disabled onclick="pointStorageConstraint(this.value)"
            name="StorageConstraint">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.0" disabled onclick="pointStorageConstraint(this.value)"
            name="StorageConstraint">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.00" checked onclick="pointStorageConstraint(this.value)"
            name="StorageConstraint">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.05" onclick="pointStorageConstraint(this.value)" name="StorageConstraint">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.17" onclick="pointStorageConstraint(this.value)" name="StorageConstraint">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.46" onclick="pointStorageConstraint(this.value)" name="StorageConstraint">
          <span class="checkmark"></span>
        </label>
      </td>
    </tr>
    <tr>
      <td>Platform Volatility
        <input type="text" hidden id="resultPlatformVolatility" name="resultPlatformVolatility" value="1.00">
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.00" disabled onclick="pointPlatformVolatility(this.value)"
            name="PlatformVolatility">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.87" onclick="pointPlatformVolatility(this.value)" name="PlatformVolatility">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.00" checked onclick="pointPlatformVolatility(this.value)"
            name="PlatformVolatility">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.15" onclick="pointPlatformVolatility(this.value)" name="PlatformVolatility">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.30" onclick="pointPlatformVolatility(this.value)" name="PlatformVolatility">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.00" disabled onclick="pointPlatformVolatility(this.value)"
            name="PlatformVolatility">
          <span class="checkmark"></span>
        </label>
      </td>
    </tr>
    <tr>
      <td> Analyst Capability
        <input type="text" hidden id="resultAnalystCapability" name="resultAnalystCapability" value="1.00">
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.42" onclick="pointAnalystCapability(this.value)" name="AnalystCapability">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.19" onclick="pointAnalystCapability(this.value)" name="AnalystCapability">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.00" checked onclick="pointAnalystCapability(this.value)"
            name="AnalystCapability">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.85" onclick="pointAnalystCapability(this.value)" name="AnalystCapability">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.71" onclick="pointAnalystCapability(this.value)" name="AnalystCapability">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.0" disabled onclick="pointAnalystCapability(this.value)"
            name="AnalystCapability">
          <span class="checkmark"></span>
        </label>
      </td>
    </tr>
    <tr>
      <td> Programmer Capability
        <input type="text" hidden id="resultProgrammerCapability" name="resultProgrammerCapability" value="1.00">
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.34" onclick="pointProgrammerCapability(this.value)" name="ProgrammerCapability">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.15" onclick="pointProgrammerCapability(this.value)" name="ProgrammerCapability">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.00" checked onclick="pointProgrammerCapability(this.value)"
            name="ProgrammerCapability">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.88" onclick="pointProgrammerCapability(this.value)" name="ProgrammerCapability">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.76" onclick="pointProgrammerCapability(this.value)" name="ProgrammerCapability">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.00" disabled onclick="pointProgrammerCapability(this.value)"
            name="ProgrammerCapability">
          <span class="checkmark"></span>
        </label>
      </td>
    </tr>
    <tr>
      <td>Personnel Continuity
        <input type="text" hidden id="resultPersonnelContinuity" name="resultPersonnelContinuity" value="1.00">
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.29" onclick="pointPersonnelContinuity(this.value)" name="PersonnelContinuity">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.12" onclick="pointPersonnelContinuity(this.value)" name="PersonnelContinuity">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.00" checked onclick="pointPersonnelContinuity(this.value)"
            name="PersonnelContinuity">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.90" onclick="pointPersonnelContinuity(this.value)" name="PersonnelContinuity">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.81" onclick="pointPersonnelContinuity(this.value)" name="PersonnelContinuity">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.00" disabled onclick="pointPersonnelContinuity(this.value)"
            name="PersonnelContinuity">
          <span class="checkmark"></span>
        </label>
      </td>
    </tr>
    <tr>
      <td>Application Experience
        <input type="text" hidden id="resultApplicationExperience" name="resultApplicationExperience" value="1.00">
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.22" onclick="pointApplicationExperience(this.value)"
            name="ApplicationExperience">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.10" onclick="pointApplicationExperience(this.value)"
            name="ApplicationExperience">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.00" checked onclick="pointApplicationExperience(this.value)"
            name="ApplicationExperience">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.88" onclick="pointApplicationExperience(this.value)"
            name="ApplicationExperience">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.81" onclick="pointApplicationExperience(this.value)"
            name="ApplicationExperience">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.00" disabled onclick="pointApplicationExperience(this.value)"
            name="ApplicationExperience">
          <span class="checkmark"></span>
        </label>
      </td>
    </tr>
    <tr>
      <td>Platform Experience
        <input type="text" hidden id="resultPlatformExperience" name="resultPlatformExperience" value="1.00">
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.19" onclick="pointPlatformExperience(this.value)" name="PlatformExperience">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.09" onclick="pointPlatformExperience(this.value)" name="PlatformExperience">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.00" checked onclick="pointPlatformExperience(this.value)"
            name="PlatformExperience">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.91" onclick="pointPlatformExperience(this.value)" name="PlatformExperience">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.85" onclick="pointPlatformExperience(this.value)" name="PlatformExperience">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.00" disabled onclick="pointPlatformExperience(this.value)"
            name="PlatformExperience">
          <span class="checkmark"></span>
        </label>
      </td>
    </tr>
    <tr>
      <td>Language and Toolset Experience
        <input type="text" hidden id="resultLanguageandToolsetExperience" name="resultLanguageandToolsetExperience"
          value="1.00">
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.20" onclick="pointLanguageandToolsetExperience(this.value)"
            name="LanguageandToolsetExperience">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.09" onclick="pointLanguageandToolsetExperience(this.value)"
            name="LanguageandToolsetExperience">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.00" checked onclick="pointLanguageandToolsetExperience(this.value)"
            name="LanguageandToolsetExperience">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.91" onclick="pointLanguageandToolsetExperience(this.value)"
            name="LanguageandToolsetExperience">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.84" onclick="pointLanguageandToolsetExperience(this.value)"
            name="LanguageandToolsetExperience">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.00" disabled onclick="pointLanguageandToolsetExperience(this.value)"
            name="LanguageandToolsetExperience">
          <span class="checkmark"></span>
        </label>
      </td>
    </tr>

    <tr>
      <td>Use of Software Tools
        <input type="text" hidden id="resultUseofSoftwareTools" name="resultUseofSoftwareTools" value="1.00">
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.17" onclick="pointUseofSoftwareTools(this.value)" name="UseofSoftwareTools">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.09" onclick="pointUseofSoftwareTools(this.value)" name="UseofSoftwareTools">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.00" checked onclick="pointUseofSoftwareTools(this.value)"
            name="UseofSoftwareTools">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.90" onclick="pointUseofSoftwareTools(this.value)" name="UseofSoftwareTools">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.78" onclick="pointUseofSoftwareTools(this.value)" name="UseofSoftwareTools">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.00" disabled onclick="pointUseofSoftwareTools(this.value)"
            name="UseofSoftwareTools">
          <span class="checkmark"></span>
        </label>
      </td>
    </tr>
    <tr>
      <td>Multisite Development
        <input type="text" hidden id="resultMultisiteDevelopment" name="resultMultisiteDevelopment" value="1.00">
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.22" onclick="pointMultisiteDevelopment(this.value)" name="MultisiteDevelopment">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.09" onclick="pointMultisiteDevelopment(this.value)" name="MultisiteDevelopment">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.00" checked onclick="pointMultisiteDevelopment(this.value)"
            name="MultisiteDevelopment">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.93" onclick="pointMultisiteDevelopment(this.value)" name="MultisiteDevelopment">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.86" onclick="pointMultisiteDevelopment(this.value)" name="MultisiteDevelopment">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="0.80" onclick="pointMultisiteDevelopment(this.value)" name="MultisiteDevelopment">
          <span class="checkmark"></span>
        </label>
      </td>
    </tr>
    <tr>
      <td>Required Development Schedule
        <input type="text" hidden id="resultRequiredDevelopmentSchedule" name="resultRequiredDevelopmentSchedule"
          value="1.00">
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.00" onclick="pointRequiredDevelopmentSchedule(this.value)"
            name="RequiredDevelopmentSchedule">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.00" onclick="pointRequiredDevelopmentSchedule(this.value)"
            name="RequiredDevelopmentSchedule">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.00" checked onclick="pointRequiredDevelopmentSchedule(this.value)"
            name="RequiredDevelopmentSchedule">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.00" onclick="pointRequiredDevelopmentSchedule(this.value)"
            name="RequiredDevelopmentSchedule">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.00" onclick="pointRequiredDevelopmentSchedule(this.value)"
            name="RequiredDevelopmentSchedule">
          <span class="checkmark"></span>
        </label>
      </td>
      <td>
        <label class="containerz">
          <input type="radio" value="1.00" onclick="pointRequiredDevelopmentSchedule(this.value)"
            name="RequiredDevelopmentSchedule">
          <span class="checkmark"></span>
        </label>
      </td>
    </tr>
    <tr>
      <td><button type="button" onclick="hitungStepFour()">Count</button></td>
    </tr>
  </table>
  <table class="table">


    <tr>
      <td>
        Total EM
      </td>

    </tr>
    <tr>
      <td><input placeholder="Total" readonly type="text" oninput="this.className = ''" id="totalStepFour" name="totalEM"></td>
    </tr>
    <tr>
      <td>
        Total PM
      </td>
    </tr>
    <tr>
      <td><input placeholder="Total" readonly type="text" oninput="this.className = ''" id="totalStepFourPM" name="totalPM"></td>

    </tr>

  </table>


</div>