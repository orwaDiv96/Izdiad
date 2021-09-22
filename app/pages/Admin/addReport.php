<?php ini_set('display_errors','0'); ?>
<?php include "../../php/Admin/getUsers.php" ?>

<script type="text/javascript" src="../../js/Admin/addReport.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/Admin/addReport.css">


<script src="../../includes/ckeditors/ckeditor.js"></script>
<link href="../../includes/select2/css/select2.min.css" rel="stylesheet" />
<script src="../../includes/select2/js/select2.min.js"></script>


<div class="container-fluid"> 
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid">
        <h2 class="mt-2">إضافة تقرير</h2>
        <div class="card col-sm-3"></div>
          <div class="container">

            <div id="reportDiv" class="mt-4 well col-xs-12">
              <div id="addedmsg" class="alert alert-success" style="display: none;">تمت إضافة المهمة
              </div>

              <div id="emptymsg" class="alert alert-warning" style="display: none;"> يرجى تعبئة جميع الفراغات
              </div>

              <form method="post" action="../../php/Admin/addReport.php" id="addReportForm">

                <div class="form-group">
                  <label class="label">عنوان التقرير</label>
                  <input type="text" name="report_title" id="report_title" class="form-control col-sm-6">
                </div>

                <div class="form-group">
                  <label class="label">تفاصيل التقرير</label>
                  <textarea name="report_details" id="report_details" class="form-control report_details"></textarea>
                  <script> CKEDITOR.replace('report_details');</script>
                </div>

                <br>

                <div class="form-group  col-xs-12">
                  <label class="label">إرسال إلى: </label><br>
                  <select name="reportee[]" id="reportee" class="form-control js-example-basic-multiple" multiple="multiple">
                    <option value="none"></option>
                    <?php while ($user = mysqli_fetch_array($executeGetUsers)){ ?>
                    <option value="<?php echo $user['id']; ?>"><?php echo $user['ar_fullname']; ?></option> 
                    <?php } ?>
                  </select>                  
                </div>

                <div class="form-group mt-2">
                  <button class="btn btn-primary btn-block" id="addReportBTN">إضـــافــة</button>
                  <!-- <button class="btn btn-danger btn-block">إلغـــاء</button> -->
                </div>

              </form>
            </div>

          </div>
      </div>         
    </main>
  </div>
</div>