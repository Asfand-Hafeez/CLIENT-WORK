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
	
$title= $_POST['title'];
		
$query=$class->insert("INSERT INTO admin_late_admission (p_id, user_id, title) VALUES ('$p_id','$user_id','$title')");
			if($query){
			//$class->redirect("program_details.php?pId=1");
			?>
			 <script> window.location.href="index.php";</script>
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
                    <h1 class="page-header">LATE ADMISSION POLICY</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Enter Your Late Admission Policy.
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="post">
                                        <div class="form-group">
                                            <textarea style="resize: vertical;" name="title" class="form-control" required></textarea>
                                        </div>
                                      
                                     <input type="submit" class="btn btn-danger" name="done" value="Submit"/>
                                      
                                    </form>
                                </div>
                               
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
    <!-- /#page-wrapper -->
<?php
require_once "assets/footer.php";
?>