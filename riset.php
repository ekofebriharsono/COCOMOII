
<html >


<head>
  <meta name="Author" content="Ray Madachy">
  <meta name="description" content="COCOMO II">
  <meta name="keywords" content="COCOMO tool, COCOMO Suite tool, COCOMO, COCOMO II - Constructive Cost Model, COCOMO Suite of Constructive Cost Models, Expert COSYSMO - Systems Engineering Cost Model Risk Advisor, ODC COQUALMO - Orthogonal Defect Classification Constructive Quality Model, COSYSMO, COSYSMO and COCOMO Cost Models with Monte Carlo Risk Analysis, software cost estimation, systems cost estimation, cost estimation, Ray Madachy, Raymond Madachy">
  
<style type="text/css">
.style1 {color: #00FFCC}
.style2 {color: #FF0000}
.style3 {color: #669900}
</style>

<title>COCOMO II - Constructive Cost Model</title>

</head>
<body marginwidth="10" marginheight="10" topmargin="10" leftmargin="10">

<div class="container">


<form name="f1" method="post">

<input type="hidden" name="startCOCOMO" value="1">

<table style="width: 100%; text-align: left;" border="0" cellpadding="2"
 cellspacing="0">
  <tbody>
    <tr>
      <td style="width: 101px; vertical-align: top;"><img alt=""
 src=csse_insignia.jpg><br>

      </td>
      <td style="text-align: center; vertical-align: top;">
      
      <h4>COCOMO II - Constructive Cost Model</h4>
      
      </td>
      <td style="width: 160px; vertical-align: top; background-color: rgb(240, 240, 240);">
      
      <table style="text-align: left; width: 100%;" border="1" bordercolor="silver" cellpadding="2" cellspacing="0">
	<tbody>
	<tr>
	<td style="vertical-align: top;">
  
      
Model(s)
<select name="Models" onChange="f1.submit()">
<option value="COCOMO" selected>COCOMO
<option value="COSYSMO">COSYSMO
<option value="COCOMOandCOSYSMO">COCOMO and COSYSMO
<option value="COQUALMO">COCOMO and COQUALMO
</select>

Monte Carlo Risk
<select name="MonteCarlo" onChange="f1.submit()">
<option value="MonteCarlo_On">On
<option value="MonteCarlo_Off" selected>Off
</select><br>

Auto Calculate
<select name="AutoCalculate" onChange="f1.submit()">
<option value="On">On
<option value="Off" selected>Off
</select>

     </td>
</tr>
</tbody>
</table>

      </td>
    </tr>

  </tbody>
</table>
<br>



<b>Software Size</b>



&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sizing Method <select name="size_type" onChange="f1.submit()">

<option value="SLOC"  selected>Source Lines of Code</option>

<option value="Function Points" >Function Points</option>

</select>

<br><table style="width: 100%; text-align: left; 
border="1" cellpadding="1" cellspacing="0"><tbody><tr><td style="width: 101px; vertical-align: top;"><br>

<table style="width: 60%; text-align: left;" border="0" cellpadding="2"

cellspacing="2">

<tbody>

<tr>

<td style="vertical-align: top;"><br>

</td>

<td style="vertical-align: top; text-align: center;"><a

href="http://sunset.usc.edu/research/COCOMOII/expert_cocomo/sloc.html">SLOC</a></td>

<td style="vertical-align: top; text-align: center;"><font

color="#000000"><i>&nbsp;</i>% Design Modified</font></td>

<td style="vertical-align: top; text-align: center;"><font

color="#000000">% Code Modified</font></td>

<td style="vertical-align: top; text-align: center;"><font

color="#000000">% Integration Required</font></td>

<td style="vertical-align: top; text-align: center;"><font

color="#000000">Assessment and Assimilation <br>

(0%

- 8%)</font></td>

<td style="vertical-align: top; text-align: center;"><font

color="#000000">&nbsp;Software Understanding <br>

(0% - 50%)</font></td>

<td style="vertical-align: top; text-align: center;">

<center><font color="#000000">Unfamiliarity</font> <br>

<font color="#000000">(0-1)</font></center>

</td>

</tr>

<tr>

<td style="vertical-align: top;">New<br>

</td>

<td style="vertical-align: top;"><input type="text" name="new_size"  Size="8" maxlength="8" align=right value=""> <br>

</td>

<td style="vertical-align: top;"><br>

</td>

<td style="vertical-align: top;"><br>

</td>

<td style="vertical-align: top;"><br>

</td>

<td style="vertical-align: top;"><br>

</td>

<td style="vertical-align: top;"><br>

</td>

<td style="vertical-align: top;"><br>

</td>

</tr>

<tr>

<td style="vertical-align: top;">Reused<br>

</td>

<td style="vertical-align: top;"><input type="text" name="reused_size"  Size="8" maxlength="8" align=right value=""> <br>

</td>

<td style="vertical-align: top;"><center><input name="DM_reused" size="6" align=right value="0" disabled></center>

</td>

<td style="vertical-align: top;"><center><input name="CM_reused" size="6" align=right value="0" disabled></center>

</td>

<td style="vertical-align: top;"><center><input type="text" name="IM_reused"  Size="6" maxlength="6" align=right value=""> <br></center>

</td>

<td style="vertical-align: top;"><center>

<input type="text" name="AA_reused"  Size="6" maxlength="6" align=right value=""> <br>

</center>

</td>

<td style="vertical-align: top;"><br>

</td>

<td style="vertical-align: top;"><br>

</td>

</tr>

<tr>

<td style="vertical-align: top;">Modified<br>

</td>

<td style="vertical-align: top;"><input type="text" name="modified_size"  Size="8" maxlength="8" align=right value=""> <br>

</td>

<td style="vertical-align: top;"><center>

<input type="text" name="DM_modified"  Size="6" maxlength="6" align=right value=""> <br>

</center>

</td>

<td style="vertical-align: top;"><center>

<input type="text" name="CM_modified"  Size="6" maxlength="6" align=right value=""> <br>

</center>

</td>

<td style="vertical-align: top;"><center>

<input type="text" name="IM_modified"  Size="6" maxlength="6" align=right value=""> <br>

</center>

</td>

<td style="vertical-align: top;"><center>

<input type="text" name="AA_modified"  Size="6" maxlength="6" align=right value=""> <br>

</center>

</td>

<td style="vertical-align: top;"><center>

<input type="text" name="SU_modified"  Size="6" maxlength="6" align=right value=""> <br>

</center>

</td>

<td style="vertical-align: top;"><center>

<input type="text" name="UNFM_modified"  Size="6" maxlength="6" align=right value=""> <br>

</center>

</td>

</tr>

</tbody>

</table>

<br></td><td style="text-align: left; vertical-align: top;"></td>
</tr></tbody></table><b>&nbsp;Software Scale Drivers </b>



<table border="0"><tr valign="top">

<td>

  <table border="0"><tr>

  <td align="left">Precedentedness</td>

  <td><select name="prec" >

  <option value="Very_Low">Very Low

  <option value="Low">Low

  <option value="Nominal" selected>Nominal

  <option value="High">High

  <option value="Very_High">Very High

  <option value="Extra_High">Extra High

  </select></td>

  </tr><tr>

  <td align="left">Development Flexibility</td>

  <td><select name="flex" >

  <option value="Very_Low">Very Low

  <option value="Low">Low

  <option value="Nominal" selected>Nominal

  <option value="High">High

  <option value="Very_High">Very High

  <option value="Extra_High">Extra High

  </select></td>

  </tr>

<tr>

  <td><br>
  <b>Software Cost Drivers</b></td>

  </tr>

  <tr>

  <td><b>Product</b></td>

  </tr>

<tr>

<td align="left">Required Software Reliability</td>

<td>

<select name="rely" >

  <option value="Very_Low">Very Low

  <option value="Low">Low

  <option value="Nominal" selected>Nominal

  <option value="High">High

  <option value="Very_High">Very High

</select>

</td>

</tr>

<tr>

<td align="left">Data Base Size</td>

<td>

<select name="data" >

  <option value="Low">Low

  <option value="Nominal" selected>Nominal

  <option value="High">High

  <option value="Very_High">Very High

</select>

</td>

</tr>

<tr>

<td align="left">Product Complexity</td>

<td>

<select name="cplx" >

  <option value="Very_Low">Very Low

  <option value="Low">Low

  <option value="Nominal" selected>Nominal

  <option value="High">High

  <option value="Very_High">Very High

  <option value="Extra_High">Extra High

</select>

</td>

</tr>

<tr>

<td align="left">Developed for Reusability</td>

<td>

<select name="ruse" >

  <option value="Low">Low

  <option value="Nominal" selected>Nominal

  <option value="High">High

  <option value="Very_High">Very High

  <option value="Extra_High">Extra High

</select>

</td>

</tr><tr>

<td align="left">Documentation Match to Lifecycle Needs</td>

<td>

<select name="docu" >

  <option value="Very_Low">Very Low

  <option value="Low">Low

  <option value="Nominal" selected>Nominal

  <option value="High">High

  <option value="Very_High">Very High

</select>

</td>

</tr>

<tr>

  <td>&nbsp</td>

  </tr>

  <tr>

  <td>&nbsp</td>

  </tr>



     </table>

</td>

<td>

  <table border="0"><tr>

    <td align="left">Architecture / Risk Resolution</td>

  <td><select name="resl" >

  <option value="Very_Low">Very Low

  <option value="Low">Low

  <option value="Nominal" selected>Nominal

  <option value="High">High

  <option value="Very_High">Very High

  <option value="Extra_High">Extra High

  </select></td>  </tr>

    <td align="left">Team Cohesion</td>

   <td><select name="team" >

  <option value="Very_Low">Very Low

  <option value="Low">Low

  <option value="Nominal" selected>Nominal

  <option value="High">High

  <option value="Very_High">Very High

  <option value="Extra_High">Extra High

  </select></td>

  </tr>

<tr>

  <td><b>&nbsp;</b></td>

  </tr>

<tr>

<tr>

  <td><br><b>Personnel</b></td>

  </tr>

<tr>

<td align="left">Analyst Capability</td>

<td>

<select name="acap" >

  <option value="Very_Low">Very Low

  <option value="Low">Low

  <option value="Nominal" selected>Nominal

  <option value="High">High

  <option value="Very_High">Very High

</select>

</td>

</tr>

<tr>

<td align="left">Programmer Capability</td>

<td>

<select name="pcap" >

  <option value="Very_Low">Very Low

  <option value="Low">Low

  <option value="Nominal" selected>Nominal

  <option value="High">High

  <option value="Very_High">Very High

</select>

</td>

</tr>

<tr>

<td align="left">Personnel Continuity</td>

<td>

<select name="pcon" >

  <option value="Very_Low">Very Low

  <option value="Low">Low

  <option value="Nominal" selected>Nominal

  <option value="High">High

  <option value="Very_High">Very High

</select>

</td>

</tr>

<tr>

<td align="left">Application Experience</td>

<td>

<select name="apex" >

  <option value="Very_Low">Very Low

  <option value="Low">Low

  <option value="Nominal" selected>Nominal

  <option value="High">High

  <option value="Very_High">Very High

</select>

</td>

</tr>

<tr>

<td align="left">Platform Experience</td>

<td>

<select name="pexp" >

  <option value="Very_Low">Very Low

  <option value="Low">Low

  <option value="Nominal" selected>Nominal

  <option value="High">High

  <option value="Very_High">Very High

</select>

</td>

</tr>

<tr>

<td align="left">Language and Toolset Experience</td>

<td>

<select name="ltex" >

  <option value="Very_Low">Very Low

  <option value="Low">Low

  <option value="Nominal" selected>Nominal

  <option value="High">High

  <option value="Very_High">Very High

</select>

</td>

</tr>

  <tr>

    <td>&nbsp;</td>

  </tr>



    </table>

</td>

<td>

  <table border="0"><tr>

    <td align="left">Process Maturity</td>

   <td><select name="pmat" >

  <option value="Very_Low">Very Low

  <option value="Low">Low

  <option value="Nominal" selected>Nominal

  <option value="High">High

  <option value="Very_High">Very High

  <option value="Extra_High">Extra High

  </select></td>  </tr>

  <tr>

    <td>&nbsp</td>

  </tr>

  <tr>

  <tr>

  <td><b>&nbsp;</b></td>

  </tr>

<tr>

<tr>

    <td><br><b>Platform</b></td>

  </tr>

<tr>

<td align="left">Time Constraint</td>

<td>

<select name="time" >

  <option value="Nominal" selected>Nominal

  <option value="High">High

  <option value="Very_High">Very High

  <option value="Extra_High">Extra High

</select>

</td>

</tr>



<tr>

<td align="left">Storage Constraint</td>

<td>

<select name="stor" >

  <option value="Nominal" selected>Nominal

  <option value="High">High

  <option value="Very_High">Very High

  <option value="Extra_High">Extra High

</select>

</td>

</tr>



<tr>

<td align="left">Platform Volatility</td>

<td>

<select name="pvol" >

  <option value="Low">Low

  <option value="Nominal" selected>Nominal

  <option value="High">High

  <option value="Very_High">Very High

</select>

</td>

</tr>

   <tr>

    <td><br><b>Project</b></td>

  </tr>

<tr>

<td align="left">Use of Software Tools</td>

<td>

<select name="tool" >

  <option value="Very_Low">Very Low

  <option value="Low">Low

  <option value="Nominal" selected>Nominal

  <option value="High">High

  <option value="Very_High">Very High

</select>

</td>

</tr>

<tr>

<td align="left">Multisite Development</td>

<td>

<select name="site" >

  <option value="Very_Low">Very Low

  <option value="Low">Low

  <option value="Nominal" selected>Nominal

  <option value="High">High

  <option value="Very_High">Very High

  <option value="Extra_High">Extra High

</select></td>

</tr>

<td align="left">Required Development Schedule</td>

<td>

<select name="sced" >

  <option value="Very_Low">Very Low

  <option value="Low">Low

  <option value="Nominal" selected>Nominal

  <option value="High">High

  <option value="Very_High">Very High

</select></td>

</tr>

      </table>

</td></tr>

</table>
 
<b>Maintenance</b> <select name="software_maintenance" onChange="f1.submit()">
<option value="Off" >Off</option>
<option value="On" >On</option>
</select>



</br></br><b>Software Labor Rates</b><br>
Cost per Person-Month (Dollars)<input type="text" name="software_labor_cost_per_PM"  Size="8" maxlength="8" align=right value=""> <br><input type="submit" name="submit2" value="Calculate" /><hr /><b>Results</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</form>
</br><table style="text-align: left;" border="0" cellpadding="1" cellspacing="1">

<tbody>
<tr>

<td style="vertical-align: top; text-align: left;"><b>Software Development (Elaboration and Construction)</b><br><br>Effort = 0.0 Person-months<br>Schedule = 0.0 Months<br>Cost = $0<br><br>Total Equivalent Size = 0&nbsp;SLOC <br><br><b>Acquisition Phase Distribution</b><br><table border="1" cellpadding="1" cellspacing="0" COLS=3 WIDTH="200 pixels"><tr><td>Phase</td><td>Effort (Person-months)</td><td>Schedule (Months)</td><td>Average Staff</td> <td>Cost (Dollars)</td></tr>
<tr>

<td><font color="red">Inception</font></td><td ALIGN=CENTER>0.0</td><td ALIGN=CENTER>0.0</td><td ALIGN=CENTER>0.0</td> <td>$0</td></tr>

<tr><td><font color="800000">Elaboration</font></td><td ALIGN=CENTER>0.0</td><td ALIGN=CENTER>0.0</td><td ALIGN=CENTER>0.0</td> <td>$0</td></tr>

<span class="style2">
<tr><td><font color="$construction_color">Construction</font></td><td ALIGN=CENTER>0.0</td><td ALIGN=CENTER>0.0</td><td ALIGN=CENTER>0.0</td> <td>$0</td></tr>
</span>

<tr><td><div class="style2"><font color="green">Transition</font>
</td><td ALIGN=CENTER>0.0</td><td ALIGN=CENTER>0.0</td><td ALIGN=CENTER>0.0</td> <td>$0</div></td></tr></table><br></td>

<td style="vertical-align: top; text-align: center;"><b>Staffing Profile</b><br>
</td>
</tr>
</tbody>
</table><b>Software Effort Distribution for RUP/MBASE (Person-Months)</b><br>
<table border="1" cellpadding="1" cellspacing="0" COLS=5 WIDTH="200 pixels"><tr><td>Phase/Activity</td><td>Inception</td><td>Elaboration</td><td>Construction</td><td>Transition</td></tr>
<tr><td>Management</td><td ALIGN=CENTER><font color="#000000"><font color="#000000">0.0</font></td><td ALIGN=CENTER><font color="#000000">0.0</font></td><td ALIGN=CENTER>0.0</td><td ALIGN=CENTER><font color="##000000">0.0</font></td></td></tr>
<tr><td>Environment/CM</td><td ALIGN=CENTER><font color="#000000"><font color="#000000">0.0</font></td><td ALIGN=CENTER><font color="#000000">0.0</font></td><td ALIGN=CENTER>0.0</td><td ALIGN=CENTER><font color="##000000">0.0</font></td></td></tr>
<tr><td>Requirements</td><td ALIGN=CENTER><font color="#000000"><font color="#000000">0.0</font></td><td ALIGN=CENTER><font color="#000000">0.0</font></td><td ALIGN=CENTER><font color="#000000">0.0</font></td><td ALIGN=CENTER><font color="##000000">0.0</font></td></td></tr>
<tr><td>Design</td><td ALIGN=CENTER><font color="##000000">        0.0</font></td><td ALIGN=CENTER><font color="##000000">0.0</font><td ALIGN=CENTER><font color="##000000">0.0</font></td><td ALIGN=CENTER><font color="##000000">0.0</font></td></td></tr>
<tr><td>Implementation</td><td ALIGN=CENTER><font color="##000000">0.0</font></td><td ALIGN=CENTER><font color="##000000">0.0</font><td ALIGN=CENTER>0.0</td><td ALIGN=CENTER><font color="##000000">0.0</font></td></td></tr>
<tr><td>Assessment</td><td ALIGN=CENTER><font color="#000000">0.0</font></td><td ALIGN=CENTER><font color="#000000">0.0</font></td><td ALIGN=CENTER>0.0</td><td ALIGN=CENTER><font color="##000000">0.0</font></td></td></tr>
<tr><td>Deployment</td><td ALIGN=CENTER><font color="#000000">0.0</font></td><td ALIGN=CENTER><font color="#000000">0.0</font></td><td ALIGN=CENTER><font color="#000000">0.0</font></td><td ALIGN=CENTER><font color="##000000">0.0</font></td></td></tr></table>


</p>Your output file is <a href=http://csse.usc.edu/tools/data/COCOMO_August_13_2019_13_29_09_702258.txt>http://csse.usc.edu/tools/data/COCOMO_August_13_2019_13_29_09_702258.txt</a> <br>
<br>
Created by Ray Madachy at the Naval Postgraduate School.  For more information contact him at rjmadach@nps.edu

</div>
</body>
</html>
