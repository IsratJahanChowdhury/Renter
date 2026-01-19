<?php
session_start();
include("../database/rent.php");
if(!isset($_SESSION['booking']))
    {
        header("Location:../view/payment.php");
        exit();
    }
    if(isset($_SESSION['paid']))
        {
            header("Location:../view/payment.php");
            exit();
        }
        $booking=$_SESSION['booking'];
        $item_id=$booking['item_id'];
        $sql="UPDATE items SET quantity = quantity-1 WHERE id='$item_id AND quantity >0";
        