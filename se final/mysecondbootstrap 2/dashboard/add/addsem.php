



<?php
 /* course */

////////////////////////////////
    if(isset($_POST['submit_Sem'])){
        $sem1=$_POST['sem_name'];
        $sem=preg_replace("/[^a-zA-Z0-9]+/", "", $sem1);  

        
          $insert = "INSERT INTO semester_tbl (sem_id, sem_name) VALUES (NULL, '$sem Semester');";


        
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


