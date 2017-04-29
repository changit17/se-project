<?php
	include('../../db/connect.php');

	$del = $_GET['id'];
	$query = "DELETE FROM year_tbl WHERE year_id=$del"; 
	
	if(mysql_query($query)){
		echo "<script>window.open('../../year.php','_self')</script>";
}
?>