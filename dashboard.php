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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
 body {
    font-family: 'Arial', sans-serif;
    background-color: white;
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
    border-radius: 4px;
}

.nav:hover{

    background-color:white;
    color: green;
    border-radius: 3px;

}


footer{

    background-color: green;
    color: white;
    text-align: center;
    margin: 0 -8px -10px -8px;
    padding: 8px 0 8px 0;
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
.logout:hover{
    color: green;
    background-color: white;
    border-radius: 4px;
}

.dashboard {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: 20px;
        }

.dashboard-item {
    width: calc(33.33% - 20px);
    margin: 10px;
    text-align: center;
    background-color: green;
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 15px;
    box-sizing: border-box;
            
        }
.dashboard-item:hover{
    background-color: green;
    color: white;
}  
 
.bplo{
    margin: -10px;
    padding: 27px 38px 37px 37px;   
}
.bplo:hover{
    background-color:darkgreen;
    color: white;
    padding: 27px 38px 37px 37px;

}    

.zone{
    margin: -10px;
    padding: 27px 38px 37px 37px;   
}
.zone:hover{
    background-color:darkgreen;
    color: white;
    padding: 27px 38px 37px 37px;

}
.permit{
    margin: -10px;
    padding: 27px 38px 37px 37px;   
}
.permit:hover{
    background-color:darkgreen;
    color: white;
    padding: 27px 38px 37px 37px;

}
.bfp{
    margin: -10px;
    padding: 27px 38px 37px 37px;   
}
.bfp:hover{
    background-color:darkgreen;
    color: white;
    margin-left: -20px;
    margin-right:-19px;
    padding-right: 90px;
    padding-left: 90px;
}
.mao{
    margin: -10px;
    padding: 27px 38px 37px 37px;   
}
.mao:hover{
    background-color:darkgreen;
    color: white;
    margin-left: -100px;
    margin-right:-100px;
    padding-right: 110px;
    padding-left: 109px;

}
.mh{
    margin: -10px;
    padding: 27px 38px 37px 37px;   
}
.mh:hover{
    background-color:darkgreen;
    color: white;
    margin-left: -100px;
    margin-right:-100px;
    padding-right: 104px;
    padding-left: 103px;

}
.office{
    margin: -10px;
    padding: 27px 38px 37px 37px;   
}
.office:hover{
    background-color:darkgreen;
    color: white;
    margin: -10px;
    padding-right: 36px;
    padding-left: 35px;

}

.menro{
    margin: -10px;
    padding: 27px 38px 37px 37px;   
}
.menro:hover{
    background-color:darkgreen;
    color: white;
    margin: -10px;
    padding: 27px 38px 37px 37px;

}
.emty{
    margin: -10px;
    padding: 27px 38px 37px 37px;   
}
.emty:hover{
    background-color:darkgreen;
    color: white;
    margin: -10px;
    padding: 27px 38px 37px 37px;

}


    

    

    </style>
</head>
<body>
    <header><img src="lgu.jpg" height="8%" width="8%" class="logo">
        <h1><b>CONCEPCION TARLAC <br>BUSINESS PERMIT APPLICATION <br>
       </b></h1>
       <a class="logout" href="logout.php" class="logout">Logout</a>

<div class="navbar">
    <a class="nav" href="index.php">Home</a>
    <a class="nav" href="aboutus.php">About Us</a>
    <a class="nav" href="track.php">Tracking</a>
</div>

</header>
<br>
<div>

<br>
<div class="dashboard">
    <div class="dashboard-item">
        <a class="bplo"  href="bplo.php">Business Permit Licensing Office(Treasury)</a>
    </div>
    <div class="dashboard-item">
        <a class="zone" href="zoning.php">Zoning Municipal Planning and Development office</a>
    </div>
    <div class="dashboard-item">
        <a class="permit" href="engr.php">Building Permit & Occupancy Permit Municipal Engineering Office </a>
    </div>
    <div class="dashboard-item">
        <a class="bfp" href="bfp.php">Bureau of Fire Protection(BFP)</a>
    </div>
    <div class="dashboard-item">
        <a class="mao" href="assessor.php">Municipal Assessor’s Office</a>
    </div>
    <div class="dashboard-item">
        <a class="mh" href="sanitary.php">Municipal Health(Sanitation)</a>
    </div>
    <div class="dashboard-item">
        <a class="menro" href="menro.php">Municipal Environment and Natural Resources Officer</a>
    </div>

</div>

</body>
<br>
<br>
<br>
<footer><p>Copyright &copy; 2023 Municipality of Conception, Province of Tarlac. All rights reserved.</p></footer>
</html>



