<?php
$email = $_POST["email"];

$token =bin2hex(random_bytes(16));

$token_hash = hash("sha256", $token);

$expiry = date("Y-m-d H:i:s",time() + 60 * 30);

$mysqli = require __DIR__ . "/config.php";

$sql = "UPDATE tb_user 
        SET reset_token_hash = ?,
            reset_token_expired_at = ?
        WHERE email = ?";

$stmt = $mysqli->prepare($sql);

$stmt->bind_param("sss", $token_hash, $expiry, $email);

$stmt->execute();

?>