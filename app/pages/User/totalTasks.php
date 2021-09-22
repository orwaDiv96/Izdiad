<div id="totalTasksDiv">
<?php include "../../php/User/getUserTasks.php"; ?>

<script type="text/javascript" src="../../js/User/totalTasks.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/User/totalTasks.css">

<div class="container-fluid" > 
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid">
        <h2 class="mt-2">مهام خارج المشاريع</h2>
        <div class="card col-sm-12"></div>
        <br>
            <div class="alert alert-secondary" id="penddingTasksDiv">

              <h3 class="new-task-text">المهام الجديدة</h3>
              <table>
                <?php 

                
                if ($task_count > 0) {
                  # code...
                
                while ($row = mysqli_fetch_array($excecute)){ 
                  if ($row['task_priority'] == 'مستعجلة') { ?>
                  <tr class="alert alert-danger">
                    <td>
                      <li><span class="task-link" data-taskID="<?= $row['uniq_id']; ?>"><?= $row['taskTitle']; ?> | <small class="well"><?= $row['add_date']; ?></small></span></li>
                    </td>
                    <td>
                      <li><span class="task-link"><?= $row['task_priority']; ?></span></li>
                    </td>
                    <td>
                      <span class="float-left text-left seen"><input type="checkbox" name="takeTask" data-taskID="<?= $row['uniq_id']; ?>" class="takeTask"> تمت الرؤية</span>
                    </td>
                  </tr>
                  <!-- <hr> -->
                <?php }else{ ?>
                  <tr>
                    <td>
                      <li><span class="task-link" data-taskID="<?= $row['uniq_id']; ?>"><?= $row['taskTitle']; ?> | <small class="well"><?= $row['add_date']; ?></small></span></li>
                    </td>
                    <td>
                      <li><span class="task-link"><?= $row['task_priority']; ?></span></li>
                    </td>
                    <td>
                      <span class="float-left text-left seen"><input type="checkbox" name="takeTask" data-taskID="<?= $row['uniq_id']; ?>" class="takeTask"> تمت الرؤية</span>
                    </td>
                  </tr>
               <?php }
              }
                }else{
                  echo "<li>لا يوجد مهام جديدة</li>";
                } ?>
              
              </table>  
            </div>

<!-- ///////////////////////////////////////////////////////////////////////// -->

            <div class="alert alert-warning">
              <h3 class="new-task-text">المهام المرئية</h3>
              <table>
                <?php 
                if ($seen_task_count > 0) {
                  # code...
                
                while ($row2 = mysqli_fetch_array($excecute_seen_task)){ ?> 
                  <tr>
                    <td>
                      <li><span class="task-link" data-taskID="<?= $row2['uniq_id']; ?>"><?= $row2['taskTitle']; ?></span> | <small class="well"><?= $row2['see_date']; ?></small></li>
                    </td>
                    <td>
                      <span class="float-left text-left start"><input type="checkbox" name="startTask" data-taskID="<?= $row2['uniq_id']; ?>" class="startTask"> بدء المهمة </span>
                    </td>
                  </tr>
                  <!-- <hr> -->
                <?php }
                }else{
                  echo "<li>لا يوجد مهام  مرئية</li>";
                } ?>
              
              </table>  
            </div>

<!-- ///////////////////////////////////////////////////////////////////////// -->

            <div class="alert alert-primary">
              <h3 class="new-task-text">المهام الجارية</h3>
              <table>
                <?php 
                if ($going_task_count > 0) {
                  # code...
                
                while ($row3 = mysqli_fetch_array($excecute_going_task)){ ?> 
                  <tr>
                    <td>
                      <li><span class="task-link" data-taskID="<?= $row3['uniq_id']; ?>"><?= $row3['taskTitle']; ?></span> | <small class="well"><?= $row3['start_date']; ?></small></li>
                    </td>
                    <td>
                      <span class="float-left text-left going"><input type="checkbox" name="doneTask" data-taskID="<?= $row3['uniq_id']; ?>" class="doneTask"> تم إكمال المهمة </span>
                    </td>
                  </tr>
                  
                <?php }
                }else{
                  echo "<li>لا يوجد مهام  جارية</li>";
                } ?>
              
              </table>  
            </div> 

<!-- ///////////////////////////////////////////////////////////////////////// -->

            <div class="alert alert-success">
              <h3 class="new-task-text">المهام المكتملة</h3>
              <table>
                <?php 
                if ($done_task_count > 0) {
                  # code...
                
                while ($row4 = mysqli_fetch_array($excecute_done_task)){ ?> 
                  <tr>
                    <td>
                      <li><span class="task-link" data-taskID="<?= $row4['uniq_id']; ?>"><?= $row4['taskTitle']; ?></span> | <small class="well"><?= $row4['finish_date']; ?></small></li>
                    </td>
                  </tr>
                  
                <?php }
                }else{
                  echo "<li>لا يوجد مهام  مكتملة</li>";
                } ?>
              
              </table>  
            </div> 
        
          </div>
      </div>         
    </main>
  </div>
</div>
</div>