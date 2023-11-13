<?php
//Databse connection file
include('config.php');

if(isset($_POST['submit1']))
{
	// Counting No fo skillss
$count = count($_POST["skill"]);
$c1 = count($_POST["name"]);
$c2 = count($_POST["lname"]);
//Getting post values
$skill=$_POST["skill"];
$name = $_POST["name"];
$lname = $_POST["lname"];
if($count > 1 && $c1 >1 && $c2 > 1)
{
	for($i=0; $i<$count && $i<$c1 && $i<$c2; $i++)
	{
		if(trim($_POST["skill"][$i] != '') && trim($_POST["skill"][$i] != '') && trim($_POST["skill"][$i] != ''))
		{
			$sql =mysqli_query($con,"INSERT INTO tblskills(name,lname,skill) VALUES('$name[$i]','$lname[$i]','$skill[$i]')");
		}
	}
echo "<script>alert('Skills inserted successfully');</script>";
}
else
{
echo "<script>alert('Please enter skill');</script>";
}
}
?>
<html>
	<head>
		<title>PHPGurukul Programmin Blog | Dynamically Add or Remove input fields in PHP with JQuery</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.min.js"></script>
	</head>
	<body>
		<div class="container">
			<br />
			<br />
			<h2 align="center">Dynamically Add or Remove input fields in PHP with JQuery</h2><br />
			<div class="form-group">
				<form name="add_name" id="add_name" method="post">
					<div class="table-responsive">
						<table class="table table-bordered" id="dynamic_field">
							<tr>
								<td><input type="text" name="name[]" placeholder="Enter your First Name" class="form-control name_list" /></td>
								<td><input type="text" name="lname[]" placeholder="Enter your Last Name" class="form-control name_list" /></td>
								<td><input type="text" name="skill[]" placeholder="Enter your Skill" class="form-control name_list" /></td>
								<td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
							</tr>
						</table>
						<input type="submit" name="submit1" id="submit1" class="btn btn-info" value="Submit" />
					</div>
				</form>
			</div>
		</div>
	</body>
	<script>
$(document).ready(function(){
	var i=1;
	$('#add').click(function(){
		i++;
		$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your First Name" class="form-control name_list" /></td><td><input type="text" name="lname[]" placeholder="Enter your Last Name" class="form-control name_list" /></td><td><input type="text" name="skill[]" placeholder="Enter your Skill" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
});
</script>
</html>
<?php
	include "read.php";
?>




