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
	<title>Tracking</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
<style type="text/css">

	footer{
		margin-top: 355px;
		padding: 20px;
	}
	a{
		background-color: green;
		color: white;
	}
	.logout{
		margin-top: -50px;
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

        <section class="table__body">


            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Business Name</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
            <?php

            if($conn->connect_error){
                die("connection failed:".$conn->connect_error);
            }

            $sql = "SELECT * FROM upload_tb";
            $result = $conn->query($sql);

            if(!$result) {
                die("Invalid query:". $conn->connect_error);
            }

            while($row = $result->fetch_assoc()){
                echo"
                <tr>
                    <td>$row[ID]</td>
                    <td>$row[name]</td>
                    <td>$row[businessname]</td>
                    <td>$row[dateapp]</td>
                    <td>$row[status]</td>
                    <td><a href='/thesis2/edit.php? id=$row[ID];'> Edit </a>
                    <a href='delete.php? id=$row[ID];'> Delete </a></td>
                    
                </tr>
                ";
            }


            ?>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
    <script src="script.js"></script>



</body>
<footer><p>Copyright &copy; 2023 Municipality of Conception, Province of Tarlac. All rights reserved.</p></footer>
</html>
