<?php
session_start();
include("../database/rent.php");
$username="";
$userError="";
$passError="";
$Error="";
if(!isset($_SESSION["username"])&& isset($_COOKIE["username"])){
    $cookieUser=$_COOKIE["username"];
    $sql= "SELECT * FROM users WHERE username='$cookieUser'";
    
}