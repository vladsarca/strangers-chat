<?php
//Start
ob_start();
session_start();
//Conexiune DB.
require_once 'includes/config.php';
include 'includes/functions.php';
	if( !isset($_SESSION['user']) ) {
		header("Location: login.php");
		exit;
	}
//Verificare pentru butonul de login.
if( isset($_POST['btn-logout']) ) {
  unset($_SESSION['']);
	session_unset();
	session_destroy();
  session_cache_expire();
	header("Location: login.php");
}
if( isset($_POST['btn-chat']) ) {

		$textchat = $_POST['textchat'];
    $db = new mysqli(HOST,USER,PASS,DB_NAME);
    if (empty($textchat)) {
      echo 'Nu ai scris nimic in chat.';
    }
    else {
  $username1 = $_SESSION['user'];
  $sql = "INSERT INTO `chat` (`user`,`chat`) VALUES('$username1', '$textchat')";
  $db->query($sql) or die("wrong");
  $db->close();
}
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Dashboard - Stranger Chat</title>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
  <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="fonts/css/font-awesome.min.css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="assets/css/navbar.css">
  <link rel="stylesheet" href="assets/css/chat.css">
</head>
<body>
   <section class="navigation">
  <div class="nav-container">
    <div class="brand">
      <a href="index.html"><i class="fa fa-comments fa-fw"></i>Strangers Talk</a>
    </div>
    <nav>
      <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
       
        <li>
          <a href="#"><i class="fa fa-user fa-fw"></i>Nume<i class="fa fa-caret-down fa-fw"></i></a>
          <ul class="nav-dropdown">
            <li>
              <a href="#"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
            </li>  
          </ul>
        </li>
        
      </ul>
    </nav>
  </div>
</section>
  
  <div class="wrapper">
    <div class="container">
        <div class="left">
            <div class="top">
                <input type="text" />
                <a href="javascript:;" class="search"></a>
            </div>
            <ul class="people">
                <li class="person" data-chat="person1">
                    <img src="https://s13.postimg.org/ih41k9tqr/img1.jpg" alt="" />
                    <span class="name">Thomas Bangalter</span>
                    <span class="time">2:09 PM</span>
                    <span class="preview">I was wondering...</span>
                </li>
                <li class="person" data-chat="person2">
                    <img src="https://s3.postimg.org/yf86x7z1r/img2.jpg" alt="" />
                    <span class="name">Dog Woofson</span>
                    <span class="time">1:44 PM</span>
                    <span class="preview">I've forgotten how it felt before</span>
                </li>
                <li class="person" data-chat="person3">
                    <img src="https://s3.postimg.org/h9q4sm433/img3.jpg" alt="" />
                    <span class="name">Louis CK</span>
                    <span class="time">2:09 PM</span>
                    <span class="preview">But we’re probably gonna need a new carpet.</span>
                </li>
                <li class="person" data-chat="person4">
                    <img src="https://s3.postimg.org/quect8isv/img4.jpg" alt="" />
                    <span class="name">Bo Jackson</span>
                    <span class="time">2:09 PM</span>
                    <span class="preview">It’s not that bad...</span>
                </li>
                <li class="person" data-chat="person5">
                    <img src="https://s16.postimg.org/ete1l89z5/img5.jpg" alt="" />
                    <span class="name">Michael Jordan</span>
                    <span class="time">2:09 PM</span>
                    <span class="preview">Wasup for the third time like is 
you bling bitch</span>
                </li>
                <li class="person" data-chat="person6">
                    <img src="https://s30.postimg.org/kwi7e42rh/img6.jpg" alt="" />
                    <span class="name">Drake</span>
                    <span class="time">2:09 PM</span>
                    <span class="preview">howdoyoudoaspace</span>
                </li>
            </ul>
        </div>
        <div class="right">
            <div class="top"><span>To: <span class="name">Dog Woofson</span></span></div>
            <div class="chat" data-chat="person1">
                <div class="conversation-start">
                    <span>Today, 6:48 AM</span>
                </div>
                <div class="bubble you">
                    Hello,
                </div>
                <div class="bubble you">
                    it's me.
                </div>
                <div class="bubble you">
                    I was wondering...
                </div>
            </div>
            <div class="chat" data-chat="person2">
                <div class="conversation-start">
                    <span>Today, 5:38 PM</span>
                </div>
                <div class="bubble you">
                    Hello, can you hear me?
                </div>
                <div class="bubble you">
                    I'm in California dreaming
                </div>
                <div class="bubble me">
                    ... about who we used to be.
                </div>
                <div class="bubble me">
                    Are you serious?
                </div>
                <div class="bubble you">
                    When we were younger and free...
                </div>
                <div class="bubble you">
                    I've forgotten how it felt before
                </div>
            </div>
            <div class="chat" data-chat="person3">
                <div class="conversation-start">
                    <span>Today, 3:38 AM</span>
                </div>
                <div class="bubble you">
                    Hey human!
                </div>
                <div class="bubble you">
                    Umm... Someone took a shit in the hallway.
                </div>
                <div class="bubble me">
                    ... what.
                </div>
                <div class="bubble me">
                    Are you serious?
                </div>
                <div class="bubble you">
                    I mean...
                </div>
                <div class="bubble you">
                    It’s not that bad...
                </div>
                <div class="bubble you">
                    But we’re probably gonna need a new carpet.
                </div>
            </div>
            <div class="chat" data-chat="person4">
                <div class="conversation-start">
                    <span>Yesterday, 4:20 PM</span>
                </div>
                <div class="bubble me">
                    Hey human!
                </div>
                <div class="bubble me">
                    Umm... Someone took a shit in the hallway.
                </div>
                <div class="bubble you">
                    ... what.
                </div>
                <div class="bubble you">
                    Are you serious?
                </div>
                <div class="bubble me">
                    I mean...
                </div>
                <div class="bubble me">
                    It’s not that bad...
                </div>
            </div>
            <div class="chat" data-chat="person5">
                <div class="conversation-start">
                    <span>Today, 6:28 AM</span>
                </div>
                <div class="bubble you">
                    Wasup
                </div>
                <div class="bubble you">
                    Wasup
                </div>
                <div class="bubble you">
                    Wasup for the third time like is <br />you blind bitch
                </div>

            </div>
            <div class="chat" data-chat="person6">
                <div class="conversation-start">
                    <span>Monday, 1:27 PM</span>
                </div>
                <div class="bubble you">
                    So, how's your new phone?
                </div>
                <div class="bubble you">
                    You finally have a smartphone :D
                </div>
                <div class="bubble me">
                    Drake?
                </div>
                <div class="bubble me">
                    Why aren't you answering?
                </div>
                <div class="bubble you">
                    howdoyoudoaspace
                </div>
            </div>
            <div class="write">
                <a href="javascript:;" class="write-link attach"></a>
                <input type="text" />
                <a href="javascript:;" class="write-link smiley"></a>
                <a href="javascript:;" class="write-link send"></a>
            </div>
        </div>
    </div>
</div>
    <script src="js/navbar.js"></script>
  <script src="assets/js/chat.js"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  </body>
</html>
