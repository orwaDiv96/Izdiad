
$(document).ready( function () {
  $('#addUserForm').submit(function(){
    return false;
  });
});

$(document).ready( function () {

  $('#addUserBTN').click(function(){
// alert('Clicked !');


  if (($('.form-control').val() != '')) {
    $.post(
      $('#addUserForm').attr('action'),
      $('#addUserForm').serializeArray());

      $('#addedmsg').show(300);
      $('#addedmsg').delay(2000).hide(300);  
  }else{
        $('#emptymsg').show(300);
        $('#emptymsg').delay(3000).hide(300);
  }

  $('.form-control').val('');
});

// $('#addUserBTN').click(function(){
//   $("#addUserModal").modal('hide');
// });


});