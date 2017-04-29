


    
<div class="panel panel-default">
                             <div class="panel-heading">
                                <span><h3 class="panel-title"><i class="fa fa-fw fa-trash"></i>
                                <a href="#">Student Number</a></h3></span>
                            </div>
      <div class="panel-body">
<div class="table-responsive">

<label><caption><i class="fa fa-fw fa-trash"></i>Drop Semester</caption></label>

<table class="table table-bordered table-hover table-striped">
            <tr  class="active">
            <td>
      <div class="panel-body">

    <form method="post" action="dashboard/delete/deletestudentnumber.php">            
        <div class="form-group">
            <select name='id' class="form-control">
            <option value="0">-----</option>
            <?php
                $get_year=mysql_query("SELECT * FROM student_number_tbl ORDER BY s_id");
                
                while($query = mysql_fetch_array($get_year)){
                    echo '<option value='.$query['id'].'>'.$query['s_id'].'</option>';
                }
            ?>
            </select>
        </div>
        
    <button type="submit" class="btn btn-danger btn-xs" name='deletesem'><i class="fa fa-fw fa-trash"></i>Drop</button>    
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
                                <a href="#">Student Number</a></h3></span>
                            </div>
      <div class="panel-body">
<div class="table-responsive">

<table class="table table-bordered table-hover table-striped">
<thead>
<th>List</th>
<th >
<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#AddStu">
 <i class="fa fa-fw fa-plus"></i>Add
</button> </th>
</thead>
            <?php
                    if(isset($_GET['search_name'])){
          $search=$_GET['search_name'];
          $result = preg_replace("/[^a-zA-Z0-9]+/", "", $search);
        }
        else{
          $result="";
        }


            $get=mysql_query("SELECT * FROM student_number_tbl  ORDER BY s_id LIMIT 5");
            while($query = mysql_fetch_array($get)){ ?>
            <tr  class="active">
               <td align="" colspan="2"><?php echo $query['s_id']; ?></td>
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




    <?php include('dashboard/modal/addstudentnumber.php');?>
    <?php include('dashboard/add/addstudentnumber.php');?>