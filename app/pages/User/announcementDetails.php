<?php ini_set('display_errors','0'); ?>
<?php include "../../php//session_vars.php"; ?>
<?php include "../../php/Admin/getAnnouncementDetails.php"; ?>

<script type="text/javascript" src="../../js/Admin/announcementDetails.js"></script>
<script src="../../includes/ckeditors/ckeditor.js"></script>

<div class="container-fluid"> 
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid">
        <div class="container">
        <h2 class="mt-4"><?= $announcementInfo['announcement_subject']; ?></h2>
        <div class="card col-sm-12"></div>
        <br>

          <div class="form-group">
            <p><?= $announcementInfo['announcement_details']; ?></p>
          </div>

          <br>

          <div class="form-group">
            <h3>من قسم</h3>
            <h4><?= $announcementInfo['ar_department']; ?></h4>
          </div>

        <br>
          <button class="btn btn-warning float-right backToAnnouncementList">عودة الى قائمة الإجتماعات</button>        
        <br>
        <br>
        </div>
        </div>
      </div>         
    </main>
  </div>
</div>