<?php include "../../php//session_vars.php"; ?>
<?php include "../../php/Admin/getProjectDetails.php"; ?>

<script type="text/javascript" src="../../js/Admin/projectDetails.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/Admin/projectDetails.css">

<div class="container-fluid"> 
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid">
        <h3 class="mt-4"><?= $projectInfo['project_name']; ?></h3>
        <hr class="card col-sm-3 float-right">
        <br>
        <br>
        <br>

          <div class="form-group">
            <h4>نبـذة عن المشروع</h4>
            <p><?= $projectInfo['project_info']; ?></p>
          </div>

          <div class="form-group mt-2">
            <h4>نموذج  العمل</h4>
            <p><a href="<?= $projectInfo['work_model']; ?>">نموذج العمل</a></p>
          </div>

          <div class="form-group mt-2">
            <h4>متطلبات المشروع</h4>
            <p><?= $projectInfo['project_requirments']; ?></p>
          </div>

          <div class="form-group mt-2">
            <h4>وثيقة التـفاهم</h4>
            <p><a href="<?= $projectInfo['agreement_attachment']; ?>">وثيقة التـفاهم</a></p>
          </div>

          <div class="form-group mt-2">
            <h4>تحليل تجربة المستخدم و عمليات النظام</h4>
            <p><a href="<?= $projectInfo['user_experiance']; ?>">تحليل تجربة المستخدم و عمليات النظام</a></p>
          </div>

          <div class="form-group mt-2">
            <h4>الملحق التقني</h4>
            <p><a href="<?= $projectInfo['technical_attachment']; ?>">الملحق التقني</a></p>
          </div>

          <div class="form-group mt-2">
            <h4>سياسة الخصوصية</h4>
            <p><a href="<?= $projectInfo['privacy_policy']; ?>">سياسة الخصوصية</a></p>
          </div>

          <div class="form-group mt-2">
            <h4>مراحل العمل</h4>
            <p><?= $projectInfo['work_phases']; ?></p>
          </div>

          <div class="form-group mt-2">
            <h5>تاريخ تسليم و اختبار النسخة الأولية</h5>
            <p><?= $projectInfo['prototype_delivery']; ?></p>
          </div>

          <div class="form-group mt-2">
            <h5>تاريخ تسليم و اختبارالنسخة النهائية</h5>
            <p><?= $projectInfo['final_version_delivery']; ?></p>
          </div>

          
         
          <div class="form-group mt-2 ">
            <h4>سير العمل - الإدارة التقنية</h4>
          <?php if ($technical_taskCount > 0) { ?>
           <table class="table table-bordered well">
             <thead>
               <th>الرقم</th>
               <th>الوحدة</th>
               <th>السمات</th>
               <th>ساعات عمل الواجهات</th>
               <th>ساعات عمل النهاية الخلفية</th>
               <th>تاريخ البداية</th>
               <th>تاريخ النهاية</th>
               <th>المسؤولة عن المهمة</th>
               <th>المعوقات</th>
               <th>الملاحظات</th>
               <th>حالة المهمة</th>
             </thead>
             <tbody>
              <?php
              $count = 1; 

              while ($projectTaskInfo = mysqli_fetch_array($excecuteGetProjectTaskDetails)){ 

                ?>
               <tr>
                 <td><b><?= $count; ?></b></td>
                 <td><?= $projectTaskInfo['unit']; ?></td>
                 <td><?= $projectTaskInfo['features']; ?></td>
                 <td><?= $projectTaskInfo['front_end_task_duration']; ?></td>
                 <td><?= $projectTaskInfo['back_end_task_duration']; ?></td>
                 <td><?= $projectTaskInfo['task_start_date']; ?></td>
                 <td><?= $projectTaskInfo['task_end_date']; ?></td>

                 <td>
                  <?php 
                $responsibleID = $projectTaskInfo['responsible_emp_id'];
                $responsibleEmpID = explode(' ', $responsibleID);
                foreach ($responsibleEmpID as $user) {

                $getUsersQuery = "SELECT * FROM users WHERE id = '$user'";
                $executeGetUser = mysqli_query($con,$getUsersQuery);
                $UserInfo = mysqli_fetch_array($executeGetUser);
                echo '<li><b>'.$UserInfo['ar_fullname'].'</b></li>';
                }

                 ?>
                  </td>

                 <td><?= $projectTaskInfo['obstacles']; ?></td>
                 <td><?= $projectTaskInfo['notes']; ?></td>
                 <td><?= $projectTaskInfo['task_status']; ?></td>
               </tr>
             <?php 
             $count++;
           }
             }else{
              echo "<li class='text-primary'>ليس هناك خطة سير عمل في الإدارة التقنية</li>";
             } ?> 
             </tbody>
           </table>
          </div>    
        <br>
        <br>

      </div>         
    </main>
  </div>
</div>