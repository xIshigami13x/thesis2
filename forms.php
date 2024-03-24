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
	<h1><b>CONCEPCION TARLAC <br>BUSINESS PERMIT APPLICATION <br>
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
		<label>* Proof of Business Registration (DTI/SEC/CDA)</label>
		<input  type="file" id="file1"  name="file1" required>
	</div>
</div>
<h2>APPLICATION FORM</h2>
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
    <label>Business Name:</label>
    <input class="input" type="text" id="businessname"  name="businessname" required>
    
    <label>Trade Name:</label>
    <input class="input" type="text" id="tradename" name="tradename" required>

    <label>Exact Business Adress:</label>
    <input class="input" type="text" id="businessadress" name="businessadress" required>
    

    <label>Business Area (in/sq/m):</label>
    <input class="input" type="text" id="businessarea" name="businessarea" required>
    

    <label>No of Employees:</label>
    <input class="input" type="number" id="noemployees" name="noemployees" required>

    <label>DTI/SEC/CSA Registration No.</label>
    <input class="input" type="number" id="Registrationno" name="registrationno" required>

    <label>CTC No.CTC No.</label>
    <input class="input" type="number" id="CTCNo" name="CTCNo" required></div>

<h2>Note: Fill up only if Business placed is rented</h2>
    <div class="container3">       
            <label class="check" for="lessorname">Lessor's Full Name</label><br>
            <input class="input" type="text" id="lessorname" name="lessorname" size="70" required><br>

            <label for="lessoradd">Lessor's Address</label><br>
            <input class="input" type="text" id="lessoradd" name="lessoradd" size="70" required><br>


            <label for="lessorno">Lessor's Mobile number</label><br>
            <input class="input" type="number" id="lessorno" name="lessorno" size="70" required><br>

            <label for="lessoremail">Lessor's Email Address</label><br>
            <input class="input" type="email" id="lessoremail" name="lessoremail" size="70" required><br>

            <label for="montlyrent">Monthly Rental</label><br>
            <input class="input" type="number" id="montlyrent" name="montlyrent" size="70" required><br>
</div>
        <h2>Line of Business</h2>       
<div class="container2">

          <input class="check1" type="checkbox" id="lessorname" name="line_business[]" value="Manufacturing, Assemble etc">
          <label>Manufacturing, Assemble etc</label>          
          <br>

            
          <input  type="checkbox" id="lessorno" name="line_business[]" value="Wholesaler, Distributor, etc" >
          <label>Wholesaler, Distributor, etc</label>
          <br>
          
        
          <input type="checkbox" id="lessorno" name="line_business[]" value="Exporter Manufacturer Dealer" >
          <label >Exporter Manufacturer Dealer</label>
          <br>

            
          <input  type="checkbox" id="lessoremail" name="line_business[]" value="Retailer Of Essential Commodities" >
          <label>Retailer Of Essential Commodities</label>
          <br>
         
          <input  type="checkbox" id="lessoremail" name="line_business[]" value="Contractor & independent Contractor" >
          <label>Contractor & independent Contractor</label>            
          <br>

          <input  type="checkbox" id="lessoremail" name="line_business[]" value="Bank & Othe Financial Institution" >
          <label>Bank & Other Financial Institution</label>  
          <br>

          <input  type="checkbox" id="lessoremail" name="line_business[]" value="NO OPERATION" >
          <label>No Operation</label><br>           
          
          
          
</div>
		

		<button type="submit" name="submit" class="btn" >SUBMIT</button>
 			
</form>

  

</body>
<footer><p>Copyright &copy; 2023 Municipality of Conception, Province of Tarlac. All rights reserved.</p></footer>
</html>
