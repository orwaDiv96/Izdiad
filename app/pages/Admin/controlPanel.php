<?php ini_set('display_errors','0'); ?>
<?php include "../../php/session_vars.php"; ?>
<?php include "../../php/Admin/getUsers.php" ?>
<?php include "../../php/Admin/getDepartmentInfo.php" ?>
<?php include "../../php/Admin/getDepartments.php" ?>
<?php include "../../php/Admin/getDepartmentTasks.php" ?>
<?php include "../../php/Admin/getDepartmentProjectTasks.php" ?>

<script type="text/javascript" src="../../js/Admin/addUser.js"></script>
<script type="text/javascript" src="../../js/Admin/controlPanel.js"></script>
<script type="text/javascript" src="../../js/Charts/Chart.js"></script>
<script type="text/javascript" src="../../js/Charts/Chart.bundle.js"></script>
<script type="text/javascript" src="../../js/Charts/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="../../css/admin/controlPanel.css">

<div class="container-fluid"> 
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid">
        <?php if ($user_role == 'manager') { ?>
        <h2 class="mt-2">القسم</h2>
      <?php } ?> 

      <?php if ($user_role == 'admin') { ?>
        <h2 class="mt-2">المستخدمين</h2>
      <?php } ?> 
        <div class="card col-sm-4"></div>
          <div class="container">
<br>
<?php if ($user_role == 'admin') { ?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUserModal">
 <b>+</b> إضافة مستخدم
</button>
<br>
<br>
<!-- Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">


    <form method="post" id="addUserForm" name="addUser" action="../../php/Admin/addUser.php">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">بيانات المستخدم</h5>
        </div>
        <div class="modal-body">

        <div class="alert alert-danger" style="display: none;" id="emptymsg">بعض الخانات فارغة</div>

        <div class="alert alert-success" style="display: none;" id="addedmsg">تمت إضافة المستخدم !</div>

          <div class="form-group">
            <label>الإسم </label><br>
            <small class="text-primary">باللغة العربية</small>
            <input type="text" id="ar_fullnameText" name="ar_fullname" class="form-control">
          </div>

          <div class="form-group">
            <label>الإسم </label><br>
            <small class="text-primary">باللغة الإنجليزية</small>
            <input type="text" id="en_fullnameText" name="en_fullname" class="form-control">
          </div>

          <div class="form-group">
            <label>الوظيفة</label><br>
            <small class="text-primary">باللغة العربية</small>
            <input type="text" id="ar_jobTitleText" name="ar_job" class="form-control">
          </div>

          <div class="form-group">
            <label>الوظيفة</label><br>
            <small class="text-primary">باللغة الإنجليزية</small>
            <input type="text" id="en_jobTitleText" name="en_job" class="form-control">
          </div>

          <div class="form-group">
            <label>لبريد الإلكتروني</label><br>
            <small class="text-primary">يستخدم لتسجيل الدحول</small>
            <input type="email" id="emailText" name="email" class="form-control">
          </div>

          <div class="form-group">
            <label>الرقم الوظيفي</label><br>
            <input type="text" id="empNumText" name="emp_num" class="form-control">
          </div>

          <div class="form-group">
            <label>رقم الهاتف</label><br>
            <input type="number" id="phoneText" name="phone" class="form-control">
          </div>

          <div class="form-group">
            <label>القسم</label>
            <select name="department" id="departmentText" class="form-control">
              <option value=""></option>
              <?php while ($department = mysqli_fetch_array($executeGetDepartment)){ ?>
                <option value="<?= $department['d_id'] ?>">
                  <?= $department['department'] ?>
                </option>
              <?php } ?>
            </select>
          </div>

          <div class="form-group">
            <label>الصلاحية</label>
            <select name="role" id="roleText" class="form-control">
              <option value="admin">مدير نظــام</option>
              <option value="manager">مدير قسم</option>
              <option value="emp">مـوظـف</option>
            </select>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">إلغـاء</button>
          <button type="button" id="addUserBTN" class="btn btn-primary">إضافة</button>
        </div>
      </div>
    </form>
  </div>
</div>
<?php } ?>

<table class="table table-bordered" id="dataTable" width="80%" cellspacing="0">  <thead>

  <tr>
    <th>الإسم</th>
    <th>القـسم</th>
    <th>الوظيفة</th>
    <th>البريد الإكتروني</th>
    <th>الصلاحيات</th>
    <th>تقرير عن الموظف</th>
  </tr>

</thead>

  <tbody>
    <?php while($row = mysqli_fetch_array($executeGetUsers)){ ?>
      <tr>
      <td> <?= $row['ar_fullname']; ?> </td> 
      <td> <?= $row['ar_department']; ?> </td> 
      <td> <?= $row['ar_job']; ?> </td> 
      <td> <?= $row['email']; ?> </td> 
      <td> <?= $row['role']; ?> </td> 
      <td><button class="btn btn-primary empReport" data-empID="<?= $row['id']; ?>" >عرض التقرير</button></td>
    <?php } ?>
  </tbody>
</table>                                  

<br>
<br>

    <?php if (($user_department == 2) && ($user_role == 'manager')) { 
      include "getTechnicalTasks.php";
    } ?>
    
    <?php if ($user_role == 'manager') { ?>
    <h2>التقارير </h2>
      <?php include "../../includes/Admin/teamOverallPieReport.php"; ?>   
    <?php } ?>



<br>
<br>
          </div>
      </div>         
    </main>
  </div>
</div>