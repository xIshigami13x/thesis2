<?php
require 'config.php';

  
if (isset($_POST['submit'])) {
  $status = $_POST['status'];
  $file1 = $_FILES['file1'];
  $dateapp = $_POST['dateapp'];
  $organizationtype = $_POST['organizationtype'];
  $nameapp = $_POST['nameapp'];
  $addapp = $_POST['addapp'];
  $namecorp = $_POST['namecorp'];
  $addcorp = $_POST['addcorp'];
  $nameauthorep = $_POST['nameauthorep'];
  $addauthorep = $_POST['addauthorep'];
  $projecttype = $_POST['projecttype'];
  $registrationno = $_POST['projectnature'];
  $year = $_POST['year'];
  $rightoverland = $_POST['rightoverland'];
  $land = $_POST['land'];
  $projectlocation = $_POST['projectlocation'];
  $procoscap = $_POST['procoscap'];


  $filename1 = $_FILES['file1']['name'];
  $filetmpname1 = $_FILES['file1']['tmp_name'];
  $filesize1 = $_FILES['file1']['size'];
  $fileerror1 = $_FILES['file1']['error'];
  $filetype1 = $_FILES['file1']['type'];

  if (!empty($_POST['organizationtype'])) {
      foreach ($_POST['organizationtype'] as $organizationtype ) {

        if (!empty($_POST['projectnature'])) {
      foreach ($_POST['projectnature'] as $projectnature ) {

        if (!empty($_POST['year'])) {
      foreach ($_POST['year'] as $year ) {

        if (!empty($_POST['rightoverland'])) {
      foreach ($_POST['rightoverland'] as $rightoverland ) {

        if (!empty($_POST['land'])) {
      foreach ($_POST['land'] as $land ) {

  $fileext = explode('.',$filename1);

  $fileactualext = strtolower(end($fileext));
 

  $allowed = array ('jpg','jpeg','png','pdf','docx');
 
  if (in_array($fileactualext,$allowed)) {

  if ($fileerror1 === 0 ) {
    

  if ($filesize1 < 20000000) {
   
    
      $filenamenew = uniqid('', true).".".$fileactualext;
     

      $filedestination = 'zoning_pic/'.$filenamenew;


      move_uploaded_file($filetmpname1, $filedestination);{
 
        
      $query = mysqli_query($conn, "INSERT INTO zoning_tb (filename1, filesize1, filetype1, dateapp, organizationtype,nameapp, addapp ,namecorp, addcorp, nameauthorep, addauthorep,  projecttype, projectnature,  year, rightoverland,land, projectlocation, procoscap, status) VALUES ( '$filename1','$filesize1', '$filetype1','$dateapp','$organizationtype','$nameapp','$addapp','$namecorp','$addcorp','$nameauthorep','$addauthorep','$projecttype','$projectnature', '$year','$rightoverland','$land','$projectlocation','$procoscap','$status')");

  }
}

}else{
      header("location: message3.php");
  }

}else{ 
      header("location: message2.php");
    }
   }
  }
 }
}
}
}
}
}
}
}
}



?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Error Message</title>
  <style type="text/css">
  form{
  background-color: white;
  border: 1px solid black;
  width:50%;
  margin:0 auto;
  margin-bottom:2rem;
  margin-top:3rem;
  padding-bottom:3rem;
  box-shadow: 5px 5px 8px gray;

    }
  button:hover{
  background-color: white;
  color: black;
}
    button{
  color:white ;
  background-color: green;
  padding: 10px;
  margin-top: 10px ;
  margin-left:47% ;

}
    h3{
      text-align: center;
    }
  </style>
</head>
<body>
  <form action="dashboard.php" method="post">
    <h3>Successful</h3>
    <br>
  <button type="submit">Back</button>
</form>

</body>
</html>
