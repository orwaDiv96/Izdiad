<?php include "../../php/session_vars.php"; ?>
<?php include "../../php/User/getUserTasks.php"; ?>
<?php include "../../php/User/getUserProjectTasks.php"; ?>
<?php include "../../php/User/currentDayAttendanceInfo.php"; ?>
<?php include "../../php/User/getAllProjects.php"; ?>
<?php include "../../php/User/getUserMeetings.php"; ?>

<?php include "../../php/User/getAllUserReports.php"; ?>
<?php include "../../php/Admin/getAllAnnouncements.php"; ?>

<script type="text/javascript" src="../../js/User/navbar.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/User/navbar.css">

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
    
                <form id="endShiftForm" method="post" action="../../php/User/setEndShift.php">
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
                  

                    <span class="nav-link Form-links" id="Home" >
                    <div class="sb-nav-link-icon"></div>
                        <span style="margin-left: 1%;">الرئـيسيـة</span>
                    </span> 

                    <span class="nav-link Form-links" id="myProfile">
                    <div class="sb-nav-link-icon"></div>
                        <span style="margin-left: 1%;">الملف الشخصي</span>
                    </span> 

                
                    <span class="nav-link Form-links"  id="AddReport">
                        <span style="margin-left: 3%;">+ إضافة تقرير</span>
                    </span>


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


                    <div class="sb-sidenav-menu-heading">المشـاريع <span class="badge badge-success"><?= $projectCount; ?></span></div>

                        <?php while($projectInfo = mysqli_fetch_array($executeGetProjects)){ ?>
                            <span class="nav-link Form-links project" data-projectID="<?= $projectInfo['uniq_id']; ?>">
                                <span style="margin-right: 3%;"><?= $projectInfo['project_name']; ?></span>
                            </span>
                        <?php } ?>
                    <br>
                    <br>
           </div>
        </div>
        </nav>
    </div>

