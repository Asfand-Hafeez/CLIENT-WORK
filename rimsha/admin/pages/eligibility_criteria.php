<?php
require_once "assets/header.php";
$p_id=$_GET['pId'];
if(empty($p_id)){
	?>
			 <script> window.location.href="index.php";</script>
			<?php
}
?>


<script>
   function Test(myval) {
	   
	  var test = document.getElementById("test");
	  var x = document.getElementById("test");
	 
	  
	  
    if(myval=="openMerit")
	{
	  document.getElementById("test").style.visibility = "hidden";
	}
	if(myval=="enteryTest")
	{
	  document.getElementById("test").style.visibility = "visible";
	  
	if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "block";
    }	  
	}
}
	function valueselect()
{
      //window.location.href = "eligibility_criteria.php?degree="+myval;
	  //document.getElementsByClassName("circles")
	  
	  var x = document.getElementById("mySelect").value;
	  var ssc = document.getElementById("ssc");
	  var hssc = document.getElementById("hssc");
	  var bsc = document.getElementById("bsc");
	  var msc = document.getElementById("msc");
	  var mphill = document.getElementById("mphill");
	  
	  var Assc = document.getElementById("Assc");
	  var Ahssc = document.getElementById("Ahssc");
	  var Absc = document.getElementById("Absc");
	  var Amsc = document.getElementById("Amsc");
	  var Amphill = document.getElementById("Amphill");
	  //document.getElementById("myP").style.visibility = "hidden";
    //document.getElementById("mphill").innerHTML = "You selected: " + x;
	if(x=="PHD")
	{
		//alert("ok");
		bsc.style.visibility = "visible";
		msc.style.visibility = "visible";
		mphill.style.visibility = "visible";
		
		Absc.style.visibility = "visible";
		Amsc.style.visibility = "visible";
		Amphill.style.visibility = "visible";
	}
	
	if(x=="MS/MPHILL")																					
	{
		//alert("ok");
		Absc.style.visibility = "visible";
		Amsc.style.visibility = "visible";
		Amphill.style.visibility = "hidden";
		
		bsc.style.visibility = "visible";
		msc.style.visibility = "visible";
		mphill.style.visibility = "hidden";
	}
	
	if(x=="BS/MSC")
	{
	    Amphill.style.visibility = "hidden";
		Amsc.style.visibility = "hidden";
		
		mphill.style.visibility = "hidden";
		msc.style.visibility = "hidden";
	}
	if(x=="BS/MSC")
	{
		Absc.style.visibility = "visible";
	    Amphill.style.visibility = "hidden";
		Amsc.style.visibility = "hidden";
		
		bsc.style.visibility = "visible";
	    mphill.style.visibility = "hidden";
		msc.style.visibility = "hidden";
	}
	if(x=="BA/BSC/BCOM/BBA")
	{
		Absc.style.visibility = "hidden";
		Amsc.style.visibility = "hidden";
		Amphill.style.visibility = "hidden";
		
		bsc.style.visibility = "hidden";
		msc.style.visibility = "hidden";
		mphill.style.visibility = "hidden";
		
	}

}
</script>
<div  id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Eligibility Criteria</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
               <div class="panel panel-primary">
				<div class="panel-heading">Enter Your Eligibility Criteria</div>
				<div class="panel-body">
				
				<?php
				if(isset($_POST['done']))
{
	
$program= $_POST['program'];
$matric_marks= $_POST['matric_marks'];
$inter_marks= $_POST['inter_marks'];
$bachlor_marks= $_POST['bachlor_marks'];
$mphil_marks= $_POST['mphil_marks'];
$merit= $_POST['merit'];
$text= $_POST['test'];
$sat= $_POST['sat'];
$hec= $_POST['hec'];
$nat= $_POST['nat'];

$af_matric= $_POST['af_matric'];
$af_inter= $_POST['af_inter'];
$af_bachlor= $_POST['af_bachlor'];
$af_master= $_POST['af_master'];
$af_mphil= $_POST['af_mphil'];

		
$query=$class->insert("INSERT INTO `admin_e_criteria`(`p_id`, `user_id`, `program`, `matric_marks`, `inter_marks`, `bachlor_marks`, `master_marks`, `mphil_marks`,`type`, `sat`, `hec`, `nat`, `af_matric`, `af_inter`, `af_bachlor`, `af_master`, `af_mphil`) VALUES ('$p_id','$user_id','$program','$master_marks','$inter_marks','$bachlor_marks','$master_marks','$mphil_marks','$type','$sat','hec','nat','af_matric','af_inter','af_bachlor','af_master','af_mphil')");
			if($query){
			//$class->redirect("program_details.php?pId=1");
			?>
			 <script> window.location.href="admission_schedule.php?pId=<?php echo $p_id ;?>";</script>
			<?php
			}
			else{
				echo "Error";
				}
	


}

				?>
