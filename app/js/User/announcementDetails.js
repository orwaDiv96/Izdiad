$(document).ready( function () {
  
  $('.backToAnnouncementList').click(function(){
      $('#welcomeDIV').show(); 
      $('#welcomeDIV').load('totalAnnouncements.php');
  });

});