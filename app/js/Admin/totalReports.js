

$(document).ready( function () {

  $('.report').click(function(){
    var reportID = $(this).attr('data-reportID');
    // alert(reportID);
      $('#welcomeDIV').show(); 
      $('#welcomeDIV').load('reportDetails.php?r_id=' +reportID);
  });

});