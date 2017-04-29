<div class="panel panel-default">
                             <div class="panel-heading">
                                <span><h3 class="panel-title"><i class="fa fa-fw fa-trash"></i>
                                <a href="department_list.php">Departments</a></h3></span>
                            </div>
      <div class="panel-body">
<div class="table-responsive">

<label><caption><i class="fa fa-fw fa-trash"></i>Drop Department</caption></label>

<table class="table table-bordered table-hover table-striped">
            <tr  class="active">
            <td>
      <div class="panel-body">

    <form method="post" action="dashboard/delete/deletedept.php">            
        <div class="form-group">
            <select name='id' class="form-control">
            <option value="0">------</option>
            <?php
                $get_year=mysql_query("SELECT * FROM department_tbl ORDER BY d_id");
                while($query = mysql_fetch_array($get_year)){
                    echo '<option value='.$query['d_id'].'>'.$query['department'].'</option>';
                }
            ?>
            </select>
        </div>
        
    <button type="submit" class="btn btn-danger btn-xs" name='deleteyear'><i class="fa fa-fw fa-trash"></i>Drop</button>    
    </form>
</div>
            </td>
            </tr>
    </table>
    </div>
    </div>
    </div>


<div class="panel panel-default">
                            <div class="panel-heading">
                                <span><h3 class="panel-title">
                                <i class="fa fa-fw fa-list"></i><a href="department_list.php">
                               Departments</a></h3></span>
                            </div>
      <div class="panel-body">
<div class="table-responsive">

<label><caption> <a href="department_list.php"><i>View All Records</i></a></caption></label>

<table class="table table-bordered table-hover table-striped">
<thead>
            <th>Name</th>
        </thead>
    
    <?php
        if(isset($_GET['search_name'])){
          $search=$_GET['search_name'];
          $result = preg_replace("/[^a-zA-Z0-9]+/", "", $search);
        }
        else{
          $result="";
        }

            $get=mysql_query("SELECT * FROM department_tbl ORDER BY d_id LIMIT 5");
            while($query = mysql_fetch_array($get)){
                echo '<tr  class="active">';
                echo '<td>'.$query['department'].'</td>';
                echo '</tr>';
                
        
                
            }?>
</table>
</div>
</div>
</div>
