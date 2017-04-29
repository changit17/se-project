

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

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">


<?php
$id=$_GET['id'];
    
    ////////////////////////////////
    if(isset($_POST['save_changes'])){
        $fname1=$_POST['fname'];
        $fname=preg_replace("/[^a-zA-Z0-9]+/", "",  $fname1); 

        $fname3=$_POST['fname2'];
        $fname2=preg_replace("/[^a-zA-Z0-9]+/", "",  $fname3); 

        $mname1=$_POST['mname'];
        $mname=preg_replace("/[^a-zA-Z0-9]+/", "",  $mname1); 

        $lname1=$_POST['lname'];
        $lname=preg_replace("/[^a-zA-Z0-9]+/", "",  $lname1); 

        $cel_no1=$_POST['cel_no'];       
        $cel_no=preg_replace("/[^a-zA-Z0-9]+/", "",  $cel_no1);  
        
        $update = "UPDATE student_tbl SET fname='$fname', fname2='$fname2', mname='$mname', lname='$lname', contact='$cel_no' WHERE s_id = '$id' ";

        
        if(mysql_query($update)){
                                               ?>
         <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-check-circle"></i>  <strong>Saved! :)</strong> 
                        </div>
                    </div>
                </div>
                <?php 
        }
        else{
            echo "<p class='btn btn-danger btn-lg'>Try Again!</p>";
        }
            

    }


?>



<form method="post">
<?php  
            $get=mysql_query("SELECT * FROM student_tbl INNER JOIN department_tbl USING(d_id) INNER JOIN course_tbl USING(c_id) where s_id = '$id'");
            while($query = mysql_fetch_array($get)){ ?>
           <div class="jumbotron">


                    <label><h2><font color="#666">EDIT</font></h2></label>
                    <div class="form-group">
    <label><h4><font color="#666">First Name</font></h4></label>                
  <input class="form-control input-lg" type="text" id="inputLarge" name="fname" 
  value="<?php echo $Student_name=$query['fname']; ?>">

<label><h4><font color="#666">Extension Name</font></h4></label> 
  <input class="form-control input-lg" type="text" id="inputLarge" name="fname2" 
  value="<?php echo $Student_name2=$query['fname2']; ?>">

<label><h4><font color="#666">Middle Name</font></h4></label> 
  <input class="form-control input-lg" type="text" id="inputLarge"  name="mname"
  value="<?php echo $Student_name=$query['mname']; ?>">

  <label><h4><font color="#666">Last Name</font></h4></label> 
  <input class="form-control input-lg" type="text" id="inputLarge" name="lname" 
  value="<?php echo $Student_name=$query['lname']; ?>">

</div>
                    </h1>
              <br>  

             <label><h4><font color="#666">Contact</font></h4></label>       
                     <input class="form-control input-lg" type="text" id="inputLarge"  name="cel_no"
  value="<?php echo $Student_name=$query['contact'] ?>"><br>


 <!-- <p><button type="submit" class="btn btn-primary btn-lg" href="inv.php" name="search_name">Inventory</button></p> -->

  <button type="submit" class="btn btn-info btn-m" name="save_changes"><span class="glyphicon glyphicon-check"></span> Save</button></td> ';
                <a href="view.php?search_name=<?php echo $id ?>" class="btn btn-m btn-danger">Back</a>
  </p>
</div> 

<?php } ?>


</form>
</body>


</html>

<table>

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
