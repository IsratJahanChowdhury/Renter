<?php
session_start();
if(!isset($_SESSION['username']))
    {
        header("Location:../view/login.php");
        exit();
    }
    include("../database/rent.php");
    $item_id=$_POST['item_id'];
    $from=$_POST['from_date'];
    $to=$_POST['to_date'];
    $itemResult=mysqli_query($conn,"SELECT * FROM items WHERE id='$item_id'");
    $item=mysqli_fetch_assoc(itemResult);

    $days=(strtotime($to)-strtotime($from))/(60*60*24);
    if($days<=0)
    {
       $days=1;
    }