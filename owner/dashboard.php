<?php
@include '../config.php';
$id=$_GET['id'];

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
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Owner-board</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="<?php echo "dashboard.php?id=$id"?>" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?php echo "add_room.php?id=$id"?>">
            <i class='bx bx-box' ></i>
            <span class="links_name">Add Rooms</span>
          </a>
        </li>
        <li>
          <a href="<?php echo "update_room.php?id=$id"?>">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Update Rooms</span>
          </a>
        </li>
        <li>
          <a href="<?php echo "customer_report.php?id=$id"?>">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Customer Report</span>
          </a>
        </li>
        <li>
          <a href="<?php echo "settings.php?id=$id"?>">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Settings</span>
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
            <div class="box-topic">Total Rooms</div>
            <div class="number">
            <?php  
                        $count1="SELECT * FROM room_res WHERE code='$id'";
                        $count2=mysqli_query($conn,$count1);

                        if($count3=mysqli_num_rows($count2)){
                            echo "<h3>"."$count3"."</h3>";
                        }
                        else{
                            echo "0";
                        }
                    
                    
                    
                    ?>
            </div>
            <div class="indicator">
              <span class="text">Current Data</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Customers</div>
            <div class="number">
            <?php  
                        $count1="SELECT * FROM booked WHERE owner_code='$id'";
                        $count2=mysqli_query($conn,$count1);

                        if($count3=mysqli_num_rows($count2)){
                            echo "<h3>"."$count3"."</h3>";
                        }
                        else{
                            echo "0";
                        }
                    
                    
                    
                    ?>
            </div>
            <div class="indicator">
              <span class="text">Current Data</span>
            </div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Revenue</div>
            <div class="number">
            <?php  
                        $sql = "SELECT SUM(cost) AS total FROM booked WHERE owner_code='$id'";
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
            </div>
            <div class="indicator">
              <span class="text">Current Data</span>
            </div>
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
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