<?php
session_start();
include("../database/rent.php");
$username="";
$userError="";
$passError="";
$error="";
if(isset($_SESSION["username"]))
{
  header("Location:dashboard.php");
  exit();
}

    if($_SERVER["REQUEST_METHOD"]=="POST")
        {
if(empty($_POST["username"]))
    {
        $userError="Username is required";
    }
    else
    {
        $username=trim($_POST["username"]);
    }
    if(empty($_POST["password"]))
        {
            $passError="Password is required";
        }
    else
        {
            $password=$_POST["password"];
        }
    
       







         
            }
            ?>