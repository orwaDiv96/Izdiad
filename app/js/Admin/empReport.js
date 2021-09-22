$(document).ready( function () {

	$('#showAttendanceReport').click(function(){

		var year = $('#year').val();
		var month = $('#month').val();
		var empID = $(this).attr('data-empID');

		$('#attendanceInfo').show(); 
	    $('#attendanceInfo').load('../../includes/Admin/empAttendaceReport.php?year=' +year+ '&month=' +month+ '&empID=' +empID);
	});

});