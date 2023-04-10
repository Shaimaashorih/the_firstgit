<?php
// if( $_SERVER['REQUEST_METHOD'] == 'POST'){
//     $uploadedFile = $_FILES['upload-file'];

//     $file_destination =  __DIR__ . "/" . "files/". $uploadedFile['name'];

    
//     $file_path = "files/" . $uploadedFile['name']; 

//     $extensions = array("xlsx", "xlsm", "xlsb", "xltx");

    
//     $file_exten =  pathinfo($uploadedFile['name'])['extension'];

   
//     if( !in_array($file_exten, $extensions) ){
//         echo "Sorry file " . $uploadedFile['name'] . " is not file";
//     }

    
//     else{
//         if( move_uploaded_file($uploadedFile['tmp_name'], $file_destination) ){
//             echo "Images Successfully Uploaded";
//         }
//         else{
//             echo "Sorry Can't uploded file";
//         }
//     }
    

// }

// else{
//     header("location:attendance_ departure.php");
//     exit;
// }
session_start();
include " ../master/sections/connect.php";

if(isset($_POST["submit_file"])){
    
 $file = $_FILES["file"]["tmp_name"];
 $file_open = fopen($file,"r");
 while(($csv = fgetcsv($file_open, 1000, ",")) !== false)
 {
  $empn = $csv[0];
  $attdate = $csv[1];
  $start = $csv[2];
  $end = $csv[3];
  $insertRecord = $conn -> prepare("INSERT INTO attendance( attend_date, emp_id, check_in, check_out)
                           VALUES (?, ?, ? , ?)" );
                          $result=$insertRecord -> execute([$empn , $attdate , $start ,$end]);
 }
}
?>

