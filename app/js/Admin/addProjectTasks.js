$(document).ready( function () {

$('#addProjectTasksForm').submit(function(){
	return false;
});

//////////////////////////////////////////////////////////////////
	var selectedProjectId;
	var selectedProjectName;

/////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////
$('#project').change(function(){
	selectedProjectId = $('#project').val();
	selectedProjectName = $("#project :selected").text();
});
/////////////////////////////////////////////////////////////////

if (selectedProjectId != '') {
	$('#ManagementSelectDiv').show();
}
/////////////////////////////////////////////////////////////////////
$('#ManagementSelect').change(function(){
	var selectedVal = $('#ManagementSelect').val();

    if(selectedVal == 'none') {
    	$('#technicalWorkFormDiv').hide();
    }

    if(selectedVal == 'techManagement') {
    	$('#technicalWorkFormDiv').show();
    	// $('.js-example-responsive').select2();
    	$('.js-example-basic-multiple').select2();
    }
});
/////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////
$('#addProjectTaskTecnicalBTN').click(function(){

var formAction = $('#addProjectTasksForm').attr('action');
if (($('.form-control').val() != '')) {

	var unit = $('#unit').val();
	var frontEndTime = $('#frontEndTime').val();
	var backEndTime = $('#backEndTime').val();
	var taskStartDate = $('#taskStartDate').val();
	var taskEndDate = $('#taskEndDate').val();
	var responsibleEmp = $('#responsibleEmp').val();
	// var responsibleEmpName = $('#responsibleEmp').text();
	// alert(responsibleEmpName);
	var features = CKEDITOR.instances['features'].getData();

	$.ajax({
	    url: formAction,
	    type: "post",
	    data:{ 
	      unit:unit,
	      frontEndTime:frontEndTime,
	      backEndTime:backEndTime,
	      taskStartDate:taskStartDate,
	      taskEndDate:taskEndDate,
	      responsibleEmp:responsibleEmp,
	      // responsibleEmpName:responsibleEmpName,
	      features:features,
	      projectId:selectedProjectId,
	      projectName:selectedProjectName
	    },success: function(response){
            if (response == 'Done') {
		  	$("html,body").animate({scrollTop:0},"slow");
		    $('#addedmsg').fadeIn(1000);
		    $('#addedmsg').delay(3000).fadeOut(1000); 
          }
        }
	});

	$('#unit').val('');
	$('#frontEndTime').val('');
	$('#backEndTime').val('');
	$('#taskStartDate').val('');
	$('#taskEndDate').val('');
	$('#responsibleEmp').val('');

	$(".js-example-responsive").select2("val", "none");
	CKEDITOR.instances['features'].setData('');

	}else{
	      $("html,body").animate({scrollTop:0},"slow");
	      $('#emptymsg').show(300);
	      $('#emptymsg').delay(3000).fadeOut(1000);
	}

});

});
