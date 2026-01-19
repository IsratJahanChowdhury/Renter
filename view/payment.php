<!DOCTYPE html>
<html>
    <head>
        <title>Payment</title>
        <link rel="stylesheet" href="../stylesheets/book.css">
</head>
<body>
    <a href="book.php" class="back-btn">Back</a>
    <div class ="page-box">
        <h2>Select Payment Method</h2>
        <form method ="post" action ="../controller/confirm_payment.php">
            <label><input type="radio" name="method" value="Card" required>Card</label>
             <label><input type="radio" name="method" value="Bkash">Bkash</label><br>
             <label><input type="radio" name="method" value="Cash">Cash</label><br><br>
             <button type= "submit">Pay Now</button>
</form>
<?php
if(isset($_GET['success'])&& $_GET['success']==1)
            {
             echo '<p class="message">Payment successfully! Booking Confirmed</p>';
            }
             
    ?>
</div>
</body>
</html>
             
            
