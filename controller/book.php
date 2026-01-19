<?php
session_start();
include("../database/rent.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $item_id=$_POST['item_id'];
        $from =$_POST['from_date'];
        $to=$_POST['to_date'];
        
    $result=mysqli_query($conn,"SELECT * FROM items WHERE id='$item_id'");
    $item = mysqli_fetch_assoc($result);
     
    $days = (strtotime($to)- strtotime($from)) / (60*60*24);
     if($days <=0) $days=1;
     $_SESSION['booking']=
     [
        'item_id'=> $item['id'],
        'name'=> $item['name'],
        'image'=>$item['image'],
        'price'=> $item['price'],
        'days'=> $days,
        'total' => $days * $item['price']
     ];
     header("Location:../controller/booking_status.php");
     exit();
    }