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
    padding-left: 20px;
    padding-right: 20px;
    padding-top:20px;
    box-shadow: 5px 5px 8px gray;
}

.input{
    width: 98%;
    margin-bottom: 7px;
    padding-left: 5px;

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
    margin-left: 25%;
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
</header>



        <form action="change.php" method="post">

<?php
if (isset($_GET['id'])) {
                include("config.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM upload_tb WHERE id=$id";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
            }

?>

                  
<select  disabled name="organizationtype[]" required>
      <option value=" organizationtype[]" ><?php echo $row["organizationtype"]; ?></option>
      <option value="Corporation">Corporation</option>
      <option value="Nonprofit">Nonprofit</option>
      <option value="Partnership">Partnership</option>
      <option value="Sole Proprietorship">Sole Proprietorship</option>
  </select>
<select value="Pending" name="status[]"> 
      <option  value="Pending">Pending</option>
      <option disabled value="Approved">Approved</option>
      <option disabled value="Denied">Denied</option>
  </select>
  <br>

                <label>Business Name:</label>
    <input class="input" type="text" disabled   value="<?php echo $row["businessname"]; ?>" name="businessname" required  >
    
    <label>Trade Name:</label>
    <input class="input" type="text"  disabled name="tradename" required value="<?php echo $row["tradename"]; ?>">

    <label>Exact Business Adress:</label>
    <input class="input" type="text" disabled name="businessadress" required value="<?php echo $row["businessadress"]; ?>" >
    

    <label>Business Area (in/sq/m):</label>
    <input class="input" type="text" disabled name="businessarea" required value="<?php echo $row["businessarea"]; ?>" >
    

    <label>No of Employees:</label>
    <input class="input" type="text" disabled  name="noemployees" required value="<?php echo $row["noemployees"]; ?>">

    <label>DTI/SEC/CSA Registration No.</label>
    <input class="input" type="text" disabled  name="registrationno" required value="<?php echo $row["registrationno"]; ?>">

    <label>CTC No.CTC No.</label>
    <input class="input" type="text" disabled  name="CTCNo" required value="<?php echo $row["CTCNo"]; ?>">

            <input type="hidden" value="<?php echo $id; ?>" name="id">
    
                <input type="submit" name="status" value="CHANGE STATUS">
           
        </form>


<footer><p>Copyright &copy; 2023 Municipality of Conception, Province of Tarlac. All rights reserved.</p></footer>
</body>
</html>
