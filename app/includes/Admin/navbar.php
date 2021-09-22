<?php include "../../php/session_vars.php"; ?>
<?php include "../../php/Admin/getUserTasks.php"; ?>
<?php include "../../php/Admin/getUserProjectTasks.php"; ?>
<?php include "../../php/Admin/getAllProjects.php"; ?>
<?php include "../../php/Admin/currentDayAttendanceInfo.php"; ?>
<?php include "../../php/Admin/getUserMeetings.php"; ?>
<?php include "../../php/Admin/getDepartments.php" ?>

<?php include "../../php/Admin/getAllUserReports.php"; ?>
<?php include "../../php/Admin/getAllAnnouncements.php"; ?>

<script type="text/javascript" src="../../js/Admin/navbar.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/Admin/navbar.css">

<span id="todayAttendanceValue" data-todayAttendance="<?= $today_attendance; ?>"></span>

<nav class="sb-topnav navbar navbar-expand navbar navbar-light bg-light justify-content-between">

<div class="nav-icon">
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle"><i class="fas fa-bars"></i>
    </button>
    <span class="navbar-left navbar-brand" id="index">إزديــاد</span>

</div>
                

    <ul class="navbar-nav ml-auto ml-md-0 settings">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="userDropdown">

        <?php if ($data['leave_time'] == '') { ?>
                <a class="dropdown-item text-right" href="#" id="endShift"><b>
                    إنهـاء الدوام
    
                <form id="endShiftForm" method="post" action="../../php/Admin/setEndShift.php">
                    <input type="hidden" name="endTime" value="<?= date('H:i:s') ?>">
                </form>

     
                </b></a>  
         <?php } ?>

                <a class="dropdown-item text-right" href="../../../Login/logoutAction.php">تسجيل الخروج</a>

            </div>
        </li>
    </ul>

</nav>

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">القـائــمة</div>
                  

                    <span class="nav-link Form-links" id="Home" data-userRole="<?= $user_role; ?>">
                    <div class="sb-nav-link-icon"></div>
                        <span style="margin-right: 3%;">الرئـيسيـة</span>
                    </span> 

                    <span class="nav-link Form-links" id="myProfile">
                    <div class="sb-nav-link-icon"></div>
                        <span style="margin-left: 1%;">الملف الشخصي</span>
                    </span>

                    <span class="nav-link Form-links" id="Users">
                    <div class="sb-nav-link-icon"></div>
                     <?php if ($user_role == 'admin') { ?>        
                        <span style="margin-right: 3%;">المستخدمين</span>
                    <?php } ?>

                    <?php if ($user_role == 'manager') { ?> 
                        <span style="margin-right: 3%;">القسم</span>
                    <?php } ?>
                    </span>


                    <span class="nav-link collapsed" data-toggle="collapse" data-target="#addingList" aria-expanded="false" aria-controls="collapseLayouts">
                        <span class="link-text">عمليات الإضافة</span>

                        <div class="sb-sidenav-collapse-arrow float-left">
                            <i class="fas fa-angle-down"></i>
                        </div>
                        
                    </span> 

                    <div class="collapse" id="addingList" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">

                        <?php if ($user_role == 'admin') { ?>  
                            <span class="nav-link Form-links"  id="AddProject">
                                <span style="margin-left: 3%;">+ إضافة مشاريع</span>
                            </span>

                            <span class="nav-link Form-links"  id="AddWorkFlow">
                                <span style="margin-left: 3%;">+ سير عمل لمشروع</span>
                            </span>
                        <?php } ?>
                        
                            <span class="nav-link Form-links"  id="AddTask">
                                <span style="margin-left: 3%;">+ مهام خارج المشاريع</span>
                            </span>

                            <span class="nav-link Form-links"  id="AddMeeting">
                                <span style="margin-left: 3%;">+ إضافة إجتماع</span>
                            </span>

                            <span class="nav-link Form-links"  id="AddReport">
                                <span style="margin-left: 3%;">+ إضافة تقرير</span>
                            </span>

                            <span class="nav-link Form-links"  id="AddAnnouncement">
                                <span style="margin-left: 3%;">+ إضافة  إعلان إداري</span>
                            </span>
                        </nav>
                    </div>


                    <?php if ($user_role == 'admin') { ?>  
                    <span class="nav-link collapsed" data-toggle="collapse" data-target="#departmentsList" aria-expanded="false" aria-controls="collapseLayouts">
                        <span class="link-text">الأقسام</span>

                        <div class="sb-sidenav-collapse-arrow float-left">
                            <i class="fas fa-angle-down"></i>
                        </div>
                        
                    </span> 

                    <div class="collapse" id="departmentsList" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">

                            <?php while ($department = mysqli_fetch_array($executeGetDepartment)){ ?>
                            <span class="nav-link Form-links department" data-departmentID="<?= $department['d_id']?>">
                                <span style="margin-left: 3%;"><?= $department['ar_department'] ?></span>
                            </span>

                        <?php } ?>
                        </nav>
                    </div>
                    <?php } ?>

                    <div class="sb-sidenav-menu-heading">المهام و الإجتماعات</div>

                            <span class="nav-link Form-links"  id="abstractTasks">
                                <span style="margin-right: 3%;">مهام خارج المشاريع <span class="badge badge-danger" id="penddingTasks"><?= $task_count; ?></span></span>
                            </span>

                            <span class="nav-link Form-links" id="projectTasks">
                                <span style="margin-right: 3%;">مهام ضمن المشاريع <span class="badge badge-danger" id="penddingProjectTasks"><?php echo $project_task_count; ?></span></span>
                            </span>

                            <span class="nav-link Form-links" id="Meetings">
                                <span style="margin-right: 3%;">الإجتماعات <span class="badge badge-warning" id="penddingMeetings"><?php echo $meeting_count; ?></span> </span>
                            </span>

                        <span class="nav-link Form-links" id="Announcements">
                            <span style="margin-right: 3%;">الإعلانات الإدارية <span class="badge badge-warning" id="penddingAnnouncements"><?= $announcements_count; ?></span> </span>
                        </span>




                    <div class="sb-sidenav-menu-heading">التقارير و المشاريع</div>


                    <span class="nav-link Form-links"  id="Reports">
                        <span style="margin-right: 3%;">التقارير 
                            <span class="badge badge-warning" id="unSeenReports"> <?php echo $report_count; ?> 
                            </span>
                        </span>
                    </span>


                    <span class="nav-link collapsed" data-toggle="collapse" data-target="#projectsList" aria-expanded="false" aria-controls="collapseLayouts">
                        <span class="link-text">المشاريع  <span class="badge badge-success"><?= $projectCount; ?></span></span>

                        <div class="sb-sidenav-collapse-arrow float-left">
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </span> 


                    <div class="collapse" id="projectsList" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                        <?php while($projectInfo = mysqli_fetch_array($executeGetProjects)){ ?>
                            <span class="nav-link Form-links project" data-projectID="<?= $projectInfo['uniq_id']; ?>">
                                <span style="margin-right: 3%;"><?= $projectInfo['project_name']; ?></span>
                            </span>
                        <?php } ?>
                        </nav>
                    </div>
                    <br>
                    <br>

           </div>
        </div>
        </nav>
    </div>
