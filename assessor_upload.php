<?php
require 'config.php';

  
if (isset($_POST['submit'])) {
  $status = $_POST['status'];
  $name = $_POST['name']; 

  $filename1 = $_FILES['file1']['name'];
  $filetmpname1 = $_FILES['file1']['tmp_name'];
  $filesize1 = $_FILES['file1']['size'];
  $fileerror1 = $_FILES['file1']['error'];
  $filetype1 = $_FILES['file1']['type'];


  $fileext = explode('.',$filename1);


  $fileactualext = strtolower(end($fileext));
 

  $allowed = array ('jpg','jpeg','png','pdf','docx');
 
  if (in_array($fileactualext,$allowed)) {

  if ($fileerror1 === 0) {
    

   
    
  if ($filesize1   < 20000000) {
   
    

      $filenamenew = uniqid('', true).".".$fileactualext;
     

      $filedestination = 'assessor_pic/'.$filenamenew;


      move_uploaded_file($filetmpname1, $filedestination);{
 
        
      $query = mysqli_query($conn, "INSERT INTO assessor_tb (name,filename1, filesize1, filetype1, status)

       VALUES ('$name','$filename1','$filesize1', '$filetype1','$status')");

  }
}

}else{
      header("location: message3.php");
  }

}else{ 
      header("location: message2.php");
  }


}else{
  header("location: message.php");

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
