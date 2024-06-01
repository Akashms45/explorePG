<?php

@include '../config.php';
$id=$_GET['id'];

?>


<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Owner Dashboard</title>
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
      <span class="logo_name">Owner-board</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="<?php echo "dashboard.php?id=$id"?>">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?php echo "add_room.php?id=$id"?>"  class="active">
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
        <span class="dashboard">Add Rooms</span>
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
            <a href="<?php echo "rooms/single.php?id=$id"?>"><div class="box-topic">Single Sharing</div>
            <div class="number">
            <?php  
                        $count1="SELECT * FROM room_res WHERE sharing='single' AND code='$id'";
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
              <span class="text">Total Single Bedrooom</span></a>
            </div>
          </div>  
        </div>
        <div class="box">
          <div class="right-side">
            <a href="<?php echo "rooms/double.php?id=$id"?>"><div class="box-topic">Double Sharing</div>
            <div class="number">
            <?php  
                        $count1="SELECT * FROM room_res WHERE code='$id' AND sharing='double'";
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
              <span class="text">Total Double Bedrooom</span></a>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <a href="<?php echo "rooms/triple.php?id=$id"?>"><div class="box-topic">Triple Sharing</div>
            <div class="number">
            <?php  
                        $count1="SELECT * FROM room_res WHERE code='$id' AND sharing='triple'";
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
              <span class="text">Total Three Bedroom</span></a>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <a href="<?php echo "rooms/four.php?id=$id"?>"><div class="box-topic">Four Sharing</div>
            <div class="number">
            <?php  
                        $count1="SELECT * FROM room_res WHERE code='$id' AND sharing='four'";
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
              <span class="text">Total Four Bedroom</span></a>
            </div>
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