<?php
@include 'config.php';
session_start();

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email=$_POST['email'];
    $msg=$_POST['msg'];


    $sql = "INSERT INTO contact(name,email,msg) VALUES('$name','$email','$msg')";
    

    $res = mysqli_query($conn, $sql);
    //$last_id=mysqli_insert_id($conn);
    if($res){
        echo "<script>";
        echo "alert('Successfully Sent')";
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
        <title>contact us page</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="contactus.css">
        <style>
            input{
                color:white;
            }
        </style>
    </head>
    <body>
        <form>
        <section class="contact">
            <div class="content">
                <h2>contact us</h2>
                <p>we love hearing from you! Here are some simple ways to get in touch with us</p>
            </div>
            <div class="container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon">⌂</div>
                        <div class="text">
                            <h3>address</h3>
                            <p>explore PG head quarters,3rd block SS layout davangere</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon">&#9990;</div>
                        <div class="text">
                            <h3>phone</h3>
                            <p>6363334986</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon">&#x2709;</div>
                            <div class="text">
                                <h3>email</h3>
                                <p>abcd@gmail.com</p>
                            </div>
                      </div>
                  </div>
                    <div class="contactform">
                            <form action="" method="POST">
                                <h2>send message</h2>
                                <div class="inputBox">
                                    <input type="text" name="name">
                                    <span>full name</span>
                            </div><br>
                                <div class="inputBox">
                                    <input type="text" name="email" >
                                        <span>email</span>
                                        </div><br>
                                        <div class="inputBox">
                                            <input type="text" name="msg" style="color:white">
                                            <span>type your message......</span>
                                        </div><br>
                                        <div class="inputBox">
                                            <input type="submit" name="submit" value="send">
                                        </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>