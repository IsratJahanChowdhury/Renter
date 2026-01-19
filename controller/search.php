<?php
include("../database/rent.php");
$q=isset($_GET['q'])?$_GET['q']:"";

$sql="SELECT*FROM items WHERE name LIKE '%$q%'";
$result=mysqli_query($conn,$sql);
items=[];

while($row=mysqli_fetch_assoc($result))
    {
        $items[]=$row;
    }
    echo json_encode($items);
    exit();