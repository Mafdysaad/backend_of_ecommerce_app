<?php
include '../conected.php';
$email = filterRequest('email');
$verify_code = filterRequest('verify_code');
$stm = $db->prepare("SELECT * FROM users WHERE user_email = ? AND user_verifycode = ?");
$stm->execute(array($email,$verify_code));
$count = $stm->rowcount();
result($count);