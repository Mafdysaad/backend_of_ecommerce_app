<?php
$dsn = 'mysql:host=localhost;dbname=ecommarce_app'; //data source name
$user = 'root';   // user admin of my database
$pass = "";      // password of admin of my database
// to make my databse accepted Arabic
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
);



try {
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With, Access-Control-Allow-Origin");
    header("Access-Control-Allow-Methods: POST, OPTIONS , GET");
    $db = new PDO($dsn, $user, $pass, $option);
    //هنا بحددلة نوع المود بقولة اعتمد على التراى والكاتش
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    include 'functions.php';
    // checkAuthenticate();
} catch (PDOException $e) {
    echo $e->getMessage();
}
