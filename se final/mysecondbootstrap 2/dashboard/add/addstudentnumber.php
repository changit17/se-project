



<?php
 /* course */

////////////////////////////////
    if(isset($_POST['submit_Stu'])){
        $s_id1=$_POST['s_id'];
        $s_id=preg_replace("/[^a-zA-Z0-9]+/", "", $s_id1);  

        
          $insert = "INSERT INTO student_number_tbl (id, s_id) VALUES (NULL, '$s_id');";


        
        if(mysql_query($insert)){
?>
         <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Successfully Added! :)</strong> 
                        </div>
                    </div>
                </div>
                <?php 
        }
        else{ ?>
         <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Already Existed!</strong> 
                        </div>
                    </div>
                </div>
                <?php 
            

    }} ?>


