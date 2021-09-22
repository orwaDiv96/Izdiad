<?php ini_set('display_errors','0'); ?>
<?php include "../../php//session_vars.php"; ?>
<?php include "../../php/Admin/getMeetingDetails.php"; ?>

<script type="text/javascript" src="../../js/Admin/meetingDetails.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/Admin/meetingDetails.css">
<script src="../../includes/ckeditors/ckeditor.js"></script>

<span data-taskID="<?= $meeting_id; ?>" id="meeting_id"></span>
<div class="container-fluid"> 
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid">
        <div class="container">
        <h2 class="mt-4"><?= $meetingInfo['meeting_subject']; ?></h2>
        <div class="card col-sm-12"></div>
        <br>

          <div class="form-group">
            <h4>نقاط الإجتماع</h4>
            <p><?= $meetingInfo['meeting_details']; ?></p>
          </div>

          <div class="form-group">
            <h4>صاحب الإجتماع</h4>
            <p class="mr-2"><b><li><?= $meetingInfo['invitor_name']; ?></li></b></p>
          </div>

          <div class="form-group ">
            <h4>أعضاء الإجتماع</h4>
            <?php 
              $responsibleID = $meetingInfo['meeting_participants'];
              $responsibleEmpID = explode(' ', $responsibleID);
              foreach ($responsibleEmpID as $user) {

              $getUsersQuery = "SELECT * FROM users WHERE id = '$user'";
              $executeGetUser = mysqli_query($con,$getUsersQuery);
              $UserInfo = mysqli_fetch_array($executeGetUser);
              echo '<li class="mr-2">'.$UserInfo['ar_fullname'].'</li>';
              }

            ?>
          </div>

            <br>

        <h4>زمن و تاريخ الإجتماع</h4>
          <div class="form-group">
            <p class="mr-2"><b><?= $meetingInfo['meeting_time']; ?></b></p>
          </div>
          <br>


        <div id="CommentsDiv" class="form-group">
          <h4>مخرجات الإجتماع</h4>
          <?php if ($meetingInfo['meet_outcome'] == '') { ?>
              لا توجد مخرجات
          <?php }else{ ?>
            <?= $meetingInfo['meet_outcome']; ?>
          <?php } ?>
        </div>
        <br>

        <?php if ($meetingInfo['meet_outcome'] == '') { ?>

        <div id="addMeetingOutcomeDiv" class="well col-sm-8">
          <h4>تدوين المخرجات</h4>
          <form action="../../php/Admin/addMeetingOutcome.php" id="addMeetingOutcomeForm" method="post">
            
            <div id="meetingOutcomeDiv" class="form-group">
              <textarea class="form-control col-sm-4" id="meetingOutcome" name="meetingOutcome"></textarea>
              <script> CKEDITOR.replace('meetingOutcome');</script>
            </div>

            <button class="btn  btn-success col-sm-4" id="addMeetingOutcomeBTN" data-meetingID="<?= $meeting_id; ?>">تعليق</button>
          </form>          
        </div>
      <?php } ?>

        <br>
          <button class="btn btn-warning float-right backToTaskList">عودة الى قائمة الإجتماعات</button>        
        <br>
        <br>
        </div>
        </div>
      </div>         
    </main>
  </div>
</div>