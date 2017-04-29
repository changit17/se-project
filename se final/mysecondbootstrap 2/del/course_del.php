


<?php
	include('../db/connect.php');
if (isset($_GET['c_id'])
	&& isset($_GET['course'])
	&& isset($_GET['d_id'])
	&& isset($_GET['ref_id'])) {
$del=$_GET['c_id'];
$c_id=$_GET['c_id'];
$course=$_GET['course'];
$d_id=$_GET['d_id'];
$ref_id=$_GET['ref_id'];

}else{
$del='';
$c_id='';
$course='';
$d_id='';
$ref_id='';

}
	

	$query = "INSERT INTO course_left_tbl(c_id, course, d_id, ref_id) VALUES ('$c_id', '$course', '$d_id', '$ref_id')";

	$query2 = "DELETE FROM course_tbl WHERE c_id=$del"; 
	
	if(mysql_query($query) && mysql_query($query2)){
		echo "<script>window.open('../course.php','_self')</script>";
	}else{
		?>
<script type="text/javascript">
	alert("Already Existed");
</script>
		<?php
		echo "<script>window.open('../trash_bin_course.php','_self')</script>";
	}
?>