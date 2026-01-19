<?php
session_start();
include("../database/rent.php");
if(isset($_SESSION['booking']))
    {
        header("Location:../view/book.php");
        exit();
    }
    $booking=$_SESSION['booking'];
    $item_id=$booking['item_id'];

    mysql_query($conn, "UPDATE items SET quantity = quantity- 1 WHERE id='$item_id'");
    unset($_SESSION['booking']);
        $_SESSION['success']="Payment successfull!Booking Confirmed.";
   header("Location:../view/payment.php?success==1");
     exit();
