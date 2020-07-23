<?php
//Start
ob_start();
session_start();
//Conexiune DB.
require_once 'includes/config.php';
include 'includes/functions.php';
//Redirect cand esti deja conectat.
if ( isset($_SESSION['user'])!="" ) {
  header("Location: index.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login - Stranger Chat</title>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css">
  </head>
  <body background="assets/img/2.jpg">
    <div class="principal">
      <div class="cotn_principal" align="center">
        <div class="cont_centrar" align="center">
          <div class="cont_login" align="center">
            <div class="cont_info_log_sign_up" align="center">
              <div class="col_md_login" align="center">
                <br />
                <div class="cont_ba_opcitiy">
                  <h2> LOGIN</h2>
                  <p>Chat with a stranger.</p>
                  <small>Be a stranger.</small>
                  <button class="btn_login" onclick="cambiar_login()"><i class="fa fa-sign-in"></i> LOGIN</button>
                </div>
              </div>
            </div>
            <form method="post" id="form_login" action="">
              <div class="cont_forms" >
                <div class="cont_img_back_">
                  <img src="assets/img/1.jpg" alt="Login Photo" />
                </div>
                <div class="cont_form_login">
                  <a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
                  <h2 stlye="color:white"><b stlye="color:white"> LOGIN</b></h2>
                  <input type="text" placeholder="Username" name="username" id="username" maxlenght="10" required />
                  <button class="btn_login" type="submit" id="btn_login" name="btn-login"><i class="fa fa-sign-in"></i> LOGIN</button>
                </div>
                <br><br>
                <div class="cont_form_sign_up">
                  <a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/index.js"></script>
  </body>
</html>
