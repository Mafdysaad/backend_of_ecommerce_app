<?php
include '../conected.php';
$password = sha1($_POST['password']);
$email = filterRequest("email");


$stm = $db->prepare("SELECT * FROM users WHERE user_email = ? ");
$stm->execute(array($email));
$count = $stm->rowcount();
if ($count > 0) {
    $data = array(
        'password'=>$password,
    );
    updateData('users', $data, "user_email = '$email'");
} else {
    printfailure();
}