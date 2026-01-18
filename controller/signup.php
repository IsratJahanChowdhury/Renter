<?php 
session();
include("../database/rent.php");
$message = "";
if($_SERVER["REQUEST_METHOD"]== "POST")
{
    $username =trim($_POST["username"]);
    $password=$_POST["password"];
    $email=trim($_POST["email"]);
     if(empty($username)|| empty($password)|| empty($email)){
    $message = "<p class='error'> All fields are required</p>";
     }
    
        }
        ?>
