


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
        <th> <i class="fa fa-fw fa-table"></i>Name </th>   
        <th><i class="fa fa-fw fa-home"></i>Department</th>
        <th><i class="fa fa-fw fa-edit"></i>Options</th>     
      </thead>    
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


        $get=mysql_query("SELECT * FROM course_left_tbl INNER JOIN department_tbl USING(d_id) WHERE course LIKE '%$result%'  ORDER BY c_id ");
        while($query = mysql_fetch_array($get)){
          echo '<tr  class="active">';
          echo '<td>'.$query['course'].' </td>';
          echo '<td>'.$query['department'].'</td>';
               
              echo '<td><a href="restore/restore_course.php

          ?c_id='.$query['c_id'].'
          &course='.$query['course'].'
          &d_id='.$query['d_id'].'
          &ref_id='.$query['ref_id'].'"




          class = "btn btn-success btn-xs"><i class="fa fa-fw fa-check"></i>Restore</a>   </td>';
          echo '</tr>';
      
          
       }?>
    </table>
    </div>
    </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
</div>