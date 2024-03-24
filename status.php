<?php
require 'config.php';
if (isset($_POST["change"])) {
    $status = mysqli_real_escape_string($conn, $_POST["status[]"]);
    if (!empty($_POST['status'])) {
      foreach ($_POST['status'] as $status ){

      	$id = mysqli_real_escape_string($conn, $_POST["id"]);

      	$sqlUpdate = "UPDATE upload_tb SET status = '$status'  WHERE id='$id'";

      	if(mysqli_query($conn,$sqlUpdate)){
        header("Location:message4.php");
    }else{
        die("Something went wrong");
    }
      }
}
}

?>