


<?php
    require_once('auth/auth.php');
?>
<?php
include('auth/db.php');
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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php 
        if(isset($_GET['search_name'])){
          $search=$_GET['search_name'];
          $result = preg_replace("/[^a-zA-Z0-9]+/", "", $search);
        }
        else{
          $result="";
        }
        ?>
    <div id="wrapper">
<?php include 'db/connect.php'; ?>
<?php include 'body/nav2.php'; ?>
 
<div id="page-wrapper">
<?php include 'mininav/nav.php'; ?>


    <?php include('year/addyear_tbl/add.php');?>

<h1><i class="fa fa-fw fa-dashboard"></i>Dashboard</h1>
<br>
<hr>
<h4><i class="fa fa-fw fa-table"></i>Student Number / Semester / Year </h4>
<hr>
<div class="row">


    <div class="col-lg-3">
     <?php include 'dashboard/dashstudentnumber.php'; ?>
    </div>

<div class="col-lg-3">
     <?php include 'dashboard/dashsem.php'; ?>
    </div>


    <div class="col-lg-3">
     <?php include 'dashboard/dashyear.php'; ?>
    </div>


    </div>




<div class="row">



</div>
<hr>
<h4><i class="fa fa-fw fa-table"></i>Admin Accounts</h4>
<hr>
<div class="row">
         <div class="col-lg-3">
     <?php include 'dashboard/dashaccount.php'; ?>


    </div>

</div>








    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>


</body>


</html>

    <!-- DEPT LIST -->










    <?php include('add_modal/add.php');?>
    <?php include('add_modal/add_function.php');?>
    
    <?php include('year/addyear_tbl/add.php');?>
    <?php include('year/addyear_tbl/add_function.php');?>
    
    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>







    <!-- jQuery -->
    <script src="js2/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js2/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js2/plugins/morris/raphael.min.js"></script>
    <script src="js2/plugins/morris/morris.min.js"></script>
    <script src="js2/plugins/morris/morris-data.js"></script>
</div>
</div>
</div>
</body>

</html>





    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
