<div id="totalMeetingsDiv">
<?php ini_set('display_errors','0'); ?>
<?php include "../../php/Admin/getUserMeetings.php"; ?>

<script type="text/javascript" src="../../js/Admin/totalMeetings.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/Admin/totalMeetings.css">

<div class="container-fluid" > 
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid">
        <h2 class="mt-2">الإجتماعات</h2>
        <div class="card col-sm-12"></div>
        <br>
            <div class="alert alert-secondary" id="penddingTasksDiv">

              <h3 class="new-meetings-text">الإجتماعات القادمة</h3>
              <table>
                <?php 

                
                if ($meeting_count > 0) {
                  # code...
                
                while ($row = mysqli_fetch_array($excecuteMeetings)){ ?>
                  <tr>
                    <td>
                      <li><span class="meeting-link" data-meetingID="<?= $row['uniq_id']; ?>"><?= $row['meeting_subject']; ?> <small class="well float-left" dir="rtl"><?= $row['meeting_time']; ?></small></span></li>
                    </td>
                  </tr>
               <?php }
              
                }else{
                  echo "<li>لا يوجد اجتماعات جديدة</li>";
                } ?>
              
              </table>  
            </div>

<!-- ///////////////////////////////////////////////////////////////////////// -->

            <div class="alert alert-warning">
              <h3 class="done-meeting-text">الإجتاماعت الماضية</h3>
              <table>
                <?php 
                if ($done_meetings_count > 0) {
                  # code...
                
                while ($row2 = mysqli_fetch_array($excecute_done_meetings)){ ?> 
                  <tr>
                    <td>
                      <li><span class="meeting-link" data-meetingID="<?= $row2['uniq_id']; ?>"><?= $row2['meeting_subject']; ?></span> | <small class="well"><?= $row2['meeting_time']; ?></small></li>
                    </td>
                  </tr>
                <?php }
                }else{
                  echo "<li>لا يوجد  اجتماعات مرئية</li>";
                } ?>
              
              </table>  
            </div>
 
        
          </div>
      </div>         
    </main>
  </div>
</div>
</div>