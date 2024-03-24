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
	<title>Home</title>

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
 .navbar{
padding-right:40px;
padding-left:40px;
margin-top:30px ;
padding-bottom: 25px;
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
    border-radius: 4px;
}

a:hover{

	background-color:white;
	color: black;
	border-radius: 4px;

}
footer{
	background-color: green;
	color: white;
	text-align: center;
	margin: 0 -8px -10px -8px;
	padding: 8px 0 8px 0;
  }

 li{
  	background-color: white;
  	padding:12px;
  	margin:-5px;
  	padding-left: 20px;
  }

.container{
	background-color: green;
	border: black solid 1px;
	box-shadow:5px 5px 5px gray;
	margin: 5% 20px 50px 9%;
	padding: 2% .3% 1% .3%;
	width: 33.8%;
}

.container2{
	background-color: green;
	border: black solid 1px;
	box-shadow:5px 5px 5px gray;
	margin: 5% 20px 50px 9%;
	padding: 2% .3% 1% .3%;
	width: 33.8%;
}

.container, .container2{
	display: inline-block;
	justify-content:space-around;
	color: black;

}

button{
	color:white ;
	background-color: green;
	padding: 5px;
	margin-top: 25px ;
	margin-left: 36%;
	border-radius: 4px;
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
	margin: 44px -50px 25px 0;
}

.logout{
	float: right;
	padding: 6px 23px 6px 23px;
	border: black solid 2px;
	margin-left:-85px;
	margin-top:-70px;
	margin-right:20px;
}
.li{
	background-color: white;
	padding: 12px 12px 40px 12px;
	margin-bottom: -15px ;
	border-radius: 4px;
}
.li2{
	background-color: white;
	padding: 12px 12px 247px 12px;
	margin-bottom: -15px ;
	border-radius: 4px;
}
form{
	border-radius: 4px;
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
    <a href="track.php">Tracking</a>
</div>

</header>

<form action="dashboard.php" class="container">

<div class="li">		
  <li><b>BUSINESS PERMIT LICENCING OFFICE (Treasury)</b><br>*Proof of Business Registration (DTI/SEC/CDA)<br>Other Documments, Fill Up Application Form</li>

    <li><b>ZONING MUNICIPAL PLANNING AND DEVELOPMENT OFFICE
		BUSINESS PERMIT APPLICATION</b><br>* Proof of Business Registration (DTI/SEC/CDA)<br>Other Documments, Fill Up Application Form </li>

      <li><b>BUILDING PERMIT & OCCUPANCY PERMIT
		MUNICIPAL ENGINEERING OFFICE</b><br>Zoning and Locational Clearance,Unified Building Permit Form 
,Civil/Structural Permit Form ,Electrical Permit Form, Sanitary/ Plumbing Permit.Form SET OF PLANS <br>(Example..Architectural Plan 
,Structural Plan,Electrical Plan ,Sanitary/Plumbing Plan ,Mechanical Plan,Electronics Plan,Other Documments<br>Also for Non-registered Owner:<br>Notarized Copy of Contract of Lease,Notarized Copy of Deed of Sale,Notarized Copy of Contract of Sale ,Notarized Authorization letter From Owner  </li>

    <li><b>BUREAU OF FIRE PROTECTION (BFP)</b><br>Architectual Documments 
,Civil Documments,Electrical Documments,Mechanical Documments,<br>Plumbing Documments,Electronics Documments,Sanitary Documments ,Fire Protection Documments,One (1)<br> set of estimate value of building/structure of facilities
(materials and labor cost) ,<br>Copy of valid PRC Professional License of all involved professionals ,Fire Safety Compliance Report (FSCR) NOTE 1</li>

    <li><b>MUNISIPAL ASSESSOR'S OFFICE</b><br>Real Property Tax (Last Year)</li>

    <li><b>MUNICIPAL HEALTH (SANITATION)</b><br>Medical Test (Employee)<br>Water test (If the Business is Related to Water)</li>

     <li><b>MUNICIPAL ENVIRONMENTAL AND NATURAL RESOURCES OFFICE
BUSINESS PERMIT APPLICATION</b><br>Environmental Compliance Certificate(ECC) 
or,Certificate of Non-Coverage(CNC)</li>
</div>
<button> Apply for new Business</button>

    </form>
    <form action="renew.php" class="container2">

 <div class="li2">
  <li><b>BUSINESS PERMIT LICENCING OFFICE (Treasury)</b><br>*Proof of Business Registration (DTI/SEC/CDA),<br>Submission of BIR Sales Tax Returns of the prior year<br>Barangay Clearance</li>

    <li><b>ZONING MUNICIPAL PLANNING AND DEVELOPMENT OFFICE
		BUSINESS PERMIT APPLICATION</b><br></li>

      <li><b>BUILDING PERMIT & OCCUPANCY PERMIT
		MUNICIPAL ENGINEERING OFFICE</b><br></li>

    <li><b>BUREAU OF FIRE PROTECTION (BFP)</b><br>As-built plan together with the building permit (if there is changes? ,Copy of Fire Insurance, if any,Assessment of Business Permit Fee/ Tax Assessment Bill from Building Processing and Licensing Office (BPLO), Fire Safety Maintenance Report (FSMR) NOTE (1), Annual for business establishment requiring almost daily repair or
maintenance due to its nature of business or operation</li>

    <li><b>MUNICIPAL ASSESSOR'S OFFICE</b><br>Real Property Tax (Last Year)</li>

    <li><b>MUNICIPAL HEALTH (SANITATION)</b><br>Medical Test (Employee)<br>
Water test (If the Business is Related to Water)</li>

     <li><b>MUNICIPAL ENVIRONMENTAL AND NATURAL RESOURCES OFFICE
BUSINESS PERMIT APPLICATION</b><br>Environmental Compliance Certificate(ECC) or,Certificate of Non-Coverage(CNC)</li>

        
</div>
    <button class="button2" >Apply for Renewal</button>

    </form>


</body>
<footer><p>Copyright &copy; 2023 Municipality of Conception, Province of Tarlac. All rights reserved.</p></footer>
</html>