$(document).ready(function(){
var audio = new Audio("../../includes/tones/newtask.mp3");

    $("#index").click(function(){
      var user = $(this).attr("data-userRole");
      var attendance = $('#todayAttendanceValue').attr("data-todayAttendance");
      $("html,body").animate({scrollTop:0},"fast");

      if (attendance > 0) {
      $('.Form-links').removeClass('active');
      $(this).addClass('active');
////////////////////////////////////////////////////////////////////////
      $('#welcomeDIV').show(); 

      if (user == 'admin') {
      $('#welcomeDIV').load('adminHome.php');
      }

      if (user == 'manager') {
      $('#welcomeDIV').load('managerHome.php');
      }
      
      }else{
            alert('الرجاء تسجيل الحضور أولا !');
      }
    }); 

////////////////////////////////////////////////////////////////////////
    $("#Home").click(function(){
      var attendance = $('#todayAttendanceValue').attr("data-todayAttendance");
      var user = $(this).attr("data-userRole");
      $("html,body").animate({scrollTop:0},"fast");
      if (attendance > 0) {

      $('.Form-links').removeClass('active');
      $(this).addClass('active');
////////////////////////////////////////////////////////////////////////
      $('#welcomeDIV').show();

      if (user == 'admin') {
      $('#welcomeDIV').load('adminHome.php');
      }

      if (user == 'manager') {
      $('#welcomeDIV').load('managerHome.php');
      }
      }else{
            alert('الرجاء تسجيل الحضور أولا !');
      }

    });



//////////////////////////////////////////////////////////////////
    $("#myProfile").click(function(){
// alert('Clicked !');
      var attendance = $('#todayAttendanceValue').attr("data-todayAttendance");
      $("html,body").animate({scrollTop:0},"fast");
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

    $("#Users").click(function(){

      var attendance = $('#todayAttendanceValue').attr("data-todayAttendance");
      $("html,body").animate({scrollTop:0},"fast");
      if (attendance > 0) {
      
      $('.Form-links').removeClass('active');
      $(this).addClass('active');
////////////////////////////////////////////////////////////////////////
      $('#welcomeDIV').show(); 
      $('#welcomeDIV').load('controlPanel.php');
      }else{
            alert('الرجاء تسجيل الحضور أولا !');
      }
    }); 
    
////////////////////////////////////////////////////////////////////////

    $("#myDepartment").click(function(){

      var attendance = $('#todayAttendanceValue').attr("data-todayAttendance");
      $("html,body").animate({scrollTop:0},"fast");
      if (attendance > 0) {
      
      $('.Form-links').removeClass('active');
      $(this).addClass('active');
////////////////////////////////////////////////////////////////////////
      $('#welcomeDIV').show(); 
      $('#welcomeDIV').load('controlPanel.php');
      }else{
            alert('الرجاء تسجيل الحضور أولا !');
      }
    }); 
    
////////////////////////////////////////////////////////////////////////

    $("#Tasks").click(function(){

      var attendance = $('#todayAttendanceValue').attr("data-todayAttendance");
      $("html,body").animate({scrollTop:0},"fast");
      if (attendance > 0) {

      $('.Form-links').removeClass('active');
      $(this).addClass('active');
////////////////////////////////////////////////////////////////////////
      $('#welcomeDIV').show(); 
      $('#welcomeDIV').load('controlPanel.php');
      }else{
            alert('الرجاء تسجيل الحضور أولا !');
      }

    }); 
////////////////////////////////////////////////////////////////////////

    $("#AddTask").click(function(){

      var attendance = $('#todayAttendanceValue').attr("data-todayAttendance");
      $("html,body").animate({scrollTop:0},"fast");
      if (attendance > 0) {

      $('.Form-links').removeClass('active');
      $(this).addClass('active');
////////////////////////////////////////////////////////////////////////
      $('#welcomeDIV').show(); 
      $('#welcomeDIV').load('addTask.php');
      
      }else{
            alert('الرجاء تسجيل الحضور أولا !');
      }
    }); 
////////////////////////////////////////////////////////////////////////

    $("#AddProject").click(function(){

      var attendance = $('#todayAttendanceValue').attr("data-todayAttendance");
      $("html,body").animate({scrollTop:0},"fast");
      if (attendance > 0) {

      $('.Form-links').removeClass('active');
      $(this).addClass('active');
////////////////////////////////////////////////////////////////////////
      $('#welcomeDIV').show(); 
      $('#welcomeDIV').load('addProject.php');
      
      }else{
            alert('الرجاء تسجيل الحضور أولا !');
      }
    }); 
////////////////////////////////////////////////////////////////////////

    $("#AddWorkFlow").click(function(){

      var attendance = $('#todayAttendanceValue').attr("data-todayAttendance");
      $("html,body").animate({scrollTop:0},"fast");
      if (attendance > 0) {

      $('.Form-links').removeClass('active');
      $(this).addClass('active');
////////////////////////////////////////////////////////////////////////
      $('#welcomeDIV').show(); 
      $('#welcomeDIV').load('addProjectTasks.php');
      
      }else{
            alert('الرجاء تسجيل الحضور أولا !');
      }
    }); 
////////////////////////////////////////////////////////////////////////

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

    $("#AddAnnouncement").click(function(){

      var attendance = $('#todayAttendanceValue').attr("data-todayAttendance");
      $("html,body").animate({scrollTop:0},"fast");
      if (attendance > 0) {

      $('.Form-links').removeClass('active');
      $(this).addClass('active');
////////////////////////////////////////////////////////////////////////
      $('#welcomeDIV').show(); 
      $('#welcomeDIV').load('AddAnnouncement.php');
      
      }else{
            alert('الرجاء تسجيل الحضور أولا !');
      }
    }); 

////////////////////////////////////////////////////////////////////////
    $("#abstractTasks").click(function(){
      // <?php if (($division == 'Production') || ($division == 'ICT')){ ?>
      var attendance = $('#todayAttendanceValue').attr("data-todayAttendance");

      if (attendance > 0) {
      $('.Form-links').removeClass('active');
      $(this).addClass('active');
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

////////////////////////////////////////////////////////////////////////
    $("#AddMeeting").click(function(){
      // <?php if (($division == 'Production') || ($division == 'ICT')){ ?>
      var attendance = $('#todayAttendanceValue').attr("data-todayAttendance");

      if (attendance > 0) {
      $('.Form-links').removeClass('active');
      $(this).addClass('active');
///////////////////////////////////////////////////////////////////////

      $('#welcomeDIV').show();
      $('#welcomeDIV').load('addMeeting.php');
      
      }else{
        alert('الرجاء تسجيل الحضور أولا !');
        // $("noAttendanceMSG")show(300);
      }
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
    $(".department").click(function(){
      // <?php if (($division == 'Production') || ($division == 'ICT')){ ?>
      var attendance = $('#todayAttendanceValue').attr("data-todayAttendance");
      var departmentID = $(this).attr('data-departmentID');
     // var department = departmentID.replace(/ /g, '%20')


      if (attendance > 0) {
      $('.Form-links').removeClass('active');
      $(this).addClass('active');
///////////////////////////////////////////////////////////////////////

      $('#welcomeDIV').show();
      $('#welcomeDIV').load('departmentInfo.php?depart=' +departmentID);
      
      }else{
        alert('الرجاء تسجيل الحضور أولا !');
        // $("noAttendanceMSG")show(300);
      }
    });

////////////////////////////////////////////////////////////////////////
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
////////////////////////////////////////////////////////////////////////

//alert($('#unSeenReports').text());

setInterval(function(){
var old_count = parseInt($('#penddingAnnouncements').text()); 

    $.ajax({
      type : "POST",
      url : "../../php/Admin/getAllAnnouncements.php",
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