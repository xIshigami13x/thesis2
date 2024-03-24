<?php
require 'config.php';
if(!empty($_SESSION["ID"])){
	$id = $_SESSION["ID"];
	$result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
	$row = mysqli_fetch_assoc($result);	
}
else{
	header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Application Form</title>
	<style type="text/css">
		
body{
	font-family: arial, sans-serif;

		}
header{
    background-color: green;
    color: white;
    text-align: center; 
    width: 100.45%;
    height: 80%;
    margin-top:-24px;
    margin-left: -9px;
    padding: 5px;
}
a{
	text-decoration: none;
	color: white;
	font-size: 20px;
	display: inline-block;
    justify-content: space-between;
    padding: 10px;
    text-align: center;
    margin: 0 10px 0 10px;
}
a:hover{

	background-color:white;
	color: black;

}
footer{

	background-color: green;
	color: white;
	text-align: center;
	margin: 0 -8px -10px -8px;
	padding: 8px 0 8px 0;
	margin-top:250px;
  }

button{
	color:white ;
	background-color: green;
	padding: 1px;
	margin-top: 25px ;
	margin-left: 36%;
}
.button2{
	color:white ;
	background-color: green;
	padding: 5px;
	margin-top: 25px ;
	margin-left: 38%;
}
button:hover{
	background-color: white;
	color: black;
}
img{
	float: left;
	border-radius: 90px;
}
.logo{
	margin: 23px -50px 15px 0;
}

form{
	background-color: white;
	border: 1px solid black;
	width:50%;
	margin:0 auto;
	margin-bottom:2rem;
	margin-top:3rem;
	padding-bottom:3rem;
	box-shadow: 5px 5px 8px gray;
}

h2{
	padding-bottom:10px;
	padding-top: 10px;
	background-color: green;
	color: white;
	text-align: center;
	font-family: verdana,sans-serif;
	width: 100%;
	margin: 0 auto;
}

.btn{
	margin-left: 43%;
	padding: 7px; 	 
}
.btn:hover{
	color: black;
}
h5{
	margin-top:10px;
	margin-bottom: 2px;
}
.container{
	padding-bottom: 10px;
	margin-bottom: 1rem;

}
.file{
	padding-left: 60px;
	padding-top: 15px;

}
.name{
	padding-right: 460px;
}

label{
	font-size: 13px;
	margin-top: 40px;


}
</style>

</head>
<body>
<header><img src="lgu.jpg" height="8%" width="8%" class="logo">
	<h1><b>CONCEPCION TARLAC <br>BUSINESS PERMIT APPLICATION <br>
	</b></h1>

<div class="navbar">
    <a href="dashboard.php">Dashboard</a>
    <a href="aboutus.php">About Us</a>
    <a href="track.php">Tracking</a>
</div>

</header>

<form action="assessor_upload.php"enctype="multipart/form-data" method="post">
<div class="container">
		<h2>DOCUMENTARY REQUIREMENTS</h2>
		<input type="hidden" value="Pending" name="status">
	<div class="file" >
		<label>*Applicant Name:</label><br>
		<input type="text" class="name" name="name" required><br><br>
		<label>* Real Property Tax(last year)</label>
		<input  type="file" id="file1"  name="file1" required>
	</div>

</div>

		<button type="submit" name="submit" class="btn" >SUBMIT</button>
 			
</form>

  

</body>
<footer><p>Copyright &copy; 2023 Municipality of Conception, Province of Tarlac. All rights reserved.</p></footer>
</html>
