<?php
require_once "assets/header.php";

	if(isset($_POST['done']))
{
	$p_id=$_GET['pId'];
$about= $_POST['about'];

		
$query=$class->insert("INSERT INTO admin_about  (about,user_id,p_id) VALUES ('$about','$user_id','$p_id')");
			if($query){
			//$class->redirect("program_details.php?pId=1");
			?>
			 <script> window.location.href="program_details.php?pId=<?php echo $p_id ;?>";</script>
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
                    <h1 class="page-header">About</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Enter Your Some details about university and programs.
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="post">
                                        <div class="form-group">
                                            <textarea style="resize: vertical;" name="about" class="form-control" required></textarea>
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
require_once "footer.php";
?>