<?php
include("../database/rent.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$booking_id = $_POST['booking_id'];

$result=mysqli_query($conn,"SELECT item_id FROM bookings WHERE id='$booking_id'");


if(mysqli_num_rows($result)==1)
    {    $row=mysqli_fetch_assoc($result);
        $item_id=$row['item_id'];
        mysqli_query($conn,"UPDATE items SET quantity=quantity + 1 WHERE id='$item_id'");
     mysqli_query($conn,"DELETE FROM bookings WHERE id='$item_id'");
     header("Location:../view/cancel_booking.php?success==1");
     exit();
    }
    else{
    header("Location:../view/cancel_booking.php?error=1");
    exit();
    }
    }
    ?>