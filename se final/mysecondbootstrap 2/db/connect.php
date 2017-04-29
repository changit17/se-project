<?php

$user="root";
$password="";
$database="mcc_db";

$conn=mysql_connect("localhost",$user,$password);
@mysql_select_db($database) or die (mysql_error());

?>