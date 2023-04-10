<?php
    session_start();
    if( !isset($_SESSION['user']) ){
        header("location:../signin.php");
        exit;
    }
    elseif( $_SESSION['type'] != 'Admin' ){
        header("location:attendance_ departure.php");
        echo "<script>alert('User Can not Delete');</script>";
        exit;
    }

    include "../master/sections/connect.php";
        $attendId = $_GET['attend_id'];
        $delRecord = "DELETE FROM attendance WHERE attend_id = $attendId";
        $conn -> exec($delRecord);
        header("location: attendance_ departure.php");
        echo "<script>alert('DeleteSuccess');</script>";
        exit;
?>         


