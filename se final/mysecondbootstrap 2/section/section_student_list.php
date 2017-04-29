
<div class="panel panel-default">
    
<table class="table table-bordered table-hover table-striped">
<thead>
        <th> <i class="fa fa-fw fa-user"></i>Student Number </th>  
        <th> <i class="fa fa-fw fa-user"></i>Name </th>   
        <th><i class="fa fa-fw fa-home"></i>Section</th>
        <th colspan="2"><i class="fa fa-fw fa-edit"></i>Options</th>     
      </thead>    
<tr>
     

<!--
info needed to add to this section
-->

             <?php $get=mysql_query("SELECT * FROM sectiontaken_tbl
            INNER JOIN department_tbl USING(d_id) 
            INNER JOIN course_tbl USING(c_id)
            INNER JOIN section_tbl USING(section_id)
            INNER JOIN year_tbl USING(year_id)
            INNER JOIN student_tbl USING(s_id)  
            WHERE course IN (SELECT course FROM course_tbl WHERE c_id = $catch_course_id) "); 
                while($query = mysql_fetch_array($get)){
             ?>
             <tr>
             <td><i class="fa fa-fw fa-check"></i>
             <?php echo $query['s_id']; ?>
             
             </td>

             <td><i class="fa fa-fw fa-check"></i>
             <?php echo $query['fname'].' '.$query['fname2'].' '.$query['mname'].' '.$query['lname']; ?>
             
             </td>
 
               <td>
             <?php echo $query['course']; ?>-<?php echo $query['section_name']; ?> <?php echo $query['year_name']; ?>
             &nbsp; 
                <span class="badge">Enrolled!</span>
             </td>
             <td>
            <a href="view.php?search_name=<?php echo $query['s_id']; ?>" class="btn btn-info btn-xs"><i class="fa fa-fw fa-user"></i></span>Profile</a>
            </td>
            <td>
            <a href="section_view.php?section_id=<?php echo $query['section_id']; ?>" class="btn btn-warning btn-xs"><i class="fa fa-fw fa-table"></i></span>Section</a>
             </td>


             </tr>

<?php } ?>
             </table>

             </div>
             </div>