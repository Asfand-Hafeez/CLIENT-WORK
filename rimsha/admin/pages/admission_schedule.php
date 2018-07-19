<?php
require_once "assets/header.php";
$p_id=$_GET['pId'];
if(empty($p_id)){
	?>
			 <script> window.location.href="index.php";</script>
			<?php
}


	if(isset($_POST['done']))
{
	
$admission_date= $_POST['admission_date'];
$test_date= $_POST['test_date'];
$test_venue= $_POST['test_venue'];
$test_time= $_POST['test_time'];
$merit_date= $_POST['merit_date'];


		
$query=$class->insert("INSERT INTO `admin_a_schedule`(`p_id`, `user_id`, `admission_date`, `test_date`, `test_venue`, `test_time`, `merit_date`) VALUES ('$p_id','$user_id','$admission_date','$test_date','$test_venue','$test_time','$merit_date')");
			if($query){
			//$class->redirect("program_details.php?pId=1");
			?>
			 <script> window.location.href="merit_list_criteria.php?pId=<?php echo $p_id ;?>";</script>
			<?php
			}
			else{
				echo "Error";
				}
	


}


?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Admission Schedule</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
               <div class="panel panel-primary">
				<div class="panel-heading">Enter Admission Schedule Here</div>
				<div class="panel-body">
<form class="form-horizontal" action="#" method="post">  
 
    <div class="form-group" id="ssc" class="ssc">
    <label class="control-label col-sm-5" for="email"><span class="star">*</span>Admission Last Date:</label>
    <div class="col-sm-4">
      <input type="date" class="form-control" name="admission_date" required placeholder="">
    </div>
  </div>
   <div class="form-group" id="hssc" class="hssc">
    <label class="control-label col-sm-5" for="email"><span class="star">*</span>Entry Test Last Date:</label>
    <div class="col-sm-4">
      <input type="date" class="form-control" name="test_date" required placeholder="">
    </div>
  </div>
  
   <div class="form-group" id="bsc" class="bsc">
    <label class="control-label col-sm-5" for="email"><span class="star">*</span>Entry Test venue:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="test_venue" required placeholder="">
    </div>
  </div>
  <div class="form-group" id="msc" class="msc">
    <label class="control-label col-sm-5" for="email"><span class="star">*</span>Entry Test Start and End Time:</label>
    <div class="col-sm-4">
      <input type="time" class="form-control" name="test_time" required placeholder="">
    </div>
  </div>
   <div class="form-group" id="mphill" class="mphill">
    <label class="control-label col-sm-5" for="email"><span class="star">*</span>Merit List Display Date:</label>
    <div class="col-sm-4">
      <input type="date" class="form-control" name="merit_date" required placeholder="">
    </div>
  </div>

  <div class="form-group"> 
  <div class="col-sm-offset-4 col-sm-10">
      <input type="submit" class="col-sm-2 btn btn-primary" name="done" value="Save"/>
  </div>
  </div>
   
   <div class="form-group"> 
  <div class="col-sm-offset-4 col-sm-10">
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