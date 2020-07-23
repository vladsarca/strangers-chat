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
    
}
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
$user_id = $user['id'];
//Verificare pentru butonul de login.

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
    

?>