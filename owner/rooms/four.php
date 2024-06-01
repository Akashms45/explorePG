<?php
@include '../../config.php';
session_start();

$id=$_GET['id'];

if(isset($_POST['submit'])){
    $share = $_POST['share'];
    $room=$_POST['room'];
    $cost=$_POST['cost'];
    $faci=$_POST['faci'];

    $sql = "INSERT INTO room_res(sharing,rooms,cost,faci,code) VALUES('$share','$room','$cost','$faci','$id')";
    $res = mysqli_query($conn, $sql);
    //$last_id=mysqli_insert_id($conn);
    if($res){
      echo "<script>";
      echo "alert('Successfully Added')";
      echo "</script>";
    }else{
        echo "<script>";
        echo "alert('Not Successfull')";
        echo "</script>";
    }
    

}


?>

<html>
    <head>
        <meta charset="utf-8" />
        <title>registration form</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <link rel="stylesheet" href="../css/style1.css">
        <style>
         body{
            margin-left:280px;
            background-color:gainsboro;
         }
         .container{
            margin-left:300px;
         }
         form{
            margin-left:58px;
         }
        </style>
    </head>
    <body>
      <div class="part1" style="margin-left:500px;margin-top:60px">
         <h1>Four room Adding</h1>
      </div>
        
        <div class="container">
     
     <div class="progress-bar">
       
     <div class="form-outer">
        <form action="" method="POST" enctype="multipart/form-data">
           <div class="page slide-page">
            <div class="part1">
                <div class="title">
                Four Room:
            </div>
            </div>
            <div class="part4" style="visibility:hidden">
                <select name="share">
                    <option value="four">Four</option>
                </select>
            </div>
              <div class="field">
                 <div class="label">
                 Number of Rooms
                 </div>
                 <input type="number" name="room">
              </div>
              <div class="field">
                 <button class="firstNext next">Next</button>
              </div>
           </div>
           <div class="page">
              <div class="title">
              Four Room:
              </div>
              <div class="field">
                 <div class="label">
                    Cost per one room
                 </div>
                 <input type="number" name="cost">
              </div>
              <div class="field btns">
                 <button class="prev-1 prev">Previous</button>
                 <button class="next-1 next">Next</button>
              </div>
           </div>
           <div class="page">
              <div class="title">
              Four Room:
              </div> 
              <div class="field">
                 <div class="label">
                    Facility
                 </div>
                 <input type="text" name="faci">
              </div>
              <div class="field btns">
                 <button class="prev-2 prev">Previous</button>
                 <button class="next-2 next">Next</button>
              </div>
           </div>
           <div class="page">
              <div class="title">
              Four Room:
              </div>
              
              <div class="field">
                 <div class="label label1">
                 Are you Sure the Filled Details are Correct?
                 </div>
              </div>
              
              <div class="field btns">
                 <button class="prev-3 prev">Previous</button>
                 <button class="submit" name="submit">Submit</button>
              </div>
           </div>
           
        </form>
        <script src="../js/script.js"></script>
     </div>
  </div>
  
        
 </body>
</html>