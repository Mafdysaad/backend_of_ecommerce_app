<?php
include '../conected.php';
$email = filterRequest("email");
$password = sha1($_POST['password']);

 getData("users","user_email = ? AND  `password` = ? AND user_approve = 1" ,array($email,$password));

