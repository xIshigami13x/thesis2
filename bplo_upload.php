<?php
require 'config.php';

  
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $other = $_POST['other'];
  $status = $_POST['status'];
  $businessname = $_POST['businessname'];
  $tradename = $_POST['tradename'];
  $businessadress = $_POST['businessadress'];
  $businessarea = $_POST['businessarea'];
  $noemployees = $_POST['noemployees'];
  $registrationno = $_POST['registrationno'];
  $dateapp = $_POST['dateapp'];
  $CTCNo = $_POST['CTCNo'];
  $file1 = $_FILES['file1'];
  $file2 = $_FILES['file2'];


   if (!empty($_POST['organizationtype'])) {
      foreach ($_POST['organizationtype'] as $organizationtype ) {

        if (!empty($_POST['line_business'])) {
      foreach ($_POST['line_business'] as $line_business ) {

  $lessorname = $_POST['lessorname'];
  $lessoradd = $_POST['lessoradd'];
  $lessorno = $_POST['lessorno'];
  $lessoremail = $_POST['lessoremail'];
  $montlyrent = $_POST['montlyrent'];

    

  $filename1 = $_FILES['file1']['name'];
  $filetmpname1 = $_FILES['file1']['tmp_name'];
  $filesize1 = $_FILES['file1']['size'];
  $fileerror1 = $_FILES['file1']['error'];
  $filetype1 = $_FILES['file1']['type'];

  $filename2 = $_FILES['file2']['name'];
  $filetmpname2 = $_FILES['file2']['tmp_name'];
  $filesize2 = $_FILES['file2']['size'];
  $fileerror2 = $_FILES['file2']['error'];
  $filetype2 = $_FILES['file2']['type'];


  $fileext = explode('.',$filename1);
  $fileext = explode('.',$filename2);


  $fileactualext = strtolower(end($fileext));
 

  $allowed = array ('jpg','jpeg','png','pdf','docx');
 
  if (in_array($fileactualext,$allowed)) {

  if ($fileerror1 === 0 && $fileerror2 === 0  ) {
    

   
    
  if ($filesize1   < 20000000 && $filesize2  < 20000000 ) {
   
    

      $filenamenew = uniqid('', true).".".$fileactualext;
     

      $filedestination = 'bplo_pic/'.$filenamenew;


      move_uploaded_file($filetmpname1, $filedestination);{
        move_uploaded_file($filetmpname2, $filedestination);{
 
        
      $query = mysqli_query($conn, "INSERT INTO upload_tb (filename1, filesize1, filetype1,filename2, filesize2, filetype2, organizationtype,status, businessname,tradename, businessadress,  businessarea, other,  noemployees, registrationno, dateapp, CTCNo, lessorname, lessoradd, lessorno, lessoremail,montlyrent, line_business,name)

       VALUES ( '$filename1','$filesize1', '$filetype1', '$filename2','$filesize2', '$filetype2','$organizationtype','$status','$businessname','$tradename','$businessadress', '$businessarea','$other', '$noemployees','$registrationno','$dateapp','$CTCNo','$lessorname','$lessoradd','$lessorno','$lessoremail','$montlyrent','$line_business ','$name')");

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
