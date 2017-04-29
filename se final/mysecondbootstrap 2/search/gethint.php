<?php

$user="root";
$password="";
$database="letter_db";

$conn=mysql_connect("localhost",$user,$password);
@mysql_select_db($database) or die (mysql_error());

?>
<?php 

        $get=mysql_query("SELECT * FROM countries ");
        while($query = mysql_fetch_array($get)){
    $fname=$query['name'];
?>

<?php
// Array with names
?> <?php ''. $a[] =  $fname; 


?>




<?php
} ?>


<?php
// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = '<tr><td>'.$name. '</td></tr>';
            } else {
                $hint .= '<tr><td>'.$name. '</td></tr>';
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : "<table class='table table-hover table-striped' bgcolor='#fff'>'.$hint .'</table>";
?>