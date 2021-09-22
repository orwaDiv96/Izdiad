$(document).ready( function () {

$('#addTaskCommentForm').submit(function(){
  return false;
});


  $('.startTask').click(function(){
    var taskID = $(this).attr('data-taskID');

    $.ajax({
        url: '../../php/User/taskSeen.php',
        type: "post",
        data:{ 
          taskID:taskID,
        }
    });

    $.ajax({
        url: '../../php/User/startTask.php',
        type: "post",
        data:{ 
          taskID:taskID,
        }
    });


      $('#assetsDivInfo').hide();
      $('#welcomeDIV').show(); 
      $('#welcomeDIV').load('totalTasks.php');
  });

///////////////////////////////////////////////////

  $('.doneTask').click(function(){
    var taskID = $(this).attr('data-taskID');

    $.ajax({
        url: '../../php/User/doneTask.php',
        type: "post",
        data:{ 
          taskID:taskID,
        }
    });
      $('#welcomeDIV').show(); 
      $('#welcomeDIV').load('totalTasks.php');
  });

///////////////////////////////////////////////////

  $('.backToTaskList').click(function(){
      $('#welcomeDIV').show(); 
      $('#welcomeDIV').load('totalTasks.php');
  });

});




$('#addTaskCommentBTN').click(function(){


var taskComment = CKEDITOR.instances['taskComment'].getData();
var taskID = $(this).attr('data-taskID');

var formAction = $('#addTaskCommentForm').attr('action');

if ((taskComment != '')) {

  $.ajax({
      url: formAction,
      type: "post",
      data:{ 
        taskID:taskID,
        taskComment:taskComment,
      }
  });

  CKEDITOR.instances['taskComment'].setData('');

  }else{
    alert('يجب عليك كتابة تعليق');
  }

});



setInterval(function(){ 
 var t_id = $('#task_id').attr('data-taskID');
 $('#taskComments').load('../../php/User/getAllTaskComments.php?t_id=' +t_id);
},5000);