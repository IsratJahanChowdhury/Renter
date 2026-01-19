<!DOCTYPE html>
<html>
    <head>
        <title>Submit Review</title>
        <link rel="stylesheet"href="../stylesheets/book.css">
</head>
</body>
<div class ="page-box">
    <h2>Submit Review</h2>
    <form method="post" action="../controller/submit_review.php">
    <input type="text" name="item_id" placeholder="Item Id" required>
    <textarea name="review" placeholder="Write your review" required></textarea>
    <button type="submit">Submit Review</button>
</form>
</div>
</body>
</html>
