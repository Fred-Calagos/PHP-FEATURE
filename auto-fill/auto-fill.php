<html>
  
<head>
    <script src=
        "https://code.jquery.com/jquery-3.2.1.min.js">
    </script>
  
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        type="text/javascript">
    </script>
      
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
</head>
  
<body>
    <div class="container">
        <h1>Auto Fill</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Supplier:</label>
                    <input type="text" name="supplier" 
                        id="supplier" class="form-control"
                        placeholder='Supplier'
                        value="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Product Name:</label>
                    <input type="text" name="product_name" 
                        id="product_name" class="form-control"
                        placeholder='Last Name'
                        value="" onkeyup="GetDetail(this.value); autocomplete()" value="">
                        <ul id="product_list"></ul> 
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Quantity:</label>
                    <input type="text" name="quantity" 
                        id="quantity" class="form-control"
                        placeholder='Quantity'
                        value="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Unit:</label>
                    <input type="text" name="unit" 
                        id="unit" class="form-control"
                        placeholder='Unit'
                        value="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Unit Cost:</label>
                    <input type="text" name="unit_cost" 
                        id="unit_cost" class="form-control"
                        placeholder='Unit Cost'
                        value="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Total Cost:</label>
                    <input type="text" name="total_cost" 
                        id="total_cost" class="form-control"
                        placeholder='Total Cost'
                        value="">
                </div>
            </div>
        </div>
    </div>
    <script>
  
        // onkeyup event will occur when the user 
        // release the key and calls the function
        // assigned to this event
        function GetDetail(str) {
            if (str.length == 0) {
                document.getElementById("supplier").value = "";
               
                document.getElementById("quantity").value = "";
                document.getElementById("unit").value = "";
                document.getElementById("unit_cost").value = "";
                document.getElementById("total_cost").value = "";
                return;
            }
            else {
  
                // Creates a new XMLHttpRequest object
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
  
                    // Defines a function to be called when
                    // the readyState property changes
                    if (this.readyState == 4 && 
                            this.status == 200) {
                          
                        // Typical action to be performed
                        // when the document is ready
                        var myObj = JSON.parse(this.responseText);
  
                        // Returns the response data as a
                        // string and store this array in
                        // a variable assign the value 
                        // received to first name input field
                          
                        document.getElementById
                            ("supplier").value = myObj[0];
                          
                        // Assign the value received to
                        // last name input field
                        
                            document.getElementById(
                            "quantity").value = myObj[1];
                            document.getElementById(
                            "unit").value = myObj[2];
                            document.getElementById(
                            "unit_cost").value = myObj[3];
                            document.getElementById(
                            "total_cost").value = myObj[4];
                    }
                };
  
                // xhttp.open("GET", "filename", true);
                xmlhttp.open("GET", "conn.php?product_name=" + str, true);
                  
                // Sends the request to the server
                xmlhttp.send();
            }
        }
    </script>
</body>
  
</html>