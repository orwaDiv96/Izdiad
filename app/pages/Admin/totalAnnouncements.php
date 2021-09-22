<div id="totalAnnouncementDiv">
<?php ini_set('display_errors','0'); ?>

<?php include "../../php/session_vars.php"; ?>
<?php include "../../php/Admin/getAllAnnouncements.php"; ?>
<?php include "../../php/Admin/getAllUserAnnouncements.php"; ?>

<script type="text/javascript" src="../../js/Admin/totalAnnouncements.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/Admin/totalAnnouncements.css">

<div class="container-fluid" > 
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid">
        <h2 class="mt-2">الإعلانات الإدارية</h2>
        <div class="card col-sm-12"></div>
        <br>

            <div class="alert alert-secondary" id="penddingTasksDiv">
              <h3 class="new-meetings-text">الإعلانات الجديدة</h3>
              <table>
                <?php 
                if ($announcements_count > 0) {
                  # code...
                
                while ($row = mysqli_fetch_array($executeGetAnnouncements)){ ?>
                  <tr>
                    <td>
                      <li><span class="announcement-link" data-announcementID="<?= $row['id']; ?>"><?= $row['announcement_subject']; ?> </span></li>
                    </td>

                    <?php if ($row['added_by'] == $user_id) { ?>
                    <td>
                      <input type="radio" name="status" class="viewAnnouncement" value="view"  checked="checked" data-announcementID="<?= $row['id']; ?>" > إظهار
                    </td>
                    <td>
                      <input type="radio" name="status" class="hideAnnouncement" value="hide" data-announcementID="<?= $row['id']; ?>"> إخفـاء
                    </td>
                  <?php } ?>
                  </tr>
               <?php }
              
                }else{
                  echo "<li>لا يوجد  إعلانات إدارية جديدة</li>";
                } ?>
              
              </table>  
            </div>

<!-- ///////////////////////////////////////////////////////////////////////// -->
 
              <div class="alert alert-danger" id="penddingTasksDiv">
              <h3 class="new-meetings-text">الإعلانات السابقة</h3>

 <?php 
 if ($UserAnnouncements_count > 0) { ?>       

              <table>
                <?php while($row = mysqli_fetch_array($executeGetUserAnnouncements)){ ?>
                  <tr>
                    <td>
                      <li><span class="announcement-link" data-announcementID="<?= $row['id']; ?>"><?= $row['announcement_subject']; ?> </span></li>
                    </td>
                    <td>
                      <input type="radio" name="status" class="viewAnnouncement" value="view"  checked="checked" data-announcementID="<?= $row['id']; ?>" > إظهار
                    </td>
                    <td>
                      <input type="radio" name="status" class="hideAnnouncement" value="hide" checked="checked" data-announcementID="<?= $row['id']; ?>"> إخفـاء
                    </td>
                  </tr>
                <?php } ?>

              </table>  
        <?php }else{
      echo "<li>ليس لديك إعلانات سابقة</li>";
      } ?>
            </div>

              </table>  
            </div>
          </div>
      </div>         
    </main>
  </div>
</div>
</div>