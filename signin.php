<?php
    session_start();
    include "./master/sections/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./master/image/logo.png">
    <title>HR SYSTEM</title>
    <link rel="stylesheet" href="./master/boot/css/bootstrap.css">
    <script src="./master/boot/js/bootstrap.js"></script>
    <link rel="stylesheet" href="./master/css/main.css">
</head>
<body>
    
    <div class="all">
        <header></header>

        <div class="all-data">

            <!-- ---------logo-------- -->
            <img src="./master/images/logo.png" class="img1">
            <!-- -------form---------- -->
            <form action="<?php echo $_SERVER['PHP_SELF'] ; ?>" method="POST">
                <input type="text" name="username" placeholder="User Name" autocomplete="off">
                <hr>
                <input type="password" name="password" placeholder="PASSWORD">
                <hr>
                <input type="submit" value="Sign in">

            </form>
            <!-- --------------------------- -->
            <?php
                    if( $_SERVER['REQUEST_METHOD'] == 'POST'){
                        
                        $user = $_POST['username'];
                        $pass = $_POST['password'];

                        if( empty($user) || empty($pass) ){
                            echo "<div class=\"error\">You Should Write username and Password to Login.</div>";
                        }

                        else{
                            $getUsersData = $conn -> query("SELECT user_userid, user_username, user_password
                            FROM users WHERE user_username = '$user' 
                            AND user_password = '$pass' ") -> fetchAll(PDO::FETCH_ASSOC);

                            if ( count($getUsersData) > 0 ){
                                $getAdmins = $conn -> query("SELECT user_username 
                                FROM users WHERE user_usertype = 1") -> fetchAll(PDO::FETCH_COLUMN);

                                if( in_array($user, $getAdmins) ){
                                    $_SESSION['user'] = $user;
                                    $_SESSION['type'] = "Admin";
                                    $_SESSION['userid'] = $getUsersData[0]['user_userid'];
                                    header("location:pages/index.php");
                                    exit;
                                }

                                else{
                                    $_SESSION['user'] = $user;
                                    $_SESSION['type'] = "User";
                                    $_SESSION['userid'] = $getUsersData[0]['user_userid'];
                                    header("location:pages/index.php");
                                    exit;
                                }

                            }
                            
                            else{
                                echo "<div class=\"error\">Invalid username or password.</div>";
                            }

                        }
                    }
                ?>

            <!-- --------------------------- -->
        </div>
       
        <footer></footer>
    </div>
   

</body>
</html>