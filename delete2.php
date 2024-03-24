<?php
require 'config.php';
if (isset($_GET["id"])) {
	$id = $_GET["id"];

$sql = "DELETE FROM upload_tb WHERE id=$id";
$conn->query($sql);
}
header("location:users.php");
exit;
?>