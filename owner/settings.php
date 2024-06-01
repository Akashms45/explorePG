<?php 
@include '../config.php';

$id=$_GET['id'];

$query="SELECT * from room_res WHERE code='$id'";
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
        <h1 align="center">Settings</h1>
        <div class="table-responsive">
                <table id="employee" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td><b>Sharing<b></td>
                            <td><b>Cost</b></td>
                            <td><b>Facility</b></td>
                            <td><b>Action</b></td>
                        </tr>
                    </thead>
                    <?php
                    
                    while($row=mysqli_fetch_array($result)){?>
                        <tr>
                            <td><?php echo $row['sharing']?></td>
                            <td><?php echo $row['cost']?></td>
                            <td><?php echo $row['faci']?></td>
                            <td><a href="<?php echo "delete.php?id=$id&share=$row[sharing]"?>">Delete</a></td>
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