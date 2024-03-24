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

.logout{
	float: right;
	padding: 6px 23px 6px 23px;
	border: black solid 2px;
	margin-left:-85px;
	margin-top:-70px;
	margin-right:20px;
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

.input{
	width: 99%;
	margin-bottom: 7px;

}
p{
	margin-top:30px;
	margin-left: 50px;
}

#file1, #file2, #file3, #file4, #file5, #file6{
	width: 60%;
	margin-left:20px auto;
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
	padding-bottom: 20px;
	margin-bottom: 2rem;
}
.file{
	padding-left: 220px;
	padding-top: 10px;

}
.container2{
	padding-bottom: 10px;
	padding-left:50px;
	padding-right: 50px;

}
.container3{
	padding-bottom: 10px;
	padding-left:50px;
	padding-right: 50px;
	padding-top: 20px;

}
.date{
	width:20.30%;
	margin-top: 20px;
}
.org{
	margin-left: 125px;
}
.check1{
	margin-top: 15px;
}

label{
	font-size: 13px;
	margin-top: 40px;

}
</style>

</head>
<body>
<header><img src="lgu.jpg" height="8%" width="8%" class="logo">
	<h1><b>BUSINESS PERMIT LICENCING OFFICE (Treasury) <br><br>
	</b></h1>
	<a href="logout.php" class="logout">Logout</a>

<div class="navbar">
    <a href="index.php">Home</a>
    <a href="aboutus.php">About Us</a>
    <a href="https://mail.google.com">Contact Us</a>
    <a href="track.php">Tracking</a>
    <a href="#Account">Account</a>
</div>

</header>

<form action="forms2.php"enctype="multipart/form-data" method="post">
<div class="container">
		<h2>DOCUMENTARY REQUIREMENTS</h2>
	<div class="file" >
		<br>
		<br>
		<label>* Proof of Business Registration (DTI/SEC/CDA)</label>
		<input  type="file" id="file1"  name="file1" required>
		<br><br><br>
		<label>Submission of BIR Sales Tax Returns of the prior year</label>
		<input  type="file" id="file1"  name="file2" required>
		<br><br>
		<label>Barangay Clearance</label>
		<br>
		<input  type="file" id="file1"  name="file3" required>
	</div>      
	</div>
		
		<button type="submit" name="submit" class="btn" >SUBMIT</button>
 			
</form>

  

</body>
<footer><p>Copyright &copy; 2023 Municipality of Conception, Province of Tarlac. All rights reserved.</p></footer>
</html>
