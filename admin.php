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
         header{
    padding-bottom: 40px;

 }
 .navbar{
    padding-top:40px;
 }
 .nav{
    padding: 10px   ;
 }

    </style>
</head>
    <header><img src="lgu.jpg" height="8%" width="8%" class="logo">
    <h1><b>CONCEPCION TARLAC <br>BUSINESS PERMIT APPLICATION <br>
    </b></h1>

    <a href="logout2.php" class="logout">Logout</a>


<div class="navbar">
    <a class="nav" href="admin.php">PERSONNEL</a>
    <a class="nav" href="users.php">NEW</a>
    <a class="nav" href="user_renew.php" >RENEWAL</a>
</div>

</header>
<body>
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>PERSONNEL</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="search.png" alt="">
            </div>
            
        </section>
        <section class="table__body">
       <a class="add" href="adding.php" role="botton">Add Personnel</a>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Department</th>
                        <th>Name</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
            <?php

            if($conn->connect_error){
                die("connection failed:".$conn->connect_error);
            }

            $sql = "SELECT * FROM admin_tb";
            $result = $conn->query($sql);

            if(!$result) {
                die("Invalid query:". $conn->connect_error);
            }

            while($row = $result->fetch_assoc()){
                echo"
                <tr>
                    <td>$row[ID]</td>
                    <td>$row[department]</td>
                    <td>$row[name]</td>
                    <td>$row[password]</td>
                    <td><a href='delete.php? id=$row[ID];'> Delete </a></td>
                    
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
