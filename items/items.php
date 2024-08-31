<?php
include '../conected.php';
$item_name = filterRequest("item_name");
getAllData('itmes','WHERE items_cat = ?',array($item_name));
