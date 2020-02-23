<div class="tab">
<p>SF (Scale Factor)</p>
  <p>Software Scale Drivers</p>
  <table border="0" class="table">
    <tr>
      <td>Precedentedness</td>
      <td> : </td>
      <td>
        <input hidden type="text" name="PrecedentednessValue" id="PrecedentednessValue">
        <select class="custom-select my-1 mr-sm-2" name="Precedentedness" id="Precedentedness">
          <option value="very_low">Very Low</option>
          <option value="low">Low</option>
          <option value="nominal" selected>Nominal</option>
          <option value="height">Height</option>
          <option value="very_height">Very Height</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Development Flexibility</td>
      <td> : </td>
      <td>
        <input hidden type="text" name="DevelopmentFlexibilityValue" id="DevelopmentFlexibilityValue">
        <select class="custom-select my-1 mr-sm-2" name="DevelopmentFlexibility" id="DevelopmentFlexibility">
          <option value="very_low">Very Low</option>
          <option value="low">Low</option>
          <option value="nominal" selected>Nominal</option>
          <option value="height">Height</option>
          <option value="very_height">Very Height</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Architecture / Risk Resolution</td>
      <td> : </td>
      <td>
        <input hidden type="text" name="ArchitectureValue" id="ArchitectureValue">
        <select class="custom-select my-1 mr-sm-2" name="Architecture" id="Architecture">
          <option value="very_low">Very Low</option>
          <option value="low">Low</option>
          <option value="nominal" selected>Nominal</option>
          <option value="height">Height</option>
          <option value="very_height">Very Height</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Team Cohesion</td>
      <td> : </td>
      <td>
        <input hidden type="text" name="TeamCohesionValue" id="TeamCohesionValue">
        <select class="custom-select my-1 mr-sm-2" name="TeamCohesion" id="TeamCohesion">
          <option value="very_low">Very Low</option>
          <option value="low">Low</option>
          <option value="nominal" selected>Nominal</option>
          <option value="height">Height</option>
          <option value="very_height">Very Height</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Process Maturity</td>
      <td> : </td>
      <td>
        <input hidden type="text" name="ProcessMaturityValue" id="ProcessMaturityValue">
        <select class="custom-select my-1 mr-sm-2" name="ProcessMaturity" id="ProcessMaturity">
          <option value="very_low">Very Low</option>
          <option value="low">Low</option>
          <option value="nominal" selected>Nominal</option>
          <option value="height">Height</option>
          <option value="very_height">Very Height</option>
        </select>
      </td>
    </tr>
    <tr>
      <td colspan="3"><button type="button" onclick="hitungStepThree()">Count</button></td>
    </tr>
    <tr>
      <td>
        <input placeholder="Total" type="number" value="0" readonly oninput="this.className = ''" id="totalStepThree"
          name="E">
      </td>
    </tr>

  </table>
</div>