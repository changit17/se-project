


<div class="panel panel-default">
                            <div class="panel-heading">
<span><h3 class="panel-title">Add Section</h3></span>
                            </div>
      <div class="panel-body">

    <form method="POST"> 
<!--
info needed to add to this section
-->




        <div class="form-group">
<legend><label class='control-label' for="subject">Available Sections in
<?php echo $catch_course_name; ?>
</label></legend>


<select class="form-control" name="section_catch_id">

            <option >------------</option>
<?php  $get=mysql_query("SELECT * FROM section_tbl 
INNER JOIN course_tbl USING (c_id) 
INNER JOIN department_tbl USING (d_id)
INNER JOIN year_tbl USING (year_id)
WHERE c_id = '$catch_course_id;' ORDER BY year_name");
while($query = mysql_fetch_array($get)){ ?>

<option value="<?php echo $query['section_id']; ?>"> <?php echo $query['year_name']; ?> <?php echo $query['course']. ' - ' .$query['section_name']; ?> </option>


<?php } ?>
</select>


<input type="hidden" name="c_id" value="<?php echo $catch_course_id; ?>">
<input type="hidden" name="d_id" value="<?php echo $catch_dept_id; ?>">
<input type="hidden" name="s_id" value="<?php echo $catch_student_id; ?>">



        </div>
        
    <button type="submit" class="btn btn-success btn-xs" name ="submit_section_taken">Add</button>    
    </form>

</div>
</div>



<?php

    
    ////////////////////////////////
    if(isset($_POST['submit_section_taken'])){
        
      
         $catch_student_id=$_POST['s_id'];   
         $catch_course_id=$_POST['c_id'];     
         $catch_dept_id=$_POST['d_id'];   
         $section_id=$_POST['section_catch_id'];
         if($section_id!=0){

               
        
        $insert = "INSERT INTO sectiontaken_tbl(section_id, s_id, c_id, d_id)
         VALUES ('$section_id;', '$catch_student_id;', '$catch_course_id;', '$catch_dept_id;')";

        
        if(mysql_query($insert)){
        echo "<script>window.open('view.php?search_name=$id','_self')</script>";
        }
        else{
           ?>

<?php

    
    ////////////////////////////////
    if(isset($_POST['submit_section_taken'])){
        
      
         $catch_student_id=$_POST['s_id'];   
         $catch_course_id=$_POST['c_id'];     
         $catch_dept_id=$_POST['d_id'];   
         $section_id=$_POST['section_catch_id'];
         if($section_id!=0){

               
        
        $insert = "INSERT INTO sectiontaken_tbl(section_id, s_id, c_id, d_id)
         VALUES ('$section_id;', '$catch_student_id;', '$catch_course_id;', '$catch_dept_id;')";

        
        if(mysql_query($insert)){
             echo "<script>window.open('view.php?section_id='$section_id','_self')</script>";
        }
        else{
           ?>
                                    <div class="col-lg-12">
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Already Enrolled! </strong> 
                        </div>
                    </div>
                </div>
                </div>
           <?php
        }
            

}}

?>
           <?php
        }
            

}}

?>