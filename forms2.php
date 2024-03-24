<?php
require 'config.php';
  
if (isset($_POST['submit'])) {
  $organizationtype = $_POST['organizationtype'];
  $businessname = $_POST['businessname'];
  $tradename = $_POST['tradename'];
  $businessadress = $_POST['businessadress'];
  $businessarea = $_POST['businessarea'];
  $noemployees = $_POST['noemployees'];
  $registrationno = $_POST['registrationno'];
  $dateapp = $_POST['dateapp'];
  $CTCNo = $_POST['CTCNo'];
  $file1 = $_FILES['file1'];
   if (!empty($_POST['organizationtype'])) {
      foreach ($_POST['organizationtype'] as $organizationtype ) {

    $lessorname = $_POST['lessorname'];
    $lessoradd = $_POST['lessoradd'];
    $lessorno = $_POST['lessorno'];
    $lessoremail = $_POST['lessoremail'];
    $montlyrent = $_POST['montlyrent'];

    if (!empty($_POST['line_business'])) {
      foreach ($_POST['line_business'] as $line_business ) {

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
  if ($filesize1 < 20000000) {
      $filenamenew = uniqid('', true).".".$fileactualext;
      $filedestination = 'uploads/'.$filenamenew;
      move_uploaded_file($filetmpname1, $filedestination);{
      $query = mysqli_query($conn, "INSERT INTO upload_tb (filename1, filesize1, filetype1, organizationtype, businessname,tradename, businessadress, businessarea,  noemployees, registrationno, dateapp, CTCNo, lessorname, lessoradd, lessorno, lessoremail,montlyrent, line_business) VALUES ('$filename1','$filesize1', '$filetype1','$organizationtype','$businessname','$tradename','$businessadress', '$businessarea', '$noemployees','$registrationno','$dateapp','$CTCNo','$lessorname','$lessoradd','$lessorno','$lessoremail','$montlyrent','$line_business')");

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
  <form action="index.php" method="post">
    <h3>Successful</h3>
    <br>
  <button type="submit">Back</button>
</form>

</body>
</html>
