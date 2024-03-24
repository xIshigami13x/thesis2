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

.input{
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
</style>
</head>
<body>
    <header><img src="lgu.jpg" height="8%" width="8%" class="logo">
    <h1><b>CONCEPCION TARLAC <br>BUSINESS PERMIT APPLICATION <br>
    </b></h1>
</header>

<form class="container" action="bplo_board.php" method="post">
            <?php 
            
            if (isset($_GET['id'])) {
                include("config.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM upload_tb WHERE id=$id";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
            }

                ?>
<h2>Applicant Form</h2 >

<label>Date of Application:</label> 
        <input type="text" disabled value="<?php echo $row["dateapp"]; ?>"> 

        <label  class="org">Type of Organization:</label>        
<select  disabled name="organizationtype[]" required>
      <option value=" organizationtype[]" ><?php echo $row["organizationtype"]; ?></option>
  </select>

  <?php echo $row["status"];?> <br>
  

                <label>Business Name:</label>
    <input class="input" type="text" disabled  value="<?php echo $row["businessname"]; ?>"  name="businessname" required>
    
    <label>Trade Name:</label>
    <input class="input" type="text"  disabled value="<?php echo $row["tradename"]; ?>" name="tradename" required>

    <label>Exact Business Adress:</label>
    <input class="input" type="text" disabled value="<?php echo $row["businessadress"]; ?>" name="businessadress" required>
    

    <label>Business Area (in/sq/m):</label>
    <input class="input" type="text" disabled value="<?php echo $row["businessarea"]; ?>" name="businessarea" required>
    

    <label>No of Employees:</label>
    <input class="input" type="text" disabled value="<?php echo $row["noemployees"]; ?>" name="noemployees" required>

    <label>DTI/SEC/CSA Registration No.</label>
    <input class="input" type="text" disabled value="<?php echo $row["registrationno"]; ?>" name="registrationno" required>

    <label>CTC No.CTC No.</label>
    <input class="input" type="text" disabled value="<?php echo $row["CTCNo"]; ?>" name="CTCNo" required>


    <h2>Note: Fill up only if Business placed is rented</h2>
       
            <label class="check" for="lessorname">Lessor's Full Name</label><br>
            <input class="input" type="text" disabled value="<?php echo $row["lessorname"]; ?>" id="lessorname" name="lessorname"  required><br>

            <label for="lessoradd">Lessor's Address</label><br>
            <input class="input" type="text" disabled value="<?php echo $row["lessoradd"]; ?>" id="lessoradd" name="lessoradd" required><br>


            <label for="lessorno">Lessor's Mobile number</label><br>
            <input class="input" type="number" disabled value="<?php echo $row["lessorno"]; ?>" id="lessorno" name="lessorno"  required><br>

            <label for="lessoremail">Lessor's Email Address</label><br>
            <input class="input" type="email" disabled value="<?php echo $row["lessoremail"]; ?>" id="lessoremail" name="lessoremail"  required><br>

            <label for="montlyrent">Monthly Rental</label><br>
            <input class="input" type="number" disabled value="<?php echo $row["montlyrent"]; ?>" id="montlyrent" name="montlyrent"  required><br>

                    <h2>Line of Business</h2>       
<div class="container4">

          <label >Line of Business:</label>  
  <select disabled id="line_business" name="line_business[]" required>
      <option value="" disabled selected><?php echo $row["line_business"]; ?></option>

  </select>
  <br><div class="other">
          <label>Other:</label>
          <input class="input" disabled type="text" value="<?php echo $row["other"]; ?>" name="other">
        </div>  
</div>


            <input type="hidden" value="<?php echo $id; ?>" name="id">

            <button type="submit" name="edit">Back</button>

                
           
        </form>


<footer><p>Copyright &copy; 2023 Municipality of Conception, Province of Tarlac. All rights reserved.</p></footer>
</body>
</html>
