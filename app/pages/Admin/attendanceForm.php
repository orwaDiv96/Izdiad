<script type="text/javascript" src="../../js/User/attendanceForm.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/User/attendanceForm.css">

<div class="container-fluid"> 
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid">
        <h2 class="mt-2">تسجيل الحضور</h2>
        <div class="card col-sm-6"></div>
          <div class="container mt-2">

            <div class="msgSign alert alert-success col-md-12" style="display: none;"> تم تسجيل الحضور !</div>
            <div class="absenceDiv alert alert-primary col-md-12" style="display: none;">تـم إرسـال عذر الغياب !</div>

            <form method="post" id="attendanceForm" name="setAttendance" action="../../php/User/setAttendance.php">
              <table>
                <tr>
                  <td class="formTD"><input type="radio" class="attendanceType" id="fromOffice" name="attendance_type" value="Office"> عمل من المكتب</td>

                  <td class="formTD"><input type="radio" class="attendanceType" id="fromHome" name="attendance_type" value="Home"> عمل من البيت</td>

                  <td class="formTD"><input type="radio" class="attendanceType" id="noAttendance" name="attendance_type" value="Absence"> غياب </td>
                </tr>
              </table>

              <div id="fromOfficeDiv">
                <div class="mt-2">
                  <button class="btn btn-success submitAttendance" id=""> تسجيل الحضور </button>
                </div>
              </div>

              <div id="fromHomeDiv">
                <div class="mt-2">
                  <h4>عذر الغيـاب</h4>
                  <textarea class="form-control textarea-style" placeholder="ما هو عذر الغيـاب ..." name="fromHomeComment"></textarea>
                  <br>
                  <button class="btn btn-primary submitAttendance" id="">تسجيل الحضور</button>
                </div>
              </div>

              <div id="noAttendanceDiv">
                <div class="mt-2">
                  <h4>عذر الغيـاب</h4>
                  <textarea class="form-control textarea-style " placeholder="ما هو عذر الغيـاب ..." name="noAttendanceComment"></textarea>
                  <br>
                  <button class="btn btn-primary submitAttendance" id="">إرسال  العذر</button>
                </div>
              </div>
            </form>
          </div>
      </div>         
    </main>
  </div>
</div>