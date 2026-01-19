<?php
session_start();
if(!isset($_SESSION['booking']))
    {
header("Location:../view/book.php");
exit();
    }
    $booking = $_SESSION['booking'];
   
    include("../view/booking_status.php");