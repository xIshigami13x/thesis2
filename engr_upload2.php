<?php
require 'config.php';
if (isset($_POST['submit3'])) {
  $status = $_POST['status'];
  $dateapp = $_POST['dateapp'];
  $occupancy = $_POST['occupancy']; 

   if (!empty($_POST['occupancy'])) {
      foreach ($_POST['occupancy'] as $occupancy ) {

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

  $filename5 = $_FILES['file5']['name'];
  $filetmpname5 = $_FILES['file5']['tmp_name'];
  $filesize5 = $_FILES['file5']['size'];
  $fileerror5 = $_FILES['file5']['error'];
  $filetype5 = $_FILES['file5']['type'];

  $filename6 = $_FILES['file6']['name'];
  $filetmpname6 = $_FILES['file6']['tmp_name'];
  $filesize6 = $_FILES['file6']['size'];
  $fileerror6 = $_FILES['file6']['error'];
  $filetype6 = $_FILES['file6']['type'];

  $filename7 = $_FILES['file7']['name'];
  $filetmpname7 = $_FILES['file7']['tmp_name'];
  $filesize7 = $_FILES['file7']['size'];
  $fileerror7 = $_FILES['file7']['error'];
  $filetype7 = $_FILES['file7']['type'];

  $filename8 = $_FILES['file8']['name'];
  $filetmpname8 = $_FILES['file8']['tmp_name'];
  $filesize8 = $_FILES['file8']['size'];
  $fileerror8 = $_FILES['file8']['error'];
  $filetype8 = $_FILES['file8']['type'];

  $filename9 = $_FILES['file9']['name'];
  $filetmpname9 = $_FILES['file9']['tmp_name'];
  $filesize9 = $_FILES['file9']['size'];
  $fileerror9 = $_FILES['file9']['error'];
  $filetype9 = $_FILES['file9']['type'];

  $filename10 = $_FILES['file10']['name'];
  $filetmpname10 = $_FILES['file10']['tmp_name'];
  $filesize10 = $_FILES['file10']['size'];
  $fileerror10 = $_FILES['file10']['error'];
  $filetype10 = $_FILES['file10']['type'];

  $filename11 = $_FILES['file11']['name'];
  $filetmpname11 = $_FILES['file11']['tmp_name'];
  $filesize11 = $_FILES['file11']['size'];
  $fileerror11 = $_FILES['file11']['error'];
  $filetype11 = $_FILES['file11']['type'];

  $filename12 = $_FILES['file12']['name'];
  $filetmpname12 = $_FILES['file12']['tmp_name'];
  $filesize12 = $_FILES['file12']['size'];
  $fileerror12 = $_FILES['file12']['error'];
  $filetype12 = $_FILES['file12']['type'];

  $filename13 = $_FILES['file13']['name'];
  $filetmpname13 = $_FILES['file13']['tmp_name'];
  $filesize13 = $_FILES['file13']['size'];
  $fileerror13 = $_FILES['file13']['error'];
  $filetype13 = $_FILES['file13']['type'];

  $filename14 = $_FILES['file14']['name'];
  $filetmpname14 = $_FILES['file14']['tmp_name'];
  $filesize14 = $_FILES['file14']['size'];
  $fileerror14 = $_FILES['file14']['error'];
  $filetype14 = $_FILES['file14']['type'];

  $filename15 = $_FILES['file15']['name'];
  $filetmpname15 = $_FILES['file15']['tmp_name'];
  $filesize15 = $_FILES['file15']['size'];
  $fileerror15 = $_FILES['file15']['error'];
  $filetype15 = $_FILES['file15']['type'];

  $filename16 = $_FILES['file16']['name'];
  $filetmpname16 = $_FILES['file16']['tmp_name'];
  $filesize16 = $_FILES['file16']['size'];
  $fileerror16 = $_FILES['file16']['error'];
  $filetype16 = $_FILES['file16']['type'];

  $filename17 = $_FILES['file17']['name'];
  $filetmpname17 = $_FILES['file17']['tmp_name'];
  $filesize17 = $_FILES['file17']['size'];
  $fileerror17 = $_FILES['file17']['error'];
  $filetype17 = $_FILES['file17']['type'];

  $filename18 = $_FILES['file18']['name'];
  $filetmpname18 = $_FILES['file18']['tmp_name'];
  $filesize18 = $_FILES['file18']['size'];
  $fileerror18 = $_FILES['file18']['error'];
  $filetype18 = $_FILES['file18']['type'];

  $filename19 = $_FILES['file19']['name'];
  $filetmpname19 = $_FILES['file19']['tmp_name'];
  $filesize19 = $_FILES['file19']['size'];
  $fileerror19 = $_FILES['file19']['error'];
  $filetype19 = $_FILES['file19']['type'];


  $fileext = explode('.',$filename1);
  $fileext = explode('.',$filename2);
  $fileext = explode('.',$filename3);
  $fileext = explode('.',$filename4);
  $fileext = explode('.',$filename5);
  $fileext = explode('.',$filename6);
  $fileext = explode('.',$filename7);
  $fileext = explode('.',$filename8);
  $fileext = explode('.',$filename9);
  $fileext = explode('.',$filename10);
  $fileext = explode('.',$filename11);
  $fileext = explode('.',$filename12);
  $fileext = explode('.',$filename13);
  $fileext = explode('.',$filename14);
  $fileext = explode('.',$filename15);
  $fileext = explode('.',$filename16);
  $fileext = explode('.',$filename17);
  $fileext = explode('.',$filename18);
  $fileext = explode('.',$filename19);


  $fileactualext = strtolower(end($fileext));
 

  $allowed = array ('jpg','jpeg','png','pdf','docx');
 
  if (in_array($fileactualext,$allowed)) {

  if ($fileerror1 === 0 && $fileerror2 === 0 && $fileerror3 === 0 && $fileerror4 === 0 && $fileerror5 === 0 && $fileerror6 === 0 && $fileerror7 === 0 && $fileerror8 === 0 && $fileerror9 === 0 && $fileerror10 === 0 && $fileerror11 === 0 && $fileerror12 === 0 && $fileerror13 === 0 && $fileerror14 === 0 && $fileerror15 === 0 && $fileerror16 === 0 && $fileerror17 === 0 && $fileerror18 === 0 && $fileerror19 === 0) {  




  if ($filesize1  < 20000000 && $filesize2  < 20000000 && $filesize3  < 20000000 && $filesize4 < 20000000 && $filesize5  < 20000000 && $filesize6  < 20000000 && $filesize7 < 20000000 && $filesize8  < 20000000 && $filesize9  < 20000000 && $filesize10 < 20000000 && $filesize11  < 20000000 && $filesize12  < 20000000 && $filesize13 < 20000000 && $filesize14  < 20000000 && $filesize15  < 20000000 && $filesize16 < 20000000 && $filesize17  < 20000000 && $filesize18  < 20000000 && $filesize19 < 20000000) {
   
    

      $filenamenew = uniqid('', true).".".$fileactualext;
     

      $filedestination = 'engr_pic/'. $filenamenew;


      move_uploaded_file($filetmpname1, $filedestination);{
        move_uploaded_file($filetmpname2, $filedestination);{
         move_uploaded_file($filetmpname3, $filedestination);{
          move_uploaded_file($filetmpname4, $filedestination);{
            move_uploaded_file($filetmpname5, $filedestination);{
          move_uploaded_file($filetmpname6, $filedestination);{
            move_uploaded_file($filetmpname7, $filedestination);{
              move_uploaded_file($filetmpname8, $filedestination);{
                move_uploaded_file($filetmpname9, $filedestination);{
                  move_uploaded_file($filetmpname10, $filedestination);{
                    move_uploaded_file($filetmpname11, $filedestination);{
                      move_uploaded_file($filetmpname12, $filedestination);{
                        move_uploaded_file($filetmpname13, $filedestination);{
                          move_uploaded_file($filetmpname14, $filedestination);{
                            move_uploaded_file($filetmpname15, $filedestination);{
                              move_uploaded_file($filetmpname16, $filedestination);{
                                move_uploaded_file($filetmpname17, $filedestination);{
                                  move_uploaded_file($filetmpname18, $filedestination);{
                                    move_uploaded_file($filetmpname19, $filedestination);{

        
      $query = mysqli_query($conn, "INSERT INTO engr_tb3 (dateapp, occupancy, filename1, filetype1, filename2, filetype2, filename3, filetype3, filename4, filetype4 ,filename5, filetype5, filename6, filetype6, filename7, filetype7, filename8, filetype8, filename9, filetype9, filename10, filetype10, filename11, filetype11, filename12,  filetype12 , filename13, filetype13, filename14, filetype14, filename15, filetype15, filename16, filetype16, filename17, filetype17, filename18, filetype18, filename19, filetype19, status) 

        VALUES ('$dateapp', '$occupancy', '$filename1','$filetype1', '$filename2', '$filetype2', '$filename3','$filetype3', '$filename4', '$filetype4' , '$filename5','$filetype5', '$filename6', '$filetype6', '$filename7', '$filetype7', '$filename8', '$filetype8' , '$filename9', '$filetype9', '$filename10', '$filetype10', '$filename11', '$filesize11', '$filetype11', '$filename12', '$filesize12', '$filetype12' , '$filename13', '$filetype13', '$filename14', '$filetype14', '$filename15', '$filetype15' , '$filename16', '$filetype16', '$filename17', '$filetype17', '$filename18', '$filetype18', '$filename19', '$filetype19', '$status')");




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
}
}
}
}
}
}
}
}
else{
      header("location: message__3.php");
  }

}else{ 
      header("location: message__2.php");
  }


}else{ 
      header("location: message__.php");
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
