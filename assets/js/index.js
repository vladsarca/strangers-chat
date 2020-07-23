

function cambiar_login() {
  document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_login";
document.querySelector('.cont_form_login').style.display = "block";
document.querySelector('.cont_form_sign_up').style.opacity = "0";

setTimeout(function(){  document.querySelector('.cont_form_login').style.opacity = "1"; },400);

setTimeout(function(){
document.querySelector('.cont_form_sign_up').style.display = "none";
},200);
  }

function cambiar_sign_up(at) {
  document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_sign_up";
  document.querySelector('.cont_form_sign_up').style.display = "block";
document.querySelector('.cont_form_login').style.opacity = "0";

setTimeout(function(){  document.querySelector('.cont_form_sign_up').style.opacity = "1";
},100);

setTimeout(function(){   document.querySelector('.cont_form_login').style.display = "none";
},400);
}
/*
$(document).ready(function(){
    $("#hide").click(function(){
        $("#showhide").hide();
    });
    $("#show").click(function(){
        $("#showhide").show();
    });
});
*/
function loginAnim() {

}

function ocultar_login_sign_up() {

document.querySelector('.cont_forms').className = "cont_forms";
document.querySelector('.cont_form_sign_up').style.opacity = "0";
document.querySelector('.cont_form_login').style.opacity = "0";

setTimeout(function(){
document.querySelector('.cont_form_sign_up').style.display = "none";
document.querySelector('.cont_form_login').style.display = "none";
},500);

  }
  function sendAjax(){
  }
$(document).ready(function(){
  $('#form_login').submit(function(e){
    e.preventDefault();
    var username = $('#username').val();
      $.ajax({
        url: "/cleann/ajaxCalls/login.php?username="+username,
        success: function(result){
          if(result == 'success'){
            $('body').addClass('animation_body_fade');
            setTimeout(function(){ window.location.href = "/cleann/"; }, 1630);

          }else{
            console.log(result);
          }
        },
        callback: function(){
          //console.log("Sunt IN callback);
        }
      });
  });

});
