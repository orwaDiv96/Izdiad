$(document).ready(function() {
$('.js-example-basic-multiple').select2();

});

$(document).ready( function () {
  $('#addReportForm').submit(function(){
    return false;
  });
});

$(document).ready(function() {		 

$('#addReportBTN').click(function(){

 var formAction = $('#addReportForm').attr('action');

if (($('.form-control').val() != '')) {

  	$("html,body").animate({scrollTop:0},"slow");
    $('#addedmsg').fadeIn(1000);
    $('#addedmsg').delay(3000).fadeOut(1000); 

	var report_title = $('#report_title').val();
	var reportee = $('#reportee').val();
	var report_details = CKEDITOR.instances['report_details'].getData();

// alert(formAction);
// alert(report_title);
// alert(report_details);

	$.ajax({
	    url: formAction,
	    type: "post",
	    data:{ 
	      report_title:report_title,
	      reportee:reportee,
	      report_details:report_details
	    }
	});

// setTimeout(function(){ 
//    audio.play();
// }, 2000);


$('.form-control').val('');
$(".js-example-responsive").select2("val", "none");
CKEDITOR.instances['report_details'].setData('');

}else{
      $("html,body").animate({scrollTop:0},"fast");
      $('#emptymsg').show(300);
      $('#emptymsg').delay(3000).fadeOut(1000);
}

});
});