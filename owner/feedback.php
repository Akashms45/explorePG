<?php 
@include '../config.php';

$id=$_GET['id'];

$query="SELECT * from feedback where owner='$id'";
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
        <div class="part1">
            <h1 align="center">Customer Feedback</h1>
        </div>
        <div class="table-responsive">
                <table id="employee" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td><b>Customer Code<b></td>
                            <td><b>Customer Name<b></td>
                            <td><b>Feedback</b></td>
                            <td><b>Ratings</b></td>
                        </tr>
                    </thead>
                    <?php
                    
                    while($row=mysqli_fetch_array($result)){

                        $user=$row['user'];

                        $query1="SELECT * from own_reg where code='$user'";
                        $result1=mysqli_query($conn,$query1);
                        $row1=mysqli_fetch_array($result1);
                        $user_code=$row1['first'];
                        
                        
                        
                        ?>
                        <tr>
                            <td><?php echo $row['user']?></td>
                            <td><?php echo $user_code?></td>
                            <td><?php echo $row['feedback']?></td>
                            <td><?php echo $row['rating']?></td>
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