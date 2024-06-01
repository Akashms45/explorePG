<?php
@include '../config.php';
//$id=$_GET['id'];

?>


<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Owner Dashboard </title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
         .right-side a{
            text-decoration: none;
            color:black;
        }
     </style>
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Admin-board</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
          <a href="customer.php"><div class="box-topic">Total Customers</div>
            <div class="number">
            <?php  
                        $count1="SELECT * FROM own_reg WHERE role='user'";
                        $count2=mysqli_query($conn,$count1);

                        if($count3=mysqli_num_rows($count2)){
                            echo "<h3>"."$count3"."</h3>";
                        }
                        else{
                            echo "0";
                        }
                    
                    
                    
                    ?>
            </div>
          </div></a>
        </div>
        <div class="box">
          <div class="right-side">
            <a href="owner.php"><div class="box-topic">Total Owners</div>
            <div class="number">
            <?php  
                        $count1="SELECT * FROM own_reg WHERE role='customer'";
                        $count2=mysqli_query($conn,$count1);

                        if($count3=mysqli_num_rows($count2)){
                            echo "<h3>"."$count3"."</h3>";
                        }
                        else{
                            echo "0";
                        }
                    
                    
                    
                    ?>
            </div></a>
          </div>

        </div>
        <div class="box">
          <div class="right-side">
            <a href="booked.php"><div class="box-topic">Total Rooms Booked</div>
            <div class="number">
            <?php  
                        $count1="SELECT * FROM booked";
                        $count2=mysqli_query($conn,$count1);

                        if($count3=mysqli_num_rows($count2)){
                            echo "<h3>"."$count3"."</h3>";
                        }
                        else{
                            echo "0";
                        }
                    
                    
                    
                    ?>
            </div></a>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <a href="#"><div class="box-topic">Total Revenue</div>
            <div class="number">
            <?php  
                        $sql = "SELECT SUM(cost) AS total FROM booked";
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {
                            // Retrieve the sum value
                            $row = $result->fetch_assoc();
                            $sum = $row['total'];
                        
                            // Display the result
                            echo $sum;
                        } else {
                            echo "0";
                        }
                    
                    
                    
                    ?>
            </div></a>
          </div>
        </div>
      </div>

      
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>