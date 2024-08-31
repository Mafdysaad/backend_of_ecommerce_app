<?php
include 'conected.php';
$AllData = array();
$data = getAllData('categories',null,null,false);
$AllData["status"] = "success";
$AllData['categories'] = $data ;
getAllData('itmes','itme_discount	!= 0');
$AllData['items'] = $data ;
echo json_encode($AllData);