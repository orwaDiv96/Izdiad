$(document).ready( function () {

$('#addMeetingOutcomeForm').submit(function(){
  return false;
});

$('#addMeetingOutcomeBTN').click(function(){
alert('Clicked !');

var meetingOutcome = CKEDITOR.instances['meetingOutcome'].getData();
var meetingID = $(this).attr('data-meetingID');

var formAction = $('#addMeetingOutcomeForm').attr('action');

alert(meetingOutcome);
alert(meetingID);
alert(formAction);

if ((meetingOutcome != '')) {
  
  $.ajax({
      url: formAction,
      type: "post",
      data:{ 
        meetingID:meetingID,
        meetingOutcome:meetingOutcome,
      }
  });

  $('#addMeetingOutcomeDiv').fadeOut(2000);
  CKEDITOR.instances['meetingOutcome'].setData('');

  }else{
    alert('يجب عليك كتابة تعليق');
  }

});
});
  $('.backToTaskList').click(function(){
      $('#welcomeDIV').show(); 
      $('#welcomeDIV').load('totalMeetings.php');
  });