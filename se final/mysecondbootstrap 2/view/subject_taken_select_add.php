
<div class="panel panel-default">
                            <div class="panel-heading">
                                <span><h3 class="panel-title">Add Subject</h3></span>
                            </div>
      <div class="panel-body">

    <form method="post">            
        <div class="form-group">
            <legend><label class='control-label' for="subject">Available Subjects</label></legend>
            <select name='subject' class="form-control">
            <option >------------</option>
            <?php
                $get_course = mysql_query("SELECT * FROM student_tbl where s_id='$id'");
                $course = mysql_fetch_array($get_course);
                $asd = $course['c_id'];
                $get=mysql_query("SELECT * FROM subject_tbl where c_id=$asd");
                while($query = mysql_fetch_array($get)){
                    echo '<option value='.$query['su_id'].'>'.$query['name'].'</option>';
                }
            ?>
            </select>
        </div>
        
    <button type="submit" class="btn btn-success btn-xs" name ="submit_subjecttaken">Add</button>    
    </form>
</div>

</div>
