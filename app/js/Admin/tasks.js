$(document).ready( function () {

  $('.viewAbstractTasks').click(function(){
    // alert('Clicked !');
      $('#assetsDivInfo').hide();
      $('#welcomeDIV').show(); 
      $('#welcomeDIV').load('totalAbstractTasks.php');
  });

});