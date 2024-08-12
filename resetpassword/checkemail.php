<?php
include '../conected.php';
$email = filterRequest("email");
$user_verifycode = rand(10000, 99999);

$stm = $db->prepare('SELECT * FROM users WHERE user_email = ? ' );
$stm->execute(array($email));
$count=$stm->rowCount();
result($count);
if ($count > 0) {
    $data = array('user_verifycode'=>$user_verifycode );
    updateData('users',$data,"user_email = '$email'",false);
    send_email($email, 'verifycode Barray Shop', 'your code is' . $user_verifycode , 'Barray App suport');

} 