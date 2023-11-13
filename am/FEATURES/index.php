<!DOCTYPE html>
<html>
    <head><title>CRUD / Auto Fill / Auto Suggest</title>
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
</style>
    <body>
        <form action="add.php" method="post">
        <label for="supplier">Supplier : </label><br>
        <input type="text" name="supplier" id="supplier"><br><br>

        <label for="product">Product :</label><br>
        <input type="text" name="product" id="product"><br><br>
        <h4>Auto Suggest Feature</h4>
        <label for="unit">Unit :</label><br>
        <input type="text" name="unit" id="unit" placeholder="Unit" value="" style="border:3px solid green;" required=""><br><br>
        <h4>Auto Compute Feature</h4>
        <label for="">Quantity :</label><br>
        <input type="number" name="quantity" min="0" id="quantity" placeholder="Quantity"><br><br>

        <label for="unit_cost">Unit Cost :</label><br>
        <input type="number" name="unit_cost" id="unit_cost" placeholder="Unit Cost"
        min="0" step=".01" value=""><br><br>
        
        <label for="total_cost">Total Cost :</label><br>
        <input type="number" name="total_cost" id="total_cost" style="border:3px solid green;" step=".01" placeholder="Total Cost"><br><br>
        <button type="submit" name="save" id="save">Save</button>
        </form>

        <script>

            $(function(){
                $( "#unit" ).autocomplete({
                source: 'unit.php',
                });
            });

            $("#quantity,#unit_cost").keyup(function () {
                $('#total_cost').val($('#quantity').val() * $('#unit_cost').val());
            });

        


        </script>
    </body>

</html>