<?php 
$message = "";
if($_SERVER["REQUEST_METHOD"]== "POST")
{
    $username =$_POST["username"];
    $password=$_POST["password"];
    $email=$_POST["email"];
     if(empty($username)|| empty($password)|| empty($email)){
    $message = "<p class='error'> All fields are required</p>;
     }
    else{
        $message = "<p class='success'> Account created successfully!</p>";
    $message="<a href='../view/dashboard.php'>Go to Dashboard </a>;
 }
}
?>