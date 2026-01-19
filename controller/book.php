<?phpinclude("../database/rent.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $item_id=$_POST['item_id'];
        $from =$_POST['from_date'];
        $to=$_POST['to_date'];
        
    $result=mysqli_query($conn,"SELECT * FROM items WHERE id='$item_id'");
    $item = mysqli_fetch_assoc($result);
     
    $days = (strtotime($to)- strtotime($from)) / (60*60*24);
    