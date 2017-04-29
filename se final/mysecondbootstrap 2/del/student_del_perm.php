
<?php
	include('../db/connect.php');
if (isset($_GET['su_id'])) {
	$del = $_GET['su_id'];
}else{
	$del='';
}
	


	$query = "DELETE FROM student_number_left_tbl WHERE s_id=$del"; 
	
	if(mysql_query($query)){
		
		echo "<script>window.open('../index.php','_self')</script>";
	}else{
		echo 'Hi :)';
	}

?>