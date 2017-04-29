
<div class="panel panel-default">
                             <div class="panel-heading">
                                <span><h3 class="panel-title"><i class="fa fa-fw fa-trash"></i>
                                <a href="year.php">Year Levels</a></h3></span>
                            </div>
      <div class="panel-body">
<div class="table-responsive">

<label><caption><i class="fa fa-fw fa-trash"></i>Drop Year Level</caption></label>

<table class="table table-bordered table-hover table-striped">
            <tr  class="active">
            <td>
      <div class="panel-body">

    <form method="post" action="dashboard/delete/deleteyear_tbl.php">            
        <div class="form-group">
            <select name='id' class="form-control">
            <option value="0">-----</option>
            <?php
                $get_year=mysql_query("SELECT * FROM year_tbl ORDER BY year_name");
                while($query = mysql_fetch_array($get_year)){
                    echo '<option value='.$query['year_id'].'>'.$query['year_name'].'</option>';
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
                                <span><h3 class="panel-title"><i class="fa fa-fw fa-list"></i>
                                <a href="year.php">Year Levels</a></h3></span>
                            </div>
      <div class="panel-body">
<div class="table-responsive">

<label><caption> <a href="year.php"><i>View All Records</i></a></caption></label>

<table class="table table-bordered table-hover table-striped">
<thead>
<th>Year Name</th>
<th>
<a href="#" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#AddYear">  <i class="fa fa-fw fa-plus"></i>Add</a>
</th>
</thead>
    
            <?php
                    if(isset($_GET['search_name'])){
          $search=$_GET['search_name'];
          $result = preg_replace("/[^a-zA-Z0-9]+/", "", $search);
        }
        else{
          $result="";
        }


            $get=mysql_query("SELECT * FROM year_tbl WHERE year_name  ORDER BY year_name LIMIT 5");
            while($query = mysql_fetch_array($get)){ ?>
            <tr  class="active">
               <td align="" colspan="2"><?php echo $query['year_name']; ?></td>
<!--
               <td ><a href="year/delete/deleteyear_tbl.php?id=<?php echo $query['year_id']; ?>" class = "btn btn-danger btn-xs"><i class="fa fa-fw fa-close"></i>Drop</a> &nbsp;  </td>

               -->
            </tr>
            
        
                
            <?php }?>
            <tr>

            </tr>
            </table>
            </div>
            </div>
            </div>

