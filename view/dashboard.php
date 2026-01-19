<?php include("../controller/dashboard.php");?>
<!DOCTYPE html>
<html>
 <head>
     <title>Renter Dashboard</title>
     <link rel="stylesheet" href="../stylesheets/dashboard.css">
</head>
<body>
    <a href="../view/home.html" class="home-btn">Home</a>

    <div class="title">
    <h2>EasyRent</h2>
    <p>Browse,book, and enjoy your rentals!</p>
    </div>

    <div class="header">
    Welcome,<?php echo $displayName;?>! Ready to manage your rentals?
    </div>

    <div class="container">
    <a href="../view/book.php"class="card-link">
    <div class="card">
    <div class="icon">&#128230;</div>
    <h3>Book item</h3>
    <p>Rent an available item</p>
    </div>
    </a>

    
    <a href="../view/cancel_booking.php"class="card-link">
    <div class="card">
    <div class="icon">&#10060;</div>
    <h3>Cancel Booking</h3>
    <p>Cancel your booking</p>
    </div>
    </a>
     
    <a href="../view/make_complaint.php"class="card-link">
    <div class="card">
    <div class="icon">&#9997;</div>
    <h3>Make Complaint</h3>
    <p>Report an issue</p>
    </div>
    
    <a href="../view/request_refund.php"class="card-link">
    <div class="card">
    <div class="icon">&#128184;</div>
    <h3>Request Refund</h3>
    <p>Ask for Refund</p>
    </div>
    </a>
    
    <a href="../view/submit_review.php"class="card-link">
    <div class="card">
    <div class="icon">&#11088;</div>
    <h3>Submit Review</h3>
    <p>Rate and review item</p>
    </div>
    </a>
    </div>
    <a href="../controller/logout.php"class="logout-btn">Logout</a>
</body>
</html>