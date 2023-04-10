<?php
    session_start();
    if( !isset($_SESSION['user']) ){
        header("location:../signin.php");
        exit;
    }
    elseif( $_SESSION['type'] != 'Admin' ){
        header("location:general_settings.php");
        exit;
    }

    include "../master/sections/connect.php";
        $genId = $_GET['gen_id'];
        $delRecord = "DELETE FROM general_setting WHERE gen_id = $genId";
        $conn -> exec($delRecord);
        header("location:general_settings.php");
        exit;