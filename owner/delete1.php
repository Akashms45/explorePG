<?php

@include '../config.php';
session_start();

$id=$_GET['id'];
$code=$_GET['code'];

if(isset($_POST['delete'])){
    $sql="DELETE FROM booked WHERE owner_code = '$id' AND user_code='$code'";
    if ($conn->query($sql) === TRUE) {
    header("Location:customer_report.php?id=$id");
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
                    <h2>Are you sure you wanna delete <?php echo $code ?> Customer Room ?</h2>
                    <input type="submit" name="delete" value="Delete" style="background-color:red;color:white">
                    <input type="submit" name="cancel" value="Cancel">
                </form>
            </div>
        </div>
    </body>
</html>