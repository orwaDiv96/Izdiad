$(document).ready( function () {

$('#addProjectBTN').click(function(e) {
e.preventDefault();

    var action = $('#addProjectForm').attr("action");
    var form_Data = $('#addProjectForm').serialize();
    var formData = new FormData();
    formData.append('form', form_Data);

    var projectTitle = $('#projectTitle').val();
    var projectInfo = $('#projectInfo').val();
    var prototypeDelivery = $('#prototypeDelivery').val();
    var finalVersionDelivery = $('#finalVersionDelivery').val();
    
    formData.append('projectTitle', projectTitle);
    formData.append('projectInfo', projectInfo);
    formData.append('prototypeDelivery', prototypeDelivery);
    formData.append('finalVersionDelivery', finalVersionDelivery);

    formData.append('workModel', $('input[type=file]')[0].files[0]);
    formData.append('agreementAtach', $('input[type=file]')[1].files[0]);
    formData.append('userExp', $('input[type=file]')[2].files[0]);
    formData.append('technicalAttach', $('input[type=file]')[3].files[0]);
    formData.append('privacyPolicy', $('input[type=file]')[4].files[0]);

    formData.append('projectRequirments', CKEDITOR.instances['projectRequirments'].getData());
    formData.append('workPhase', CKEDITOR.instances['workPhase'].getData());

    // alert(projectInfo); 

    $.ajax({
        url: action,
        cache: false,
        contentType: false,
        processData: false,
        data: formData,                         
        type: 'post',
        success: function(response){
            if (response == 'Done') {
                $('#projectDiv').hide();
                $("html,body").animate({scrollTop:0},"slow");
                $('#addedmsg').fadeIn(1500);
                $('#addProjectTasks').show(1500);
                $('#addedmsg').delay(4000).fadeOut(1500);

                // $('#welcomeDIV').hide(); 
                // $('#welcomeDIV').show(); 
                // $('#welcomeDIV').delay(8000).load('addProjectTasks.php');
                // alert('Added to DB');
            }
        }
     });
});

$('#addProjectTasks').click(function() {
    $('#welcomeDIV').show(); 
    $('#welcomeDIV').load('addProjectTasks.php');
});

});
