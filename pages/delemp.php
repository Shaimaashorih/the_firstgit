<?php
    session_start();
    if( !isset($_SESSION['user']) ){
        header("location:../signin.php");
        exit;
    }
    elseif( $_SESSION['type'] != 'Admin' ){
        header("location:employees.php");
        exit;
    }

    include "../master/sections/connect.php";
        $empId = $_GET['emp_id'];
        $delRecord = "DELETE FROM employees WHERE emp_id = $empId";
        $conn -> exec($delRecord);
        header("location:employees.php");
        exit;