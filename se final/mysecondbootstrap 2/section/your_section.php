
<div class="panel panel-default">
                            <div class="panel-heading">
                                <span><h3 class="panel-title">Status</h3></span>
                            </div>
      <div class="panel-body">
<div class="table-responsive">
<table class="table table-bordered table-hover table-striped">
<?php $get=mysql_query("SELECT * FROM sectiontaken_tbl
            INNER JOIN department_tbl USING(d_id) 
            INNER JOIN course_tbl USING(c_id)
            INNER JOIN section_tbl USING(section_id)
            INNER JOIN semester_tbl USING(sem_id)
            INNER JOIN year_tbl USING(year_id)
            INNER JOIN student_tbl USING(s_id) WHERE s_id=$id  "); 
             $s = mysql_num_rows($get);
            if($s==0){ ?>


<?php $get=mysql_query("SELECT * FROM sectiontaken_tbl
            INNER JOIN department_tbl USING(d_id) 
            INNER JOIN course_tbl USING(c_id)
            INNER JOIN section_tbl USING(section_id)
            INNER JOIN student_tbl USING(s_id) WHERE s_id=$id  "); 
             $s = mysql_num_rows($get);
          }  if($s==0){ ?>



                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>You're not Enrolled! :( </strong> 
                        </div>
                </div>

    <?php include 'section/suggest_students.php'; ?>
              <?php 
            }else{?>
                                    <div class="col-lg-12">
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>You're Enrolled! :)</strong> 
                        </div>
                    </div>
                </div>
                <thead>
<th>Student #</th>
<th>Name</th>
<th>Section</th>
<th colspan="2px">Option</th>
</thead>
            <?php } while($query = mysql_fetch_array($get)){
          
             ?>
             <tr>
             <td>
             <?php echo $query['s_id']; ?>
             </td>
             <td>
             <?php echo $query['fname'].' '.$query['fname2'].' '.$query['mname'].' '.$query['lname']; ?>
             </td>
               <td>
             <?php echo $query['course'].' - '.$query['section_name']. ' '.$query['year_name'];  ?> <span class="badge">Enrolled!</span>
             </td>

  <td>
            <a href="section_view.php?section_id=<?php echo $query['section_id']; ?>" class="btn btn-warning btn-xs"><i class="fa fa-fw fa-table"></i></span>View Your Section</a>
             </td>


    <?php include 'section/section_student_list.php'; ?>


</tr>
           </table>

        </div>
        </div>

</div><br>

               <?php include 'view/subject_taken_select_add.php'; ?>
     <?php include 'view/subject_taken_list.php'; ?>

<?php } ?>