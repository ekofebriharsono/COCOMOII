<div class="tab">
  <h3>Tax & Total Estimate Cost</h3>

  <table class="table">
    <tr>
      <td>Tax</td>
    </tr>
    <tr>
      <td>
        <input placeholder="ex. 100" type="number" value="10" oninput="this.className = ''" id="tax" name="tax">
      </td>
      <td>%</td>
      <td>
        <button type="button" onclick="hitungTax()" id="btnHitungProfit">Count</button>
      </td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>

  <table class="table">
    <tr>
      <td>
        Personel Direct Cost Before Profit (IDR)
      </td>
      <td>
        <input type="number" value="0" oninput="this.className = ''" id="PersonelDirectCostBeforeProfit"
          name="PersonelDirectCostBeforeProfit">
      </td>
    </tr>
    <tr>
      <td>
        Profit (IDR)
      </td>
      <td>
        <input type="number" value="0" oninput="this.className = ''" id="totalProfitIDR" name="totalProfitIDR">
      </td>
    </tr>
    <tr>
      <td>
        Personel Direct Cost (IDR)
      </td>
      <td>
        <input type="number" value="0" oninput="this.className = ''" id="PersonelDirectCost" name="PersonelDirectCost">
      </td>
    </tr>
    <tr>
      <td>
        Non Personnel Direct Cost (IDR)
      </td>
      <td>
        <input type="number" value="0" oninput="this.className = ''" id="NonPersonnelDirectCost"
          name="NonPersonnelDirectCost">
      </td>
    </tr>
    <tr>
      <td>
        Owner Cost Estimate Before Taxes (IDR)
      </td>
      <td>
        <input type="number" value="0" oninput="this.className = ''" id="OwnerCostEstimateBeforeTaxes"
          name="OwnerCostEstimateBeforeTaxes">
      </td>
    </tr>
    <tr>
      <td>
        Tax (Value Added Tax 10%) (IDR)
      </td>
      <td>
        <input type="number" value="0" oninput="this.className = ''" id="ValueAddedTax" name="ValueAddedTax">
      </td>
    </tr>
    <tr>
      <td>
        Owner Cost Estimate (IDR)
      </td>
      <td>
        <input type="number" value="0" oninput="this.className = ''" id="OwnerCostEstimate" name="OwnerCostEstimate">
      </td>
    </tr>
  </table>

</div>