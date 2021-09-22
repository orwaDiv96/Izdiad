$(document).ready( function () {

	$('.empReport').click(function(){
		var empID = $(this).attr('data-empID');
		//alert(empID);
	    $('#welcomeDIV').show(); 
	    $('#welcomeDIV').load('empReport.php?emp_id=' +empID);
	});

});