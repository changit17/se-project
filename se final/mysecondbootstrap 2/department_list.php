

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
<?php include 'db/connect.php'; ?>
<?php include 'body/nav.php'; ?>
 
<div id="page-wrapper">
 <?php include 'mininav/nav.php'; ?>

 
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

<?php include 'add_button/add_department.php'; ?>

        <?php include('add_modal/add_function.php');?>



<!-- DEPT LIST -->
<div class="panel panel-default">

                            <div class="panel-heading">
                                <span><h3 class="panel-title"><i class="fa fa-fw fa-table"></i>Table</h3></span>

                            </div>
      <div class="panel-body">
<div class="table-responsive">
<label><caption><i class="fa fa-fw fa-list"></i>List</caption></label>

<table class="table table-bordered table-hover table-striped">
<thead>
        <th><i class="fa fa-fw fa-home"></i>Department</th>
        <th> <i class="fa fa-fw fa-user"></i>Name </th>   
        <th><i class="fa fa-fw fa-edit"></i>Options</th>     
      </thead>    
        </thead>
    
    <?php
        if(isset($_GET['search_name'])){
          $search=$_GET['search_name'];
          $result = preg_replace("/[^a-zA-Z0-9]+/", "", $search);
        }
        else{
          $result="";
        }

            $get=mysql_query("SELECT * FROM department_tbl WHERE department LIKE '%$result%'");
            while($query = mysql_fetch_array($get)){
                echo '<tr class="active">';
                echo '<td>'.$query['department'].'</td>';
                echo '<td>'.$query['dean'].' '.$query['deanlname'].'</td>';
                echo '<td><a href="department_edit.php?d_id='.$query['d_id'].'" class="btn btn-xs btn-info"><i class="fa fa-fw fa-edit"></i>Edit</a> &nbsp;';
                


                echo '<a href="del/dept_del.php

          ?d_id='.$query['d_id'].'
          &department='.$query['department'].'
          &dean='.$query['dean'].'
          &deanlname='.$query['deanlname'].'" 




          class = "btn btn-danger btn-xs"><i class="fa fa-fw fa-trash"></i>Delete</a>   </td>';
          echo '</tr>';
          
      
          
       }?>
                
        
    </table>
</div>  
</div>
</div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>


</html>

    <!-- DEPT LIST -->









    <?php include('add_modal/add.php');?>
    
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
