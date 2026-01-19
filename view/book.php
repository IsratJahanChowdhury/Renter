<?php

include("../database/rent.php");
            $result=mysqli_query($conn,"SELECT*FROM items"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Book items</title>
        <link rel="stylesheet" href="../stylesheets/book.css">
    </head>
    <body>
        <a href="dashboard.php" class="back-btn">Back</a>
        <div class="page-box">
        <h2>Book Items</h2>
  
        <input type="text"id="searchBox" placeholder="Search items"onkeyup="searchItem()">
        <button onclick="searchItem()">&#128269;Search</button>

        <div class="items-scroll"id="itemResult">
        <?php
        if(mysqli_num_rows($result)>0)
            {
                while($row=mysqli_fetch_assoc($result))
                    {
                        ?>
                        <div class="item-box">
                        <img src="../images/<?php echo $row['image'];?>"alt="item">
                        <h3><?php echo $row['name'];?> </h3>
                        <p>Price:Tk<?php echo $row['price'];?></p>
                        <p>Available:<?php echo $row['quantity'];?></p>
                        <?php if($row['quantity']>0)
                    {
                        ?>
                        <form method="post"action="../controller/book.php">
                        <input type="hidden"name="item_id" value="<?php echo $row['id'];?>">
                        <label>From date</label>
                        <input type="date" name="from_date"required>
                        <label>To Date</label>
                        <input type="date" name= "to_date" required>
                        <button type="submit">Book Item</button>
                        </form>
                        <?php
                    }
                else
                    {
                        ?>
                        <center>
                            <p class="not-available">Product is not available right now</p>
                        </center>
                        <?php
                    }
                        ?>
                        </div>
                        <?php
                    }
                    }
                else
                    {
                         echo"<p class='not-available'>No Product found</p>";

                    }
                        ?>
                        </div>
</div>
        <script src="../javascript/search.js"></script>
</body>
</html>

    
