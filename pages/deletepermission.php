
<?php
    session_start();
    if( !isset($_SESSION['user']) ){
        header("location:../signin.php");
        exit;
    }
    elseif( $_SESSION['type'] != 'Admin' ){
        header("location:permissions.php");
        exit;
    }


    include "../master/sections/connect.php";
        $gId = $_GET['gp_id'];
        $delRecord = "DELETE FROM gpermissions WHERE gp_id = $gId";
        $conn -> exec($delRecord);
        header("location:permissions.php");
        exit;