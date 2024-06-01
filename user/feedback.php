<?php
@include '../config.php';

$id=$_GET['id'];
$code=$_GET['code'];


if(isset($_POST['submit'])){
    $feed = $_POST['feed'];
    $rate = $_POST['rate'];
    
    $sql = "INSERT INTO feedback(user,owner,feedback,rating) VALUES('$id','$code','$feed','$rate')";
    $res = mysqli_query($conn, $sql);
    //$last_id=mysqli_insert_id($conn);
    if($res){
        header("location:dashboard.php?id=$id&code=$code");
    }else{
        echo "<script>";
        echo "alert('no instered')";
        echo "</script>";
    }
    

}


?>
<html>
    <head>
        <title>Feedback</title>
        <link rel="stylesheet" href="css/style1.css">
    </head>
    <body align="center">
        <h1>Feedback</h1>
        <form action="" method="POST">
            <div class="a">
                <div class="a1">
                    <input type="text"  name="feed" placeholder="Enter your feedback"><br>
                    <input type="number"  name="rate" placeholder="Enter your Rating in the range of 10" style="margin-top:20px">
                </div>
                    <button name="submit" value="Submit" style="margin-top:20px;padding:10px 15px">Submit</button>
            </div>
        </form>
    </body>
</html>