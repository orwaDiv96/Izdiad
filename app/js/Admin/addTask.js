$(document).ready(function() {
 $('.js-example-basic-multiple').select2();
});

$(document).ready( function () {
  $('#addTaskForm').submit(function(){
    return false;
  });
});

$(document).ready(function() {

// audio = new Audio('../../includes/tones/newtask.mp3');
		 

  $('#addTaskBTN').click(function(){

 var formAction = $('#addTaskForm').attr('action');

if (($('.form-control').val() != '')) {

  	$("html,body").animate({scrollTop:0},"slow");
    $('#addedmsg').fadeIn(1000);
    $('#addedmsg').delay(3000).fadeOut(1000); 

	var taskTitle = $('#taskTitle').val();
	var taskDeadline = $('#taskDeadline').val();
	var responsible = $('#responsible').val();
	// var task_priority = $('.priority').val();
	var task_priority = $('input[name="task_priority"]:checked').val();

	var taskDetails = CKEDITOR.instances['taskDetails'].getData();

	$.ajax({
	    url: formAction,
	    type: "post",
	    data:{ 
	      taskTitle:taskTitle,
	      taskDeadline:taskDeadline,
	      responsible:responsible,
	      task_priority:task_priority,
	      taskDetails:taskDetails
	    }
	});

// setTimeout(function(){ 
//    audio.play();
// }, 2000);


$('.form-control').val('');
$(".js-example-responsive").select2("val", "none");
CKEDITOR.instances['taskDetails'].setData('');

}else{
      $("html,body").animate({scrollTop:0},"slow");
      $('#emptymsg').show(300);
      $('#emptymsg').delay(3000).fadeOut(1000);
}

});
});