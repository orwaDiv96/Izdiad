$(document).ready( function () {

  $('.announcement-link').click(function(){
    var announcementID = $(this).attr('data-announcementID');
    //alert(announcementID);
      $('#welcomeDIV').show(); 
      $('#welcomeDIV').load('announcementDetails.php?a_id=' +announcementID);
  });

  $('.viewAnnouncement').click(function(){
    var announcementID = $(this).attr('data-announcementID');
    var type = $('.viewAnnouncement').val();

	$.ajax({
	    url: '../../php/Admin/updateAnnouncementStatus.php',
	    type: "post",
	    data:{ 
	      announcementID:announcementID,
	      type:type
	    }
	});
	$('#totalAnnouncementDiv').load('totalAnnouncements.php');
  });

  $('.hideAnnouncement').click(function(){
    var announcementID = $(this).attr('data-announcementID');
    var type = $('.hideAnnouncement').val();

	$.ajax({
	    url: '../../php/Admin/updateAnnouncementStatus.php',
	    type: "post",
	    data:{ 
	      announcementID:announcementID,
	      type:type
	    }
	});
   $('#totalAnnouncementDiv').load('totalAnnouncements.php');
  });
 
 });