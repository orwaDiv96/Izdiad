
 <div class="form-group mt-2 ">
            <h4>سير العمل للقسم</h4>          
          <?php

          if ($technical_taskCount > 0) { 
          for ($i=0; $i < count($projectIDsArray); $i++) { 

            ?>
           <table class="table table-bordered well">

             <thead>
              <th colspan="12"><h5>المشروع : <?php echo $projectNamesArray[$i]; ?></h5></th>
             </thead>
             <thead>
               
               <th>الرقم</th>
               <th>الوحدة</th>
               <th>السمات</th>
               <th>ساعات عمل الواجهات</th>
               <th>ساعات عمل النهاية الخلفية</th>
               <th>تاريخ البداية</th>
               <th>تاريخ النهاية</th>
               <th>المسؤولة عن المهمة</th>
               <th>المعوقات</th>
               <th>الملاحظات</th>
               <th>حالة المهمة</th>
             </thead>
             <tbody>
              <?php

              $count = 1; 
  $getDepartmentTasksQuery = "SELECT * FROM technical_project_tasks_info WHERE project_id = '$projectIDsArray[$i]'";
  $executeGetDepartmentTasks = mysqli_query($con,$getDepartmentTasksQuery);

              while ($departmentTasksInfo = mysqli_fetch_array($executeGetDepartmentTasks)){ 

                ?>
               <tr>
                 <td><b><?= $count; ?></b></td>
                 <td><?= $departmentTasksInfo['unit']; ?></td>
                 <td><?= $departmentTasksInfo['features']; ?></td>
                 <td><?= $departmentTasksInfo['front_end_task_duration']; ?></td>
                 <td><?= $departmentTasksInfo['back_end_task_duration']; ?></td>
                 <td><?= $departmentTasksInfo['task_start_date']; ?></td>
                 <td><?= $departmentTasksInfo['task_end_date']; ?></td>

                 <td>
                  <?php 
                $responsibleID = $departmentTasksInfo['responsible_emp_id'];
                $responsibleEmpID = explode(' ', $responsibleID);
                foreach ($responsibleEmpID as $user) {

                $getUsersQuery = "SELECT * FROM users WHERE id = '$user'";
                $executeGetUser = mysqli_query($con,$getUsersQuery);
                $UserInfo = mysqli_fetch_array($executeGetUser);
                echo '<li><b>'.$UserInfo['ar_fullname'].'</b></li>';
                }

                 ?>
                  </td>

                 <td><?= $departmentTasksInfo['obstacles']; ?></td>
                 <td><?= $departmentTasksInfo['notes']; ?></td>
                 <td><?= $departmentTasksInfo['task_status']; ?></td>
               </tr>
             <?php 
             $count++;
           }
         }
             }else{
              echo "<li class='text-primary'>ليس هناك خطة سير عمل </li>";
             } 
           ?> 
             </tbody>
           </table>
          </div>    
        <br>  
