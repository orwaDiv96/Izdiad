$(document).ready( function () {

$('#addMeetingForm').submit(function(){
	return false;
});

$('.js-example-basic-multiple').select2();

});


// //////////////////////////////////////////////////////

$('#addMeetingBTN').click(function(){

var formAction = $('#addMeetingForm').attr('action');

// alert('Clicked !');
if (($('.form-control').val() != '')) {

	var meetingSubject = $('#meetingSubject').val();
	var meetingDate = $('#meetingDate').val().replace('T', ' | ');
	var responsibleEmp = $('#responsibleEmp').val();
	var meetingDetails = CKEDITOR.instances['meetingDetails'].getData();

	$.ajax({
	    url: formAction,
	    type: "post",
	    data:{ 
	      meetingSubject:meetingSubject,
	      meetingDate:meetingDate,
	      responsibleEmp:responsibleEmp,
	      meetingDetails:meetingDetails,
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
