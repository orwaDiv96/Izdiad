<?php ini_set('display_errors','0'); ?>
<?php include "../../php/Admin/getUsers.php" ?>
<?php include "../../php/Admin/getProjects.php"; ?>
<script type="text/javascript" src="../../js/Admin/addProjectTasks.js"></script>
<!-- <script type="text/javascript" src="../../js/Admin/controlPanel.js"></script>
 -->
<link rel="stylesheet" type="text/css" href="../../css/Admin/addProjectTasks.css">


<script src="../../includes/ckeditors/ckeditor.js"></script>

<div class="container-fluid"> 
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid">
        <h2 class="mt-2">إضافة سير العمل</h2>
        <!-- <div class="card col-sm-6"></div> -->
          <!-- <div class="container"> -->

            <div id="addedmsg" class="alert alert-success mt-4" style="display: none;">تمت إضافة المهمة
              </div>

              <div id="emptymsg" class="alert alert-warning mt-4" style="display: none;"> يرجى تعبئة جميع الفراغات
              </div>


           <div class="col-xs-12">
            <div class="form-group mt-2">
              <label class="label">اختر المشروع</label>
              <select name="project" id="project" class="form-control">
                <option value="none"></option>
                <?php while ($project = mysqli_fetch_array($executeGetProjects)){ ?>
                <option value="<?= $project['uniq_id']; ?>">
                  <?= $project['project_name']; ?>
                </option> 
                <?php } ?>
              </select>
            </div>

            <div class="form-group mt-2" id="ManagementSelectDiv">
              <label class="label">اختر الإدارة</label>
              <select id="ManagementSelect" class="form-control">
                <option value="none"></option>
                <option value="techManagement">الإدارة التقنية</option>
              </select>
            </div>
           </div>

            <div id="technicalWorkFormDiv" class="mt-4 well col-xs-12">
              
              <link href="../../includes/select2/css/select2.min.css" rel="stylesheet" />
              <script src="../../includes/select2/js/select2.min.js"></script>

              <form method="post" enctype="multipart/form-data" action="../../php/Admin/addProjectTask.php" id="addProjectTasksForm" name="addProjectTasksForm">

                <div class="form-group">
                  <label>الوحدة</label>
                  <input type="text" name="unit" id="unit" class="form-control col-sm-6">
                </div>

                <div class="form-group">
                  <label>السمات</label>
                  <textarea class="form-control col-sm-4" id="features" name="features"></textarea>
                  <script> CKEDITOR.replace('features');</script>
                </div>
                <br>

                <div class="form-group">
                  <label>الواجهات</label>
                  <h6 class="text-primary">(الوقت التقريبي بالساعة البرمجية)</h6>
                  <input type="number" id="frontEndTime" name="frontEndTime" class="form-control col-sm-6">
                </div>

                <div class="form-group">
                  <label>النهاية الخلفية</label>
                  <h6 class="text-primary">(الوقت التقريبي بالساعة البرمجية)</h6>
                  <input type="number" id="backEndTime" name="backEndTime" class="form-control col-sm-6">
                </div>

                <div class="form-group">
                  <label>تاريخ البداية</label>
                  <input type="date" id="taskStartDate" name="taskStartDate" class="form-control col-sm-6">
                </div>

                <div class="form-group">
                  <label>تاريخ النهاية</label>
                  <input type="date" id="taskEndDate" name="taskEndDate" class="form-control col-sm-6">
                </div>


                <div class="form-group">
                  <label>المسؤولة عن المهمة</label><br>
                  <select name="responsibleEmp[]" id="responsibleEmp" class="form-control js-example-basic-multiple col-sm-8" multiple="multiple">
                    <option value="none"></option>
                    <?php while ($user = mysqli_fetch_array($executeGetUsers)){ ?>
                    <option value="<?= $user['id']; ?>"><?= $user['ar_fullname']; ?></option> 
                    <?php } ?>
                  </select>                  
                </div>


                <div class="form-group mt-2">
                  <button class="btn btn-primary btn-block" id="addProjectTaskTecnicalBTN">إضـــافــة</button>
                  <button class="btn btn-danger btn-block">إلغـــاء</button>
                </div>

              </form>
            </div>


          <!-- </div> -->
      </div>         
    </main>
  </div>
</div>