<?php
require 'config.php';
if (isset($_POST['submit'])) {
  $file1 = $_FILES['file1'];

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
        $query = mysqli_query($conn, "INSERT INTO upload_tb (filename1,filesize1, filetype1) VALUES ('$filename1','$filesize1', '$filetype1')");


          echo"<script> alert('Successfully Uploaded!'); </script>";

}
      }else{
        echo"<script> alert('Your file is too large!'); </script>";
      }
    }else{
      echo"<script> alert('There was an error uploading your file!'); </script>"; 
    }
  }else{
   echo "<script> alert('Sorry, only JPG, JPEG, PNG and PDF files are allowed.'); </script>"; 
  }
} 



?>