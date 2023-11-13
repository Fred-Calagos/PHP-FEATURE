<!DOCTYPE html>
<html>
    <head><title>Auto Fill</title>
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
    <h4>Auto Fill Textbox</h4>
        <label for="supplier">Supplier : </label><br>
        <input type="text" name="supplier" id="supplier"><br><br>

        <label for="product">Product :</label><br>
        <input type="text" name="product" id="product"
        onchange="GetProDetails(this.value)"><br><br>

        <label for="unit">Unit :</label><br>
        <input type="text" name="unit" id="unit" placeholder="Unit" value=""  required=""><br><br>
        <label for="">Quantity :</label><br>
        <input type="number" name="quantity" min="0" id="quantity" placeholder="Quantity"><br><br>

        <label for="unit_cost">Unit Cost :</label><br>
        <input type="number" name="unit_cost" id="unit_cost" placeholder="Unit Cost"
        min="0" step=".01" value=""><br><br>
        
        <label for="total_cost">Total Cost :</label><br>
        <input type="number" name="total_cost" id="total_cost" step=".01" placeholder="Total Cost"><br><br>
     
    </body>
    <script>

        $(function() {
            $( "#product" ).autocomplete({
            source: 'product.php',
            });
        });

        function GetProDetails(str){
        if(str.length == 0){
            document.getElementById("supplier").value = "";
            document.getElementById("unit").value = "";
            document.getElementById("quantity").value = "";
            document.getElementById("unit_cost").value = "";
            document.getElementById("total_cost").value = "";
            return;
        }
        else{

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
            
                if (this.readyState == 4 && this.status == 200){
                    
                    var myObj = JSON.parse(this.responseText);
                    document.getElementById("supplier").value = myObj[0];
                    document.getElementById("unit").value = myObj[1];
                    document.getElementById("quantity").value = myObj[2];
                    document.getElementById("unit_cost").value = myObj[3];
                    document.getElementById("total_cost").value = myObj[4];
                }
            };
            xmlhttp.open("GET", "fill.php?product=" + str, true);
            xmlhttp.send();

        }
     }
    </script>
</html>