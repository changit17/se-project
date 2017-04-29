


        <?php
 
    if(isset($_POST['submit_info'])){
        $id=$_POST['s_id'];
        $fname1=$_POST['fname'];
        $fname=preg_replace("/[^a-zA-Z0-9]+/", "", $fname1);
        $fname3=$_POST['fname2'];
        $fname2=preg_replace("/[^a-zA-Z0-9]+/", "", $fname3);
        $mname1=$_POST['mname'];
        $mname=preg_replace("/[^a-zA-Z0-9]+/", "", $mname1);
        $lname1=$_POST['lname']; 
        $lname=preg_replace("/[^a-zA-Z0-9]+/", "", $lname1);
        $contactNo1=$_POST['contactNo'];     
        $contactNo=preg_replace("/[^a-zA-Z0-9]+/", "", $contactNo1);        
        $course1=$_POST['course'];   
        $course=preg_replace("/[^a-zA-Z0-9]+/", "", $course1);  

        
        $check = mysql_fetch_array(mysql_query("SELECT * FROM course_tbl INNER JOIN department_tbl  USING(d_id) WHERE c_id = $course"));
        
        $dept = $check['d_id'];

        
        $insert = "INSERT INTO student_tbl(s_id, fname, fname2, mname, lname, contact, d_id, c_id) VALUES ('$id', '$fname', '$fname2', '$mname','$lname','$contactNo','$dept','$course')";

        $insert2 = "INSERT INTO student_number_tbl(s_id) VALUES ('$id')";


        
         $id;
         $fname;
         $fname2;
         $mname;
         $lname;
         $contactNo;
         $dept;
         $course;
        
        if(mysql_query($insert)){
            if(mysql_query($insert2)){
                       ?>
         <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-check-circle"></i>  <strong>Successfully Added! :)</strong> 
                        </div>
                    </div>
                </div>
                <?php 
        }}
        else{ ?>
         <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Already Existed!</strong> 
                        </div>
                    </div>
                </div>
      <?php  } ?>
            
<?php
    }
 


 /* Subject */
////////////////////////////////

    if(isset($_POST['submit_subject'])){
        $su_name1=$_POST['su_name'];
        $su_name=preg_replace("/[^a-zA-Z0-9]+/", "", $su_name1);  
        $course1=$_POST['course'];       
        $course=preg_replace("/[^a-zA-Z0-9]+/", "", $course1);  

        
        $insert = "INSERT INTO subject_tbl(name, c_id, ref_id) VALUES ('$su_name', '$course' 
        , '$su_name1$course')";

        
        if(mysql_query($insert)){
            ?>
         <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-check-circle"></i>  <strong>Successfully Added! :)</strong> 
                        </div>
                    </div>
                </div> 
                <?php

        }
        else{ ?>
         <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Already Existed to your Course!</strong> 
                        </div>
                    </div>
                </div>
                <?php 
        }
            

    }


?>


<?php
 /* course */

////////////////////////////////
    if(isset($_POST['submit_course'])){
        $c_name1=$_POST['c_name'];
        $c_name=preg_replace("/[^a-zA-Z0-9]+/", "", $c_name1);  
        $department1=$_POST['department'];      
        $department=preg_replace("/[^a-zA-Z0-9]+/", "", $department1);   

        
        $insert = "INSERT INTO course_tbl(course, d_id, ref_id) VALUES ('$c_name', '$department',
        '$c_name$department')";

        
        if(mysql_query($insert)){
                        ?>
         <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-check-circle"></i>  <strong>Successfully Added! :)</strong> 
                        </div>
                    </div>
                </div>
                <?php 
        }
        else{ ?>
            
<div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Already Existed!</strong> 
                        </div>
                    </div>
                </div>

      <?php   }
            

    } ?>





        <?php
  ///////////////////////////////
 /* department */
  if(isset($_POST['submit_dept'])){
    $d_name1=$_POST['d_name'];
    $d_name=preg_replace("/[^a-zA-Z0-9]+/", "", $d_name1); 
    $dname1=$_POST['dean_name'];   
    $dname=preg_replace("/[^a-zA-Z0-9]+/", "", $dname1); 
    $dlname1=$_POST['dean_name2'];   
    $dlname=preg_replace("/[^a-zA-Z0-9]+/", "", $dlname1); 

    
    $insert = "INSERT INTO department_tbl(department, dean, deanlname) VALUES ('$d_name', '$dname' , '$dlname')";

    
    if(mysql_query($insert)){?>
         <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-check-circle"></i>  <strong>Successfully Added! :)</strong> 
                        </div>
                    </div>
                </div>
                <?php 

    }
    else{ ?>
<div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Already Existed!</strong> 
                        </div>
                    </div>
                </div>
    <?php 
    }
      

  }


?>





<?php
 /* section */

////////////////////////////////
    if(isset($_POST['submit_section'])){
        $section_name1=$_POST['section_name'];
          $section_name=preg_replace("/[^a-zA-Z0-9]+/", "",  $section_name1); 
        $course1=$_POST['course'];       
           $course=preg_replace("/[^a-zA-Z0-9]+/", "",   $course1); 
        $year1=$_POST['year'];       
           $year=preg_replace("/[^a-zA-Z0-9]+/", "",   $year1);  
        $sem1=$_POST['sem'];       
           $sem=preg_replace("/[^a-zA-Z0-9]+/", "",   $sem1); 

        
        $insert = "INSERT INTO section_tbl(section_name, c_id, year_id, sem_id, ref_id) VALUES ('$section_name', '$course', '$year', '$sem' ,'$section_name$course$year$sem')";

        
        if(mysql_query($insert)){
                        ?>
         <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-check-circle"></i>  <strong>Successfully Added! :)</strong> 
                        </div>
                    </div>
                </div>
                <?php 
        }
        else{?>
  
<div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Already Existed!</strong> 
                        </div>
                    </div>
                </div>

        <?php 
        }
            

    } ?>