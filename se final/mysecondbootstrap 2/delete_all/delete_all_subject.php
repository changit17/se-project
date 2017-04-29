<?php
	include('../db/connect.php');

$id = $_POST['id'];
$query="DELETE FROM subtaken_tbl WHERE s_id='$id'";

	if(mysql_query($query)){
		echo "<script>window.open('../view.php?search_name=".$id."','_self')</script>";
	}
	else{
		echo 'error '. $id;
	}
?>

