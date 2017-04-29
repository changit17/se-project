 
                   <tr>
                  <td>
                  <input type="hidden" value="<?php echo $s_id=$query['s_id'];?>" name="s_id">
                  <?php echo $query['s_id']; ?></td>
                  <td><?php echo $query['fname'].' '.$query['fname2'].' '.$query['mname'].' '.$query['lname']; ?></td>
                  <td>
                  <input type="hidden" value="<?php echo $d_id=$query['d_id'];?>" name="d_id">
                  <?php echo $query['department']; ?></td>
                  <td>
                  <input type="hidden" value="<?php echo $c_id=$query['c_id'];?>" name="c_id">
                  <?php echo $query['course']; ?></td>
                  <td>   <button type="submit" class="btn btn-info btn-xs" name ="submit_section_taken" disabled>Add</button>   </td>
                    
