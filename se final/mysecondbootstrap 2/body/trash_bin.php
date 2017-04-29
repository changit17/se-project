


<div class="row">
<div class="col-lg-12">
<div class="table-responsive">
<table class="table table-bordered table-hover table-striped">

<td>
<a href="index.php" class = "btn btn-success btn-xs">All Students</a>

</form>
</td>








</table>
</div>
</div>
</div>
<div class="panel panel-default">

                            <div class="panel-heading">
                                <span><h3 class="panel-title"><i class="fa fa-fw fa-table"></i>Table</h3></span>

                            </div>
                            
      <div class="panel-body">
<div class="table-responsive">
<label><caption><i class="fa fa-fw fa-list"></i>List</caption></label>

<table class="table table-bordered table-hover table-striped">
<thead>
        <th>Student #</th>
        <th> <i class="fa fa-fw fa-user"></i>Name </th>
        <th><i class="fa fa-fw fa-phone"></i>Contact </th>      
        <th><i class="fa fa-fw fa-home"></i>Department</th>
        <th><i class="fa fa-fw fa-table"></i>Course</th>   
        <th><i class="fa fa-fw fa-edit"></i>Options</th>     
      </thead>


        <?php


                ////course category/////
         if(isset($_GET['course'])){
          $course1=$_GET['course'];
          $course = preg_replace("/[^a-zA-Z0-9]+/", "", $course1);
        }
        else{
          $course="0";
        }



////search student/////
        if(isset($_GET['search_name'])){
          $search=$_GET['search_name'];
          $result = preg_replace("/[^a-zA-Z0-9]+/", "", $search);
        }
        else{
          $result="";
        }


        $get=mysql_query("SELECT * FROM student_number_left_tbl INNER JOIN department_tbl USING(d_id) INNER JOIN course_tbl USING(c_id) WHERE s_id LIKE '%$result%'  ORDER BY s_id ");
        while($query = mysql_fetch_array($get)){
          echo '<tr  class="active">';
          echo '<td>'.$query['s_id'].'</td>';
          echo '<td>'.$query['fname'].' '.$query['fname2'].' '.$query['mname'].' '.$query['lname'].'</td>';
          echo '<td>'.$query['contact'].'</td>';
          echo '<td>'.$query['department'].'</td>';
          echo '<td>'.$query['course'].'</td>';
                    echo '<td><a href="restore/restore_student.php 

          ?su_id='.$query['s_id'].'
          &fname='.$query['fname'].'
          &fname2='.$query['fname2'].'
          &mname='.$query['mname'].'
          &lname='.$query['lname'].'
          &contact='.$query['contact'].'
          &c_id='.$query['c_id'].'
          &d_id='.$query['d_id'].'"  class = "btn btn-success btn-xs">

          <i class="fa fa-fw fa-check"></i>Restore</a> &nbsp; 
            </td>';
          echo '</tr>';
          
      
          
       }?>
    </table>
    </div>
    </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
</div>