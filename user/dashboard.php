<?php 
@include '../config.php';

$id=$_GET['id'];

$query="SELECT * from own_reg reg JOIN room_res res ON reg.code=res.code where reg.role='customer'";
$result=mysqli_query($conn,$query);

?>


<html>
    <head>
        <title>Rooms Booking</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
           <style>
            .table-responsive{
                margin-top:100px;
                margin-left:100px;
                width:1700px;
            }
            td{
                background-color: white;
            }
            .a2{
                margin-top:-40px;
                margin-left:1330px;
            }
            nav{
                margin-top:60px;
            }
            .a1{
                margin-left:100px;
            }
            
               
           </style>
    </head>
    <body>
        <nav>
            <div class="a1">
                <h2>Explore-PG</h2>
            </div>
            <div class="a2">
                <ul>
                    <li><a href="<?php echo "booked.php?id=$id"?>" >Booked Rooms</a></li>
                    <li><a href="logout.php" >Logout</a></li>
                </ul>
            </div>
        </nav>
        <div class="table-responsive">
                <table id="employee" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td><b>Image<b></td>
                            <td><b>Name</b></td>
                            <td><b>Place</b></td>
                            <td><b>Sharing Type</b></td>
                            <td><b>Cost</b></td>
                            <td><b>Action</b></td>
                        </tr>
                    </thead>
                    <?php
                    
                    while($row=mysqli_fetch_array($result)){?>
                        <tr>
                            <td><img src="<?php echo "../images/".$row['image'];?>" width="150px" alt="Image"></td>
                            <td><?php echo $row['pgname']?></td>
                            <td><?php echo $row['address']?></td>
                            <td><?php echo $row['sharing']?></td>
                            <td><?php echo $row['cost']?></td>
                            <td><a href="<?php echo "product.php?id=$id&code=$row[code]&sharing=$row[sharing]"?>">Check Now</a></td>
                        </tr>
                    <?php } ?>
                    
                    
                </table>

            </div>
            <script>  
            $(document).ready(function(){  
                $('#employee').DataTable();  
            });  
            </script> 
    </body>
</html>