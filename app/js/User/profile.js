$(document).ready( function () {
  $('#changePasswordForm').submit(function(){
    return false;
  });
});

///////////////////////////////////////////////////////////

$(document).ready( function () {

  $('#changePasswordBTN').click(function(){

  if (($('#newpassword').val() != '') && ($('#oldpassword').val() != '')) {

  var formAction = $('#changePasswordForm').attr('action');
  var newpassword = $('#newpassword').val();
  var oldpassword = $('#oldpassword').val();



  $.ajax({
      url: formAction,
      type: "post",
      data:{ 
        newpassword:newpassword,
        oldpassword:oldpassword,
      },        
      success: function (data) {
        $('.form-control').val('');
        $('#msgpass').show(300);
        $('#msgpass').delay(2000).hide(300);  
        $('#msgpass').append(data);
      },
      
      error: function (data) {
        $('#msgpass').append(data);
        $('#msgpass').delay(2000).hide(300);
      }
  });

    // $.post(
    //   $('#changePasswordForm').attr('action'),
    //   $('#changePasswordForm').serializeArray());

  }else{
        $('#emptymsg').show(300);
        $('#emptymsg').delay(3000).hide(300);
  }
  // setTimeout(function(){ 
  //   jQuery.noConflict();
  //   $('#ChangePasswordModal').modal('hide');
  // }, 3000);

});

});