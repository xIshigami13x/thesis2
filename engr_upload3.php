<?php
require 'config.php';
if (isset($_POST['submit3'])) {
  $status = $_POST['status'];
  $name = $_POST['name']; 
  $file1 = $_FILES['file1'];
  $file2 = $_FILES['file2'];
  $file3 = $_FILES['file3'];
  $file4 = $_FILES['file4'];


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

  $filename3 = $_FILES['file3']['name'];
  $filetmpname3 = $_FILES['file3']['tmp_name'];
  $filesize3 = $_FILES['file3']['size'];
  $fileerror3 = $_FILES['file3']['error'];
  $filetype3 = $_FILES['file3']['type'];

  $filename4 = $_FILES['file4']['name'];
  $filetmpname4 = $_FILES['file4']['tmp_name'];
  $filesize4 = $_FILES['file4']['size'];
  $fileerror4 = $_FILES['file4']['error'];
  $filetype4 = $_FILES['file4']['type'];



  $fileext = explode('.',$filename1);
  $fileext = explode('.',$filename2);
  $fileext = explode('.',$filename3);
  $fileext = explode('.',$filename4);


  $fileactualext = strtolower(end($fileext));
 

  $allowed = array ('jpg','jpeg','png','pdf','docx');
 
  if (in_array($fileactualext,$allowed)) {

  if ($fileerror1 === 0 && $fileerror2 === 0 && $fileerror3 === 0 && $fileerror4 === 0) {  

  if ($filesize1  < 20000000 && $filesize2  < 20000000 && $filesize3  < 20000000 && $filesize4 < 20000000 ) {
   
    

      $filenamenew = uniqid('', true).".".$fileactualext;
     

      $filedestination = 'engr_pic/'. $filenamenew;


      move_uploaded_file($filetmpname1, $filedestination);{
      move_uploaded_file($filetmpname2, $filedestination);{
      move_uploaded_file($filetmpname3, $filedestination);{
      move_uploaded_file($filetmpname4, $filedestination);{
        
      $query = mysqli_query($conn, "INSERT INTO engr_tb2 (name, filename1, filesize1, filetype1, filename2, filesize2, filetype2, filename3, filesize3, filetype3, filename4, filesize4, filetype4, status) VALUES ('$name', '$filename1', '$filesize1', '$filetype1', '$filename2', '$filesize2', '$filetype2', '$filename3', '$filesize3', '$filetype3', '$filename4', '$filesize4', '$filetype4', '$status')");
}
}
  }
}

}else{
      header("location: message__3.php");
  }

}else{ 
      header("location: message__2.php");
  }


}else{ 
      header("location: message__.php");
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
