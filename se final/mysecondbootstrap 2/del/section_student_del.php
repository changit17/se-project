
<?php
	include('../db/connect.php');
	$section_id=$_GET['section_id'];

	$del = $_GET['su_id'];

	$query = "DELETE FROM sectiontaken_tbl WHERE sectionref_id = '$del'"; 
	
	if(mysql_query($query)){
	echo "<script>window.open('../section_view.php?section_id=$section_id','_self')</script>";
	}

?>