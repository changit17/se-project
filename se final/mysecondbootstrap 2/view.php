

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

<style>
#img{
    border: 3px #fff solid;
    border-radius: 100px;
}
</style>
<body>

    <div id="wrapper">
<?php include 'db/connect.php'; ?>
<?php include 'body/nav2.php'; ?>




 
<div id="page-wrapper">
<a href="index.php"  class="btn btn-info btn-m"><i class="fa fa-fw fa-table"></i>Back to Student Table</a>

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">


<?php         if(isset($_GET['search_name'])){
          $search=$_GET['search_name'];
          $id=$result = preg_replace("/[^a-zA-Z0-9]+/", "", $search);
        }
        else{
          $id=$result="";
        } ?>
<body>
<br>

<?php  


            $get=mysql_query("SELECT * FROM student_tbl INNER JOIN department_tbl USING(d_id) INNER JOIN course_tbl USING(c_id)
             where s_id = '$id'");
            while($query = mysql_fetch_array($get)){ ?>
            <div class="jumbotron">


                    <h2>
                    <i class="fa fa-user">&nbsp;</i>
                    <?php echo $Student_fname=$query['fname']; ?>
                    <?php echo $Student_fname2=$query['fname2']; ?>
                    <?php echo $Student_mname=$query['mname']; ?>
                    <?php echo $Student_lname=$query['lname']; ?>
                    
                    </h2>
                    <h4>Student Number: <label><?php echo $Student_number=$query['s_id']; ?></label></h4>

                    
                      <h5>Department: <label><?php echo $Student_number=$query['department']; ?></label> &nbsp;
                      Course: <label><?php echo $Student_number=$query['course']; ?></label></h5>
                     <h5>Contact: <label><?php echo $Student_number=$query['contact']; ?></label></h5>
                     </h3>


<?php $catch_dept_id=$query['d_id']; ?>
<?php $catch_course_id=$query['c_id']; ?>
<?php $catch_student_id=$query['s_id']; ?> 
<?php $catch_course_name=$query['course']; ?>



<?php } ?>
    <?php $get1=mysql_query("SELECT * FROM sectiontaken_tbl
            INNER JOIN department_tbl USING(d_id) 
            INNER JOIN course_tbl USING(c_id)
            INNER JOIN section_tbl USING(section_id)
            INNER JOIN year_tbl USING(year_id)
            INNER JOIN semester_tbl USING(sem_id)
            INNER JOIN student_tbl USING(s_id) WHERE s_id='$id'   ");
            while($query = mysql_fetch_array($get1)){ ?>
             <h4>Section: <label><?php echo $query['course'].' - '.$query['section_name']; ?></label> &nbsp;
             Year: <label><?php echo $query['year_name']; ?></label></h5>
             <h5>Semester: <label><?php echo $query['sem_name']; ?></label></h5>
              <h5>Status: <label><span class="badge">Enrolled!</span></label></h5>

            <?php }?></label></h5>
            




</div>
  <form action="inv.php" method="post">
 <!-- <p><button type="submit" class="btn btn-primary btn-lg" href="inv.php" name="search_name">Inventory</button></p> -->

  <p><a href="view_edit.php?id=<?php echo $id; ?>" class="btn btn-info btn-m"><span class="glyphicon glyphicon-edit"></span> Edit</a>
  </p>
  </form>
</div> 



    <div class="col-lg-12">    <?php include 'section/your_section.php'; ?>


    </div>





    



<br>
<br>
<br>
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
