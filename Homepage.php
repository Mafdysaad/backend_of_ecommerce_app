<?php
include 'conected.php';
$AllData = array();
$data = getAllData('categories',null,null,false);
$AllData["status"] = "success";
$AllData['categories'] = $data ;
$data = getAllData('items','itme_discount	!= 0',null,false);
$AllData['items'] = $data ;
echo json_encode($AllData);