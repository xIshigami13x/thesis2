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
	padding-left: 50px;
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
.proj{
	margin-left: 329px;
	margin-top:-17px;
	padding-left: 20px;

}
.pro{
	margin-right: 400px;

}
.land{
	margin-left: 219px;
	margin-top:-20px;
	padding-left: 54px;

}

label{
	font-size: 13px;
	margin-top: 40px;

}
</style>

</head>
<body>
<header><img src="lgu.jpg" height="8%" width="8%" class="logo">
	<h1><b>ZONING MUNISIPAL PLANNING AND DEVELOPMENT OFFICE <br>BUSINESS PERMIT APPLICATION <br>
	</b></h1>
	<a href="logout.php" class="logout">Logout</a>

<div class="navbar">
    <a href="dashboard.php">Dashboard</a>
    <a href="aboutus.php">About Us</a>
    <a href="track.php">Tracking</a>

</div>

</header>

<form action="zoning_upload.php"enctype="multipart/form-data" method="post">
<div class="container">

		<h2>DOCUMENTARY REQUIREMENTS</h2><br>

		<label class="file">* Proof of Business Registration (DTI/SEC/CDA)</label><br>
		<input  class="file" type="file" id="file1"  name="file1" required>
	
</div>
<h2>APPLICATION FORM</h2>

<input type="hidden" value="Pending" name="status">
	<div class="container2">  
	<label>Date of Application:</label> 
    <input  class="date" type="date" id="dateapp" name="dateapp" required>

 <label  class="org">Type of Organization:</label>  
  <select  id="organizationType" name="organizationtype[]" required>
      <option value="" disabled selected>Select type</option>
      <option value="Corporation">Corporation</option>
      <option value="Nonprofit">Nonprofit</option>
      <option value="Partnership">Partnership</option>
      <option value="Sole Proprietorship">Sole Proprietorship</option>
  </select>
<br>
<br>
    <label>Name of Applicant:</label>
    <input class="input" type="text" id="nameapp"  name="nameapp" required>
    
    <label>Address of applicant:</label>
    <input class="input" type="text" id="addapp" name="addapp" required>

    <label>Name of Corporation:</label>
    <input class="input" type="text" id="namecorp" name="namecorp" required>
    

    <label>Address of Corporation:</label>
    <input class="input" type="text" id="addcorp" name="addcorp" required>
    

    <label>Name of Authorized Representative:</label>
    <input class="input" type="text" id="nameauthorep" name="nameauthorep" required>

    <label>Address of Authorized Representative:</label>
    <input class="input" type="text" id="addauthorep" name="addauthorep" required>


    <label>Project Type</label>
    <input class="input" type="text" id="projecttype" name="projecttype" required>
    <br>
    <br>
 <div class="pro">
 <label  class="pn">Project Nature</label>  
  <select  id="projectnature" name="projectnature[]" required>
      <option value="" disabled selected>Select type</option>
      <option value="New development">New Development</option>
      <option value="Improvement">Improvement</option>
      <option value="Other">Others(Specify)</option>
  </select>
</div>
  <div class="proj">
  <label  class="pn">Project Tenure/Lifespan/Timeframe:</label>  
  <select  id="year" name="year[]" required>
      <option value="" disabled selected>Select year</option>
      <option value="1year">1year</option>
      <option value="2years">2years</option>
      <option value="3years">3years</option>
      <option value="4years">4years</option>
      <option value="5years">5years</option>
  </select>
  </div>

<br>
<div class="oland">
 <label  class="pt">Right Over Land:</label>  
  <select  id="rightoverland" name="rightoverland[]" required>
      <option value="" disabled selected>Select if</option>
      <option value="owner">Owner</option>
      <option value="lease">Lease</option>
      <option value="others">Others(Specify)</option>

  </select>
</div>
<div class="land">
 <label  class="pt">Existing Land Use of Project Site:</label>  
  <select  id="land" name="land[]" required>
        <option value="" disabled selected>Select if</option>
      <option value="Residebtial">Residential</option>
      <option value="Commercial">Commercial</option>
       <option value="Vacant/Idle">Vacant/Idle</option>
         <option value="Agricultural">Agricultural (Specify Crop)</option>
       <option value="Institutional">Institutional</option>
      <option value="Industrial">Industrial</option>
        <option value="Other">Others</option>
          <option value="Tenanted">Tenanted</option>
            <option value="Not tenanted">Not tenanted</option>
    </select>
 </div>
  <br>
 
      <label>Project Location:</label>
    <input class="input" type="text" id="projectlocation" name="projectlocation" required>

    <label>Project Cost/Capitalization:</label>
    <input class="input" type="text" id="procoscap" name="procoscap" required>


</div>


		<button type="submit" name="submit" class="btn" >SUBMIT</button>
 			
</form>

  

</body>
<footer><p>Copyright &copy; 2023 Municipality of Conception, Province of Tarlac. All rights reserved.</p></footer>
</html>
