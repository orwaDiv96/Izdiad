<?php ini_set('display_errors','0'); ?>
<?php include "../../php/Admin/getUsers.php" ?>
<?php //include "../../includes/Libs/libs.php" ?>
<script type="text/javascript" src="../../js/Admin/addTask.js"></script>
<!-- <script type="text/javascript" src="../../js/Admin/controlPanel.js"></script>
 -->
<link rel="stylesheet" type="text/css" href="../../css/admin/addTask.css">


<script src="../../includes/ckeditors/ckeditor.js"></script>

<link href="../../includes/select2/css/select2.min.css" rel="stylesheet" />
<script src="../../includes/select2/js/select2.min.js"></script>

<div class="container-fluid"> 
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid">
        <h2 class="mt-2">إضافة مهمة</h2>
        <div class="card col-sm-3"></div>
          <div class="container">

            <div id="taskDiv" class="mt-4 well col-xs-12">
              <div id="addedmsg" class="alert alert-success" style="display: none;">تمت إضافة المهمة
              </div>

              <div id="emptymsg" class="alert alert-warning" style="display: none;"> يرجى تعبئة جميع الفراغات
              </div>
              <form method="post" action="../../php/Admin/addTask.php" id="addTaskForm">

                <div class="form-group">
                  <label class="label">عنوان المهمة</label>
                  <input type="text" name="taskTitle" id="taskTitle" class="form-control col-sm-6">
                </div>

                <div class="form-group">
                  <label>وصف المهمة</label>
                  <textarea name="taskDetails" id="taskDetails" class="form-control taskDetails"></textarea>
                  <script> CKEDITOR.replace('taskDetails');</script>
                </div>


                <div class="form-group">
                  <label>تاريخ تسليم المهمة</label>
                  <input type="date" class="form-control col-sm-4" id="taskDeadline" name="taskDeadline">
                </div>
                <br>

                <div class="form-group">
                  <label>أولوية المهمة</label><br>
                 <input type="radio" name="task_priority" value="مستعجلة" class="mr-2 priority"> مستعجلة
                 <input type="radio" name="task_priority" value="غير مستعجلة" class="mr-2 priority"> غير مستعجلة
                </div>
                <br>

                <div class="form-group">
                  <label>المسؤولة عن المهمة</label><br>
                  <select name="responsible" id="responsible" class="form-control js-example-basic-multiple" multiple="multiple">
                    <option value="none"></option>
                    <?php while ($user = mysqli_fetch_array($executeGetUsers)){ ?>
                    <option value="<?php echo $user['id']; ?>"><?php echo $user['ar_fullname']; ?></option> 
                    <?php } ?>
                  </select>                  
                </div>

                <div class="form-group mt-2">
                  <button class="btn btn-primary btn-block" id="addTaskBTN">إضـــافــة</button>
                  <button class="btn btn-danger btn-block">إلغـــاء</button>
                </div>

              </form>
            </div>

          </div>
      </div>         
    </main>
  </div>
</div>