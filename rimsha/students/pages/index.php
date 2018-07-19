<?php

session_start();
include "../../config.php";
if(empty($_SESSION['id']))
		{
			 ?>
			 <script> window.location.href="login.php";</script>
			 <?php 
		}else{
			$user_id = $_SESSION['id'];
		}

		$query= $class->fetchdata(" select * from users where id='$user_id'");
		$data=$query->fetch(PDO::FETCH_ASSOC);
	

		if(isset($_POST['done']))
{
$title= $_POST['title'];

		
$query=$class->insert("INSERT INTO programs  (title,user_id) VALUES ('$title','$user_id')");
			if($query){
			$class->redirect("instruction.php?pId=1");
			}
			else{
				echo "Error";
				}
	


}
		
		
		
		?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>University</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
<ul class="nav navbar-nav">
		<li ><a href="profile.php" style="text-transform:capitalize">Welcome,<?php echo $data['name'];?></a></li>
		
	</ul>        
   
<ul class="nav navbar-nav  navbar-right">
		
		<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Log-out</a></li>
	 	
	</ul>     

  </div>
</nav>
  
<div class="container">
<div class="btn-group btn-group-justified">
  <a href="instruction.php" class="btn btn-primary" >Add Your Information</a>
   <a href="instruction.php" class="btn btn-primary">Enroll University</a>
  <a href="#" class="btn btn-primary">Notification <span class="badge">8</span></a>
  <a href="#" class="btn btn-primary">Settings</a>
</div>
<br>
 <div class="table-responsive">
 <table class="table table-hover">
    <thead>
      <tr>
        <th>Program Name</th>
        <th>Program Code</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Software Engineering</td>
        <td>SE-402</td>
     <td><a href="#">Edit-View</a></td>
      </tr>
       <tr>
        <td>Software Engineering</td>
        <td>SE-402</td>
        <td><a href="#">Edit-View</a></td>
      </tr>
    </tbody>
  </table>
</div>
</div>

</body>
</html>
<?php
//include "assets/footer.php";
?>