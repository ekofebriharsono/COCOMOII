<div class="tab">

<table border="0">
  <tr>
    <td>
      Gaji
    </td>
    <td>
      Metode
    </td>
  </tr>
  <tr>
    <td>
    <input placeholder="Gaji" type="number" value="0" oninput="this.className = ''" id="gaji">
    </td>
    <td>
          <select name="metodeGaji" id="metodeGaji">
            <option value="pwr" selected>PWR</option>
            <option value="pdr">PDR</option>
            <option value="phr">PHR</option>
          </select>
    </td>
    <td>
      <button type="button" onclick="hitungGaji()" id="btnHitungGaji" >Hitung</button>
    </td>
    <td>
      <input placeholder="Total" type="number" value="0" readonly oninput="this.className = ''" id="totalGaji">
    </td>
  </tr>
</table>

<hr>

<div class="tabs">
<table>
  <tr>
    <td>
        <label class="container">Waterfall
         <input type="radio" value="Access" onclick="openCity(event, 'Waterfall')" name="metode">
         <span class="checkmark"></span>
        </label>
        <label class="container">Prototype
         <input type="radio" value="Access" onclick="openCity(event, 'Prototype')" name="metode">
         <span class="checkmark"></span>
        </label>
    </td>
  </tr>

</table>

</div>

