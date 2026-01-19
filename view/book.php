<?php
include("../database/rent.php");
if(isset($_GET['q'])&&$_GET['q']!="")
    {
        $q=$_GET['q'];
        $result=mysqli_query($conn,"SELECT * FROM items WHERE name LIKE '%$q%'");
    }
    else
        {
            $result=mysqli_query($conn,"SELECT*FROM items");
        }
        ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Book items</title>
        <link rel="stylesheet" href="../css/book.css">
    </head>
    <body>
        <a href="dashboard.php" class="back-btn">Back</a>
        <div class="page-box">

        <form method="get">
        <input type="text" name="q" placeholder="Search item">
        <button type="submit">&#128269;Search</button>
        </form>
        <h2>Book Items</h2>
        <div class="items-scroll">
        <?php
        if(mysqli_num_rows($result)>0)
            {
                while($row=mysqlo_fetch_assoc($result))
                    {
                        ?>
                        <div class="item-box">
                        <img src="../image/<?php echo $row['image'];?>"alt="item">
                        <h3><?php echo $row['name'];?> </h3>
                        <p>Price:Tk<?php echo $row['price'];?></p>
                        <p>Available:<?php echo $row['quantity'];?></p>
                        <?php if($row['quantity']>0)
                        {
                            ?>
                            <form method="post"action="../control/book.php">
                            input type="hidden"name="item_id" value="<?php echo $row['id'];?>">
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
</body>
</html>

    
