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

<form class="container" action="zoning_board.php" method="post">
            <?php 
            
            if (isset($_GET['id'])) {
                include("config.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM zoning_tb WHERE id=$id";
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
  

               <label>Name of Applicant:</label>
    <input class="input" type="text" id="nameapp" disabled  value="<?php echo $row["nameapp"]; ?>"  name="nameapp" required>
    
    <label>Address of applicant:</label>
    <input class="input" type="text" id="addapp" disabled  value="<?php echo $row["addapp"]; ?>" name="addapp" required>

    <label>Name of Corporation:</label>
    <input class="input" type="text" id="namecorp" disabled  value="<?php echo $row["namecorp"]; ?>" name="namecorp" required>
    

    <label>Address of Corporation:</label>
    <input class="input" type="text" id="addcorp" disabled  value="<?php echo $row["addcorp"]; ?>" name="addcorp" required>
    

    <label>Name of Authorized Representative:</label>
    <input class="input" type="text" id="nameauthorep" disabled  value="<?php echo $row["nameauthorep"]; ?>" name="nameauthorep" required>

    <label>Address of Authorized Representative:</label>
    <input class="input" type="text" id="addauthorep" disabled  value="<?php echo $row["addauthorep"]; ?>" name="addauthorep" required>


    <label>Project Type</label>
    <input class="input" type="text" id="projecttype" disabled  value="<?php echo $row["projecttype"]; ?>" name="projecttype" required>

                    <h2>Line of Business</h2>       
<div class="container4">

           <label  class="pn">Project Nature</label>  
  <select disabled id="projectnature" name="projectnature[]" required>
      <option value="" disabled selected><?php echo $row["projectnature"]; ?></option>

  </select>
</div>
  <div class="proj">
  <label  class="pn">Project Tenure/Lifespan/Timeframe:</label>  
  <select disabled  id="year" name="year[]" required>
<option value="" disabled selected><?php echo $row["year"]; ?></option>

  </select>
</div>
        <div class="oland">
 <label  class="pt">Right Over Land:</label>  
  <select disabled id="rightoverland" name="rightoverland[]" required>
      <option value="" disabled selected><?php echo $row["rightoverland"]; ?></option>
  

  </select>
</div>
<div class="land">
 <label  class="pt">Existing Land Use of Project Site:</label>  
  <select disabled id="land" name="land[]" required>
        <option value="" disabled selected><?php echo $row["land"]; ?></option>

    </select>
</div>
    <br>

          <label>Project Location:</label>
    <input disabled class="input" type="text" id="projectlocation" value="<?php echo $row["projectlocation"]; ?>" name="projectlocation" required>

    <label>Project Cost/Capitalization:</label>
    <input disabled class="input" type="text" id="procoscap" value="procoscap" name="procoscap" required>


            <input type="hidden" value="<?php echo $id; ?>" name="id">

            <button type="submit" name="edit">Back</button>

                
           
        </form>


<footer><p>Copyright &copy; 2023 Municipality of Conception, Province of Tarlac. All rights reserved.</p></footer>
</body>
</html>
