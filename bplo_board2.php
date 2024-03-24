<?php
require 'config.php';
if(!empty($_SESSION["ID"])){
    $id = $_SESSION["ID"];
    $result = mysqli_query($conn, "SELECT * FROM admin_user WHERE ID = $id");
    $row = mysqli_fetch_assoc($result); 
}
else{
    header("Location: adminlog.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personnel Data</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
        <style type="text/css">
        a{
            background-color:green;
            margin: 5px;
        }
    </style>
</head>
    <header><img src="lgu.jpg" height="8%" width="8%" class="logo">
    <h1><b>CONCEPCION TARLAC <br>BUSINESS PERMIT APPLICATION <br>
    </b></h1>

    <a href="logout2.php" class="logout">Logout</a>


<div class="navbar">
    <a class="nav" href="dashboard_personnel.php">NEW</a>
    <a class="nav" href="personnel.php">RENEWAL</a>
</div>

</header>
<body>
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>BPLO</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="thesis2/search.png" alt="">
            </div>
            
        </section>
        <section class="table__body">

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Business Name</th>
                        <th>Date</th>
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
                    <td><a href='bplo_view2.php? id=$row[ID];'> View </a>
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
