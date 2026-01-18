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

    <div class="card">
    <div clsss="icon">&#128230;</div>
    <h3>Book item</h3>
    <p>Rent an available item</p>
    </div>

    <div class="card">
    <div class="icon">&#128269;</div>
    <h3>Search</h3>
    <p>Find items by name</p>
    </div>

    <div class="card">
    <div class="icon">&#10060;</div>
    <h3>Cancel Booking</h3>
    <p>Cancel your booking</p>
    </div>
     
    <div class="card">
    <div class="icon">&#9997;</div>
    <h3>Make Complaint</h3>
    <p>Report an issue</p>
    </div>
    
    <div class="card">
    <div class="icon">&#128184;</div>
    <h3>Request Refund</h3>
    <p>Ask for Refund</p>
    </div>

    <div class="card">
    <div class="icon">&#128179;</div>
    <h3>Make Payment</h3>
    <p>Pay rental charges</p>
    </div>

    <div class="card">
    <div class="icon">&#11088;</div>
    <h3>Submit Review</h3>
    <p>Rate and review item</p>
    </div>
    <a href="../control/logout.php"class="logout-btn">Logout</a>
</body>
</html>