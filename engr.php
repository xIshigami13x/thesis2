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
	padding-bottom:1rem;
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
	margin-left: 42%;
	padding: 7px; 	 
}
.btn:hover{
	color: black;
}
.btn2{
	margin-left: 43%;
	padding: 7px; 	 
}
.btn2:hover{
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
	padding-left: 40px;
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
    margin-bottom: 7px	;
}
</style>

</head>
<body>
<header><img src="lgu.jpg" height="8%" width="8%" class="logo">
	<h1><b>BUILDING PERMIT & OCCUPANCY PERMIT  <br>MUNICIPAL ENGINEERING OFFICE <br>
	</b></h1>
	<a href="logout.php" class="logout">Logout</a>

<div class="navbar">
    <a href="dashboard.php">Dashboard</a>
    <a href="aboutus.php">About Us</a>
    <a href="track.php">Tracking</a>
</div>

</header>

<form action="engr_upload.php"enctype="multipart/form-data" method="post">
<div class="container">
		<h2>DOCUMENTARY REQUIREMENTS</h2>
		<div class="file" >
		<label>Applicant Name:</label>
		<input type="text" name="name" required>
		<input type="hidden" value="Pending" name="status">
		<br>
	
		<label>Zoning and Locational Clearance</label>
		<input  type="file" id="file1"  name="file1" required>
 <br>
		<label>Unified Building Permit Form</label>
		<input  type="file" id="file2"  name="file2" required>
 <br>
		<label>Civil/Structural Permit Form</label>
		<input  type="file" id="file3"  name="file3" required>
<br>
		<label>Electrical Permit Form</label>
		<input  type="file" id="file4"  name="file4" required>
 <br>
		<label>Sanitary/ Plumbing Permit Form</label>
		<input  type="file" id="file5"  name="file5" required>
		
		<button class="btn2" type="submit1" name="submit">Submit</button>
	</div>
</div>
</form>
<form action="engr_upload2.php"enctype="multipart/form-data" method="post">
<h2>SET OF PLANS (DULY AND SIGNED AND SEALED <br> BY THE PROFESSIONALS EACH SHEETS)</h2>
	<div class="container"> 
	<div class="file" > 
	<label>Date of Application:</label> 
	
    <input  class="date" type="date" id="dateapp" name="dateapp" required>

 <label  class="org">Type of Occupancy:</label>  
  <select  id="occupancy" name="occupancy[]" required>
      <option value="" disabled selected>Select type</option>
      <option value="residential">Residential</option>
      <option value="commercial">Commercial</option>
      <option value="intitutional">Intitutional</option>
      <option value="industrial">Industrial</option>
      <option value="recreational">Recreational</option>
  </select>
<br><br>
		<label>Architectural PLan</label>
		<input  type="file" id="file1"  name="file1" required>
    <br><br>
		<label>Structural Plan</label>
		<input  type="file" id="file2"  name="file2" required>
 	<br><br>
		<label>Electrical Plan</label>
		<input  type="file" id="file3"  name="file3" required>
	<br><br>
		<label>Sanitary/Plumbing Plan</label>
		<input  type="file" id="file4"  name="file4" required>
 	<br><br>
		<label>Mechanical Plan</label>
		<input  type="file" id="file5"  name="file5" required>
    <br><br>
   		<label>Electronics Plan</label>
		<input  type="file" id="file6"  name="file6" required>
    <br><br>
        <label>Others</label><br>
		<input  type="file" id="file7"  name="file7" required>  
 	<br><br>
		<label>Meterials/ Specifiaction</label>
		<input  type="file" id="file8"  name="file8" required>
 	<br><br>
		<label>Bill of Material/ Cost Estimates</label>
		<input  type="file" id="file9"  name="file9" required>
	 <br><br>
		<label>Photocopy of PTR # and PRC licence of all Concerened Proffessionals (Signed and Sealed)</label>
		<input  type="file" id="file10"  name="file10" required>
	 <br><br>
		<label>Vicinity Map/Locational Plan (Signed byu Geodenic Engineer)</label>
		<input  type="file" id="file11"  name="file11" required>
 	<br><br>
		<label>Structural Design/ Analysis (for multi-storied struture) </label>
		<input  type="file" id="file12"  name="file12" >
 	<br><br>
		<label>Soil Test Report for above two-storey</label>
		<input  type="file" id="file13"  name="file13" >
 	<br><br>
		<label>Transfer Certified of title (TCT) True Copy from Registry of Deeds</label>
		<input  type="file" id="file14"  name="file14" required>
	<br><br>
		<label>Community Tax Certificate (CTC,"Cedula")-LATEST</label>
		<input  type="file" id="file15"  name="file15" required>
	<br><br>
		<label>Barangay Clearance(Purpose:Building Permit)</label>
		<input  type="file" id="file16"  name="file16" required>
	<br><br>
		<label>Anti-pollution Clearance (For Industrial Purposes)</label>
		<input  type="file" id="file17"  name="file17" required>
	<br><br>
		<label>Tax Declaration </label>
		<input  type="file" id="file18"  name="file18" required>
	<br><br>
		<label>Dole Clearance </label>
		<input  type="file" id="file19"  name="file19" required>
	<br>

	<button type="submit" name="submit2" class="btn" >SUBMIT</button>
</div>
</div>
</form>
<form action="engr_upload3.php"enctype="multipart/form-data" method="post">
<div class="container">

		<h2>FOR NON-REGISTERED OWNER</h2>
		<br><br>
		
		<div class="file" >
		<input type="hidden" value="Pending" name="status">
		<label>Applicant Name:</label>
		<input type="text" name="name" required><br>
		<label>Notarized Copy of Contract of Lease </label>
		<input  type="file" id="file1"  name="file1" >
		<br><br>
		<label>Notarized Copy of Deed of Sale </label>
		<input  type="file" id="file2"  name="file2">
		<br><br>
		<label>Notarized Copy of Contract of Sale </label>
		<input  type="file" id="file3"  name="file3" >
		<br><br>
		<label>Notarized Authorization letter From Owner </label>
		<input  type="file" id="file4"  name="file4">
		
		<button type="submit" name="submit3" class="btn" >SUBMIT</button>
 		</div>
 	</div>

</form>

  

</body>
<footer><p>Copyright &copy; 2023 Municipality of Conception, Province of Tarlac. All rights reserved.</p></footer>
</html>
	