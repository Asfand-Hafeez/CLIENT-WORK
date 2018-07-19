
<?php
require_once "assets/header.php";
$p_id=$_GET['pId'];
if(empty($p_id)){
	?>
			 <script> window.location.href="index.php";</script>
			<?php
}
$program=$class->fetchdata("select * FROM programs where id='$p_id'");
$activepost=$program->fetch(PDO::FETCH_ASSOC);
	if(isset($_POST['done']))
{
	
$uni_name= $_POST['uni_name'];
$uni_program= $_POST['uni_program'];
$uni_dept= $_POST['uni_dept'];
$uni_campus= $_POST['uni_campus'];
$max_time= $_POST['max_time'];
$min_time= $_POST['min_time'];
$t_courses= $_POST['t_courses'];
$t_hours= $_POST['t_hours'];
$folder = "../images/";
$image = $_FILES['img']['name'];
$path= $folder.$image;
move_uploaded_file($_FILES['img']['tmp_name'],$path);
		
$query=$class->insert("INSERT INTO admin_p_detail (p_id, user_id, uni_name, uni_program, uni_dept, uni_campus, max_duration, min_duration, t_courses, t_hours, img) VALUES ('$p_id','$user_id','$uni_name','$uni_program','$uni_dept','$uni_campus','$max_time','$min_time','$t_courses','$t_hours','$image')");
			if($query){
			//$class->redirect("program_details.php?pId=1");
			?>
			 <script> window.location.href="eligibility_criteria.php?pId=<?php echo $p_id ;?>";</script>
			<?php
			}
			else{
				echo "Error";
				}
	


}
?>

<script type="text/javascript">
function showImage() {
		if(this.files && this.files[0]){
			
			var obj = new FileReader();
			obj.onload=function(data){
				
				var image = document.getElementById("image");
				image.src=data.target.result;
				image.style.display="block";
			}
			obj.readAsDataURL(this.files[0]);
		}
        
    }


</script>
<style>
.image-upload > input
{
    display: none;
}
</style>
   <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Programs Details</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
               <div class="panel panel-primary">
				<div class="panel-heading">Enter Your University Offer Program Details</div>
				<div class="panel-body">
				
  <form class="form-horizontal" method="post" enctype="multipart/form-data">
    <div class="form-group">
    <label class="control-label col-sm-2" for="email"><span class="star">*</span>University Name:</label>
    <div class="col-sm-10">
      <input type="text" name="uni_name" class="form-control "  required placeholder="">
    </div>
  </div>
 
   <div class="form-group">
    <label class="control-label col-sm-2" for="email"><span class="star">*</span>Programme Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="<?php echo $activepost['title'] ?>" name="uni_program" disabled required placeholder="">
    </div>
  </div>
 
  <div class="form-group">
    <label class="control-label col-sm-2" for="email"><span class="star">*</span>Department:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="uni_dept" required placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email"><span class="star">*</span>Campus:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="uni_campus" required placeholder="">
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-2" for="email"><span class="star">*</span>Maximum Duration:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="max_time" required placeholder="">
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-2" for="email"><span class="star">*</span>Minimun Duration:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="min_time" required placeholder="">
    </div>
  </div> 

    <div class="form-group">
    <label class="control-label col-sm-2" for="email"><span class="star">*</span>Total no of courses:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="t_courses" required >
    </div>
	</div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="email"><span class="star">*</span>Total no of credit hours:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="t_hours" required >
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="email"><span class="star">*</span>Upload Complete Description File:</label>
    <div class="col-sm-4">
	
               <div class="image-upload">
					<label for="file-input">
					<img src="../images/down.jpg" class="img-responsive img-thumbnail" onchange="showImage.call(this)" style="min-width:315px;max-width:300px;max-height:200px;" id="image"/>
					</label>
					<input id="file-input" id="image"  onchange="showImage.call(this)" type="file" name="img"/>
		    
                 </div>  </div>
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