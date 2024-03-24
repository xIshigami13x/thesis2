<?php  
require 'config.php';
if (isset($_POST["Submit"])) {
	$name = $_POST["name"];
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$confirmpassword = $_POST["confirmpassword"];
	$duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
	if (mysqli_num_rows($duplicate) > 0) {
		   echo 
		   "<script> alert('Username or Email Has Already Taken'); </script>";
	}
	else{
		if($password == $confirmpassword){	
			$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
			$query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password')";
			mysqli_query($conn,$query);
			echo
			"<script> alert('Registration Successful'); </script>";
		}
	else{
			echo 
		   "<script> alert('Password Does Not Match'); </script>";
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
    width: 50%;
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
</style>

	
</head>

<body>
<header><img src="lgu.jpg" class="image">
		<h1><b>CONCEPCION TARLAC <br>BUSINESS PERMIT APPLICATION <br>
	   </b></h1></header>



	<form action="" method="post" autocomplete="off">
	<div class="container">
			<h2>Register</h2>	

			<input type="text" placeholder="Name" name="name" required><br> 

			<input type="text" placeholder="User Name" name="username" required><br>

			<input type="text" placeholder="Email" name="email" required><br>

			<input type="password" placeholder="Password" name="password" required><br>

			<input type="Confirmpassword" placeholder="Confirm Password" name="confirmpassword" required><br>

			<button type="submit"  name="Submit" >Create</button>
			<br>
			
			<p>Have an account?<a href="login.php">Login</a></p>
	</div>
	</form>

</body>
<footer>
	<p>Copyright &copy; 2023 Municipality of Conception, Province of Tarlac. All rights reserved.</p>
</footer>
</html>