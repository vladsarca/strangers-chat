<?php
session_start();
include "../includes/config.php";
include "../includes/functions.php";
extract($_GET);
$db       = new mysqli(HOST, USER, PASS, DB_NAME);
$username = filtrare($username);
if (empty($username)) {
    echo 'Numele nu este introdus.';
} else {
    $_SESSION['user'] = $username;
    $sql              = "INSERT INTO `users` (`user`) VALUES('$username')";
    $db->query($sql) or die("wrong_login");
    $db->close();
    echo "success";
}
?>