<form  class="form-horizontal" action="#" method="post">  
   <div class="form-group">
  <div class="row">
     <label class="control-label col-sm-5" for="email"><span class="star">*</span>Select Degree Program:</label>
    <div class="col-md-4">
  <select class="form-control" id="mySelect" name="program" required onchange="valueselect();">
	<option value="PHD">PHD</option>
	<option value="MS/MPHILL">MS/MPHILL</option>
	<option value="BS/MSC">BS/MSC</option>
    <option value="BA/BSC/BCOM/BBA">BA/BSC/BCOM/BBA</option>
  </select>
  </div>
  </div>
</div>
    <div class="form-group" id="ssc" class="ssc">
    <label class="control-label col-sm-5" for="email"><span class="star">*</span>Minimum Marks of Matric/O-level in %:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="matric_marks" required placeholder="">
    </div>
  </div>
   <div class="form-group" id="hssc" class="hssc">
    <label class="control-label col-sm-5" for="email"><span class="star">*</span>Minimum Marks of Inter/Fsc/A-level/DAE/DCOM/ICOM/ICS/FA in %:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="inter_marks" required placeholder="">
    </div>
  </div>
  
   <div class="form-group" id="bsc" class="bsc">
    <label class="control-label col-sm-5" for="email"><span class="star">*</span>Minimum 14 Year Marks of BA/BSC/BCOM/BBA in %:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="bachlor_marks" required placeholder="">
    </div>
  </div>
  <div class="form-group" id="msc" class="msc">
    <label class="control-label col-sm-5" for="email"><span class="star">*</span>Minimum 16 Year Marks of BS/MSC in %:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="master_marks" required placeholder="">
    </div>
  </div>
   <div class="form-group" id="mphill" class="mphill">
    <label class="control-label col-sm-5" name="mphil_marks" for="email"><span class="star">*</span>Minimum MPHILL/MS Marks in %:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" required placeholder="">
    </div>
  </div>
 
	<div class="form-group"> 
  <div class="col-sm-offset-5 col-sm-5">
  <label class="radio-inline">
      <input type="radio" name="optradio" value="openMerit" name="merit" required onclick="Test(this.value)">Open Merit
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="enteryTest" name="test" required onclick="Test(this.value)">Entry test
    </label>
  </div>
  </div>
    <div id="test" hidden>
     <div class="form-group" id="sat">
    <label class="control-label col-sm-5" for="email"><span class="star">*</span>SAT:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="sat" required placeholder="">
    </div>
  </div>
  
   <div class="form-group" id="hec">
    <label class="control-label col-sm-5" for="email"><span class="star">*</span>HEC:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="hec" required placeholder="">
    </div>
  </div>
   <div class="form-group" id="nat">
    <label class="control-label col-sm-5" for="email"><span class="star">*</span>NAT:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="nat" required placeholder="">
    </div>
  </div>
</div> 
    <h3>AGGREGATE FORMULA</h3>
    <div class="form-group" id="Assc" class="ssc">
    <label class="control-label col-sm-5" for="email"><span class="star">*</span>Matric/O-level :</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="af_matric" required placeholder="">
    </div>
  </div>
   <div class="form-group" id="Ahssc" class="hssc">
    <label class="control-label col-sm-5" for="email"><span class="star">*</span>Inter/Fsc/A-level/DAE/DCOM/ICOM/ICS/FA :</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="af_inter" required placeholder="">
    </div>
  </div>
  
   <div class="form-group" id="Absc" class="bsc">
    <label class="control-label col-sm-5" for="email"><span class="star">*</span>BA/BSC/BCOM/BBA :</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="af_bachlor" required placeholder="">
    </div>
  </div>
  <div class="form-group" id="Amsc" class="msc">
    <label class="control-label col-sm-5" for="email"><span class="star">*</span>BS/MSC :</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="af_master" required placeholder="">
    </div>
  </div>
   <div class="form-group" id="Amphill" class="mphill">
    <label class="control-label col-sm-5" for="email"><span class="star">*</span>MPHILL/MS :</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="af_mphil" required placeholder="">
    </div>
  </div>
 

  
  <div class="form-group"> 
  <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" class="col-sm-2 btn btn-primary" name="done" value="Save"/>
  </div>
  </div>
   
   <div class="form-group"> 
  <div class="col-sm-offset-2 col-sm-10">
      <a href="#" class="col-sm-2 btn btn-danger">Next</a>
  </div>
  </div>
</form>
</div>
</div> 
</div>

</div>
</div>        
<?php
require_once "assets/footer.php";
?>