<!DOCTYPE html>
<html>
    <head><title>Live Search</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

        <!-- jQuery UI library -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
</head>
<style>
    *{
        font-family: helvetica;
    }
    input, button{
        padding:10px 15px;
        outline:none;
        border-radius:5px ;
        border:1px solid black;
    }
    label{
        font-size:12px;
    }
    h4{
        color:green;
    }
    table{
        width: 100%;
        border:1px solid black;
        text-align: center; 
    }
    th{
        text-transform: uppercase;
    }
    td{
        border:1px solid black;
    }
</style>
    <body>
    <h4>Live Search</h4>
    <input type="text" id="searchconsu" onkeyup="Search()" placeholder="Search.." style="background:white;border-radius:50px;">
    <table>
        <tr>
            <th>Supplier</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Unit</th>
            <th>Unit Cost</th>
            <th>Total Cost</th>
        </tr>
        <?php 
        include "connection.php";
            $query = mysqli_query($conn, "select * from `autos`");
            while($row=mysqli_fetch_array($query))
            {
        ?>

                <tr>
                    <td><?php echo $row['supplier'];?></td>
                    <td><?php echo $row['product'];?></td>
                    <td><?php echo $row['quantity'];?></td>
                    <td><?php echo $row['unit'];?></td>
                    <td><?php echo $row['unit_cost'];?></td>
                    <td><?php echo $row['total_cost'];?></td>
                    
                    
                </tr>
        <?php
            }
            ?>
    </table>
    </body>
   
</html>