<div id="Waterfall" hidden class="tabcontent">
  <h3>Waterfall</h3>
  <table border="1">
    <tr>
      <td rowspan="2">No</td>
      <td rowspan="2">Activity</td>
      <td colspan="3">Distribution per project size (%)</td>
    </tr>
    <tr>
      <td>Medium - Large</td>
      <td>Small</td>
      <td>Isi Custom</td>
    </tr>
    <!-- <tr>
      <td colspan="5">Software Development Phase</td>
    </tr> -->
    <tr>
      <td>1</td>
      <td>Requirements</td>
      <td>
        <label class="container">7.50
         <input type="radio" value="7.50" onclick="getValueRequirements(this.value)" name="Requirements">
         <span class="checkmark"></span>
        </label>
      </td>
      <td>
      <label class="container">1.17
         <input type="radio" value="1.17" onclick="getValueRequirements(this.value)" name="Requirements">
         <span class="checkmark"></span>
        </label>
      </td>
      <td>
      <input type="number" oninput="this.className = ''" id="valueRequirements" name="valueRequirements"> 
      <input type="number" oninput="this.className = ''" id="totalRequirements" name="totalRequirements" hidden> 
      </td>
    </tr>
    <tr>
      <td>2</td>
      <td>Specifications</td>
      <td>
        <label class="container">7.50
         <input type="radio" value="7.50" onclick="getValueSpecifications(this.value)" name="Specifications">
         <span class="checkmark"></span>
        </label>
      </td>
      <td>
      <label class="container">6.75
         <input type="radio" value="6.75" onclick="getValueSpecifications(this.value)" name="Specifications">
         <span class="checkmark"></span>
        </label>
      </td>
      <td>
      <input type="number" oninput="this.className = ''" id="valueSpecifications" name="valueSpecifications"> 
      <input type="number" oninput="this.className = ''" id="totalSpecifications" name="totalSpecifications" hidden> 
      </td>
    </tr>
    <tr>
      <td>3</td>
      <td>Design</td>
      <td>
        <label class="container">10.00
         <input type="radio" value="10.00" onclick="getValueDesign(this.value)" name="Design">
         <span class="checkmark"></span>
        </label>
      </td>
      <td>
      <label class="container">5.57
         <input type="radio" value="5.57" onclick="getValueDesign(this.value)" name="Design">
         <span class="checkmark"></span>
        </label>
      </td>
      <td>
      <input type="number" oninput="this.className = ''" id="valueDesign" name="valueDesign"> 
      <input type="number" oninput="this.className = ''" id="totalDesign" name="totalDesign" hidden> 
      </td>
    </tr>
    <tr>
      <td>4</td>
      <td>Implementation</td>
      <td>
        <label class="container">10.00
         <input type="radio" value="10.00" onclick="getValueImplementation(this.value)" name="Implementation">
         <span class="checkmark"></span>
        </label>
      </td>
      <td>
      <label class="container">55.65
         <input type="radio" value="55.65" onclick="getValueImplementation(this.value)" name="Implementation">
         <span class="checkmark"></span>
        </label>
      </td>
      <td>
      <input type="number" oninput="this.className = ''" id="valueImplementation" name="valueImplementation"> 
      <input type="number" oninput="this.className = ''" id="totalImplementation" name="totalImplementation" hidden> 
      </td>
    </tr>
    <tr>
      <td>5</td>
      <td>Integration Testing</td>
      <td>
        <label class="container">7.50
         <input type="radio" value="7.50" onclick="getValueIntegration(this.value)" name="Integration">
         <span class="checkmark"></span>
        </label>
      </td>
      <td>
      <label class="container">6.42
         <input type="radio" value="6.42" onclick="getValueIntegration(this.value)" name="Integration">
         <span class="checkmark"></span>
        </label>
      </td>
      <td>
      <input type="number" oninput="this.className = ''" id="valueIntegration" name="valueIntegration"> 
      <input type="number" oninput="this.className = ''" id="totalIntegration" name="totalIntegration" hidden> 
      </td>
    </tr>
    <tr>
      <td>6</td>
      <td>Acceptance & deployment</td>
      <td>
        <label class="container">7.50
         <input type="radio" value="7.50" onclick="getValueAcceptance(this.value)" name="Acceptance">
         <span class="checkmark"></span>
        </label>
      </td>
      <td>
      <label class="container">5.60
         <input type="radio" value="5.60" onclick="getValueAcceptance(this.value)" name="Acceptance">
         <span class="checkmark"></span>
        </label>
      </td>
      <td>
      <input type="number" oninput="this.className = ''" id="valueAcceptance" name="valueAcceptance"> 
      <input type="number" oninput="this.className = ''" id="totalAcceptance" name="totalAcceptance" hidden> 
      </td>
    </tr>
    <tr>
      <td>7</td>
      <td>Project Management</td>
      <td>
        <label class="container">8.34
         <input type="radio" value="8.34" onclick="getValueProjectManagement(this.value)" name="ProjectManagement">
         <span class="checkmark"></span>
        </label>
      </td>
      <td>
      <label class="container">2.55
         <input type="radio" value="2.55" onclick="getValueProjectManagement(this.value)" name="ProjectManagement">
         <span class="checkmark"></span>
        </label>
      </td>
      <td>
      <input type="number" oninput="this.className = ''" id="valueProjectManagement" name="valueProjectManagement"> 
      <input type="number" oninput="this.className = ''" id="totalProjectManagement" name="totalProjectManagement" hidden> 
      </td>
    </tr>
    <tr>
      <td>8</td>
      <td>Configuration Management</td>
      <td>
        <label class="container">4.16
         <input type="radio" value="4.16" onclick="getValueConfiguration(this.value)" name="Configuration">
         <span class="checkmark"></span>
        </label>
      </td>
      <td>
      <label class="container">3.58
         <input type="radio" value="3.58" onclick="getValueConfiguration(this.value)" name="Configuration">
         <span class="checkmark"></span>
        </label>
      </td>
      <td>
      <input type="number" oninput="this.className = ''" id="valueConfiguration" name="valueConfiguration"> 
      <input type="number" oninput="this.className = ''" id="totalConfiguration" name="totalConfiguration" hidden> 
      </td>
    </tr>
    <tr>
      <td>9</td>
      <td>Quality Assurance</td>
      <td>
        <label class="container">8.34
         <input type="radio" value="8.34" onclick="getValueQuality(this.value)" name="Quality">
         <span class="checkmark"></span>
        </label>
      </td>
      <td>
      <label class="container">0.66
         <input type="radio" value="0.66" onclick="getValueQuality(this.value)" name="Quality">
         <span class="checkmark"></span>
        </label>
      </td>
      <td>
      <input type="number" oninput="this.className = ''" id="valueQuality" name="valueQuality"> 
      <input type="number" oninput="this.className = ''" id="totalQuality" name="totalQuality" hidden> 
      </td>
    </tr>
    <tr>
      <td>10</td>
      <td>Documentations</td>
      <td>
        <label class="container">4.16
         <input type="radio" value="4.16" onclick="getValueDocumentations(this.value)" name="Documentations">
         <span class="checkmark"></span>
        </label>
      </td>
      <td>
      <label class="container">9.76
         <input type="radio" value="9.76" onclick="getValueDocumentations(this.value)" name="Documentations">
         <span class="checkmark"></span>
        </label>
      </td>
      <td>
      <input type="number" oninput="this.className = ''" id="valueDocumentations" name="valueDocumentations"> 
      <input type="number" oninput="this.className = ''" id="totalDocumentations" name="totalDocumentations" hidden> 
      </td>
    </tr>
    <tr>
      <td>11</td>
      <td>Training & support</td>
      <td>
        <label class="container">4.16
         <input type="radio" value="4.16" onclick="getValueTraining(this.value)" name="Training">
         <span class="checkmark"></span>
        </label>
      </td>
      <td>
      <label class="container">0.60
         <input type="radio" value="0.60" onclick="getValueTraining(this.value)" name="Training">
         <span class="checkmark"></span>
        </label>
      </td>
      <td>
      <input type="number" oninput="this.className = ''" id="valueTraining" name="valueTraining"> 
      <input type="number" oninput="this.className = ''" id="totalTraining" name="totalTraining" hidden> 
      </td>
    </tr>
    <tr>
      <td>12</td>
      <td>Evaluation & testing</td>
      <td>
        <label class="container">20.84
         <input type="radio" value="20.48" onclick="getValueEvaluation(this.value)" name="Evaluation">
         <span class="checkmark"></span>
        </label>
      </td>
      <td>
      <label class="container">1.67
         <input type="radio" value="1.67" onclick="getValueEvaluation(this.value)" name="Evaluation">
         <span class="checkmark"></span>
        </label>
      </td>
      <td>
      <input type="number" oninput="this.className = ''" id="valueEvaluation" name="valueEvaluation"> 
      <input type="number" oninput="this.className = ''" id="totalEvaluation" name="totalEvaluation" hidden> 
      </td>
    </tr>
    <tr>
      <td>
        <button type="button" id="btnHitungTotalCostOfActivityWaterfall" onclick="hitungTotalCostOfActivityWaterfall()">Hitung</button>
      </td>
      <td>
        <input type="number" oninput="this.className = ''" name="valueTotalCostOfActivityWaterfall" id="valueTotalCostOfActivityWaterfall"> 
      </td>
    </tr>
  </table>
</div>

<div id="Prototype" hidden class="tabcontent">
  <h3>Prototype</h3>
  <p>Prototype</p> 
</div>

</div>