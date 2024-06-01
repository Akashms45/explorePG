<?php 
@include '../config.php';

$id=$_GET['id'];

$query="SELECT * from booked where owner_code='$id'";
$result=mysqli_query($conn,$query);

?>

<html>
    <head>
        <title>Customer Report</title>
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
        </style>
    </head>
    <body>
        <div class="part1" style="display:flex">
            <h1 align="center" style="margin-top:100px;margin-left:90px;">Customer Report</h1>
            <h3 style="margin-top:110px;margin-left:1290px;"><a href="<?php echo "feedback.php?id=$id"?>">Feedback</a></h3>
        </div>
        <div class="table-responsive">
                <table id="employee" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td><b>Customer Code<b></td>
                            <td><b>Customer Name<b></td>
                            <td><b>Share</b></td>
                            <td><b>Rooms</b></td>
                            <td><b>Cost</b></td>
                            <td><b>Date</b></td>
                            <td><b>Action</b></td>
                        </tr>
                    </thead>
                    <?php
                    
                    while($row=mysqli_fetch_array($result)){

                        $user=$row['user_code'];

                        $query1="SELECT * from own_reg where code='$user'";
                        $result1=mysqli_query($conn,$query1);
                        $row1=mysqli_fetch_array($result1);
                        $user_code=$row1['first'];
                        
                        
                        
                        ?>
                        <tr>
                            <td><?php echo $row['user_code']?></td>
                            <td><?php echo $user_code?></td>
                            <td><?php echo $row['share']?></td>
                            <td><?php echo $row['rooms']?></td>
                            <td><?php echo $row['cost']?></td>
                            <td><?php echo $row['date']?></td>
                            <td><a href="<?php echo "delete1.php?id=$id&code=$row[user_code]"?>">Delete</a></td>
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