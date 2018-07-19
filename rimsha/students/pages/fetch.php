<?php
include "../../config.php";
if(isset($_GET['id']))
{
	if($_GET['status']==0)
	{
		$status=1;
	}
	else {
		
		$status=0;
	}
	$query=$class->insert("update programs SET status='status' where id='$_GET[id]'");
}


$query1=$class->fetchdata("SELECT ac.p_id, uni_name , uni_program , t_seats, admission_date FROM programs as p INNER JOIN admin_p_detail ad ON p.id= ad.p_id INNER JOIN admin_criteria_list ac ON ad.p_id=ac.p_id INNER JOIN admin_a_schedule af ON ac.p_id=af.p_id");


?>
<table border="2">
<thead>
<tr>
<th>ID</th>
<th>TITLE</th>
<th>STATUS</th>
<th>Action</th>
</tr>
</thead>
<?php
			$query= $class->fetchdata(" select * from programs");
	while	($data=$query->fetch(PDO::FETCH_ASSOC))
	{	extract ($data)
		

?>
<tr>
<td><?php echo $id; ?></td>
<td><?php echo $title; ?></td>
<td><?php echo $status; ?></td>
<td><a href="fetch.php?status=<?php echo $status;  ?> &id=<?php echo $id; ?>">
<?php 


if($status==0)
	
	{
		echo "pending";
	}
	else {
			echo "Active";
			
	}
?>	
</a></td>

</tr>
<?php 

	} ?>
</table>
<br>


<table border="2">
<thead>
<tr>
<th>P_ID</th>
<th>Seats</th>
<th>Uni</th>
<th>Program</th>
<th>Admission Date</th>
</tr>
</thead>


<?php 
while ($data2=$query1->fetch(PDO::FETCH_ASSOC))

{
	?>


<tr>
<td> <?php echo $data2['p_id']; ?> </td>
<td> <?php echo $data2['t_seats']; ?> </td>
<td> <?php echo $data2['uni_name']; ?> </td>
<td> <?php echo $data2['uni_program']; ?> </td>
<td> <?php echo $data2['admission_date']; ?> </td>
</tr>

<?php 
}
?>


</table>












