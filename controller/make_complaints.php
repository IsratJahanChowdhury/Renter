<?php
include("../database/rent.php");
$message=$_POST['message'];
mysqli_query($conn,"INSERT INTO complaints(message)VALUES('$message')"
);
header("Location:../view/make_complaint.php?success=1");
?>