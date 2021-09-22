<?php ini_set('display_errors','0'); ?>
<script type="text/javascript" src="../../js/Admin/addProject.js"></script>
<!-- <script type="text/javascript" src="../../js/Admin/controlPanel.js"></script>
 -->
<link rel="stylesheet" type="text/css" href="../../css/admin/addProject.css">


<script src="../../includes/ckeditors/ckeditor.js"></script>


<div class="container-fluid"> 
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid">
        <h2 class="mt-2">إضافة مشروع</h2>
        <div class="card col-sm-3"></div>
          <div class="container">

            <div class="row mt-4">
            <div id="addedmsg" style="display: none;" class="alert alert-success col-xs-12">تمت إضافة المشروع</div>

              <button id="addProjectTasks" class="btn btn-primary">إضافة مراحل سير العمل</button>

            <div id="emptymsg" style="display: none;" class="alert alert-warning col-xs-12">الرجاء ملئ جميع الخانات</div>

            </div>


            <div id="projectDiv" class="mt-4 well col-xs-12">

              <form method="post" enctype="multipart/form-data" action="../../php/Admin/addProject.php" id="addProjectForm" name="addProjectForm">

                <div class="form-group">
                  <label class="label"> إسم المشروع</label>
                  <input type="text" name="projectTitle" id="projectTitle" class="form-control col-sm-6">
                </div>

                <div class="form-group">
                  <label class="label">نبذة عن المشروع</label>
                  <input type="text" name="projectInfo" id="projectInfo" class="form-control col-sm-6">
                </div>

                <div class="form-group">
                  <label>نموذج العمل</label>
                  <input type="file" name="workModel" class="form-control col-sm-6">
                </div>


                <div class="form-group">
                  <label>المتطلبات</label>
                  <textarea type="text" class="form-control col-sm-4" id="projectRequirments" name="projectRequirments"></textarea>
                  <script> CKEDITOR.replace('projectRequirments');</script>
                </div>
                <br>

                <div class="form-group">
                  <label>وثيقة التفاهم</label>
                  <input type="file" name="agreementAtach" class="form-control col-sm-6">
                </div>

                <div class="form-group">
                  <label>تحليل تجربة المستخدم و عمليات النظام</label>
                  <input type="file" name="userExp" class="form-control col-sm-6">
                </div>

                <div class="form-group">
                  <label>الملحق التقني</label>
                  <input type="file" name="technicalAttach" class="form-control col-sm-6">
                </div>

                <div class="form-group">
                  <label>سياسة الخصوصية</label>
                  <input type="file" name="privacyPolicy" class="form-control col-sm-6">
                </div>
                <br>

                <div class="form-group">
                  <label>مراحل العمل</label>
                  <textarea type="text" class="form-control col-sm-4" id="workPhase" name="workPhase"></textarea>
                  <script> CKEDITOR.replace('workPhase');</script>
                </div>
                <br>

                <div class="form-group">
                  <label>تاريخ تسليم و اختبار النسخة الأولية</label>
                  <input type="date" id="prototypeDelivery" name="prototypeDelivery" class="form-control col-sm-4">
                </div>
                <br>

                <div class="form-group">
                  <label>تاريخ تسليم و اختبارالنسخة النهائية</label>
                  <input type="date" id="finalVersionDelivery" name="finalVersionDelivery" class="form-control col-sm-4">
                </div>
                <br>

                <div class="form-group mt-2">
                  <button class="btn btn-primary btn-block" type="submit" id="addProjectBTN">إضـــافــة</button>
                  <button class="btn btn-danger btn-block">إلغـــاء</button>
                </div>

              </form>
            </div>

          </div>
      </div>         
    </main>
  </div>
</div>