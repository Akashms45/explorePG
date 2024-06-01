<?php
@include 'config.php';
session_start();

if(isset($_POST['submit'])){
    $name1 = $_POST['first'];
    $phone=$_POST['last'];
    $email=$_POST['phone'];
    $dob=$_POST['adds'];
    $refer=$_POST['email'];
    $Cbname=$_POST['pgname'];
    $user_role=$_POST['facility'];
    $fname=$_POST['extra'];
    $anum=$_FILES['image']['name'];
    $mname=$_POST['owner'];
    $acc=$_POST['pass'];
    $ifsc=$_POST['conpass'];


     $ran = rand(100, 900);
     $uni_code = "OWN_" . $ran;

    $sql = "INSERT INTO own_reg(code,role,first,last,phone,address,email,pgname,facility,fur,image,password) VALUES('$uni_code','$mname','$name1','$phone','$email','$dob','$refer','$Cbname','$user_role','$fname','$anum','$acc')";
    

    $res = mysqli_query($conn, $sql);
    //$last_id=mysqli_insert_id($conn);
    if($res){
        
        move_uploaded_file($_FILES["image"]["tmp_name"], "images/".$_FILES["image"]["name"]);
        header("Location:home.html");
    }else{
        echo "<script>";
        echo "alert('no instered')";
        echo "</script>";
    }
    

}


?>

<html>
    <head>
        <meta charset="utf-8" />
        <title>registration form</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <link rel="stylesheet" href="css/style.css">
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
         <h1>Owner Registeration</h1>
      </div>
        
        <div class="container">
     
     <div class="progress-bar">
       
     <div class="form-outer">
        <form action="" method="POST" enctype="multipart/form-data">
           <div class="page slide-page">
            <div class="part1">
                <div class="title">
                Owner Register:
            </div>
            </div>
            <div class="part4" style="visibility:hidden">
                <select name="owner">
                    <option value="customer">owner</option>
                </select>
            </div>
              <div class="field">
                 <div class="label">
                    Owner First Name
                 </div>
                 <input type="text" name="first">
              </div>
              <div class="field">
                 <div class="label">
                    Owner Last Name
                 </div>
                 <input type="text" name="last">
              </div>
              <div class="field">
                 <div class="label">
                    Owner Phone Number
                 </div>
                 <input type="number" name="phone">
              </div>
              <div class="field">
                 <button class="firstNext next">Next</button>
              </div>
           </div>
           <div class="page">
              <div class="title">
              Owner Register:
              </div>
              <div class="field">
                 <div class="label">
                 Owner Address
                 </div>
                 <input type="text" name="adds">
              </div>
              <div class="field">
                 <div class="label">
                 Owner Email ID
                 </div>
                 <input type="text" name="email">
              </div>
              <div class="field">
                 <div class="label">
                 Owner PG-Name
                 </div>
                 <input type="text" name="pgname">
              </div>
             
              <div class="field btns">
                 <button class="prev-1 prev">Previous</button>
                 <button class="next-1 next">Next</button>
              </div>
           </div>
           <div class="page">
              <div class="title">
              Owner Register:
              </div> 
              <div class="field">
                 <div class="label">
                    Facility
                 </div>
                 <input type="text" name="facility">
              </div>
              <div class="field">
                 <div class="label">
                    Extra Features
                 </div>
                 <input type="text" name="extra">
              </div>
              <div class="field">
                 <div class="label">
                    Image
                 </div>
                 <input type="file" name="image">
              </div>
              <div class="field btns">
                 <button class="prev-2 prev">Previous</button>
                 <button class="next-2 next">Next</button>
              </div>
           </div>
           <div class="page">
              <div class="title">
              Owner Register:
              </div>
              
              <div class="field">
                 <div class="label label1">
                    Password
                 </div>
                 <input type="text" name="pass">
              </div>
              <div class="field">
                 <div class="label">
                    Confirm Password
                 </div>
                 <input type="text" name="conpass">
              </div>
              
              <div class="field btns">
                 <button class="prev-3 prev">Previous</button>
                 <button class="submit" name="submit">Submit</button>
              </div>
           </div>
           
        </form>
        <script src="js/script.js"></script>
     </div>
  </div>
  
        
 </body>
</html>