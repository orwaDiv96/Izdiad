<?php include "../../php/User/getUserTasks.php"; ?>
<script type="text/javascript" src="../../js/User/tasks.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/User/tasks.css">

<div class="container-fluid"> 
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid">
        <h2 class="mt-2">المهام</h2>
        <div class="card col-sm-6"></div>
          <div class="container mt-2">
            <div class="row">
              <div class="card task-card"> 
                <div class="card-header btn-primary viewAbstractTasks">
                  <b>مهام خارج المشاريع: </b>
                  <span class="badge"><?php echo $task_count; ?></span>
                </div>
              </div>

      <!--         <div class="card task-card"> 
                <div class="card-header btn-primary">
                  <b>مهام داخل المشاريع: </b>
                  <span class="badge"><?php echo $task_count; //echo $in_project_task_count; ?></span>
                </div>
              </div>  -->  
            </div> 
          </div>
      </div>         
    </main>
  </div>
</div>