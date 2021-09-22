$(document).ready( function () {

  $('.meeting-link').click(function(){
    var meetingID = $(this).attr('data-meetingID');
    // alert(meetingID);
      $('#welcomeDIV').show(); 
      $('#welcomeDIV').load('meetingDetails.php?m_id=' +meetingID);
  });
 
 });