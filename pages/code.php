           <!-- ---------------------------- -->

           <?php 
           session_start();
           include "../master/sections/connect.php";
?>
<?php
          if($_SERVER['REQUEST_METHOD']=='POST'){
            $genId=$_POST['genid'];
            $extra = $_POST['extra'];
            $dis = $_POST['Discount'];
            $weekend1 = $_POST['day1'];
            $weekend2 = $_POST['day2'];
            $weekend3 = $_POST['day3'];
            $weekend4 = $_POST['day4'];
            $weekend5 = $_POST['day5'];
            $weekend6 = $_POST['day6'];
            $weekend7 = $_POST['day7'];
            $insertRecord = $conn -> prepare ("REPLACE INTO  general_setting (gen_id, extra , discount , weekend1 , weekend2 ,weekend3 ,weekend4 ,weekend5 ,weekend6 ,weekend7)
             VALUE(? , ? ,? ,? ,?,?,? ,? ,? ,?)");
            
            $insertRecord -> execute([$genId ,$extra , $dis , $weekend1 ,$weekend2 , $weekend3 ,$weekend4 ,$weekend5 ,$weekend6 ,$weekend7]);
          
            // echo "<script>alert(' Data Edit success');</script>";
            header("location:general_settings.php");
            exit;
  
          }
          else{
              header("location:general_settings.php");
              // echo '<script>alert("Added faild")</script>';
              exit;            
          }
          
          
        
         ?>


        <!-- ---------------------------- -->