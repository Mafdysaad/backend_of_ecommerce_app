<?php
require_once('mail.php');
$mail->setFrom('mafdysaad366@gmail.com', 'مفدى بية'); //form will be appeard to youser
$mail->addAddress('saramafdy@gmail.com');
$mail->Subject = 'وحشتينى موت';
$mail->Body = 'خدي بالك من العيال ';
$mail->send();
