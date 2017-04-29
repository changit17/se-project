
<div class="panel panel-default">
                            <div class="panel-heading">
                                <span><h3 class="panel-title">Your Subject</h3></span>
                            </div>
      <div class="panel-body">
<div class="table-responsive">
<label><caption>Your List </caption></label>
<table class="table table-bordered table-hover table-striped">
<thead>
<th>Subject
</th>
<th align="">        <form action="delete_all/delete_all_subject.php" method="POST">
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <button type="submit" class="btn  btn-danger btn-xs">
                    <i class="fa fa-trash">&nbsp;</i> Drop all</button>
            </form>    </th>

</thead>


<tr>
            <?php
            $get=mysql_query(" SELECT * FROM subtaken_tbl INNER JOIN subject_tbl USING(su_id) INNER JOIN student_tbl USING(s_id) where s_id = '$id' ");
            $s = mysql_num_rows($get);
            if($s==0){
                echo '';
                    echo "        
                        <td colspan='2'><div class='alert alert-info alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            <i class='fa fa-info-circle'></i>  <strong>List of Your Subjects Here</strong> 
                </div></td>";
            }
                while($query = mysql_fetch_array($get)){ ?>



                <?php
                    echo '<tr>';
                        echo '<td><i class="fa fa-fw fa-check"></i> '.$query['name'].'</td>';
                        echo '<td align="center"><a href="del/sub_taken_del.php?sub_id='.$query['sub_id'].'&id='.$query['s_id'].'" class="btn  btn-danger btn-xs"><i class="fa fa-fw fa-close"></i>Drop</a></td>';       
                    echo '</tr>'; ?>


                    <?php
                }   
                
            ?>


<?php
    
    ////////////////////////////////
    if(isset($_POST['submit_subjecttaken'])){
        $subject=$_POST['subject'];     
        
        $insert = "INSERT INTO subtaken_tbl(su_id, s_id, ref_id) VALUES ('$subject', '$id', '$subject$id')";

        
        if(mysql_query($insert)){ ?>
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Successfully Added!</strong> 
                        </div>
                    </div>
                </div>
                <?php
            echo "<script>window.open('view.php?search_name=$id','_self')</script>";
          
             
        }
        else{            ?>
                       <td colspan="2"> <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Already Added</strong> 
                        </div></td>
                <?php
        }
            

    }


?>
          
            </td>
    </table>
    </div>
    </div>
    </div>