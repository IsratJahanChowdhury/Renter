<!DOCTYPE html>
<html>
    <head>
        <title>Make Complaint</title>
        <link rel="stylesheet" href="../stylesheets/book.css">
</head>
<body>
    <a href="dashboard.php" class="back-btn">Back</a>
    <div class= "page-box">
        <h2>Make Complaints</h2>
        <form method ="post" action="../controller/make_complaints.php">
            <textarea name="message" placeholder="Write your complaint "required></textarea>
            <button type ="submit">Submit Complaint</button>
</form>
<?php
if(isset($_GET['success'])&& $_GET['success']==1)
    {
        echo "<p class='message'>Complaint submitted successfully!</p>";
    }
    ?>
</div>
</body>
</html>