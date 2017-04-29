<?php
	include('../db/connect.php');

	$del= $_GET['section_id'];

	$query = "DELETE FROM section_tbl WHERE section_id = $del"; 
	
	if(mysql_query($query)){
		echo "<script>window.open('../section.php?id=".$del."','_self')</script>";
	}

?>
