


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
        <th><i class="fa fa-fw fa-home"></i>Department</th>
        <th> <i class="fa fa-fw fa-user"></i>Name </th>   
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


        $get=mysql_query("SELECT * FROM department_left_tbl  WHERE department LIKE '%$result%'  ORDER BY d_id ");
        while($query = mysql_fetch_array($get)){
          echo '<tr  class="active">';
          echo '<td>'.$query['department'].'</td>';
          echo '<td>'.$query['dean'].' '.$query['deanlname'].'</td>';
                    echo '<td><a href="restore/restore_dept.php 

      
          ?d_id='.$query['d_id'].'
          &department='.$query['department'].'
          &dean='.$query['dean'].'
          &deanlname='.$query['deanlname'].'" 
"  class = "btn btn-success btn-xs">

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