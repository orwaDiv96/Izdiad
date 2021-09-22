<?php 
ini_set('display_errors','0');
//include "../../php/Admin/getUsers.php" 
?>
<script type="text/javascript" src="../../js/Admin/addAnnouncement.js"></script>
<!-- <script type="text/javascript" src="../../js/Admin/controlPanel.js"></script>
 -->
<link rel="stylesheet" type="text/css" href="../../css/admin/addAnnouncement.css">


<script src="../../includes/ckeditors/ckeditor.js"></script>

<div class="container-fluid"> 
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid">
        <h2 class="mt-2">إضافة اعلان إداري</h2>
        <div class="card col-md-3"></div>
          <!-- <div class="container"> -->

            <div id="addedmsg" class="alert alert-success mt-4" style="display: none;">تمت إضافة المهمة
              </div>

              <div id="emptymsg" class="alert alert-warning mt-4" style="display: none;"> يرجى تعبئة جميع الفراغات
              </div>


            <div id="meetingFormDiv" class="mt-4 well col-md-8">
              
              <link href="../../includes/select2/css/select2.min.css" rel="stylesheet" />
              <script src="../../includes/select2/js/select2.min.js"></script>

              <form method="post" action="../../php/Admin/addAnnouncement.php" id="addAnnouncementForm" name="addAnnouncementForm">

                <div class="form-group">
                  <label class="label">موضوع الإعلان</label>
                  <input type="text" name="announcementSubject" id="announcementSubject" class="form-control col-sm-6">
                </div>

                <div class="form-group">
                  <label class="label">موضوع الإعلان</label>
                  <textarea class="form-control col-md-4" id="announcementDetails" name="announcementDetails"></textarea>
                  <script> CKEDITOR.replace('announcementDetails');</script>
                </div>

                <div class="form-group mt-2">
                  <button class="btn btn-primary btn-block" id="AddAnnouncementBTN">إضـــافــة</button>
                  <!-- <button class="btn btn-danger btn-block">إلغـــاء</button> -->
                </div>
              </form>
            </div>


          <!-- </div> -->
      </div>         
    </main>
  </div>
</div>