<div id="projectTotalTasksDiv">
<?php ini_set('display_errors','0'); ?>
<?php include "../../php/Admin/getUserProjectTasks.php"; ?>

<script type="text/javascript" src="../../js/Admin/projectTotalTasks.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/Admin/projectTotalTasks.css">

<div class="container-fluid" > 
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid">
        <h2 class="mt-2">مهام ضمن المشاريع</h2>
        <div class="card col-sm-12"></div>
        <br>
            <div class="alert alert-secondary" id="penddingTasksDiv">

              <h3 class="new-task-text">المهام الجديدة</h3>
              <table>
                <?php 

                
                if ($project_task_count > 0) {
                  # code...
                
                while ($row = mysqli_fetch_array($project_task_excecute)){ ?>
                  <tr>
                    <td>
                      <li><span class="task-link" data-taskID="<?= $row['task_id']; ?>"><?= $row['project_name']; ?> <b>|</b> <?= $row['unit']; ?> <b>|</b> <small class="well"><?= $row['add_date']; ?></small></span></li>
                    </td>
                    <td>
                      <span class="float-left seen"><input type="checkbox" name="takeTask" data-taskID="<?= $row['task_id']; ?>" class="takeTask"> تمت الرؤية</span>
                    </td>
                  </tr>
               <?php }
              
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
                if ($project_seen_task_count > 0) {
                  # code...
                
                while ($row2 = mysqli_fetch_array($excecute_seen_project_task)){ ?> 
                  <tr>
                    <td>
                      <li><span class="task-link" data-taskID="<?= $row2['task_id']; ?>"><?= $row2['project_name']; ?> <b>|</b> <?= $row2['unit']; ?></span> <b>|</b> <small class="well"><?= $row2['see_date']; ?></small></li>
                    </td>
                    <td>
                      <span class="float-left start"><input type="checkbox" name="startTask" data-taskID="<?= $row2['task_id']; ?>" class="startTask"> بدء المهمة </span>
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
                if ($project_going_task_count > 0) {
                  # code...
                
                while ($row3 = mysqli_fetch_array($excecute_project_going_task)){ ?> 
                  <tr>
                    <td>
                      <li><span class="task-link" data-taskID="<?= $row3['task_id']; ?>"><?= $row3['project_name']; ?> <b>|</b> <?= $row3['unit']; ?></span> <b>|</b> <small class="well"><?= $row3['start_date']; ?></small></li>
                    </td>
                    <td>
                      <span class="float-left going"><input type="checkbox" name="doneTask" data-taskID="<?= $row3['task_id']; ?>" class="doneTask"> تم إكمال المهمة </span>
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
                if ($project_done_task_count > 0) {
                  # code...
                
                while ($row4 = mysqli_fetch_array($excecute_done_project_task)){ ?> 
                  <tr>
                    <td>
                      <li><span class="task-link" data-taskID="<?= $row4['task_id']; ?>"><?= $row4['project_name']; ?> <b>|</b> <?= $row4['unit']; ?></span> <b>|</b> <small class="well"><?= $row4['finish_date']; ?></small></li>
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