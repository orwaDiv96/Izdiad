
$(document).ready( function () {
  $('#attendanceForm').submit(function(){
    return false;
  });
});

$(document).ready( function () {

// setInterval(function(){
// $('#welcomeDIV').show();    
//   $('#welcomeDIV').load('totalTasks.php');
// },1000);

  $('.task-link').click(function(){
    var taskID = $(this).attr('data-taskID');
    //alert(taskID);
      $('#welcomeDIV').show(); 
      $('#welcomeDIV').load('taskDetails.php?t_id=' +taskID);
  });

/////////////////////////////////////////////////
// Task Staus Changing
  $('.takeTask').click(function(){
    var taskID = $(this).attr('data-taskID');


    $.ajax({
        url: '../../php/User/taskSeen.php',
        type: "post",
        data:{ 
          taskID:taskID,
        }
    });
      $('#welcomeDIV').show(); 
      $('#welcomeDIV').load('totalTasks.php');
  });

///////////////////////////////////////////////////

  $('.startTask').click(function(){
    var taskID = $(this).attr('data-taskID');

    $.ajax({
        url: '../../php/User/startTask.php',
        type: "post",
        data:{ 
          taskID:taskID,
        }
    });
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
});