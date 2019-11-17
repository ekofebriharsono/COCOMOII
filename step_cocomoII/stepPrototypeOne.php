<div class="tab"><b>Step Prototype One:</b>
    <table border="0">
      <tr>
        <td rowspan="2"><center><b>Function Type</b></center></td>
        <td colspan="3"><center><b>Complexity Weight</b></center></td>
      </tr>
      <tr>
        <td><center><b>Low</b></center></td>
        <td><center><b>Average</b></center></td>
        <td><center><b>Height</b></center></td>
      </tr>
      <tr>
        <td>Internal Logical Files</td>
        <td><input placeholder="Low" type="number" value="0" oninput="this.className = ''" id="ILF_LOW"></td>
        <td><input placeholder="Average" type="number" value="0" oninput="this.className = ''" id="ILF_AVERAGE"></td>
        <td><input placeholder="Height" type="number" value="0" oninput="this.className = ''" id="ILF_HEIGHT"></td>
      </tr>
      <tr>
        <td>External Interfcaes Files</td>
        <td><input placeholder="Low" type="number" value="0" oninput="this.className = ''" id="EIF_LOW"></td>
        <td><input placeholder="Average" type="number" value="0" oninput="this.className = ''" id="EIF_AVERAGE"></td>
        <td><input placeholder="Height" type="number" value="0" oninput="this.className = ''" id="EIF_HEIGHT"></td>
      </tr>
      <tr>
        <td>External Inputs</td>
        <td><input placeholder="Low" type="number" value="0" oninput="this.className = ''" id="EI_LOW"></td>
        <td><input placeholder="Average" type="number" value="0" oninput="this.className = ''" id="EI_AVERAGE"></td>
        <td><input placeholder="Height" type="number" value="0" oninput="this.className = ''" id="EI_HEIGHT"></td>
      </tr>
      <tr>
        <td>External Outputs</td>
        <td><input placeholder="Low" type="number" value="0" oninput="this.className = ''" id="EO_LOW"></td>
        <td><input placeholder="Average" type="number" value="0" oninput="this.className = ''" id="EO_AVERAGE"></td>
        <td><input placeholder="Height" type="number" value="0" oninput="this.className = ''" id="EO_HEIGHT"></td>
      </tr>
      <tr>
        <td>External Inquiries</td>
        <td><input placeholder="Low" type="number" value="0" oninput="this.className = ''" id="EQ_LOW"></td>
        <td><input placeholder="Average" type="number" value="0" oninput="this.className = ''" id="EQ_AVERAGE"></td>
        <td><input placeholder="Height" type="number" value="0" oninput="this.className = ''" id="EQ_HEIGHT"></td>
      </tr>
      <tr>
        <td></td>
        <td colspan="3"><button type="button" id="btnHitung" onclick="hitungStepOne()">Hitung</button></td>
      </tr>
      <tr>
        <td><b>TOTAL</b></td>
        <td><input readonly placeholder="Total" oninput="this.className = ''" id="UFP"></td>
      </tr>
    </table>
  </div>