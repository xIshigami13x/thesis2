<?php
require 'config.php';
if (isset($_POST["submit"])){
	$name = $_POST["name"];
	$password = $_POST["password"];
	$result = mysqli_query($conn, "SELECT * FROM admin_tb WHERE name = '$name'");
	$row = mysqli_fetch_assoc($result);
	if(mysqli_num_rows($result) > 0){
		if (password_verify($password,$row['password'])){
		    $_SESSION["login"] = true;
		    $_SESSION["ID"] = $row["ID"];
		    header("location: dashboard_personnel.php");
		    }
		    
		else{
			echo 
		"<script> alert('Wrong Password'); </script>";

		}
	}

else{
	echo 
		"<script> alert('User Not Registered'); </script>";
 }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login page</title>
	<style type="text/css">
		

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
   width: 50%;
	margin: 0 auto;
	padding: 10px;
	margin:5px;
	border-radius: 3px;
}

.image{
   float: left;
   width: 110px;
   height: 110px;
   margin-right:-70px;
   border-radius: 100%;
   
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
	padding: 8px 17px 8px 17px;
	background-color:green;
	color: white;
	border-radius: 4px;
}  
button:hover{
	background-color:lightgreen;
	color: black;
	border-radius: 4px;

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

</style>
</head>
<body>
<header>
   <img src="lgu.jpg" class="image">

	<h1><b>CONCEPCION TARLAC <br> BUSINESS PERMIT APPLICATION</b></h1></header>

<form class="Form" action="" method="post">
		<div class="container">
		<h2>PERSONNEL</h2>

			<input type="text" placeholder="Email" id = "name" name="name" required><br>

			<input type="password" placeholder="Password" id = "password" name="password" required><br>

			<button type="submit" name="submit">LOGIN</button>
			<br>
			
		</div>
	   </form>

</body>

<footer class="foot">
	
<p>Copyright &copy; 2023 Municipality of Conception, Province of Tarlac. All rights reserved.</p>
	
</footer>

</html>

