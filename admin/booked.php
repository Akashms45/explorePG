<?php 
@include '../config.php';

//$id=$_GET['id'];

$query="SELECT * from booked";
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
        <h1 align="center">Rooms Booked List</h1>
        <div class="table-responsive">
                <table id="employee" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td><b>Customer Code<b></td>
                            <td><b>Customer Name<b></td>
                            <td><b>Onwer Code</b></td>
                            <td><b>Sharing</b></td>
                            <td><b>Cost</b></td>
                            <td><b>Date</b></td>
                            <td><b>Action</b></td>
                        </tr>
                    </thead>
                    <?php
                    
                    while($row=mysqli_fetch_array($result)){
                        
                        $user=$row['user_code'];
                        $owner=$row['owner_code'];

                        $query1="SELECT * from own_reg where code='$user'";
                        $result1=mysqli_query($conn,$query1);
                        $row1=mysqli_fetch_array($result1);
                        $user_code=$row1['first'];
                        
                        ?>
                        <tr>
                            <td><?php echo $row['user_code']?></td>
                            <td><?php echo $user_code?></td>
                            <td><?php echo $row['pgname']?></td>
                            <td><?php echo $row['share']?></td>
                            <td><?php echo $row['cost']?></td>
                            <td><?php echo $row['date']?></td>
                            <td><a href="<?php echo "delete.php?code=$row[user_code]&id=$row[owner_code]&share=$row[share]"?>">Delete</a></td>
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