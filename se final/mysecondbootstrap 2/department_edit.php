

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
<a href="department_list.php"  class="btn btn-danger btn-m"><i class="fa fa-fw fa-table"></i>Back to Department Table</a>
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">





<h1>Department</h1>


<?php
    
 $id=$_GET['d_id']; 
    ////////////////////////////////
    if(isset($_POST['save_changes'])){
        $dept1=$_POST['dept'];
        $dept=preg_replace("/[^a-zA-Z0-9]+/", "",  $dept1); 
        $dean1=$_POST['dean'];
        $dean=preg_replace("/[^a-zA-Z0-9]+/", "",  $dean1); 
        $dean2=$_POST['dean2'];
        $dean3=preg_replace("/[^a-zA-Z0-9]+/", "",  $dean2); 

        $update = "UPDATE department_tbl SET dean='$dean', deanlname='$dean3', department='$dept' WHERE d_id = '$id' ";

        
        if(mysql_query($update)){
                                   ?>
         <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>
                            <a href="department_list.php">
                              <strong>Saved! :) Click here to go back</strong> 
                              </a>
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




<table class="table table-striped table-hover ">

    <form method="post">
    

<?php  
            $get=mysql_query("SELECT * FROM department_tbl where d_id = '$id'");
            while($query = mysql_fetch_array($get)){
                echo '<h5>Department Name: </h5><input type="text" name="dept" value="'.$query['department'].'" class="form-control" maxlength="5">';
                echo '<h5>Dean First Name: </h5><input type="text" name="dean" value="'.$query['dean'].'" class="form-control" maxlength="10">';
                echo "<br>";
                 echo '<h5>Dean Last Name: </h5><input type="text" name="dean2" value="'.$query['deanlname'].'" class="form-control" maxlength="10">';
                echo "<br>";
                echo '<button type="submit" class="btn btn-s btn-info" name="save_changes"><span class="glyphicon glyphicon-check"></span> Save</button> &nbsp;';
                echo '<a href="department_list.php?id='.$id.'" class="btn btn-s btn-danger">Back</a>';                
            }

?>
<input type="hidden" value="<?php echo $id2=$query['id']; ?>">
    </form>

    
    </table>
    <!-- DEPT LIST -->








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
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>

</body>

</html>





    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
