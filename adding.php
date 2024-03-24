<?php  
require 'config.php';
if (isset($_POST["Submit"])) {
	$name = $_POST["name"];
	$password = $_POST["password"];
	$create_at = "";
	if (!empty($_POST['department'])) {
      foreach ($_POST['department'] as $department ) {

		if($password == true){	
			$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
			$query = "INSERT INTO admin_tb VALUES('','$name','$password','$department')";
			mysqli_query($conn,$query);
			echo
			"<script> alert('Registration Successful'); </script>";
			header("location: admin.php");
		}
	
	}
}
}	 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration page</title>
	<style>

header{
	background-color: green;
    margin: 0px 0px 10px 0px;
    padding: 10px;
}
body{
	text-align: center;
	width: 100%;
	margin: 0 auto;
}
input{
    width: 79%;
	margin: 0 auto;
	padding: 10px;
	margin:5px;
	border-radius: 3px;
}

form{
	background-color: white;
	font-family: verdana,sans-serif;
	border: 1px solid black;
	width: 50%;
	margin:0 auto;
	margin-bottom:2rem;
	margin-top:3rem;
	padding-bottom:3rem;
	box-shadow: 5px 5px 8px gray;
	border-radius: 4px;

}
button{

	margin-top:2rem;
	margin-left: 150px;
	padding: 8px 17px 8px 17px;
	background-color:green;
	color: white;
	border-radius: 4px;
	
}  
button:hover{
	background-color:lightgreen;
	color: black;

}
.container{
	width: 65%;
	margin: 0 auto;
}
h1{
	color: white;
	font-family: verdana,sans-serif;
}
h2{
	margin-bottom: 2rem;
}
footer{
	background-color:green;
	color: white;
	padding: 1px;
	margin-top: 13%;

}

a{
	text-decoration: none;
}
.foot{
	margin-top: 17%;

}

.image{
   float: left;
   width: 110px;
   height: 110px;
   margin-right:-70px;
   border-radius: 100%;
   
}
.back{
	color: white;
	background-color: green;
	padding: 8px 17px 8px 17px;
	border-radius: 4px;
	border: 1px solid black;
}
.back:hover{
	color: black;
	background-color: lightgreen;
}
select{
	padding-top:10px;
	padding-bottom: 10px;
	margin-bottom:-11px;
}
</style>

	
</head>

<body>
<header><img src="lgu.jpg" class="image">
		<h1><b>CONCEPCION TARLAC <br>BUSINESS PERMIT APPLICATION <br>
	   </b></h1></header>


	<form action="" method="post" autocomplete="off">
	<div class="container">
			<h2>New Personnel</h2>	

			<div class="select">
  <select id="department" name="department[]" required>
      <option value="" disabled selected>Select Department</option>
      <option value="Business Permit Licensing Office(Treasury)">Business Permit Licensing Office(Treasury)
</option>
      <option value="Zoning Municipal Planning and Development office">Zoning Municipal Planning and Development office</option>
      <option value="Building Permit & Occupancy Permit Municipal Engineering Office">Building Permit & Occupancy Permit Municipal Engineering Office</option>
      <option value="Bureau of Fire Protection(BFP)">Bureau of Fire Protection(BFP)</option>
      <option value="Municipal Assessor’s Office">Municipal Assessor’s Office
</option>
      <option value="Municipal Health(Sanitation)">Municipal Health(Sanitation)
</option>
      <option value="Office of the municipal Market Administrator">Office of the municipal Market Administrator</option>
      <option value="Municipal Environment and Natural Resources Officer">Municipal Environment and Natural Resources Officer
</option>
  </select>
  </div>
  <br>

			<input type="text" placeholder="Name" name="name" required><br> 

			<input type="password" placeholder="Password" name="password" required><br>

			<a class="back" href="admin.php">Back</a> <button type="submit"  name="Submit" >Create</button>
			
			
			
	</div>
	</form>

</body>
<footer>
	<p>Copyright &copy; 2023 Municipality of Conception, Province of Tarlac. All rights reserved.</p>
</footer>
</html>