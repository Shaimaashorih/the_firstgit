<?php
$hostName = "localhost";
$dbName = "hr_system";
$username = "root";
$password = "";

try{
    $conn = new PDO("mysql:host=$hostName; dbname=$dbName", $username, $password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(Exception $e){
    echo $e -> getMessage();
}

// if($conn){
//     echo"connection successfly";
// }
// else{
//     echo"connection faild";
// }