<div class="tab">
  <h3>Personel Direct Cost</h3>

  <table class="table">
    <tr>
      <td>Profit</td>
    </tr>
    <tr>
      <td>
        <input placeholder="ex. 100" type="number" value="10" oninput="this.className = ''" id="profit" name="profit">
      </td>
      <td>%</td>
      <td>
        <button type="button" onclick="hitungProfit()" id="btnHitungProfit">Count</button>
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
        No
      </td>
      <td>
        Personel Direct Cost Before Profit (IDR)
      </td>
      <td>
        Profit (IDR)
      </td>
      <td>
        Personel Direct Cost (IDR)
      </td>
    </tr>
    <tr>
      <td>
        1
      </td>
      <td>
        <input type="number" value="0" oninput="this.className = ''" id="costBeforeProfit" name="costBeforeProfit">
      </td>
      <td>
        <input type="number" value="0" oninput="this.className = ''" id="totalProfit" name="totalProfit">
      </td>
      <td>
        <input type="number" value="0" oninput="this.className = ''" id="costWithProfit" name="costWithProfit">
      </td>
    </tr>

  </table>

</div>