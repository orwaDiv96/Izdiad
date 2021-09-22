<?php include "../../php//session_vars.php"; ?>
<?php include "../../php/User/getTaskDetails.php"; ?>

<script type="text/javascript" src="../../js/User/taskDetails.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/User/taskDetails.css">
<script src="../../includes/ckeditors/ckeditor.js"></script>

<span data-taskID="<?= $task_id; ?>" id="task_id"></span>
<div class="container-fluid"> 
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid">
        <div class="container">
        <h2 class="mt-4"><?= $taskInfo['taskTitle']; ?></h2>
        <div class="card col-sm-12"></div>
        <br>

          <div class="form-group">
            <h4>أولوية المهمة</h4>
            <?php if ($taskInfo['task_priority'] == 'مستعجلة') { ?>
              <p class="alert alert-danger"><?= $taskInfo['task_priority']; ?></p>
             <?php }else{ ?>
               <p class="alert alert-secondary"><?= $taskInfo['task_priority']; ?></p>
             <?php } ?>
            
          </div>

          <div class="form-group">
            <h4>تفاصيل المهمة: </h4>
            <p><?= $taskInfo['taskDetails']; ?></p>
          </div>

          <div class="form-group">
            <h4>تاريـخ التسليم</h4>
            <p><?= $taskInfo['taskDeadline']; ?></p>
          </div>

            <br>

        <h4>حالة المهمة</h4>
        <?php if (($taskInfo['responsibleEmp_id'] == $user_id) && empty($taskInfo['start_date'])) { ?>

          <div class="form-group">
            <button class="btn btn-primary startTask" data-taskID="<?= $task_id ?>">بدء المهمة</button>
          </div>

        <?php } ?>



        <?php if (($taskInfo['responsibleEmp_id'] == $user_id) && !empty($taskInfo['start_date']) && empty($taskInfo['finish_date'])) { ?>

          <div class="form-group">
            <button class="btn btn-primary doneTask" data-taskID="<?= $task_id ?>">اضغط هنا لإكمال المهمة</button>
          </div>

        <?php } ?>


        <?php if (!empty($taskInfo['finish_date'])) { ?>
          <div class="form-group">
            <div class="alert alert-success"> تم إكمال المهمة</div>
          </div>
        <?php } ?>
        <br>

        <div id="CommentsDiv" class="col-sm-8 well">
          <h4>التعليقات</h4>
          <hr>
          <div id="taskComments"></div>
        </div>
        
        <br>
        
        <div id="addTaskCommentDiv" class="well col-sm-8">
          <h4>إضافة تعليق</h4>
          <form action="../../php/User/addTaskComment.php" id="addTaskCommentForm" method="post">
            
            <div id="TaskCommentDiv" class="form-group">
              <textarea class="form-control col-sm-4" id="taskComment" name="taskComment"></textarea>
              <script> CKEDITOR.replace('taskComment');</script>
            </div>

            <button class="btn  btn-success col-sm-4" id="addTaskCommentBTN" data-taskID="<?= $task_id; ?>">تعليق</button>
          </form>          
        </div>
        <br>
          <button class="btn btn-warning float-right backToTaskList">عودة الى قائمة المهام</button>        
        <br>
        <br>
        </div>
        </div>
      </div>         
    </main>
  </div>
</div>