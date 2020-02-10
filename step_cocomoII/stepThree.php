<div class="tab">
<center><a href="#modal3" class="text-warning stretched-link" data-toggle="modal" data-target="#modal3">Click here
      for Information this Step</a></center>
  <div id="modal3" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- konten modal-->
      <div class="modal-content" style="background: rgba(0, 0, 0, 0.699);
  color: white;
  width: 263%;
  border-radius: 20px;
  margin-left: -80%;
  -webkit-box-shadow: 0 0 5px 2px #fff;
    -moz-box-shadow: 0 0 5px 2px #fff;
    box-shadow: 0 0 5px 5px #fff;">
        <!-- heading modal -->
        <div class="modal-header">
          <center>
            <h6>SF (Scale Factor)</h6>
          </center>
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        <!-- body modal -->
        <div class="modal-body">
        <table class="table">
            <tr>
              <td>Precedentedness</td>
              <td>:</td>
              <td></td>
            </tr>
            <tr>
              <td>Development Flexibility</td>
              <td>:</td>
              <td></td>
            </tr>
            <tr>
              <td>Architecture / Risk Resolution</td>
              <td>:</td>
              <td></td>
            </tr>
            <tr>
              <td>Team Cohesion</td>
              <td>:</td>
              <td></td>
            </tr>
            <tr>
              <td>Process Maturity</td>
              <td>:</td>
              <td></td>
            </tr>
          </table>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

Step Three:
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
        <td colspan="3"><button type="button" onclick="hitungStepThree()" >Hitung</button></td>
      </tr>
      <tr>
        <td>
          <input placeholder="Total" type="number" value="0" readonly oninput="this.className = ''" id="totalStepThree" name="E">
        </td>
      </tr>

    </table>
  </div>