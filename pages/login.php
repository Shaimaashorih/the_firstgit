<?php
    session_start();
    include "../master/sections/connect.php";
?>
<!DOCTYPE html>
<html lang="en" class="loading">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <title>Hr-system</title>
      <link rel="apple-touch-icon" sizes="60x60" href="../app-assets/img/ico/apple-icon-60.html">
      <link rel="apple-touch-icon" sizes="76x76" href="../app-assets/img/ico/apple-icon-76.html">
      <link rel="apple-touch-icon" sizes="120x120" href="../app-assets/img/ico/apple-icon-120.html">
      <link rel="apple-touch-icon" sizes="152x152" href="../app-assets/img/ico/apple-icon-152.html">
      <link rel="shortcut icon" type="image/png" href="../app-assets/img/logo.png">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-touch-fullscreen" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="default">
      <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="../app-assets/fonts/feather/style.min.css">
      <link rel="stylesheet" type="text/css" href="../app-assets/fonts/simple-line-icons/style.css">
      <link rel="stylesheet" type="text/css" href="../app-assets/fonts/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/perfect-scrollbar.min.css">
      <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/prism.min.css">
      <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/chartist.min.css">
      <link rel="stylesheet" type="text/css" href="../app-assets/css/app.css">
      <link rel="stylesheet"  href="../master/css/val.css">
      <style>
        

 body {
	 background: #031323;
	 overflow: hidden;
}
 .fas {
	 width: 32px;
}
 section {
	 display: flex;
	 justify-content: center;
	 align-items: center;
	 min-height: 100vh;
	 background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	 background-size: 400% 400%;
	 animation: gradient 10s ease infinite;
}
 @keyframes gradient {
	 0% {
		 background-position: 0% 50%;
	}
	 50% {
		 background-position: 100% 50%;
	}
	 100% {
		 background-position: 0% 50%;
	}
}
 .box {
	 position: relative;
}
 .box .square {
	 position: absolute;
	 background: rgba(255, 255, 255, 0.1);
	 backdrop-filter: blur(5px);
	 box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
	 border: 1px solid rgba(255, 255, 255, 0.15);
	 border-radius: 15px;
	 animation: square 10s linear infinite;
	 animation-delay: calc(-1s * var(--i));
}
 @keyframes square {
	 0%, 100% {
		 transform: translateY(-20px);
	}
	 50% {
		 transform: translateY(20px);
	}
}
 .box .square:nth-child(1) {
	 width: 100px;
	 height: 100px;
	 top: -15px;
	 right: -45px;
}
 .box .square:nth-child(2) {
	 width: 150px;
	 height: 150px;
	 top: 105px;
	 left: -125px;
	 z-index: 2;
}
 .box .square:nth-child(3) {
	 width: 60px;
	 height: 60px;
	 bottom: 85px;
	 right: -45px;
	 z-index: 2;
}
 .box .square:nth-child(4) {
	 width: 50px;
	 height: 50px;
	 bottom: 35px;
	 left: -95px;
}
 .box .square:nth-child(5) {
	 width: 50px;
	 height: 50px;
	 top: -15px;
	 left: -25px;
}
 .box .square:nth-child(6) {
	 width: 85px;
	 height: 85px;
	 top: 165px;
	 right: -155px;
	 z-index: 2;
}
 .container {
	 position: relative;
	 padding: 50px;

	 min-height: 380px;
	 display: flex;
	 justify-content: center;
	 align-items: center;
	 background: rgba(255, 255, 255, 0.1);
	 backdrop-filter: blur(5px);
	 border-radius: 10px;
	 box-shadow: 0 25px 45px rgba(0, 0, 0, 0.2);
}
 .container::after {
	 content: '';
	 position: absolute;
	 top: 5px;
	 right: 5px;
	 bottom: 5px;
	 left: 5px;
	 border-radius: 5px;
	 pointer-events: none;
	 background: linear-gradient(to bottom, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.1) 2%);
}
 .form {
	 position: relative;
	 width: 100%;
	 height: 100%;
}
 .form h2 {
	 color: #fff;
	 letter-spacing: 2px;
	 margin-bottom: 30px;
}
 .form .inputBx {
	 position: relative;
	 width: 100%;
	 margin-bottom: 20px;
}
 .form .inputBx input {
	 width: 100%;
	 outline: none;
	 border: none;
	 border: 1px solid rgba(255, 255, 255, 0.2);
	 background: rgba(255, 255, 255, 0.2);
	 padding: 8px 10px;
	 padding-left: 40px;
	 border-radius: 15px;
	 color: #fff;
	 font-size: 16px;
	 box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}
 .form .inputBx .password-control {
	 position: absolute;
	 top: 11px;
	 right: 10px;
	 display: inline-block;
	 width: 20px;
	 height: 20px;
	 background: url(https://snipp.ru/demo/495/view.svg) 0 0 no-repeat;
	 transition: 0.5s;
}
 .form .inputBx .view {
	 background: url(https://snipp.ru/demo/495/no-view.svg) 0 0 no-repeat;
	 transition: 0.5s;
}
 .form .inputBx .fas {
	 position: absolute;
	 top: 13px;
	 left: 13px;
}
 .form .inputBx input[type="submit"] {
	 background: #fff;
	 color: #111;
	 max-width: 100px;
	 padding: 8px 10px;
	 box-shadow: none;
	 letter-spacing: 1px;
	 cursor: pointer;
	 transition: 1.5s;
}
 .form .inputBx input[type="submit"]:hover {
	 background: linear-gradient(115deg, rgba(0, 0, 0, 0.10), rgba(255, 255, 255, 0.25));
	 color: #fff;
	 transition: 0.5s;
}
 .form .inputBx input::placeholder {
	 color: #fff;
}
 .form .inputBx span {
	 position: absolute;
	 left: 30px;
	 padding: 10px;
	 display: inline-block;
	 color: #fff;
	 transition: 0.5s;
	 pointer-events: none;
}
 .form .inputBx input:focus ~ span, .form .inputBx input:valid ~ span {
	 transform: translateX(-30px) translateY(-25px);
	 font-size: 12px;
}
 .form p {
	 color: #fff;
	 font-size: 15px;
	 margin-top: 5px;
}
 .form p a {
	 color: #fff;
}
 .form p a:hover {
	 background-color: #000;
	 background-image: linear-gradient(to right, #434343 0%, black 100%);
	 /* -webkit-background-clip: text; */
	 -webkit-text-fill-color: transparent;
}
 .remember {
	 position: relative;
	 display: inline-block;
	 color: #fff;
	 margin-bottom: 10px;
	 cursor: pointer;
}
.form .inputBx {
    position: relative;
    width: 100%;
    margin-bottom: 20px
;
    font-weight: 600;
    font-size: 17px;
}
.text-center img  {
    height: 90px;
    margin-bottom: 25px;
}
 
      </style>
   </head>
   <body>
    <section>
  
        <div class="box">
          
          <div class="square" style="--i:0;"></div>
          <div class="square" style="--i:1;"></div>
          <div class="square" style="--i:2;"></div>
          <div class="square" style="--i:3;"></div>
          <div class="square" style="--i:4;"></div>
          <div class="square" style="--i:5;"></div>
          
         <div class="container"> 
          <div class="form"> 
              <div class="text-center">
                <img src="../app-assets/img/logo.png" >
              </div>
          
            <h2>Hr System Login  </h2>
            <form action=" <?php echo$_SERVER['PHP_SELF'] ;?>" method="POST">
              <div class="inputBx">
                <input type="text" required="required" name="username">
                <span>Login</span>
              
              </div>
              <div class="inputBx password">
                <input id="password-input" type="password" name="password" required="required">
                <span>Password</span>
                <a href="#" class="password-control" onclick="return show_hide_password(this);"></a>
          
              </div>
              <label class="remember"><input type="checkbox">
                Remember</label>
              <div class="inputBx">
                <input type="submit" value="Log in"> 
              </div>
            </form>

            <p>Forgot password? <a href="#">Click Here</a></p>
            <p>Don't have an account <a href="#">Sign up</a></p>
          </div>
        </div>
           <!-- --------------------------- -->
		   <?php
		       if($_SERVER['REQUEST_METHOD'] == 'POST'){
				$user = $_POST['username'];
				$pass = $_POST['password'];

				$getUserData = $conn -> query("SELECT user_userid ,user_username , user_password FROM users
				 WHERE user_username = '$user' AND user_password= '$pass'
				")->fetchAll(PDO::FETCH_ASSOC);
				if(count($getUserData) > 0){
					$getAdmins = $conn -> query("SELECT user_username 
					FROM users WHERE user_usertype = 1") -> fetchAll(PDO::FETCH_COLUMN);
					if(in_array($user , $getAdmins)){
						$_SESSION['user']=$user;
						$_SESSION['type']="Admin";
						$_SESSION['userid']=$getUserData[0]['user_userid'];

						header("location : ./pages/index.php");
						exit;
					}
					else{
						$_SESSION['user']=$user;
						$_SESSION['type']="User";
						$_SESSION['userid']=$getUserData[0]['user_userid'];

						header("location : ./pages/index.php");
						exit;
					}
				}
				else{
					echo "<div class=\"error\">Invalid username or password.</div>";
				}
			   }
		   ?>

            <!-- --------------------------- -->

        </div>
      </section> 
      <script src="../app-assets/vendors/js/core/jquery-3.3.1.min.js"></script>
      <script src="../app-assets/vendors/js/core/popper.min.js"></script>
      <script src="../app-assets/vendors/js/core/bootstrap.min.js"></script>
      <script src="../app-assets/vendors/js/perfect-scrollbar.jquery.min.js"></script>
      <script src="../app-assets/vendors/js/prism.min.js"></script>
      <script src="../app-assets/vendors/js/jquery.matchHeight-min.js"></script>
      <script src="../app-assets/vendors/js/screenfull.min.js"></script>
      <script src="../app-assets/vendors/js/pace/pace.min.js"></script>
      <script src="../app-assets/vendors/js/chartist.min.js"></script>
      <script src="../app-assets/js/app-sidebar.js"></script>
      <script src="../app-assets/js/notification-sidebar.js"></script>
      <script src="../app-assets/js/customizer.js"></script>
      <script src="../app-assets/js/dashboard-ecommerce.js"></script>
      <script>
          function show_hide_password(target){
  var input = document.getElementById('password-input');
  if (input.getAttribute('type') == 'password') {
    target.classList.add('view');
    input.setAttribute('type', 'text');
  } else {
    target.classList.remove('view');
    input.setAttribute('type', 'password');
  }
  return false;
}
      </script>
   </body>
 