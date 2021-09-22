$(document).ready( function () {

  $('.backToReportList').click(function(){
    // alert('Clicked !');
      $('#welcomeDIV').show(); 
      $('#welcomeDIV').load('totalReports.php');
  });

});