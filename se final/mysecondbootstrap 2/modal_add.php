


        <?php
 
    if(isset($_POST['submit_info'])){
        $id=$_POST['s_id'];
        $fname=$_POST['fname'];
        $mname=$_POST['mname'];
        $lname=$_POST['lname']; 
        $contactNo=$_POST['contactNo'];             
        $course=$_POST['course'];           
        
        $check = mysql_fetch_array(mysql_query("SELECT * FROM course_tbl INNER JOIN department_tbl  USING(d_id) WHERE c_id = $course"));
        
        $dept = $check['d_id'];

        
        $insert = "INSERT INTO student_tbl(s_id, fname, mname, lname, contact, d_id, c_id) VALUES ('$id', '$fname','$mname','$lname','$contactNo','$dept','$course')";
        
        echo $id;
        echo $fname;
        echo $mname;
        echo $lname;
        echo $contactNo;
        echo $dept;
        echo $course;
        
        if(mysql_query($insert)){
            echo "<script>window.open('inv.php','_self')</script>";
        }
        else{
            echo "ERROR";
        }
            

    }
 


 /* Subject */
////////////////////////////////

    if(isset($_POST['submit_subject'])){
        $su_name=$_POST['su_name'];
        $course=$_POST['course'];       

        
        $insert = "INSERT INTO subject_tbl(name, c_id) VALUES ('$su_name', '$course')";

        
        if(mysql_query($insert)){
            echo "<script>window.open('subject_list.php','_self')</script>";
        }
        else{
            echo "ERROR";
        }
            

    }


?>


<?php
 /* course */

////////////////////////////////
    if(isset($_POST['submit_course'])){
        $c_name=$_POST['c_name'];
        $department=$_POST['department'];       

        
        $insert = "INSERT INTO course_tbl(course, d_id) VALUES ('$c_name', '$department')";

        
        if(mysql_query($insert)){
            echo "<script>window.open('course.php','_self')</script>";
        }
        else{
            echo "ERROR";
        }
            

    } ?>





        <?php
  ///////////////////////////////
 /* department */
  if(isset($_POST['submit_dept'])){
    $d_name=$_POST['d_name'];
    $dname=$_POST['dean_name'];   

    
    $insert = "INSERT INTO department_tbl(department, dean) VALUES ('$d_name', '$dname')";

    
    if(mysql_query($insert)){
      echo "<script>window.open('department_list.php','_self')</script>";
    }
    else{
      echo "ERROR";
    }
      

  }


?>





<?php
 /* section */

////////////////////////////////
    if(isset($_POST['submit_section'])){
        $section_name=$_POST['section_name'];
        $course=$_POST['course'];       

        
        $insert = "INSERT INTO section_tbl(name, c_id) VALUES ('$section_name', '$course')";

        
        if(mysql_query($insert)){
            echo "<script>window.open('section.php','_self')</script>";
        }
        else{
            echo "ERROR";
        }
            

    } ?>