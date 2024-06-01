<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);

    $select = " SELECT * FROM own_reg WHERE email = '$email' && password = '$pass'  ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

    $row = mysqli_fetch_array($result);
	if($row['role']=='customer'){
		header('location:owner/dashboard.php?id='.$row['code']);
	}
    if($row['role']=='user'){
		header('location:user/dashboard.php?id='.$row['code']);
	}
    if($row['role']=='admin'){
		header('location:admin/dashboard.php?id='.$row['code']);
	}
	
    

}else{
    echo "<script>";
    echo "alert('incorrect Credentials')";
    echo "</script>";
}

}
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
    <!----CSS link----->
    <link rel="stylesheet" href="css/login.css">
    <!----FontAwesome CDN Link---->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <style>
        @media screen and (max-width: 1050px){
    .container{
        grid-gap: 5rem;
    }
}
@media screen and (max-width: 1000px){
    form{
       width:290px;
    }
    .title{
        margin: 8px 0;
        font-size: 2.4rem;
    }
    .img img{
        width: 400px;
    }
}
@media screen and (max-width: 900px){
    body{
        background-color: #6b5cff;
    }
    .container{
        grid-template-columns: 1fr;
    }
    .img{
        display:none;
    }
    .wave{
        display:none;
    }
    .login-content{
        justify-content: center;
        color: #6b5cff;
    }
    .form-login{
        padding: 40px;
        background-color: #fff;
        width: 330px;
        border-radius: 8px;
        box-shadow: 3px 3px 15px rgba(88, 34, 160, 0.2);
        margin-left:-15px;
    }
}
    </style>
  </head>
  <body>
	  <img src="https://i.ibb.co/XWdPc2X/wave-01.png" class="wave">
	  <div class="container">
		  <div class="img">
			  <img src="https://i.ibb.co/JvXP8rW/phone.png">
		  </div>
		  <div class="login-content">
			  <form action="" method="POST" class="form-login">
				  <img src="https://i.ibb.co/H4f3Hkv/profile.png">
				  <h2 class="title">Login</h2>
				  <div class="input-div one">
				  <div class="i">
					  <i class="fas fa-user"></i>
				  </div>
				  <div class="div">
					  <h5>Email</h5>
					  <input type="text" class="input" name="email">
				  </div>
				  </div>
				  <div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<h5>Password</h5>
						<input type="password" class="input" name="password">
					</div>
					</div>
					<input type="submit" name="submit" class="btn" value="Login">
			  </form>
		  </div>
	  </div>


    <!---JS CDN Link---->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--Custom File Link--->
    <script src="js/login.js"></script>
  </body>
</html>