<?php 
ini_set('display_errors','0');
include "../../php/Admin/getUsers.php" ?>
<script type="text/javascript" src="../../js/Admin/addMeeting.js"></script>
<!-- <script type="text/javascript" src="../../js/Admin/controlPanel.js"></script>
 -->
<link rel="stylesheet" type="text/css" href="../../css/admin/addMeeting.css">


<script src="../../includes/ckeditors/ckeditor.js"></script>

<div class="container-fluid"> 
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid">
        <h2 class="mt-2">عقد إجتماع</h2>
        <!-- <div class="card col-sm-6"></div> -->
          <!-- <div class="container"> -->

            <div id="addedmsg" class="alert alert-success mt-4" style="display: none;">تمت إضافة المهمة
              </div>

              <div id="emptymsg" class="alert alert-warning mt-4" style="display: none;"> يرجى تعبئة جميع الفراغات
              </div>


            <div id="meetingFormDiv" class="mt-4 well col-xs-12">
              
              <link href="../../includes/select2/css/select2.min.css" rel="stylesheet" />
              <script src="../../includes/select2/js/select2.min.js"></script>

              <form method="post" action="../../php/Admin/addMeeting.php" id="addMeetingForm" name="addMeetingForm">

                <div class="form-group">
                  <h4>موضوع  الإجتماع</h4>
                  <input type="text" name="meetingSubject" id="meetingSubject" class="form-control col-sm-6">
                </div>

                <div class="form-group">
                  <h4>نقاط الإجتماع</h4>
                  <textarea class="form-control col-md-4" id="meetingDetails" name="meetingDetails"></textarea>
                  <script> CKEDITOR.replace('meetingDetails');</script>
                </div>
                <br>

                <div class="form-group">
                  <h4>تاريخ و زمن الإجتماع</h4>
                  <input type="datetime-local" id="meetingDate" name="meetingDate" class="form-control col-sm-3">
                </div>


                <div class="form-group">
                  <h4>الحضور</h4>
                  <select name="responsibleEmp[]" id="responsibleEmp" class="form-control js-example-basic-multiple" multiple="multiple">
                    <!-- <option value="none"></option> -->
                    <?php while ($user = mysqli_fetch_array($executeGetUsers)){ ?>
                    <option value="<?= $user['id']; ?>"><?= $user['ar_fullname']; ?></option>
                    <?php } ?>
                  </select>                  
                </div>


                <div class="form-group mt-2">
                  <button class="btn btn-primary btn-block" id="addMeetingBTN">إضـــافــة</button>
                  <!-- <button class="btn btn-danger btn-block">إلغـــاء</button> -->
                </div>
                <br>
                <br>
              </form>
            </div>


          <!-- </div> -->
      </div>         
    </main>
  </div>
</div>