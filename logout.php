<?php
	session_start();
	require_once 'includes/config.php';
	include 'includes/functions.php';
    $user="";
    if(isset($_SESSION['user'])){
    $user=getIdbyUser($_SESSION['user']);
	}
    $user_id = $user['id'];
	$db = new mysqli(HOST,USER,PASS,DB_NAME);
	$sql = "DELETE FROM `users` WHERE `id` = $user_id";
	$db->query($sql) or die("wrong logout");
    $sql2 = "DELETE FROM `chat` WHERE `user_id` = $user_id";
    $db->query($sql2) or die("wrong message delete");
    $db->close();
	unset($_SESSION['']);
	session_unset();
	session_destroy();
    session_cache_expire();
	header("Location: login.php");
?>
