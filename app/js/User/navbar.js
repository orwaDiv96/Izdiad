$(document).ready(function(){
audio = new Audio('../../includes/tones/newtask.mp3');




    $("#index").click(function(){

      var attendance = $('#todayAttendanceValue').attr("data-todayAttendance");
      if (attendance > 0) {
      $('.Form-links').removeClass('active');
      $(this).addClass('active');
////////////////////////////////////////////////////////////////////////
      $('#welcomeDIV').show(); 
      $('#welcomeDIV').load('home.php');
    }else{
      // alert(attendance);
      alert('الرجاء تسجيل الحضور أولا !');
      // $("noAttendanceMSG")show(300);
    }

    }); 


////////////////////////////////////////////////////////////////////////
    $("#Home").click(function(){
      var attendance = $('#todayAttendanceValue').attr("data-todayAttendance");
      if (attendance > 0) {
      $('.Form-links').removeClass('active');
      $(this).addClass('active');
////////////////////////////////////////////////////////////////////////
      $('#welcomeDIV').show(); 
      $('#welcomeDIV').load('home.php');
    }else{
      alert('الرجاء تسجيل الحضور أولا !');
      // $("noAttendanceMSG")show(300);
    }
    }); 


//////////////////////////////////////////////////////////////////
    $("#myProfile").click(function(){
// alert('Clicked !');
      var attendance = $('#todayAttendanceValue').attr("data-todayAttendance");
      if (attendance > 0) {

      $('.Form-links').removeClass('active');
      $(this).addClass('active');
////////////////////////////////////////////////////////////////////////
      $('#welcomeDIV').show();
      $('#welcomeDIV').load('profile.php');
    }else{
      alert('الرجاء تسجيل الحضور أولا !');
      // $("noAttendanceMSG")show(300);
    }

    }); 

////////////////////////////////////////////////////////////////////////
    $("#abstractTasks").click(function(){
      // <?php if (($division == 'Production') || ($division == 'ICT')){ ?>
      var attendance = $('#todayAttendanceValue').attr("data-todayAttendance");
      // $("html,body").animate({scrollTop:0},"fast");
      if (attendance > 0) {
      $('.Form-links').removeClass('active');
      $(this).addClass('active');;

///////////////////////////////////////////////////////////////////////

      $('#welcomeDIV').show();
      $('#welcomeDIV').load('totalTasks.php');
      }else{
        alert('الرجاء تسجيل الحضور أولا !');
        // $("noAttendanceMSG")show(300);
      }
    });


////////////////////////////////////////////////////////////////////////
    $("#projectTasks").click(function(){
      // <?php if (($division == 'Production') || ($division == 'ICT')){ ?>
      var attendance = $('#todayAttendanceValue').attr("data-todayAttendance");

      if (attendance > 0) {
      $('.Form-links').removeClass('active');
      $(this).addClass('active');
///////////////////////////////////////////////////////////////////////

      $('#welcomeDIV').show();
      $('#welcomeDIV').load('totalProjectTasks.php');
      }else{
        alert('الرجاء تسجيل الحضور أولا !');
        // $("noAttendanceMSG")show(300);
      }
    });
////////////////////////////////////////////////////////////////////////
    $("#Meetings").click(function(){
      // <?php if (($division == 'Production') || ($division == 'ICT')){ ?>
      var attendance = $('#todayAttendanceValue').attr("data-todayAttendance");

      if (attendance > 0) {
      $('.Form-links').removeClass('active');
      $(this).addClass('active');
///////////////////////////////////////////////////////////////////////

      $('#welcomeDIV').show();
      $('#welcomeDIV').load('totalMeetings.php');
      }else{
        alert('الرجاء تسجيل الحضور أولا !');
        // $("noAttendanceMSG")show(300);
      }
    });

////////////////////////////////////////////////////////////////////
    $("#AddReport").click(function(){

      var attendance = $('#todayAttendanceValue').attr("data-todayAttendance");
      $("html,body").animate({scrollTop:0},"fast");
      if (attendance > 0) {

      $('.Form-links').removeClass('active');
      $(this).addClass('active');
////////////////////////////////////////////////////////////////////////
      $('#welcomeDIV').show(); 
      $('#welcomeDIV').load('addReport.php');
      
      }else{
            alert('الرجاء تسجيل الحضور أولا !');
      }
    }); 



////////////////////////////////////////////////////////////////////////
    $("#Announcements").click(function(){
      // <?php if (($division == 'Production') || ($division == 'ICT')){ ?>
      var attendance = $('#todayAttendanceValue').attr("data-todayAttendance");

      if (attendance > 0) {
      $('.Form-links').removeClass('active');
      $(this).addClass('active');
///////////////////////////////////////////////////////////////////////

      $('#welcomeDIV').show();
      $('#welcomeDIV').load('totalAnnouncements.php');
      
      }else{
        alert('الرجاء تسجيل الحضور أولا !');
        // $("noAttendanceMSG")show(300);
      }
    });


////////////////////////////////////////////////////////////////////////
    $(".project").click(function(){
      // <?php if (($division == 'Production') || ($division == 'ICT')){ ?>
      var attendance = $('#todayAttendanceValue').attr("data-todayAttendance");

      var projectID = $(this).attr("data-projectID");
      // alert('This is Project is: ' +projectID);

      if (attendance > 0) {
      $('.Form-links').removeClass('active');
      $(this).addClass('active');
///////////////////////////////////////////////////////////////////////

      $('#welcomeDIV').show();
      $('#welcomeDIV').load('projectDetails.php?pro_id=' +projectID);
      }else{
        alert('الرجاء تسجيل الحضور أولا !');
        // $("noAttendanceMSG")show(300);
      }
    });
/////////////////////////////////////////////////////////////////////////
    $("#endShift").click(function(){
      // <?php if (($division == 'Production') || ($division == 'ICT')){ ?>
      var attendance = $('#todayAttendanceValue').attr("data-todayAttendance");

      if (attendance > 0) {
      var answer = window.confirm("هل تريد إنهاء الدوام ؟");
      if (answer) {
    $.post(
      $('#endShiftForm').attr('action'),
      $('#endShiftForm').serializeArray());
          alert("تم إنهاء الدوام 😊");
            $('#welcomeDIV').show();
            $('#welcomeDIV').load('home.php');
      }
      else {
         
      }

///////////////////////////////////////////////////////////////////////
      
      }else{
        alert('الرجاء تسجيل الحضور أولا !');
        // $("noAttendanceMSG")show(300);
      }
        $('#endShiftForm').hide();
    });



////////////////////////////////////////////////////////////////////////
    $("#Reports").click(function(){
      // <?php if (($division == 'Production') || ($division == 'ICT')){ ?>
      var attendance = $('#todayAttendanceValue').attr("data-todayAttendance");

      if (attendance > 0) {
      $('.Form-links').removeClass('active');
      $(this).addClass('active');
///////////////////////////////////////////////////////////////////////

      $('#welcomeDIV').show();
      $('#welcomeDIV').load('totalReports.php');
      
      }else{
        alert('الرجاء تسجيل الحضور أولا !');
        // $("noAttendanceMSG")show(300);
      }
    });
////////////////////////////////////////////////////////////////////////
//alert($('#unSeenReports').text());

setInterval(function(){
var old_count = parseInt($('#penddingAnnouncements').text()); 

    $.ajax({
      type : "POST",
      url : "../../php/User/getAllAnnouncements.php",
      success : function(data){
          $('#penddingAnnouncements').html(data);

          if (data > old_count) {
            audio.play();
          }
             $('#totalAnnouncementDiv').load('totalAnnouncements.php');
        }
    });
},5000);

////////////////////////////////////////////////////////////////////////
//alert($('#unSeenReports').text());

setInterval(function(){
var old_count = parseInt($('#unSeenReports').text()); 
//var tmp = old_count;

    $.ajax({
      type : "POST",
      url : "../../php/Admin/getAllUserReports.php",
      success : function(data){
          $('#unSeenReports').html(data);

          if (data > old_count) {
            audio.play();
          }
          $('#totalReportsDiv').load('totalReports.php');
        }
    });
},5000);
////////////////////////////////////////////////////////////////////////

setInterval(function(){ 

var old_count = parseInt($('#penddingTasks').text()); 

    $.ajax({
      type : "POST",
      url : "../../php/Admin/getUserTasks.php",
      success : function(data){
          $('#penddingTasks').load(data);
          if (data > old_count) {
            audio.play();
          }
          $('#totalTasksDiv').load('totalTasks.php');

        }
    });
},5000);

////////////////////////////////////////////////////////////////////////

setInterval(function(){ 

var old_count = parseInt($('#penddingProjectTasks').text()); 

    $.ajax({
      type : "POST",
      url : "../../php/Admin/getUserProjectTasks.php",
      success : function(data){
        $('#penddingProjectTasks').html(data);

          if (data > old_count) {
            audio.play();
          }
            $('#projectTotalTasksDiv').load('totalProjectTasks.php');

        }
    });
},5000);

////////////////////////////////////////////////////////////////////////

setInterval(function(){ 

var old_count = parseInt($('#penddingMeetings').text()); 

    $.ajax({
      type : "POST",
      url : "../../php/Admin/getUserMeetings.php",
      success : function(data){
        $('#penddingMeetings').html(data);
          if (data > old_count) {
            audio.play();
          }
            $('#totalMeetingsDiv').load('totalMeetings.php');
        }
    });
},5000);
  });