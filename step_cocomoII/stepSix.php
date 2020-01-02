<div class="tab">
<h3>Salary</h3>
  <table class="table">
    <tr>
      <td>
        Project Manager Salary (IDR)
      </td>
      <td>
        Type
      </td>
    </tr>
    <tr>
      <td>
        <input placeholder="ex. 10000" type="number" value="0" oninput="this.className = ''" id="gaji">
      </td>
      <td>
        <select class="custom-select my-1 mr-sm-2" name="metodeGaji" id="metodeGaji">
          <option value="pwr" selected>PWR (People Week Rate)</option>
          <option value="pdr">PDR (People Day Rate)</option>
          <option value="phr">PHR (People Hour Rate)</option>
        </select>
      </td>
      <td>
        <button type="button" onclick="hitungGaji()" id="btnHitungGaji">Count</button>
      </td>
      <td>
        <input placeholder="Total" type="number" value="0" readonly oninput="this.className = ''" id="totalGaji">
      </td>
    </tr>
  </table>

  <table class="table">
    <tr>
      <td>
        Position In Project Team
      </td>
      <td>
        Minimum Reuirement
      </td>
      <td>
        Payment Rate For Private Sector In Person Month Rate (PMR)
      </td>
      <td>
        Payment Rate For Public Sector (70%) Of Private Sector
      </td>
    </tr>
    <tr>
      <td>
        Project Manager
      </td>
      <td>
        Minimal undergraduate and experience > 4 years
      </td>
      <td>
        <input placeholder="ex: 10000" type="number" value="18250000" oninput="this.className = ''" id="salaryPublicPM"
          name="salaryPublicPM">
      </td>
      <td>
        <input placeholder="ex: 10000" type="number" value="0" oninput="this.className = ''" id="salaryPrivatePM"
          name="salaryPrivatePM" readonly>
      </td>
    </tr>
    <tr>
      <td>
        System Analyst
      </td>
      <td>
        Minimal undergraduate and experience > 3 years
      </td>
      <td>
        <input placeholder="ex: 10000" type="number" value="12000000" oninput="this.className = ''" id="salaryPublicSA"
          name="salaryPublicSA">
      </td>
      <td>
        <input placeholder="ex: 10000" type="number" value="0" oninput="this.className = ''" id="salaryPrivateSA"
          name="salaryPrivateSA" readonly>
      </td>
    </tr>
    <tr>
      <td>
        Programmer
      </td>
      <td>
        Experience 1-2 years
      </td>
      <td>
        <input placeholder="ex: 10000" type="number" value="11000000" oninput="this.className = ''" id="salaryPublicP"
          name="salaryPublicP">
      </td>
      <td>
        <input placeholder="ex: 10000" type="number" value="0" oninput="this.className = ''" id="salaryPrivateP"
          name="salaryPrivateP" readonly>
      </td>
    </tr>

    <tr>
      <td>
        System Testing
      </td>
      <td>
        Experience 1-2 years
      </td>
      <td>
        <input placeholder="ex: 10000" type="number" value="9300000" oninput="this.className = ''" id="salaryPublicST"
          name="salaryPublicST">
      </td>
      <td>
        <input placeholder="ex: 10000" type="number" value="0" oninput="this.className = ''" id="salaryPrivateST"
          name="salaryPrivateST" readonly>
      </td>
    </tr>
    <tr>
      <td>
        Technical Support
      </td>
      <td>
        Experience 1-2 years
      </td>
      <td>
        <input placeholder="ex: 10000" type="number" value="9300000" oninput="this.className = ''" id="salaryPublicTS"
          name="salaryPublicTS">
      </td>
      <td>
        <input placeholder="ex: 10000" type="number" value="0" oninput="this.className = ''" id="salaryPrivateTS"
          name="salaryPrivateTS" readonly>
      </td>
    </tr>
    <tr>
      <td>
        Documenter
      </td>
      <td>
        Experience 1-2 years
      </td>
      <td>
        <input placeholder="ex: 10000" type="number" value="5000000" oninput="this.className = ''" id="salaryPublicD"
          name="salaryPublicD">
      </td>
      <td>
        <input placeholder="ex: 10000" type="number" value="0" oninput="this.className = ''" id="salaryPrivateD"
          name="salaryPrivateD" readonly>
      </td>
    </tr>
    <tr>
      <td>
        <button type="button" onclick="hitungPaymentRate()" id="btnHitungPaymentRate">Count</button>
      </td>
    </tr>
  </table>


</div>