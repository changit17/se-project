
<div class="panel panel-default">
                            <div class="panel-heading">
                                <span><h3 class="panel-title">Students Enrolled</h3></span>
                            </div>
      <div class="panel-body">
<div class="table-responsive">
<label><caption>List of Students</caption></label>
<table class="table table-bordered table-hover table-striped">
<thead>
<th>Student #</th>
<th>Name</th>
<th>Dept</th>
<th>Course</th>
<th colspan="2px">Option</th>
</thead>


<?php $get=mysql_query("SELECT * FROM sectiontaken_tbl
            INNER JOIN department_tbl USING(d_id) 
            INNER JOIN course_tbl USING(c_id)
            INNER JOIN section_tbl USING(section_id)
            INNER JOIN student_tbl USING(s_id) WHERE section_id=$id ORDER BY s_id  "); 
                while($query = mysql_fetch_array($get)){
             ?>
             <tr>
             <td>
             <?php echo $query['s_id']; ?>
             </td>
             <td>
             <?php echo $query['fname'].' '.$query['fname2'].' '.$query['mname'].' '.$query['lname']; ?>
             </td>
              <td>
             <?php echo $query['department']; ?>

             </td>
               <td>
             <?php echo $query['course'];  ?>
             </td>
<?php
             echo '<td><a href="view.php?search_name='.$query['s_id'].'" class = "btn btn-info btn-xs"><i class="fa fa-fw fa-user"></i>View</a> &nbsp; </td>'; ?>

             <td><a href="del/section_student_del.php?su_id=<?php echo $query['sectionref_id']; ?>&section_id=<?php echo $id; ?>" class = "btn btn-danger btn-xs" ><i class="fa fa-fw fa-close"></i>Drop </a>   </td>

             


<?php } ?>
             </table>
        </div>
</div>

