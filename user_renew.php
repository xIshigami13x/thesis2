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
    <link rel="stylesheet" type="text/css" href="style2.css">
    <style>

    	         header{
    padding-bottom: 50px;

 }
 .navbar{
    padding-top:40px;
 }
 .nav{
    padding: 10px   ;
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
    padding: 27px 38px 60px 37px;

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
    <a class="nav" href="admin.php">PERSONNEL</a>
    <a class="nav" href="users.php">NEW</a>
    <a class="nav" href="user_renew.php" >RENEWAL</a>
</div>

</header>
<br>
<div>

<br>
<center><h2>RENEWAL</h2></center>
<div class="dashboard">
    <div class="dashboard-item">
        <a class="bplo"  href="bplo_board.php">Business Permit Licensing Office(Treasury)</a>
    </div>
    <div class="dashboard-item">
        <a class="zone" href="zoning_board.php">Zoning Municipal Planning and Development office</a>
    </div>
    <div class="dashboard-item">
        <a class="permit" href="engr_board.php">Building Permit & Occupancy Permit Municipal Engineering Office </a>
    </div>
    <div class="dashboard-item">
        <a class="bfp" href="bfp_board.php">Bureau of Fire Protection(BFP)</a>
    </div>
    <div class="dashboard-item">
        <a class="mao" href="assessor_board.php">Municipal Assessor’s Office</a>
    </div>
    <div class="dashboard-item">
        <a class="mh" href="sanitary_board.php">Municipal Health(Sanitation)</a>
    </div>
    <div class="dashboard-item">
        <a class="menro" href="menro_board.php">Municipal Environment and Natural Resources Officer</a>
    </div>

</div>

</body>
<br>
<br>
<br>
<footer><p>Copyright &copy; 2023 Municipality of Conception, Province of Tarlac. All rights reserved.</p></footer>
</html>



