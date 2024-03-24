<?php
include('config.php');
if (isset($_POST["edit"])) {
    $organizationtype = mysqli_real_escape_string($conn, $_POST["organizationtype[]"]);
    $businessname = mysqli_real_escape_string($conn, $_POST["businessname"]);
    $tradename = mysqli_real_escape_string($conn, $_POST["tradename"]);
    $businessadress = mysqli_real_escape_string($conn, $_POST["businessadress"]);
    $businessarea = mysqli_real_escape_string($conn, $_POST["businessarea"]);
    $noemployees = mysqli_real_escape_string($conn, $_POST["noemployees"]);
    $registrationno = mysqli_real_escape_string($conn, $_POST["registrationno"]);
    $CTCNo = mysqli_real_escape_string($conn, $_POST["CTCNo"]);
    if (!empty($_POST['organizationtype'])) {
      foreach ($_POST['organizationtype'] as $organizationtype ){



    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sqlUpdate = "UPDATE upload_tb SET organizationtype = '$organizationtype', businessname = '$businessname', tradename = '$tradename', businessadress = '$businessadress', businessarea = '$businessarea', noemployees = '$noemployees',  registrationno =' $registrationno', CTCNo = '$CTCNo' WHERE id='$id'";
    if(mysqli_query($conn,$sqlUpdate)){
        header("Location:message4.php");
    }else{
        die("Something went wrong");
    }
}
}
}

    
?>