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


  $fileactualext = strtolower(end($fileext));
 

  $allowed = array ('jpg','jpeg','png','pdf','docx');
 
  if (in_array($fileactualext,$allowed)) {

  if ($fileerror1 === 0 && $fileerror2 === 0 && $fileerror3 === 0 && $fileerror4 === 0 && $fileerror5 === 0 && $fileerror6 === 0 && $fileerror7 === 0 && $fileerror8 === 0 && $fileerror9 === 0 && $fileerror10 === 0 && $fileerror11 === 0 && $fileerror12 === 0 && $fileerror12 === 0 && $fileerror14 === 0 && $fileerror15 === 0 && $fileerror16 === 0) {
    

   
    
  if ($filesize1 < 20000000 && $filesize2 < 20000000 && $filesize3 < 20000000 && $filesize4 < 20000000 && $filesize5  < 20000000 && $filesize6 < 20000000 && $filesize7 < 20000000 && $filesize8 && $filesize9 < 20000000 && $filesize10 && $filesize11 < 20000000 && $filesize12 && $filesize13 < 20000000 && $filesize14 && $filesize15 < 20000000 && $filesize16) {
   
    

      $filenamenew = uniqid('', true).".".$fileactualext;
     

      $filedestination = 'bfp_pic/'.$filenamenew;


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
 
        
      $query = mysqli_query($conn, "INSERT INTO bfp_tb (name,filename1, filesize1, filetype1,filename2, filesize2, filetype2, filename3, filesize3, filetype3, filename4, filesize4, filetype4, filename5, filesize5, filetype5,filename6, filesize6, filetype6, filename7, filesize7, filetype7, filename8, filesize8, filetype8, filename9, filesize9, filetype9, filename10, filesize10, filetype10, filename11, filesize11, filetype11, filename12, filesize12, filetype12 ,filename13, filesize13, filetype13, filename14, filesize14, filetype14, filename15, filesize15, filetype15, filename16, filesize16, filetype16, status)

         VALUES ('$name','$filename1','$filesize1', '$filetype1', '$filename2','$filesize2', '$filetype2','$filename3','$filesize3', '$filetype3', '$filename4','$filesize4', '$filetype4','$filename5','$filesize5', '$filetype5', '$filename6','$filesize6', '$filetype6','$filename7','$filesize7', '$filetype7', '$filename8','$filesize8', '$filetype8','$filename9','$filesize9', '$filetype9', '$filename10','$filesize10', '$filetype10','$filename11','$filesize11', '$filetype11', '$filename12','$filesize12', '$filetype12','$filename13','$filesize13', '$filetype13', '$filename14','$filesize14', '$filetype14','$filename15','$filesize15', '$filetype15', '$filename16','$filesize16', '$filetype16','$status')");

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









?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Message</title>
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
