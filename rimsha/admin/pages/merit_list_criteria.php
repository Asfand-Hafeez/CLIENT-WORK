<?php
require_once "assets/header.php";
$p_id=$_GET['pId'];
if(empty($p_id)){
	?>
			 <script> window.location.href="index.php";</script>
			<?php
}
?>
<?php 
if(isset($_POST['done']))
{
	
$t_seats= $_POST['t_seats'];
$quota= "";


		
$query=$class->insert("INSERT INTO `admin_criteria_list`(`p_id`, `user_id`, `t_seats`, `quota`) VALUES ('$p_id','$user_id','$t_seats','$quota')");
			if($query){
			//$class->redirect("program_details.php?pId=1");
			?>
			 <script> window.location.href="late_admission_policy.php?pId=<?php echo $p_id ;?>";</script>
			<?php
			}
			else{
				echo "Error";
				}
	


}

?>
<script>
function Test(myval) {
	 
	  var x = document.getElementById("quota");
	 	  
  
	if (x.style.display === "none") {
        x.style.display = "block";
    } else {
		document.getElementById("checkbox").;
        x.style.display = "none";
    }	  
}
</script>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Merit list criteria</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
               <div class="panel panel-primary">
				<div class="panel-heading">Enter Merit list criteria</div>
				<div class="panel-body">
<form  class="form-horizontal" action="#" method="post">  
   
    <div  class="form-group" id="Assc" class="ssc">
    <label class="control-label col-sm-5" for="email"><span class="star">*</span>Total No Of Seat :</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="t_seats" required placeholder="">
    </div>
  </div>
  
  
  
   <div class="form-group"> 
  <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="col-sm-2 btn btn-primary" name="done" >Save</button>
  </div>
  </div>
   <div class="form-group"> 
  <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="col-sm-2 btn btn-danger">Next</button>
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