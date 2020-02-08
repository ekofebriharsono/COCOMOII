<div class="tab">
  <center><a href="#myModal" class="text-warning stretched-link" data-toggle="modal" data-target="#myModal">Click here for Information this Step</a></center>
  <div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content" style="background: rgba(0, 0, 0, 0.699);
  color: white;
  margin: 10px auto;
  padding: 10px;
  width: 80%;
  min-width: 30px;
  border-radius: 20px;
  -webkit-box-shadow: 0 0 5px 2px #fff;
    -moz-box-shadow: 0 0 5px 2px #fff;
    box-shadow: 0 0 5px 5px #fff;">
				<!-- heading modal -->
				<div class="modal-header">
          <center><h6>UFP (Unjusted Function Point)</h6></center>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				
				</div>
				<!-- body modal -->
				<div class="modal-body">
          <p>bagian body modal.</p>
          <table class="table">
            <tr>
              <td>sdf</td>
            </tr>
            <tr>
              <td>sdf</td>
            </tr>
            <tr>
              <td>sdf</td>
            </tr>
            <tr>
              <td>sdf</td>
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

<table class="table">
  <tr>
    <td rowspan="2">
      <center><b>Function Type</b></center>
    </td>
    <td colspan="3">
      <center><b>Complexity Weight</b></center>
    </td>
  </tr>
  <tr>
    <td>
      <center><b>Low</b></center>
    </td>
    <td>
      <center><b>Average</b></center>
    </td>
    <td>
      <center><b>Height</b></center>
    </td>
  </tr>
  <?php if(isset($_POST['submitEditData'])){ 
        $id_modul = $_POST['id_modul'];
        $sql = "select * from ufp_complexity_weight where id_modul=$id_modul";
        $data = mysqli_query($con,$sql);
        while($d = mysqli_fetch_array($data)){
          if($d['id_ufp']=='ilf_ufp'){ ?>
  <tr>
    <td>Internal Logical Files</td>
    <td><input placeholder="Low" type="number" value="<?php echo $d['low']; ?>" oninput="this.className = ''"
        id="ILF_LOW" name="ILF_LOW"></td>
    <td><input placeholder="Average" type="number" value="<?php echo $d['average']; ?>" oninput="this.className = ''"
        id="ILF_AVERAGE" name="ILF_AVERAGE"></td>
    <td><input placeholder="Height" type="number" value="<?php echo $d['height']; ?>" oninput="this.className = ''"
        id="ILF_HEIGHT" name="ILF_HEIGHT"></td>
  </tr>
  <?php } if($d['id_ufp']=='eif_ufp'){ ?>
  <tr>
    <td>External Interfcaes Files</td>
    <td><input placeholder="Low" type="number" value="<?php echo $d['low']; ?>" oninput="this.className = ''"
        id="EIF_LOW" name="EIF_LOW"></td>
    <td><input placeholder="Average" type="number" value="<?php echo $d['average']; ?>" oninput="this.className = ''"
        id="EIF_AVERAGE" name="EIF_AVERAGE"></td>
    <td><input placeholder="Height" type="number" value="<?php echo $d['height']; ?>" oninput="this.className = ''"
        id="EIF_HEIGHT" name="EIF_HEIGHT"></td>
  </tr>
  <?php } if($d['id_ufp']=='ei_ufp'){ ?>
  <tr>
    <td>External Inputs</td>
    <td><input placeholder="Low" type="number" value="<?php echo $d['low']; ?>" oninput="this.className = ''"
        id="EI_LOW" name="EI_LOW"></td>
    <td><input placeholder="Average" type="number" value="<?php echo $d['average']; ?>" oninput="this.className = ''"
        id="EI_AVERAGE" name="EI_AVERAGE"></td>
    <td><input placeholder="Height" type="number" value="<?php echo $d['height']; ?>" oninput="this.className = ''"
        id="EI_HEIGHT" name="EI_HEIGHT"></td>
  </tr>
  <?php } if($d['id_ufp']=='eo_ufp'){ ?>
  <tr>
    <td>External Outputs</td>
    <td><input placeholder="Low" type="number" value="<?php echo $d['low']; ?>" oninput="this.className = ''"
        id="EO_LOW" name="EO_LOW"></td>
    <td><input placeholder="Average" type="number" value="<?php echo $d['average']; ?>" oninput="this.className = ''"
        id="EO_AVERAGE" name="EO_AVERAGE"></td>
    <td><input placeholder="Height" type="number" value="<?php echo $d['height']; ?>" oninput="this.className = ''"
        id="EO_HEIGHT" name="EO_HEIGHT"></td>
  </tr>
  <?php } if($d['id_ufp']=='eq_ufp'){ ?>
  <tr>
    <td>External Inquiries</td>
    <td><input placeholder="Low" type="number" value="<?php echo $d['low']; ?>" oninput="this.className = ''"
        id="EQ_LOW" name="EQ_LOW"></td>
    <td><input placeholder="Average" type="number" value="<?php echo $d['average']; ?>" oninput="this.className = ''"
        id="EQ_AVERAGE" name="EQ_AVERAGE"></td>
    <td><input placeholder="Height" type="number" value="<?php echo $d['height']; ?>" oninput="this.className = ''"
        id="EQ_HEIGHT" name="EQ_HEIGHT"></td>
  </tr>
  <?php } ?>
  <?php } } else { ?>
  <tr>
    <td>Internal Logical Files</td>
    <td><input placeholder="Low" type="number" value="0" oninput="this.className = ''" id="ILF_LOW" name="ILF_LOW">
    </td>
    <td><input placeholder="Average" type="number" value="0" oninput="this.className = ''" id="ILF_AVERAGE"
        name="ILF_AVERAGE"></td>
    <td><input placeholder="Height" type="number" value="0" oninput="this.className = ''" id="ILF_HEIGHT"
        name="ILF_HEIGHT"></td>
  </tr>
  <tr>
    <td>External Interfcaes Files</td>
    <td><input placeholder="Low" type="number" value="0" oninput="this.className = ''" id="EIF_LOW" name="EIF_LOW">
    </td>
    <td><input placeholder="Average" type="number" value="0" oninput="this.className = ''" id="EIF_AVERAGE"
        name="EIF_AVERAGE"></td>
    <td><input placeholder="Height" type="number" value="0" oninput="this.className = ''" id="EIF_HEIGHT"
        name="EIF_HEIGHT"></td>
  </tr>
  <tr>
    <td>External Inputs</td>
    <td><input placeholder="Low" type="number" value="0" oninput="this.className = ''" id="EI_LOW" name="EI_LOW"></td>
    <td><input placeholder="Average" type="number" value="0" oninput="this.className = ''" id="EI_AVERAGE"
        name="EI_AVERAGE"></td>
    <td><input placeholder="Height" type="number" value="0" oninput="this.className = ''" id="EI_HEIGHT"
        name="EI_HEIGHT"></td>
  </tr>
  <tr>
    <td>External Outputs</td>
    <td><input placeholder="Low" type="number" value="0" oninput="this.className = ''" id="EO_LOW" name="EO_LOW"></td>
    <td><input placeholder="Average" type="number" value="0" oninput="this.className = ''" id="EO_AVERAGE"
        name="EO_AVERAGE"></td>
    <td><input placeholder="Height" type="number" value="0" oninput="this.className = ''" id="EO_HEIGHT"
        name="EO_HEIGHT"></td>
  </tr>
  <tr>
    <td>External Inquiries</td>
    <td><input placeholder="Low" type="number" value="0" oninput="this.className = ''" id="EQ_LOW" name="EQ_LOW"></td>
    <td><input placeholder="Average" type="number" value="0" oninput="this.className = ''" id="EQ_AVERAGE"
        name="EQ_AVERAGE"></td>
    <td><input placeholder="Height" type="number" value="0" oninput="this.className = ''" id="EQ_HEIGHT"
        name="EQ_HEIGHT"></td>
  </tr>
  <?php } ?>

  <tr>
    <td></td>
    <td colspan="3"><button type="button" id="btnHitung" onclick="hitungStepOne()">Hitung</button></td>
  </tr>
  <tr>
    <td><b>TOTAL</b></td>
    <td><input readonly placeholder="Total" oninput="this.className = ''" name="UFP" id="UFP"></td>
  </tr>
</table>
</div>