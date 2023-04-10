<?php
include "../master/sections/connect.php";

$EID = $_GET['s4'];
$getPrice = $conn -> query("SELECT net_salary FROM calc_salary
WHERE emp_id = $EID ") -> fetchALl(PDO::FETCH_COLUMN);
echo $getPrice[0];