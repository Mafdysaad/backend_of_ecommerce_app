<?php
include '../conected.php';
$email = filterRequest("email");
$password = sha1($_POST['password']);

$stm = $db->prepare('SELECT * FROM users WHERE user_email = ? AND  `password` = ? AND user_approve = 1 ' );
$stm->execute(array($email,$password));
$count=$stm->rowCount();
result($count);