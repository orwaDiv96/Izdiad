
$(document).ready( function () {
  $('#attendanceForm').submit(function(){
    return false;
  });
});

$(document).ready( function () {

  $('.task-link').click(function(){
    var taskID = $(this).attr('data-taskID');
    //alert(taskID);
      $('#welcomeDIV').show(); 
      $('#welcomeDIV').load('projectTasksDetails.php?t_id=' +taskID);
  });

/////////////////////////////////////////////////
// Task Staus Changing
  $('.takeTask').click(function(){
    var taskID = $(this).attr('data-taskID');


    $.ajax({
        url: '../../php/Admin/taskProjectSeen.php',
        type: "post",
        data:{ 
          taskID:taskID,
        }
    });
      $('#welcomeDIV').show(); 
      $('#welcomeDIV').load('totalProjectTasks.php');
  });

///////////////////////////////////////////////////

  $('.startTask').click(function(){
    var taskID = $(this).attr('data-taskID');

    $.ajax({
        url: '../../php/Admin/startProjectTask.php',
        type: "post",
        data:{ 
          taskID:taskID,
        }
    });
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
});