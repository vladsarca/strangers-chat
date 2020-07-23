<?php
//Start
ob_start();
session_start();
//Conexiune DB.
require_once 'includes/config.php';
include 'includes/functions.php';
if (isset($_SESSION['user'])) {
    
    $online = getOnlineUsers2();
}
function getOnlineUsers2()
{
    $db  = new mysqli(HOST, USER, PASS, DB_NAME);
    $sql = "SELECT * FROM `users`";
    $online = $db->query($sql) or die("WrongGetOnlineUsers");
    $db->close();
    return $online;
}

           while($ronline = $online->fetch_assoc()) {
              $datetimeuser = strtotime($ronline['timestamp']);
              $datetimess  = date('l | jS \of F Y | G:i:s', $datetimeuser);	
              ?>           
                          <li class="media">
                              <hr />
                              <div class="media-body">
                                 <div class="media">
                                 <button>
                                    <div class="letterlogo pull-left" style="padding-top:5px">
                                       <div align="center" style="margin-leftS:15px;color:white;"><?php $userneim = strtoupper($ronline['user'][0]); echo $userneim; ?>
                                       </div>
                                    </div>
                                    <div class="media-body" >
                                       <h5 class="ronline"><?=$ronline['user']; ?> </h5>
                                       <small class="text-muted"><span class="glyphicon glyphicon-time"></span> Last login: <?=$datetimess; ?></small>
                                    </div>
                                  </button>
                                 </div>
                                 <?php } ?>
                              </div>
                           </li>
                     </div>
                     </li>
               
               