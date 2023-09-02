<?php

session_start();
ob_start();


// connection code


$con=new mysqli("localhost","root","","mystery_flavours");

if(mysqli_connect_error())
{
    die("Not Connect!" . mysqli_connect_error());
}

error_reporting(0);

?>