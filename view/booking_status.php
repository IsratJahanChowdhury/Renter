<!DOCTYPE html>
<html>
<head>
    <title>Booking Status</title>
    <link rel="stylesheet" href="../stylesheets/book.css">
</head>
<body>
    <div class="page-box">
        <h2>Booking Details</h2>
        <div class="item-box">
        <img src="../images/<?php echo $booking['image'];?>">
        <h3><?php echo $booking['name'];?></h3>
        <p>Days:<?php echo $booking['days'];?></p>
        <p>Total: Tk <?php echo $booking['total'];?></p>

        <form action= "../controller/payment.php" method="post">
        <button type="submit" >Make Payment </button>
        </form>
</div>
</div>
</body>
</html>
