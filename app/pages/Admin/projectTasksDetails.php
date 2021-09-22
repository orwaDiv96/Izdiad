<?php ini_set('display_errors','0'); ?>
<?php include "../../php//session_vars.php"; ?>
<?php include "../../php/Admin/getProjectTaskDetails.php"; ?>

<script type="text/javascript" src="../../js/Admin/projectTaskDetails.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/Admin/projectTaskDetails.css">
<script src="../../includes/ckeditors/ckeditor.js"></script>

<span data-taskID="<?= $task_id; ?>" id="task_id"></span>
<div class="container-fluid"> 
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid">
        <div class="container">
        <h3 class="mt-4" id="project" data-projectID="<?= $taskInfo['project_id']; ?>">المشروع: <?= $taskInfo['project_name']; ?></h3>
        <h3 class="mt-2">المهمة: <?= $taskInfo['unit']; ?></h3>
        <hr class="col-sm-12">
        <br>




          <div class="form-group ">
            <h4>المسؤولين عن المهمة</h4>
            <?php 
              $responsible_ID = $taskInfo['responsible_emp_id'];
              $responsible_EmpID = explode(' ', $responsible_ID);
              foreach ($responsible_EmpID as $user) {

              $getUsersQuery = "SELECT * FROM users WHERE id = '$user'";
              $executeGetUser = mysqli_query($con,$getUsersQuery);
              $UserInfo = mysqli_fetch_array($executeGetUser);
              echo '<b><li class="mr-2">'.$UserInfo['ar_fullname'].'</li></b>';
              }
            ?>
          </div>
          <br>

          <div class="form-group">
            <h4>السمات</h4>
            <p><?= $taskInfo['features']; ?></p>
          </div>

          <div class="form-group">
            <h4>الواجهات</h4>
            <h6 class="text-primary">(الوقت التقريبي بالساعة البرمجية)</h6>
            <p><?= $taskInfo['front_end_task_duration']; ?> ساعات</p>
          </div>

          <div class="form-group">
            <h4>النهاية الخلفية</h4>
            <h6 class="text-primary">(الوقت التقريبي بالساعة البرمجية)</h6>
            <p><?= $taskInfo['back_end_task_duration']; ?> ساعات</p>
          </div>

          <div class="form-group">
            <h4>تاريخ البداية</h4>
            <p><?= $taskInfo['task_start_date']; ?></p>
          </div>

          <div class="form-group">
            <h4>تاريخ النهاية</h4>
            <p><?= $taskInfo['task_end_date']; ?></p>
          </div>

            <br>

        <h4>حالة المهمة</h4>
        <?php if (($taskInfo['responsible_emp_id'] == $user_id) && empty($taskInfo['start_date'])) { ?>

          <div class="form-group">
            <button class="btn btn-primary startTask" data-taskID="<?= $task_id ?>">بدء المهمة</button>
          </div>

        <?php } ?>



        <?php if (($taskInfo['responsible_emp_id'] == $user_id) && !empty($taskInfo['start_date']) && empty($taskInfo['finish_date'])) { ?>

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
          <div id="projectTaskComments"></div>
        </div>
        <br>
        <br>
        
        <div id="addProjectTaskCommentDiv" class="well col-sm-8">
          <h4>إضافة تعليق</h4>
          <form action="../../php/Admin/addProjectTaskComment.php" id="addProjectTaskCommentForm" method="post">
            
            <div id="projectTaskCommentDiv" class="form-group">
              <textarea class="form-control col-sm-4" id="projectTaskComment" name="projectTaskComment"></textarea>
              <script> CKEDITOR.replace('projectTaskComment');</script>
            </div>

            <button class="btn  btn-success col-sm-4" id="addProjectTaskCommentBTN" data-taskID="<?= $task_id; ?>" data-projectID="<?= $taskInfo['project_id']; ?>">تعليق</button>
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