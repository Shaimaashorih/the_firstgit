<?php
session_start();

// $usertypeid = $_GET['user_userid'];
// $get_user_record = $conn -> query("SELECT * FROM users 
//         WHERE user_userid = $usertypeid")-> fetchAll(PDO::FETCH_ASSOC);

// if($get_user_record['type']==1){
//     echo "active user";
// }
// else{
//     echo " Not Active User";
    
// }



if( $_SESSION['type'] != 'Admin' ){
    echo " Not Active User";
	exit;
}
else{
    echo " Active User";
    exit;
}