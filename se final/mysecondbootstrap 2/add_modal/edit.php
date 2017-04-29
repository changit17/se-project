<script type="bootstrap/js/bootstrap.js"></script>
<script type="bootstrap/js/bootstrap.min.js"></script>
<script type="bootstrap/js/npm.js"></script>
<script type="js.js"></script>
<link href="body/bootstrap.css" rel="stylesheet">
<link href="body/bootstrap.min.css" rel="stylesheet">




<!-- Modal -->



<!--STUDENT SECTION-->
  <form method="post">  
  <div class="modal fade" id="AddStud" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Add Student Data</h4>
        </div>
        <div class="modal-body">
        <div class="form-group">
          <label class='control-label' for="s_id" >Student ID</label>
          <input type="number" class="form-control" name="s_id" placeholder="1234"  required>
        </div>                
        <div class="form-group">
          <label class='control-label' for="fName">First Name</label>
          <input type="text" class="form-control" name="fname" id="fName" placeholder="First Name" required>
        </div>
        <div class="form-group">
          <label for="mname">Extention Name</label>
          <input type="text" class="form-control" name="fname2" id="fName2" placeholder="Extention Name" >
        </div>
       <div class="form-group">
          <label for="mname">Middle Name</label>
          <input type="text" class="form-control" name="mname" id="mName" placeholder="Middle Name" required>
        </div>
        <div class="form-group">
          <label for="lname">Last Name</label>
          <input type="text" class="form-control" name="lname" id="lName" placeholder="Last Name" required>
        </div>
        <div class="form-group">
          <label for="contactNo">Contact #</label>
          <input type="number" class="form-control" name="contactNo" required>
        </div>
        <div class="form-group">
          <label for="course">Course</label>
          <select name='course' class="form-control">
            <?php
            $get=mysql_query("SELECT * FROM course_tbl");
            while($query = mysql_fetch_array($get)){
              echo '<option value='.$query['c_id'].'>'.$query['course'].'</option>';
            }
            ?>
          </select>
          
        </div>



        
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name ="submit_info">Save</button> 
        </div>

      </div>
    </div>
  </div>
</form>












<!--DEPT SECTION-->
  <form method="post">  
  <div class="modal fade" id="AddDept" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Add Department</h4>
        </div>
        <div class="modal-body">
        <div class="form-group">
          <label class='control-label' for="d_name">Department Name</label>
          <input type="text" class="form-control" name="d_name" required>
        </div>                
        <div class="form-group">
          <label class='control-label' for="dean_name">Dean First Name</label>
          <input type="text" class="form-control" name="dean_name" required>
        </div>
                <div class="form-group">
          <label class='control-label' for="dean_name2">Dean Last Name</label>
          <input type="text" class="form-control" name="dean_name2" required>
        </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name ="submit_dept">Add</button> 
        </div>
      </div>
    </div>
  </div>
</form>







<!--COURSE SECTION-->
   <form method="post">  
  <div class="modal fade" id="AddCourse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Add Course</h4>
        </div>
        <div class="modal-body">
        <div class="form-group">
          <label class='control-label' for="c_name">Course Name</label>
          <input type="text" class="form-control" name="c_name" required>
        </div>                
        <div class="form-group">
          <label class='control-label' for="department">Department</label>
          <select name='department' class="form-control">
          <?php
            $get=mysql_query("SELECT * FROM department_tbl ORDER BY department");
            while($query = mysql_fetch_array($get)){
              echo '<option value='.$query['d_id'].'>'.$query['department'].'</option>';
            }
          ?>
        </select>
        </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name ="submit_course">Add</button> 
        </div>
      </div>
    </div>
  </div>
</form>
<!--COURSE SECTION-->


<!--SUBJECT SECTION -->
   <form method="post">  
  <div class="modal fade" id="AddSubj" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Add Subject</h4>
        </div>
        <div class="modal-body">
        <div class="form-group">

      <label class='control-label' for="su_name">Subject</label>
      <input type="text" class="form-control" name="su_name" required>
    </div>                
    <div class="form-group">
      <label class='control-label' for="course">Course</label>
      <select name='course' class="form-control">
      <?php
        $get=mysql_query("SELECT * FROM course_tbl INNER JOIN department_tbl USING(d_id) ORDER BY course");
        while($query = mysql_fetch_array($get)){
          echo '<option value='.$query['c_id'].'>'.$query['course'].'</option>';
        }
      ?>
      </select>
    </div>
    </div>

        <div class="modal-footer">
    <button type="submit" class="btn btn-primary" name ="submit_subject">Add</button>  
 
  </div>
  </div>
</div>
</div>
  </form>
  <!--Subject SECTION-->








  <!--SECTION SECTION -->
   <form method="post">  
  <div class="modal fade" id="AddSection" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Add Section</h4>
        </div>
        <div class="modal-body">
        <div class="form-group">

      <label class='control-label' for="su_name">Section</label>
      <input type="text" class="form-control" name="section_name" required>
    </div>                
    <div class="form-group">
      <label class='control-label' for="course">Course</label>
      <select name='course' class="form-control">
      <?php
        $get=mysql_query("SELECT * FROM course_tbl INNER JOIN department_tbl USING(d_id) ORDER BY course");
        while($query = mysql_fetch_array($get)){
          echo '<option value='.$query['c_id'].'>'.$query['course'].'</option>';
        }
      ?>
      </select>
    </div>
    </div>

        <div class="modal-footer">
    <button type="submit" class="btn btn-primary" name ="submit_section">Add</button>  
 
  </div>
  </div>
</div>
</div>
  </form>
  <!--SECTION SECTION-->


    <script src="js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>