<?php include 'auth/db.php'; ?>
    <!--
<div class="panel panel-default">
                             <div class="panel-heading">
                                <span><h3 class="panel-title"><i class="fa fa-fw fa-table"></i>
                                <a href="year.php">Admin Accounts</a></h3></span>
                            </div>
      <div class="panel-body">
<div class="table-responsive">

<label><caption>Drop Admin</caption></label>

<table class="table table-bordered table-hover table-striped">
            <tr>
            <td>
      <div class="panel-body">

    <form method="post" action="dashboard/delete/deleteyear_tbl.php">            
        <div class="form-group">
            <select name='id' class="form-control">
            <?php
                $get_year=mysql_query("SELECT * FROM user ORDER BY username");
                while($query = mysql_fetch_array($get_year)){
                    echo '<option value='.$query['id'].'>'.$query['username'].'</option>';
                }
            ?>
            </select>
        </div>
        
    <button type="submit" class="btn btn-danger btn-xs" name='deleteyear'>Drop</button>    
    </form>
</div>
            </td>
            </tr>
    </table>
    </div>
    </div>
    </div> -->

    
<div class="panel panel-default">
                            <div class="panel-heading">
                                <span><h3 class="panel-title"><i class="fa fa-fw fa-table"></i>
                                <a href="year.php">Admins</a></h3></span>
                            </div>
      <div class="panel-body">
<div class="table-responsive">


<table class="table table-bordered table-hover table-striped">
<thead>
<th colspan="2">Accounts</th>
</thead>
    
            <?php
                    if(isset($_GET['search_name'])){
          $search=$_GET['search_name'];
          $result = preg_replace("/[^a-zA-Z0-9]+/", "", $search);
        }
        else{
          $result="";
        }


            $get=mysql_query("SELECT * FROM user ORDER BY username LIMIT 5");
            while($query = mysql_fetch_array($get)){ ?>
            <tr class="active">
               <td align=""><?php echo $query['id']; ?></td>
               <td align=""><?php echo $query['username']; ?></td>
<!--
               <td><a href="year/delete/deleteyear_tbl.php?id=<?php echo $query['year_id']; ?>" class = "btn btn-danger btn-xs"><i class="fa fa-fw fa-close"></i>Drop</a> &nbsp;  </td>

               -->
            </tr>
            
        
                
            <?php }?>
            <tr>

            </tr>
            </table>

    </div>
    </div>
    </div>

