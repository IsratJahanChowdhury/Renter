<?php
include("../database/rent.php");
if(isset($_GET['q'])&&$_GET['q']!="")
    {
        $q=$_GET['q'];
        $result=mysqli_query($conn,"SELECT * FROM items WHERE name LIKE '%$q%'");
    }
    else
        {
            $result=mysqli_query($conn,"SELECT*FROM items");
        }
        ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Book items</title>
        <link rel="stylesheet" href="../css/book.css">
    </head>
    <body>
        <a href="dashboard.php" class="back-btn">Back</a>
        <div class="page-box">

        <form method="get">
        <input type="text" name="q" placeholder="Search item">
        <button type="submit">&#128269;Search</button>
        </form>