<!DOCTYPE html>
<html>
    <head>
        <title>Cancel Booking</title>
        <link rel="stylesheet" href="../stylesheets/book.css">
</head>
<body>
    <div class="page-box">
        <h2>Cancel Booking</h2>
        <form method = "post" action ="../controller/cancel_booking.php">
            <input type = "text" name="booking_id" placeholder="Booking Id" required>
            <button type="submit">Cancel Booking</button>
</form>
</div>
</body>
</html>