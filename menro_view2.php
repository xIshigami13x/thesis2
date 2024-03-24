<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User's information</title>
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
    padding-bottom:40px;
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
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 5px;
    padding-bottom:5px;
    margin-top: 25px ;
    margin-left: 1px;
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


form{
    background-color: white;
    border: 1px solid black;
    width:50%;
    margin:0 auto;
    margin-bottom:2rem;
    margin-top:3rem;
    padding-bottom:3rem;
    padding-left: 20px;
    padding-right: 20px;
    padding-top:20px;
    box-shadow: 5px 5px 8px gray;
}

input{
    width: 98%;
    margin-bottom: 7px;
    padding-left: 5px;

}



h2{
    padding-bottom:10px;
    padding-top: 10px;
    background-color: green;
    color: white;
    text-align: center;
    font-family: verdana,sans-serif;
    width: 100%;
 
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
    padding-left: 10px;
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
.proj{
    margin-left: 455px;
    margin-top:-17px;
    padding-left: 20px;

}
.pro{
    margin-right: 400px;

}
.land{
    margin-left: 400px;
    margin-top:-20px;
    padding-left: 54px;

}
.oland{
    margin-left: -54px;
    margin-top:20px;
    padding-left: 54px;

}
label{
    font-size: 13px;
    margin-top: 40px;
</style>
</head>
<body>
    <header><img src="lgu.jpg" height="8%" width="8%" class="logo">
    <h1><b>CONCEPCION TARLAC <br>BUSINESS PERMIT APPLICATION <br>
    </b></h1>
</header>

<form class="container" action="menro_board2.php" method="post">
            <?php 
            
            if (isset($_GET['id'])) {
                include("config.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM menro_tb WHERE id=$id";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
            }

                ?>
<div class="container">
        <h2>DOCUMENTARY REQUIREMENTS</h2>
        <?php echo $row["status"]; ?>

    <div class="file" >
        <label>Applicant Name:</label><br>
        <input type="text"  disabled value="<?php echo $row["name"]; ?>" name="name" required>
        <br>
        <label>Environmental Compliance Certificate(ECC)</label><br>
       <?php echo $row["filename1"]; ?>
        <br>
            <h3>OR</h3>
        <br>
        <label>Certificate of Non-Coverage(CNC)</label>
        <br>
        <?php echo $row["filename2"]; ?>
    </div>
</div>  


            <input type="hidden" value="<?php echo $id; ?>" name="id">

            <button type="submit" name="edit">Back</button>

                
           
        </form>


<footer><p>Copyright &copy; 2023 Municipality of Conception, Province of Tarlac. All rights reserved.</p></footer>
</body>
</html>
