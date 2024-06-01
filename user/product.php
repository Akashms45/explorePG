<?php 
@include '../config.php';

$id=$_GET['id'];
$code=$_GET['code'];
$share=$_GET['sharing'];

$query="SELECT * from own_reg reg JOIN room_res res ON reg.code=res.code where res.code='$code' AND res.sharing='$share'";
$result=mysqli_query($conn,$query);

if(isset($_POST['submit'])){
    $rooms=mysqli_real_escape_string($conn, $_POST['room']);

    header("location:payment.php?id=$id&code=$code&share=$share&room=$rooms");
}

?>



<html>
    <head>
        <title>Product Page</title>
        <link rel="stylesheet" href="css/style.css">
        <style>
            .a2{
                margin-top:30px;
                margin-left:1030px;
            }
            nav{
                margin-top:30px;
            }
            .a1{
                margin-left:100px;
            }
            .b3{
                margin-left:400px;
                margin-top:120px;
            }
            .b2{
                display:flex;
            }
            .b4{
                margin-top:90px;
            }
        </style>
    </head>
    <body>
        <nav>
            <div class="a1">
                <h2>Explore-PG</h2>
            </div>
            <div class="a2">
                <ul>
                    <li><a href="<?php echo "booked.php?id=$id"?>" >Booked Rooms</a></li>
                    <li><a href="logout.php" >Logout</a></li>
                </ul>
            </div>
        </nav>
        <div class="b1">
            <div class="b2">
                <div class="b3">
                    <?php
                        while($row=mysqli_fetch_array($result)){ 
                            $amt=$row['cost'];
                            ?>
                            <img src="<?php echo "../images/".$row['image'];?>" width="650px" alt="Image">
                    </div>
                <div class="b4">
                    <form action="" method="POST">
                    <ul>
                        <li style="display:flex;"><h3>Name : </h3><p style="margin-top:22px;margin-left:15px;"><?php echo $row['pgname']?></p></li>
                        <li style="display:flex;"><h3>Cost (per Month) : </h3><p style="margin-top:22px;margin-left:15px;"><?php echo $row['cost']?></p></li>
                        <li style="display:flex;"><h3>Place : </h3><p style="margin-top:22px;margin-left:15px;"><?php echo $row['address']?></p></li>
                        <li style="display:flex;"><h3>Sharing : </h3><p style="margin-top:22px;margin-left:15px;"><?php echo $row['sharing']?></p></li>
                        <li style="display:flex;"><h3>Total Rooms : </h3><input style="margin-left:20px;padding-left:20px" type="number" name="room" placeholder="Enter Room Count"></li>
                        <li style="display:flex;margin-top:20px;text-decoration:none"><input type="submit" name="submit" style="text-decoration:none;border:none;border-radius:10px;background-color:brown;padding:10px 135px;color:white" value="Book Now"></li>
                    </ul>
                        </form>
                </div>
                <?php } ?>
                
            </div>
        </div>
    </body>
</html>