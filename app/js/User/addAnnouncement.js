$(document).ready( function () {

$('#addAnnouncementForm').submit(function(){
	return false;
});

$('.js-example-basic-multiple').select2();

});


// //////////////////////////////////////////////////////

$('#AddAnnouncementBTN').click(function(){

var formAction = $('#addAnnouncementForm').attr('action');

// alert('Clicked !');
if (($('.form-control').val() != '')) {

	var announcementSubject = $('#announcementSubject').val();
	var announcementDetails = CKEDITOR.instances['announcementDetails'].getData();

	$.ajax({
	    url: formAction,
	    type: "post",
	    data:{ 
	      announcementSubject:announcementSubject,
	      announcementDetails:announcementDetails
	    },success: function(response){
            if (response == 'Done') {
		  	$("html,body").animate({scrollTop:0},"slow");
		    $('#addedmsg').fadeIn(1000);
		    $('#addedmsg').delay(3000).fadeOut(1000); 
          }
        }
	});

	$('#meetingSubject').val('');
	$('#meetingDate').val('');
	$('#responsibleEmp').val('');
	// $(".js-example-responsive").select2("val", "");
	$(".js-example-responsive").val([]).change();

	CKEDITOR.instances['meetingDetails'].setData('');

	}else{
	      $("html,body").animate({scrollTop:0},"fast");
	      $('#emptymsg').show(300);
	      $('#emptymsg').delay(3000).fadeOut(1000);
	}

});
