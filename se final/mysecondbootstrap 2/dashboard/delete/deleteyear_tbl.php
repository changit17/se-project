<?php
	include('../../db/connect.php');
if(isset($_POST['id'])){
	$del = $_POST['id'];
	$query = "DELETE FROM year_tbl WHERE year_id=$del"; 
	
if($del!=0){
	if(mysql_query($query)){
		echo "<script>window.open('../../dashboard.php','_self')</script>";
}}else{
	
		echo "<script>window.open('../../dashboard.php','_self')</script>";
}}
?>