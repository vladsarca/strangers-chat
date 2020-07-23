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
    $online = getOnlineUsers();
}
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
$user_id = $user['id'];
//Verificare pentru butonul de login.


?>
<!DOCTYPE html>
<html >
   <head>
      <meta charset="UTF-8">
      <title>Strangers Chat</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      </link>
      <link rel="stylesheet" href="assets/css/font-awesome.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <script src='assets/js/jquery.min.js'></script>
      <link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">
	  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="assets/css/chat.css">
      </link>
      <link rel="stylesheet" href="assets/css/navbar.css">
	 
      <script>
     
      function send_mess(){
        var mesaj=document.getElementById("textchat").value;
        var dataString=mesaj;
      $.ajax({
         type: "post",
         url: "send_mess.php",
         data: {
           textchat:dataString,
           
         },
         cache:false,
         success:function(result){
              document.getElementById("textchat").value = "";

            
         }
	
 
    });
   return false;
}
  

           function chat_ajax(){ 
           var nr_elemente = document.getElementById("chat").childElementCount;
               var req = new XMLHttpRequest();
               req.onreadystatechange = function() {
			if(req.readyState == 4 && req.status == 200){
				document.getElementById('chat').innerHTML = req.responseText;
                
                var dim = document.getElementById('chat').clientHeight;
                var nr_elemente2 = document.getElementById("chat").childElementCount;
                if(nr_elemente<nr_elemente2){
                   $('#chat_box').animate({scrollTop: dim}, 800); 
                
                }
                
			}
		   }
            req.open('GET', 'chat.php', true);
		    req.send(); 
	     }     
	
	      setInterval(function(){chat_ajax()}, 1000)
          
          
          function users_ajax(){ 
               var reqr = new XMLHttpRequest();
               reqr.onreadystatechange = function() {
			if(reqr.readyState == 4 && reqr.status == 200){
				document.getElementById('users_online').innerHTML = reqr.responseText;
                
                
			}
		   }
            reqr.open('GET', 'users.php', true);
		    reqr.send(); 
	     }     
	
	      setInterval(function(){users_ajax()}, 1000)
       </script>
   </head>
   <section class="navigation">
      <div class="nav-container">
         <div class="brand">
            <a href="index.php"><i class="fa fa-comments fa-fw"></i> Strangers Talk</a>
         </div>
         <nav>
            <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
            <ul class="nav-list">
               <li>
                  <a href="#"><i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['user']; ?> <i class="fa fa-caret-down fa-fw"></i></a>
                  <ul class="nav-dropdown">
                     <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                     </li>
                  </ul>
               </li>
            </ul>
         </nav>
      </div>
   </section>
   <body onload="chat_ajax();" style=" background: url(assets/img/fundal.png) no-repeat center center fixed; -webkit-background-size: cover;-moz-background-size: cover; -o-background-size: cover;background-size: cover;">
      <body style="font-family:Verdana">
         <div class="container">
            <div class="row " style="padding-top:40px;">
               <br /><br />
               <div class="col-md-8">
                  <div class="panel panel-info">
                     <div class="panel-heading">
                        <span class="glyphicon glyphicon-comment"></span> General Channel - History
                     </div>
                     <div class="panel-body" id="chat_box" style="overflow-y: auto; height:300px;">
                        <ul class="media-list">
                         <div id="chat">
                         
                         </div>
                        </ul>
                     </div>
					 <div class="borderus">
					 </div>
                         <div class="panel-footer">
            
                             <form method="post" action="index.php" id="form_chat" onsubmit="return send_mess();">
                              <div class="input-group">
                                  <input type="text"  placeholder="Write your message here" name="textchat" class="form-control" id="textchat"/>
                                  <span class="input-group-btn">
                                      <button class="btn btn-info " type="submit" name="btn-chat" id="submit"  style="background-color:#00b0ff;"><i class="fa fa-paper-plane"></i> Send</button>
                                  </span>
                              </div>
                            </form>                        
           
                          </div> 
						
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="panel panel-primary">
                     <div class="panel-heading">
                        <span class="glyphicon glyphicon-user"></span> Online users
								
							<button onclick="arata_ascunde(this);" style="align:right;font-size:13px" class="btn btn-info " id="show_hide_bt" style="background-color:#00b0ff;">
                             <i class="fa fa-eye-slash"></i> <span>Hide</span> 
                            </button>
                     </div>
                     <div class="panel-body" id="showhide">
                        <ul class="media-list">
                          <div id="users_online">
                         
                         </div>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         </div>
        <script>
     
    function arata_ascunde(button) {
        var x = document.getElementById('showhide');
        var change = $(button).find('span').text();
        //console.log(change);
        
        if (x.style.display === 'none') {
           x.style.display = 'block';
         } else {
           x.style.display = 'none';
         }
        if (change == 'Hide') {
            $(button).find('span').text('Show');
            $(button).find('i').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
            //x.fadeIn();
        }
        else {
            $(button).find('span').text('Hide');
            $(button).find('i').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
            //x.fadeOut();
        }


    }




        </script>
         <script src="assets/js/navbar.js"></script>
         <script src="assets/js/index.js"></script>
   </body>
</html>