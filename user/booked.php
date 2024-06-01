<?php 
@include '../config.php';

$id=$_GET['id'];

$query="SELECT * from booked where user_code='$id'";
$result=mysqli_query($conn,$query);

?>
<html>
    <head>
        <title>Booked Rooms</title>
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
                    <li><a href="<?php echo "dashboard.php?id=$id"?>" >Home Page</a></li>
                    <li><a href="logout.php" >Logout</a></li>
                </ul>
            </div>
        </nav>
        <div class="table-responsive">
                <table id="employee" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td><b>Pg-Name<b></td>
                            <td><b>Place</b></td>
                            <td><b>Phone</b></td>
                            <td><b>Sharing Type</b></td>
                            <td><b>Cost</b></td>
                            <td><b>Date</b></td>
                            <td><b>Action</b></td>

                        </tr>
                    </thead>
                    <?php
                    
                    while($row=mysqli_fetch_array($result)){?>
                        <tr>
                            <td><?php echo $row['pgname']?></td>
                            <td><?php echo $row['place']?></td>
                            <td><?php echo $row['phone']?></td>
                            <td><?php echo $row['share']?></td>
                            <td><?php echo $row['cost']?></td>
                            <td><?php echo $row['date']?></td>
                            <td><a href="<?php $own=$row['owner_code']; echo "feedback.php?id=$id&code=$own"?>">Feedback</a> | <a href="<?php echo "delete.php?id=$id&code=$own&share=$row[share]"?>">Delete</a></td>
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