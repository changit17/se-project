<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>



<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>




<!DOCTYPE html>


<!-- javascript -->
        <link rel="stylesheet" href="styles.css" />

	<script src="jquery-1.7.1.min.js"></script>

		<script src="script.js"></script>

<script type="text/javascript">

var popupWindow=null;

function child_open()
{ 

popupWindow =window.open('#',"_blank","directories=no, status=no, menubar=no, scrollbars=yes, resizable=no,width=950, height=400,top=200,left=200");

}
</script>
<!-- css3 -->


<style>

body{ background:#000;
	color:#fff;
	size:36;
	font-family:calibri; }

input{ background:#000;
	border:1px solid #fff;
	color:#fff;
	font-family:consolas; }

table{ border-spacing:0;
	border-collapse:seperate; }

button{ background:#000;
	border:1px solid #fff;
	color:#fff;
	font-family:consolas; }

#login{	top:20%;
	left:40%;
	zindex:center;
	position:absolute; }

</style>


<!-- html -->


<body>
<center>


<div style="margin:0 auto; width:300px; padding-left: 32px; margin-top:50px;">
	<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
echo '<div class="row">
                    <div class="col-lg-12">
                     <div class="alert alert-danger alert-dismissable">';
foreach($_SESSION['ERRMSG_ARR'] as $msg) {
echo '  <strong><li>',$msg,'</li></strong>';
}
echo '</div></div></div>';
unset($_SESSION['ERRMSG_ARR']);
}
if(isset($_GET['id'])){
	$remark=$_GET['id'];
if($remark=='success')
{
echo '<ul>';
echo '<li>'." Registration Success You can now login ".'</li>';
echo '</ul>';
}}
?>
</div>




		<div id="formContainer">

			<form id="login" method="post" action="login.php">

				<a href="#" id="flipToLogin" class="flipLink ">Forgot?</a>
				<br>	
				<br>
				<br>
<h4><i class="fa fa-fw fa-user">

</i>Student Profile Login<i class="fa fa-fw fa-key"></i></h4>

<font size="+1">
<!-- clock -->
<?php 
$da= date("m-d-y");
echo $da; 
?>

</font>
<br>
<br>
<input type="text" name="username"  class="form-control"  id='loginEmail' placeholder="Username">


<i class="fa fa-fw fa-user"></i>Login Account<i class="fa fa-fw fa-key"></i> <input type="password" name="password"	 class="form-control" placeholder="***********" id="loginPass" >
				<input type="submit" name="submit" value="Login" cl/>

			</form>

			<form id="recover" method="post" action="register.php">

				<a href="#" id="flipToLogin"  class="flipLink">Forgot?</a>
				<br>	
				<br>
				<br>
<h4><i class="fa fa-fw fa-user">

</i>Student Profile Register<i class="fa fa-fw fa-key"></i></h4>
				<br>
				<i class="fa fa-fw fa-user"></i>Register Account
				<input type="text" name="adminpass" id="loginEmail" placeholder="Admin Password" style="top: 138px;" class="form-control"/>
				<input type="text" name="regusername" id="loginEmail" placeholder="Username" 
				class="form-control"/>
				<input type="password" name="regpassword" id="recoverEmail" placeholder="Password" 
				class="form-control"/>

				<input type="submit" name="submit" value="Save"  />

			</form>

		</div>




</center>
</body>


</html>