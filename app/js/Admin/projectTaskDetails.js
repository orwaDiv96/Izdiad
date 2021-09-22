$(document).ready( function () {

$('#addProjectTaskCommentForm').submit(function(){
  return false;
});

  $('.startTask').click(function(){
    var taskID = $(this).attr('data-taskID');

    $.ajax({
        url: '../../php/Admin/taskProjectSeen.php',
        type: "post",
        data:{ 
          taskID:taskID,
        }
    });

    $.ajax({
        url: '../../php/Admin/startProjectTask.php',
        type: "post",
        data:{ 
          taskID:taskID,
        }
    });


      $('#assetsDivInfo').hide();
      $('#welcomeDIV').show(); 
      $('#welcomeDIV').load('totalProjectTasks.php');
  });

///////////////////////////////////////////////////

  $('.doneTask').click(function(){
    var taskID = $(this).attr('data-taskID');

    $.ajax({
        url: '../../php/Admin/doneProjectTask.php',
        type: "post",
        data:{ 
          taskID:taskID,
        }
    });
      $('#welcomeDIV').show(); 
      $('#welcomeDIV').load('totalProjectTasks.php');
  });

///////////////////////////////////////////////////

  $('.backToTaskList').click(function(){
      $('#welcomeDIV').show(); 
      $('#welcomeDIV').load('totalProjectTasks.php');
  });
///////////////////////////////////////////////////

  $('#project').click(function(){
    var projectID = $(this).attr("data-projectID");
    // alert(projectID);
      $('#welcomeDIV').show();
      $('#welcomeDIV').load('projectDetails.php?pro_id=' +projectID);
  });


///////////////////////////////////////////////////



$('#addProjectTaskCommentBTN').click(function(){


var projectTaskComment = CKEDITOR.instances['projectTaskComment'].getData();
var taskID = $(this).attr('data-taskID');
var projectID = $(this).attr('data-projectID');

var formAction = $('#addProjectTaskCommentForm').attr('action');

if ((projectTaskComment != '')) {


  $.ajax({
      url: formAction,
      type: "post",
      data:{ 
        projectID:projectID,
        taskID:taskID,
        projectTaskComment:projectTaskComment,
      }
  });

  CKEDITOR.instances['projectTaskComment'].setData('');

  }else{
    alert('يجب عليك كتابة تعليق');
  }

});



setInterval(function(){ 
 var t_id = $('#task_id').attr('data-taskID');
 $('#projectTaskComments').load('../../php/Admin/getAllProjectTaskComments.php?t_id=' +t_id);
        
 
},5000);

});