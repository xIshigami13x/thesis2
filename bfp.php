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
	padding-left: 70px;
	padding-top: 10px;


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
	margin-top: 100px;

}
input{
	width: 90%;
}


</style>

</head>
<body>
<header><img src="lgu.jpg" height="8%" width="8%" class="logo">
<br>	<h1><b>BUREAU OF FIRE PROTECTION (BFP)
	</b></h1><br>
	<a href="logout.php" class="logout">Logout</a>

<div class="navbar">
    <a href="dashboard.php">Dashboard</a>
    <a href="aboutus.php">About Us</a>
    <a href="track.php">Tracking</a>
</div>

</header>

<form action="bfp_upload.php"enctype="multipart/form-data" method="post">
<div class="container">
		<h2>DOCUMENTARY REQUIREMENTS</h2>
		<input type="hidden" value="Pending" name="status">
	<div class="file" >

		<label>Applicant Name:</label>
		<input  type="text" id="name"  name="name" required>
		<br>
		<br>


		<label>Architectual Documments</label><br>
		<input  type="file" id="file1"  name="file1" required>
		<br>
		<br>

		<label>Civil Documments</label><br>
		<input  type="file" id="file1"  name="file2" required>
		<br>
		<br>

		<label>Electrical Documments</label><br>
		<input  type="file" id="file1"  name="file3" required>
		<br>
		<br>

		<label>Mechanical Documments</label><br>
		<input  type="file" id="file1"  name="file4" required>
		<br>
		<br>

		<label>Plumbing Documments</label><br>
		<input  type="file" id="file1"  name="file5" required>
			<br>
			<br>

		<label>Electronics Documments</label><br>
		<input  type="file" id="file1"  name="file6" required>
		<br>
		<br>

		<label>Sanitary Documments</label><br>
		<input  type="file" id="file1"  name="file7" required>
		<br>
		<br>

		<label>Fire Protection Documments</label><br>
		<input  type="file" id="file1"  name="file8" required>
			<br><br>
		<label>One (1) set of estimate value of building/structure of facilities (materials and labor cost) </label><br>
		<input  type="file" id="file1"  name="file9" required>
			<br>	
			<br>
		<label>Copy of valid PRC Professional License of all involved professionals</label><br>
		<input  type="file" id="file1"  name="file10" required>
			<br>	
			<br>
			<label>Fire Safety Compliance Report (FSCR) NOTE 1</label><br>
		<input  type="file" id="file1"  name="file11" required>



	</div>
</div>
<h2>CETIFICATE OF OCCUPANCY</h2>

	<div class="file" >
			<br>
<label>As-built plan together with the building permit (if ther is changes)</label><br>
	<input  type="file" id="file1"  name="file12" required>
				<br>	
			<br>
			<label>Endorsement from the office of building official (OBO)</label><br>
		<input  type="file" id="file1"  name="file13" required>
				<br>	
			<br>
	<label>Certificate of Completion</label><br>
		<input  type="file" id="file1"  name="file14" required>
				<br>	
			<br>
	<label>Certified true copy of assessment fee for securing Certificate of Occupancy Prom (OBO)</label><br>
		<input  type="file" id="file1"  name="file15" required>
				<br>	
			<br>
	<label>Fire Safety Compliance and Commissioning Report (FSCCR) NOTE 2</label><br>
		<input  type="file" id="file1"  name="file16" required>
				<br>	
			<br></center>
		<button type="submit" name="submit" class="btn" >SUBMIT</button>
	</div>
 			
</form>

  

</body>
<footer><p>Copyright &copy; 2023 Municipality of Conception, Province of Tarlac. All rights reserved.</p></footer>
</html>
