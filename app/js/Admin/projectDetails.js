$(document).ready( function () {
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

  $('.backToMainPage').click(function(){
      $('#welcomeDIV').show(); 
      $('#welcomeDIV').load('home.php');
  });

});