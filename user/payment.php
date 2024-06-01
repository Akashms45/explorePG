<?php 
@include '../config.php';

$id=$_GET['id'];
$code=$_GET['code'];
$share=$_GET['share'];
$room=$_GET['room'];


$query="SELECT * from own_reg reg JOIN room_res res ON reg.code=res.code where res.code='$code' AND res.sharing='$share'";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result)){
    $cost=$row['cost'];
    $pgname=$row['pgname'];
    $place=$row['address'];
    $phone=$row['phone'];
}


$amt=$cost * $room;


if(isset($_POST['submit'])){
    $insert="INSERT INTO booked(user_code,owner_code,share,rooms,cost,pgname,place,phone) VALUES('$id','$code','$share','$room','$amt','$pgname','$place','$phone')";
    $res=mysqli_query($conn, $insert);
    if($res){
        echo "<script>";
        echo "alert('Booked Successfully')";
        echo "</script>";
    }else{
        echo "<script>";
        echo "alert('Something went Wrong')";
        echo "</script>";
    }

}


?>



<html>
    <head>
        <title>Payment Page</title>
        <style>
            .a1{
                margin-top:250px;;
            }
        </style>
    </head>
    <body align="center">
        <form action="" method="POST">
        <div class="a1">
            <h1>Your Total Cost Will be <?php echo $amt ?> Please click below to complete the Process</h1>
            <input style="text-decoration:none;border:none;border-radius:10px;background-color:brown;padding:10px 135px;color:white" type="submit" name="submit" value="Payment">
        </div>
        </form>
    </body>
</html>