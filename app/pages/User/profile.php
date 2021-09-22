<?php include "../../php//session_vars.php"; ?>
<?php include "../../php/User/getUserInfo.php"; ?>

<script type="text/javascript" src="../../js/User/profile.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/User/profile.css">

<div class="container-fluid"> 
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid">
        <div class="container">
          <h2 class="mt-4">الملف الشخصي</h2>
          <div class="card col-sm-12"></div>
          
          <div class="form-group mt-4">
            <h3>الإسم</h3>
            <li class="mr-2"><span><?= $userInfo['ar_fullname']; ?></span></li>
          </div>

          <div class="form-group mt-4">
            <h3>الوظيفة</h3>
            <li class="mr-2"><span><?= $userInfo['ar_job']; ?></span></li>
          </div>

          <div class="form-group mt-4">
            <h3>البريد الإلكتروني</h3>
            <li class="mr-2"><span><?= $userInfo['email']; ?></span></li>
          </div>

          <div class="form-group mt-4">
            <button class="btn btn-secondary" id="PasswordModalBTN" data-toggle="modal" data-target="#ChangePasswordModal">تغيير كلمة السر</button>  

          <div class="modal fade" id="ChangePasswordModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">


              <form method="post" id="changePasswordForm" name="changePassword" action="../../php/User/changePassword.php">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">تغيير كلمة السر</h5>
                  </div>
                  <div class="modal-body">
                  <div class="alert alert-warning" id="emptymsg"> الرجاء تعبئة الحقول</div>
                  <div id="msgpass"></div>

                    <div class="form-group">
                      <label>كلمة السر الحالية</label>
                      <input type="password" placeholder="ادخل كلمة السر الحالية" id="oldpassword" name="oldpassword" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>كلمة السر الجديدة</label>
                      <input type="password" placeholder="ادخل كلمة السر الجديدة" id="newpassword" name="newpassword" class="form-control">
                    </div>

                  </div>

                  <div class="modal-footer ">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">إلغـاء</button>
                    <button type="button" id="changePasswordBTN" class="btn btn-primary">تغيير كلمة السر</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
                    
          </div>

        </div>
        </div>
      </div>         
    </main>
  </div>
</div>