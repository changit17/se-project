<?php
	include('../../db/connect.php');
if(isset($_POST['id'])){
	$del = $_POST['id'];
	$query = "DELETE FROM section_tbl WHERE section_id=$del"; 
	
	if(mysql_query($query)){
		echo "<script>window.open('../../dashboard.php','_self')</script>";
}}else{
	
		echo "<script>window.open('../../dashboard.php','_self')</script>";
}
?>