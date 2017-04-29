



<?php
 /* course */

////////////////////////////////
    if(isset($_POST['submit_Year'])){
        $year_name1=$_POST['year_name'];
        $year_name=preg_replace("/[^a-zA-Z0-9]+/", "", $year_name1);  

        
        $insert = "INSERT INTO year_tbl (year_id, year_name) VALUES (NULL, '$year_name Year')";


        
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

      <?php   }
            

    } ?>


