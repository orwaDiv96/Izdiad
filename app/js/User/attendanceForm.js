
$(document).ready( function () {
  $('#attendanceForm').submit(function(){
    return false;
  });
});

$(document).ready( function () {
////////////////////////////////////////////////////////////
$('#fromOffice').click(function(){
  $('#fromOfficeDiv').show();
  $('#fromHomeDiv').hide();
  $('#noAttendanceDiv').hide();
});


$('#fromHome').click(function(){
  $('#fromOfficeDiv').hide();
  $('#fromHomeDiv').show();
  $('#noAttendanceDiv').hide();
});


$('#noAttendance').click(function(){
  $('#fromOfficeDiv').hide();
  $('#fromHomeDiv').hide();
  $('#noAttendanceDiv').show();
});

////////////////////////////////////////////////////////////
//Submit Attendance Info to DB
$('.submitAttendance').click(function(){
  var choice = $('input[name="attendance_type"]:checked').val();
  // alert(choice);
  // alert('Redirect');
  
  $.post(
    $('#attendanceForm').attr('action'),
    $('#attendanceForm').serializeArray());

  if (choice == 'Absence') {
    $('.absenceDiv').fadeIn(300);
  }else{
    $('.msgSign').fadeIn(300);
  }
  
  $('#attendanceForm').hide();

setTimeout(function(){ 
location.reload();
  // $('#welcomeDIV').hide();
  // $('#welcomeDIV').show();
  // $('#welcomeDIV').load('home.php');
}, 2000);


  });

});