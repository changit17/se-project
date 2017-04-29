
<?php
	include('../db/connect.php');
if (isset($_GET['d_id'])
	&& isset($_GET['department'])
	&& isset($_GET['dean'])
	&& isset($_GET['deanlname'])
	) {
$del=$_GET['d_id'];
$d_id=$_GET['d_id'];
$department=$_GET['department'];
$dean=$_GET['dean'];
$deanlname=$_GET['deanlname'];

}else{
$del='';
$d_id='';
$department='';
$dean='';
$deanlname='';

}
	

	$query = "INSERT INTO department_tbl(d_id, department, dean, deanlname ) VALUES ('$d_id', '$department', '$dean', '$deanlname')";

	$query2 = "DELETE FROM department_left_tbl WHERE d_id=$del"; 
	
	if(mysql_query($query) && mysql_query($query2)){
		echo "<script>window.open('../department_list.php','_self')</script>";
	}else{
		?>
<script type="text/javascript">
	alert("Already Existed");
</script>
		<?php
		echo "<script>window.open('../trash_bin_dept.php','_self')</script>";
	}
?>