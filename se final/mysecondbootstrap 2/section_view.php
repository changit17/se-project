


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
<?php include 'body/nav2.php'; ?>
 
<div id="page-wrapper">
<a href="section.php"  class="btn btn-warning btn-m"><i class="fa fa-fw fa-table"></i>Back to Section Table</a>
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-8">


    <form method="post">
    

<?php  

$id=$_GET['section_id'];
$c_id;
            $get=mysql_query("SELECT * FROM section_tbl INNER JOIN course_tbl USING(c_id) INNER JOIN year_tbl USING(year_id) INNER JOIN semester_tbl USING(sem_id) where section_id = '$id'");
            while($query = mysql_fetch_array($get)){
                echo '<h1>'.$query['sem_name'].':'.$query['year_name'].' Section:&nbsp;'.$query['course'].'-'.$query['section_name'].'  </h1>';
                echo "<br>";        
                $c_id=$query['c_id'];  
            }


?>

    </form>


<!--Subject SECTION-->
            <?php


                $get = mysql_query("SELECT * FROM student_tbl INNER JOIN department_tbl USING(d_id) INNER JOIN course_tbl USING(c_id) WHERE c_id = '$c_id' ");
                while($query = mysql_fetch_array($get)){ ?>
                

                    <?php
                }
            ?>

<?php include 'section/section_student_list2.php'; ?>
        </div>
  


<br><br><br><br><br><br><br><br><br><br><br><br><br>


    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</div>  
</body>


</html>









    <?php include('add_modal/add.php');?>
        <?php include('add_modal/add_function.php');?>
    
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
