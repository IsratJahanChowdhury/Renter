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