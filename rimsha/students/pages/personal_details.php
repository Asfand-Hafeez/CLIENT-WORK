<?php
require_once "header.php"; 


	if(isset($_POST['done']))
{
	
$folder = "../images/";
$image = $_FILES['img']['name'];
$path= $folder.$image;
move_uploaded_file($_FILES['img']['tmp_name'],$path);
$name= $_POST['name'];
$f_name= $_POST['f_name'];
$dob= $_POST['day']."-".$_POST['month']."-".$_POST['year'];
$gender= $_POST['gender'];
$nationality= $_POST['nationality'];
$domicile= $_POST['domicile'];
$cnic= $_POST['cnic'];
$mobile= $_POST['mobile'];
$email= $_POST['email'];
		
$query=$class->insert("INSERT INTO `student_p_detail` ( `user_id`, `img`, `name`, `f_name`, `dob`, `gender`, `nationality`, `domicile`, `cnic`, `mobile`, `email`) 
												VALUES ('$user_id','$image','$name','$f_name','$dob','$gender','$nationality','$domicile','cnic','$mobile','$email')");
			if($query){
			//$class->redirect("program_details.php?pId=1");
			?>
			 <script> window.location.href="address_details.php";</script>
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
                    <h1 class="page-header">Personal Details</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
               <div class="panel panel-primary">
				<div class="panel-heading">Enter Your Personal Details</div>
				<div class="panel-body">
				
<form class="form-horizontal"  method="post" enctype="multipart/form-data">
  <div class="form-group" >
    <label class="control-label col-sm-1" for="email"><span class="star">*</span>Upload Photo:</label>
    <div class="col-sm-5">
      <input id="file-input" id="image" class="form-control"  onchange="showImage.call(this)" type="file" name="img"/>
		    
    </div>
	<div class="col-sm-5 pull-right">
	  
	
               <div class="image-upload">
					<label for="file-input">
					<img src="../images/down.jpg" class="img-responsive img-thumbnail" onchange="showImage.call(this)" style="min-width:50px;max-width:50px;max-height:50px;" id="image"/>
					</label>
					
                </div>
	</div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-1" for="email"><span class="star">*</span>Name:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="name" required placeholder="Your Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-1" for="email"><span class="star">*</span>Father Name:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="f_name" required placeholder="Father Name">
    </div>
  </div>
  <div class="form-group">
  <div class="row">
     <label class="control-label col-sm-1" for="email" style="margin-left:10px;"><span class="star">*</span>DOB:</label>
    <div class="col-md-2">
  <select class="form-control" id="day" required name="day">
    <option value="">Day</option>
    <option value="1">1</option>
    <option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
    <option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
    <option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
  </select>

  </div>
    
  <div class="col-md-2">
  <select class="form-control" id="month" required name="month">
    <option value="">MONTH</option>
    <option value="JAN">JAN</option>
	<option value="FEB">FEB</option>
	<option value="MAR">MAR</option>
	<option value="APR">APR</option>
	<option value="MAY">MAY</option>
	<option value="JUN">JUN</option>
	<option value="JUL">JUL</option>
	<option value="AUG">AUG</option>
	<option value="SEP">SEP</option>
	<option value="OCT">OCT</option>
	<option value="NOV">NOV</option>
	<option value="DEC">DEC</option>
  </select>
  </div>
 
	
<div class="col-md-2">
<select class="form-control" id="year" required name="year">
<option value="">YEAR</option>
<option value='1960'> 1960</option>
<option value='1961'> 1961</option>
<option value='1962'> 1962</option>
<option value='1963'> 1963</option>
<option value='1964'> 1964</option>
<option value='1965'> 1965</option>
<option value='1966'> 1966</option>
<option value='1967'> 1967</option>
<option value='1968'> 1968</option>
<option value='1969'> 1969</option>
<option value='1970'> 1970</option>
<option value='1971'> 1971</option>
<option value='1972'> 1972</option>
<option value='1973'> 1973</option>
<option value='1974'> 1974</option>
<option value='1975'> 1975</option>
<option value='1976'> 1976</option>
<option value='1977'> 1977</option>
<option value='1978'> 1978</option>
<option value='1979'> 1979</option>
<option value='1980'> 1980</option>
<option value='1981'> 1981</option>
<option value='1982'> 1982</option>
<option value='1983'> 1983</option>
<option value='1984'> 1984</option>
<option value='1985'> 1985</option>
<option value='1986'> 1986</option>
<option value='1987'> 1987</option>
<option value='1988'> 1988</option>
<option value='1989'> 1989</option>
<option value='1990'> 1990</option>
<option value='1991'> 1991</option>
<option value='1992'> 1992</option>
<option value='1993'> 1993</option>
<option value='1994'> 1994</option>
<option value='1995'> 1995</option>
<option value='1996'> 1996</option>
<option value='1997'> 1997</option>
<option value='1998'> 1998</option>
<option value='1999'> 1999</option>
<option value='2000'> 2000</option>
<option value='2001'> 2001</option>
<option value='2002'> 2002</option>
<option value='2003'> 2003</option>
<option value='2004'> 2004</option>
</select>
  </div>
  </div>
</div>
  
  <div class="form-group">
  <label class="control-label col-sm-1" for="email"><span class="star">*</span>Gender:</label>
  <div class="row">
  <div class="col-md-2">
  <select class="form-control" id="gender" name="gender" required>
    <option value="">Select Gender</option>
    <option value="Male">Male</option>
	<option value="Female">Female</option>
	<option value="Others">Others</option>
	</select>
	</div>
	</div>
	</div>
	
  <div class="form-group">
  <label class="control-label col-sm-1" for="nationality"><span class="star">*</span>Nationality:</label>
  <div class="row">
  <div class="col-md-2">
  <select class="form-control" id="gender" name="nationality" required>
    <option value="">Select Nationality</option>
    <option value="Pakistani">Pakistani</option>
	<option value="Others">Others</option>
	</select>
	</div>
	</div>
	</div>
	
	 <div class="form-group">
  <label class="control-label col-sm-1" for="nationality"><span class="star">*</span>Domicile:</label>
  <div class="row">
  <div class="col-md-2">
  <select class="form-control" id="gender" name="domicile" required>
    <option value="">Select Domicile</option>
	<option value="Attock">Attock</option>
	<option value="Bahawalnagar">Bahawalnagar</option>
	<option value="Bahawalpur">Bahawalpur</option>
	<option value="Bhakkar">Bhakkar</option>
	<option value="Chakwal">Chakwal</option>
	<option value="Chiniot">Chiniot</option>
	<option value="D.G Khan">D.G Khan</option>
	<option value="Faisalabad">Faisalabad</option>
	<option value="Gujranwala">Gujranwala</option>
	<option value="Gujrat">Gujrat</option>
	<option value="Hafizabad">Hafizabad</option>
	<option value="Jhang">Jhang</option>
	<option value="Jhelum">Jhelum</option>
	<option value="Kasur">Kasur</option>
	<option value="Khanewal">Khanewal</option>
	<option value="Khushab">Khushab</option>
	<option value="Lahore">Lahore</option>
	<option value="Layyah">Layyah</option>
	<option value="Lodhran">Lodhran</option>
	<option value="M.B Din">M.B Din</option>
	<option value="Mianwali">Mianwali</option>
	<option value="Multan">Multan</option>
	<option value="Muzaffargarh">Muzaffargarh</option>
	<option value="Nankana Sahib">Nankana Sahib</option>
	<option value="Narowal">Narowal</option>
	<option value="Okara">Okara</option>
	<option value="Pakpattan">Pakpattan</option>
	<option value="Rahimyar Khan">Rahimyar Khan</option>
	<option value="Rajanpur ">Rajanpur </option>
	<option value="Rawalpindi">Rawalpindi</option>
	<option value="Sahiwal">Sahiwal</option>
	<option value="Sargodha">Sargodha</option>
	<option value="Sheikhupura">Sheikhupura</option>
	<option value="Sialkot">Sialkot</option>
	<option value="Toba Tek Singh">Toba Tek Singh</option>
	<option value="Vehari">Vehari</option>

	</select>
	</div>
	</div>
	</div>
	 <div class="form-group">
    <label class="control-label col-sm-1" for="email"><span class="star">*</span>CNIC:</label>
   
	 
	  <div class="col-sm-4">
      <input type="text" class="form-control" name="cnic" required placeholder="Enter CNIC">
    </div>
	</div>
	 <div class="form-group">
    <label class="control-label col-sm-1" for="email"><span class="star">*</span>Mobile:</label>
	  <div class="col-sm-4">
      <input type="text" class="form-control" name="mobile" placeholder="03***"> 
    </div>
	</div>
	
	<div class="form-group">
    <label class="control-label col-sm-1" for="email"><span class="star">*</span>Email:</label>
    <div class="col-sm-4">
      <input type="email" class="form-control" name="email" required>
    </div>
  </div>
  
   <!--  <div class="form-group hidden">
  <label class="control-label col-sm-1" for="nationality"><span class="star">*</span>Highest Degree Attained:</label>
  <div class="row">
  <div class="col-md-2">
  <select class="form-control" id="gender" required>
    <option value="">Select</option>
    <option value="Intermediate">Intermediate</option>
	<option value="BA/ Bsc">BA/ Bss</option>
	<option value="BS/Msc">BS/Msc</option>
	<option value="MS/Mphill">MS/Mphill</option>
	</select>
	</div>
	</div>
	</div> --->
	
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