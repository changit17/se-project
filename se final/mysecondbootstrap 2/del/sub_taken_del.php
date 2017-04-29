<?php
	include('../db/connect.php');

	$del = $_GET['sub_id'];
	$id = $_GET['id'];

	$query = "DELETE FROM subtaken_tbl WHERE sub_id=$del";
	
	if(mysql_query($query)){
		echo "<script>window.open('../view.php?search_name=".$id."','_self')</script>";
	}

?>