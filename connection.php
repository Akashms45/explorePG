<?php
       $server="localhost";
       $user="root";
       $password="";
       $database="project";
       $con= mysqli_connect($server,$user,$password,$database);
       
       if(mysqli_connect_error())
       {
           printf("connection Failed:%s\n", mysqli_connect_error());
           exit();
       }
?>