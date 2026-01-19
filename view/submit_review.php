<!DOCTYPE html>
<html>
    <head>
        <title>Submit Review</title>
        <link rel="stylesheet"href="../stylesheets/book.css">
</head>
</body>
 <a href="dashboard.php" class="back-btn">Back</a>
<div class ="page-box">
    <h2>Submit Review</h2>
    <form method="post" action="../controller/submit_review.php">
    <input type="text" name="item_id" placeholder="Item Id" required>
    <textarea name="review" placeholder="Write your review" required></textarea>
    <button type="submit">Submit Review</button>
</form>
<?php
if(isset($_GET['success'])&& $_GET['success']==1)
    {
        echo "<p class='message'>Review submitted successfully!</p>";
    }
    ?>
</div>
</body>
</html>
