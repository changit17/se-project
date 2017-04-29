<div class="panel panel-default">

                            <div class="panel-heading">
                                <span><h3 class="panel-title"><i class="fa fa-fw fa-table"></i>Year Levels </h3></span>

                            </div>
      <div class="panel-body">
<div class="table-responsive">
<label><caption><i class="fa fa-fw fa-list"></i>List</caption></label>

<table class="table table-bordered table-hover table-striped">
<thead>
        <th><i class="fa fa-fw fa-home"></i>Year Level</th>
</thead>
    
            <?php
                    if(isset($_GET['search_name'])){
          $search=$_GET['search_name'];
          $result = preg_replace("/[^a-zA-Z0-9]+/", "", $search);
        }
        else{
          $result="";
        }


            $get=mysql_query("SELECT * FROM year_tbl WHERE year_name LIKE '%$result%' ORDER BY year_name");
            while($query = mysql_fetch_array($get)){ ?>
            <tr class="active">
               <td align=""><?php echo $query['year_name']; ?></td>
<!--
               <td ><a href="year/delete/deleteyear_tbl.php?id=<?php echo $query['year_id']; ?>" class = "btn btn-danger btn-xs"><i class="fa fa-fw fa-trash"></i>Drop</a> &nbsp;  </td>
            </tr>
            
        
                -->
            <?php }?>
    </table>