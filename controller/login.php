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
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)==1)
        {
            $_SESSION["username"]=$cookieUser;
            header("Location:dashboard.php");
            exit();
        }
        else
        {
          setcookie("username", "", time()-3600 ,"/");
        }
        if(isset($_SESSION["username"]))
            {
                header("Location:dashboard.php");
                exit();
            }
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                
            if(empty($_POST["username"])){
            $userError="Usename is required";
            }
            else{
                $username=trim($_POST["username"]);
            }
        

}