
<?php
	include('../db/connect.php');
if (isset($_GET['su_id'])
	&& isset($_GET['fname'])
	&& isset($_GET['fname2'])
	&& isset($_GET['mname'])
	&& isset($_GET['lname'])
	&& isset($_GET['contact'])
	&& isset($_GET['c_id'])
	&& isset($_GET['d_id'])
	) {
	$del = $_GET['su_id'];
	$s_id = $_GET['su_id'];
	$fname = $_GET['fname'];
	$fname2 = $_GET['fname2'];
	$mname = $_GET['mname'];
	$lname = $_GET['lname'];
	$contact = $_GET['contact'];
	$c_id = $_GET['c_id'];
	$d_id = $_GET['d_id'];
}else{
	$del='';
	$s_id ='';
	$fname ='';
	$fname2 ='';
	$mname ='';
	$lname ='';
	$contact ='';
	$c_id ='';
	$d_id = '';
}
	

	$query = "INSERT INTO student_tbl(s_id, fname, fname2, mname, lname, contact, d_id, c_id) VALUES ('$s_id', '$fname', '$fname2', '$mname','$lname','$contact','$d_id','$c_id')";

	$query2 = "DELETE FROM student_number_left_tbl WHERE s_id=$del"; 
	
	if(mysql_query($query) && mysql_query($query2)){
		echo "<script>window.open('../index.php','_self')</script>";
	}else{
		echo 'Hi :)';
	}

?>