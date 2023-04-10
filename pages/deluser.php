<?php
    session_start();
    if( !isset($_SESSION['user']) ){
        header("location:../signin.php");
        exit;
    }
    elseif( $_SESSION['type'] != 'Admin' ){
        header("location:users.php");
        exit;
    }

    include "../master/sections/connect.php";
        $userId = $_GET['user_userid'];
        $delRecord = "DELETE FROM users WHERE user_userid = $userId";
        $conn -> exec($delRecord);
        header("location:users.php");
        exit;