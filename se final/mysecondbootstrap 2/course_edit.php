

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
<a href="course.php"  class="btn btn-primary btn-m"><i class="fa fa-fw fa-table"></i>Back to Course Table</a>
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

<h1>Course</h1>


<?php
$id=$_GET['c_id'];
    
    ////////////////////////////////
    if(isset($_POST['save_changes'])){
        $course1=$_POST['course'];
        $course=preg_replace("/[^a-zA-Z0-9]+/", "",  $course1); 

    
        $update = "UPDATE course_tbl SET course='$course' WHERE c_id = '$id' ";

        
        if(mysql_query($update)){ ?>
         <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-check-circle"></i>
                            <a href="course.php">
                              <strong>Successfully Added! :)
                              </a></strong> 
                        </div>
                    </div>
                </div>
                <?php 
        }
        else{
            echo " <p class='btn btn-danger btn-lg'>Try Again!</p>";
        }
            

    }


?>


    <form method="post">
    

<?php  

            $get=mysql_query("SELECT * FROM course_tbl where c_id = '$id'");
            while($query = mysql_fetch_array($get)){
                echo '<h5>Course Name: </h5><input type="text" name="course" value="'.$query['course'].'" class="form-control">';
                echo "<br>";
                echo '<button type="submit" class="btn btn-s btn-info" name="save_changes"><span class="glyphicon glyphicon-check"></span> Save</button> ';
                echo '<a href="course.php" class="btn btn-s btn-danger">Back</a>';                
            }

?>
    </form>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>  

</body>


</html>





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




