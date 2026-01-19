<?php
include("../database/rent.php");
$item_id=$_POST['item_id'];
$review=$_POST['review'];
mysqli_query($conn,"INSERT INTO reviews(item_id,review)VALUES('$item_id','$review')");
header("Location:../view/submit_review.php?success=1");
?>