<?php

@include '../config.php';
session_start();

$id=$_GET['id'];
$code=$_GET['code'];
$share=$_GET['share'];

if(isset($_POST['delete'])){
    $sql="DELETE FROM booked WHERE owner_code = '$code' AND user_code='$id' AND share='$share'";
    if ($conn->query($sql) === TRUE) {
    header("Location:booked.php?id=$id");
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
                    <h2>Are you sure you wanna delete <?php echo $share ?> Customer Room ?</h2>
                    <input type="submit" name="delete" value="Delete" style="background-color:red;color:white">
                    <input type="submit" name="cancel" value="Cancel">
                </form>
            </div>
        </div>
    </body>
</html>