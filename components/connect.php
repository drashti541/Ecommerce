<?php

$db_name = 'mysql:host=localhost;dbname=shop_db';
$user_name = 'root';
$user_password = '';

$conn = new PDO($db_name, $user_name, $user_password);

// $servername = "localhost";
// $username = "id20561961_drashti";
// $password = "drashT!2001";
// $database = "id20561961_shop_db";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully"; 
//     } catch(PDOException $e) {    
//     echo "Connection failed: " . $e->getMessage();
//     }
?> 

<!-- name = shop_db
username = id20561961_drashti
password = drashT!2001 -->