<?php
//LOGIN
function filtrare($filter)
{
    $filter = trim($filter);
    $filter = strip_tags($filter);
    $filter = htmlspecialchars($filter);
    return $filter;
}
function securitate($gresit){
   return htmlentities($gresit,ENT_QUOTES,"UTF-8");
}
function login($arr)
{
    extract($arr);
}

function print_nice($arr)
{
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}
$user = "";
function getIdbyUser($user)
{
    $db  = new mysqli(HOST, USER, PASS, DB_NAME);
    $sql = "SELECT * FROM `users` WHERE `user` = '$user'";
    $res = $db->query($sql) or die("wrong");
    $row = $res->fetch_assoc();
    $res->free();
    $db->close();
    return $row;
}
function getTexts($user_id)
{
    $db  = new mysqli(HOST, USER, PASS, DB_NAME);
    $sql = "SELECT * FROM `chat` ORDER BY 'date_added' ASC";
    $res = $db->query($sql) or die("wrong");
    //$row = $res->fetch_array();
    //$res->free();
    $db->close();
    return $res;
}

function getOnlineUsers()
{
    $db  = new mysqli(HOST, USER, PASS, DB_NAME);
    $sql = "SELECT * FROM `users`";
    $online = $db->query($sql) or die("WrongGetOnlineUsers");
    $db->close();
    return $online;
}

?>