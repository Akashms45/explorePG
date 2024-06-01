<?php

@include '../config.php';
session_start();

$id=$_GET['id'];
$share=$_GET['share'];

if(isset($_POST['delete'])){
    $sql="DELETE FROM room_res WHERE code = '$id' AND sharing='$share'";
    $sql1="DELETE FROM booked WHERE owner_code = '$id' AND share='$share'";
    if ($conn->query($sql) === TRUE && $conn->query($sql1) === TRUE) {
    header("Location:settings.php?id=$id");
    } else {
        echo "Not Deleted";
    }
}

?>



<html>
    <head>
        <title>Open</title>
        <style>
          .part1{
              margin-left:700px;
              width:500px;
              height:150px;
              padding-left:20px;
              padding-top:50px;
          } 
          input{
              margin-left:120px;
              margin-top:50px;
              padding:10px 15px;
              border:none;
              
          }
        </style>
    </head>
    <body>
        <div class="part1">
            <div class="part2">
                <form action="" method="POST">
                    <h2>Are you sure you wanna delete <?php echo $share ?> room ?</h2>
                    <input type="submit" name="delete" value="Delete" style="background-color:red;color:white">
                    <input type="submit" name="cancel" value="Cancel">
                </form>
            </div>
        </div>
    </body>
</html>