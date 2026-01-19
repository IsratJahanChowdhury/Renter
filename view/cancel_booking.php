<!DOCTYPE html>
<html>
    <head>
        <title>Cancel Booking</title>
        <link rel="stylesheet" href="../stylesheets/book.css">
</head>
<body>
    <a href="dashboard.php" class="back-btn">Back</a>
    <div class="page-box">
        <h2>Cancel Booking</h2>
        <form method = "post" action ="../controller/cancel_booking.php">
            <input type = "text" name="booking_id" placeholder="Booking Id" required>
            <button type="submit">Cancel Booking</button>
        </form>
            <?php
             if(isset($_GET['error']))
            {
           echo '<p class="not-available">Invalid Booking ID</p>';
            }
            
            if(isset($_GET['success']))
            {
             echo '<p class="message">Booking cancelled successfully</p>';
            }
             ?>     
</div>
</body>
</html>