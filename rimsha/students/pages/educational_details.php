<?php
require_once "header.php";


	if(isset($_POST['done']))
{
	

$degree= $_POST['degree'];
$passing_year= $_POST['passing_year'];
$board= $_POST['board'];
$subject= $_POST['subject'];
$max_marks= $_POST['max_marks'];
$obtain_marks= $_POST['obtain_marks'];
		
$query=$class->insert("INSERT INTO `student_e_detail`( `user_id`, `degree`, `passing_year`, `board`, `subject`, `max_marks`, `obtain_marks`) 
												VALUES ('$user_id','$degree','$passing_year','$board','$subject','$max_marks','$obtain_marks')");
			if($query){
			//$class->redirect("program_details.php?pId=1");
			?>
			 <script> window.location.href="upload_documents.php";</script>
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
                    <h1 class="page-header">Educational Details</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
               <div class="panel panel-primary">
				<div class="panel-heading">Enter Your Educational Details</div>
				<div class="panel-body">
				
<form class="form-horizontal" method="post">  
  <div class="form-group">
    <label class="control-label col-sm-1" for="email"><span class="star">*</span>Degree:</label>
    <div class="col-sm-4">
      <select class="form-control" name="degree" id="day" required>
    <option value="">Select Degree</option>
    <option value="PHD">PHD</option>
	<option value="MS/MPHILL">MS/MPHILL</option>
	<option value="BS/MSC">BS/MSC</option>
    <option value="BA/BSC/BCOM/BBA">BA/BSC/BCOM/BBA</option>
  </select>
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-1" for="email"><span class="star">*</span>Year of Passsing:</label>
    <div class="col-sm-4">
      <select class="form-control" name="passing_year" id="day" required>
    <option value="">---</option>
    <option value="2010">2010</option>
  <option value="2011">2011</option>
  <option value="2012">2012</option>
  <option value="2013">2013</option>
  <option value="2014">2014</option>
  <option value="2015">2015</option>
  <option value="2016">2016</option>
  <option value="2017">2017</option>
  <option value="2018">2018</option>
  
  </select>

    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-1" for="email"><span class="star">*</span>Board:</label>
    <div class="col-sm-4">
      <select class="form-control" id="day" name="board" required>
    <option value="">---</option>
    <option value="Faisalabad">Faisalabad</option>
	<option value="Lahore">Lahore</option>
	<option value="Multan">Multan</option>
	<option value="Sargodha">Sargodha</option>
 
 </select>
    </div>
	
  </div>
    <div class="form-group">
    <label class="control-label col-sm-1" for="email"><span class="star">*</span>Subjects:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="subject" required >
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-1" for="email"><span class="star">*</span>Max Marks:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="max_marks" required >
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-1" for="email"><span class="star">*</span>Obtained Marks:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="obtain_marks" required >
    </div>
  </div>
 
	
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="col-sm-2 btn btn-primary" name="done">Save | Next</button>
    </div>
  </div>
</form>
				
				</div>
				</div> 
                </div>
               </div>
			 
            </div>
          
<?php
require_once "footer.php";
?>