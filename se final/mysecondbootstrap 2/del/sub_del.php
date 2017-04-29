<?php
	include('../db/connect.php');

	$del = $_GET['su_id'];

	$query = "DELETE FROM subject_tbl WHERE su_id=$del"; 
	
	if(mysql_query($query)){
		echo "<script>window.open('../subject_list.php','_self')</script>";
	}

?>