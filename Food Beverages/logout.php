<?php 
    require_once 'connection.php';
  

    date_default_timezone_set('Asia/Kolkata');
    $lastlogin=date('Y-m-d h:i:s');

    $up=$con->query("update register set lastlogin='$lastlogin' where userid like '$_SESSION[userid]'");

unset($_SESSION['userid']);
unset($_SESSION['username']);
unset($_SESSION['lastlogin']);

header('location:index.php');

?>
