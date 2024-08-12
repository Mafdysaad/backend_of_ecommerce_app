<?php
include '../conected.php';

$name = filterRequest("name");
$email = filterRequest("email");
$phone = filterRequest("phone");

//To encrypt data
$password = sha1($_POST['password']);
//To generate random code.
$user_verifycode = rand(10000, 99999);
$stm = $db->prepare('SELECT * FROM users WHERE user_email = ? OR user_phone = ? ');
$stm->execute(array($email,$phone));
$count=$stm->rowCount();
if ($count > 0) {
    printfailure();
} else {
    $infor = array(
        "user_name" => $name,
        "user_email" => $email,
        "password" => $password,
        "user_phone" => $phone,
        "user_verifycode" => $user_verifycode,
    );
    insertData(
        $table = 'users',
        $data = $infor,
    );
    send_email($email, 'verifycode Barray Shop', 'your code is' . $user_verifycode, 'Barray App suport');
}
