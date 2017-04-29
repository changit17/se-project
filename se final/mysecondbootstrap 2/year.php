


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

    <div id="wrapper">
<div id="page-wrapper"> 
<?php include 'db/connect.php'; ?>
<?php include 'body/nav.php'; ?>
 
<?php include 'mininav/nav.php'; ?>



<h1><i class="fa fa-fw fa-table"></i>Year Table</h1>

    <?php include('year/addyear_tbl/add_function.php');?>
 <div class="row">
<div class="col-lg-4">
<p> <button type="button" class="btn btn-primary btn-m" data-toggle="modal" data-target="#AddYear">  <i class="fa fa-fw fa-plus"></i>ADD</button>
</p>

<?php include 'year/yearlist.php'; ?>
</div>  
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
