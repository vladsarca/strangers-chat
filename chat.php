<?php
//Start
ob_start();
session_start();
//Conexiune DB.
require_once 'includes/config.php';
include 'includes/functions.php';
$user = "";
if (isset($_SESSION['user'])) {
    $user   = getIdbyUser($_SESSION['user']);
    $res    = getTexts($user['id']);
    //$online = getOnlineUsers();
}
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
$user_id = $user['id'];
//Verificare pentru butonul de login.

if (isset($_POST['btn-chat'])) {
    
    $textchat = $_POST['textchat'];
    $db = new mysqli(HOST, USER, PASS, DB_NAME);
    if (empty($textchat)) {
        //echo 'Nu ai scris nimic in chat.';
    } else {
        $username1 = $_SESSION['user'];
        $userid    = $user['id'];
        $sql  = "INSERT INTO `chat` (`user`,`text`,`user_id`) VALUES('$username1', '$textchat', '$userid')";
        $db->query($sql) or die("wrong");
        $db->close();
        header("Location:index.php");
    }
}


             while($row = $res->fetch_assoc()) { 
             $datetime = strtotime($row['date_added']);
             $date  = date('l | jS \of F Y | G:i:s', $datetime);
              ?>           
                           <hr />
                           <li class="media">
                              <div class="media-body ">
                                 <div class="media">
                                    <div class="letterlogo pull-left" style="padding-top:5px">
                                       <div align="center" style="margin-leftS:15px;color:white;"><?php $userneim =   strtoupper($row['user'][0]); echo $userneim; ?>
                                       </div>
                                    </div>
                                    <div class="media-body letter">
                                       <?=$row['text'];  ?>
                                       <br />
                                       <small class="text-muted"><span class="glyphicon glyphicon-user"></span> <?=$row['user']; ?> - <span class="glyphicon glyphicon-time"></span> <?=$date; ?> </small>
                                    </div>
                                 </div>
                              </div>
                           </li>
               <?php } ?>
                        

