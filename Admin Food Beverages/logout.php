<?php 
    require_once 'connection.php';
  

    date_default_timezone_set('Asia/Kolkata');
    $lastlogin=date('Y-m-d h:i:s');

    $up=$con->query("update admin set lastlogin='$lastlogin' where emailid like '$_SESSION[emailid]'");

unset($_SESSION['emailid']);
unset($_SESSION['username']);
unset($_SESSION['lastlogin']);
unset($_SESSION['currpage']);

header('location:index.php');

?>
