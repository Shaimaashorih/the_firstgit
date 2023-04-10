<?php
    session_start();
    if( !isset($_SESSION['user']) ){
      header("location:../signin.php");
      exit;
     }
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
   </head>
   <body data-col="2-columns" class=" 2-columns ">
      <div class="wrapper">
         <div data-active-color="white" data-background-color="black" data-image="../app-assets/img/sidebar-bg/01.jpg" class="app-sidebar">
            <div class="sidebar-header">
               <div class="logo clearfix">
                  <a href="index.php" class="logo-text float-left">
                     <div class="logo-img"><img src="../app-assets/img/logo.png" alt=""/></div>
                     <span class="text align-middle">Hr System</span>
                  </a>
                  <a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block"></a><a id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none">
                  </a>
               </div>
            </div>
            <div class="sidebar-content">
               <div class="nav-container">
                  <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
                     <li class="nav-item home"><a href="#"><i class="icon-home"></i><span data-i18n=""
                        class="menu-title">Dashboard</span></a>
                     </li>
                     <li class="has-sub nav-item">
                        <a href="#"><i class="icon-users"></i><span data-i18n="" class="menu-title"> Employees</span></a>
                        <ul class="menu-content">
                           <li><a href="employees.php" class="menu-item"> <i class="icon-bar"></i> Employees Statistics</a>
                           </li>
                           <li><a href="add_employee.php" class="menu-item">Add Employee</a>
                           </li>
                        </ul>
                     </li>
                     <li class=" nav-item"><a href="add_employee.php"><i class="icon-note"></i><span data-i18n="" class="menu-title">Add Employee</span></a>
                     </li>
                     <li class=" nav-item"><a href="general_settings.php"><i class="icon-pie-chart"></i><span data-i18n="" class="menu-title">
                        General Settings</span></a>
                     </li>
                     <li class=" nav-item"><a href="attendance_ departure.php"><i class="icon-support"></i><span data-i18n="" class="menu-title">
                        Attendance</span></a>
                     </li>
                     <li class=" nav-item"><a href="salary_report.php"><i class="icon-layers"></i><span data-i18n="" class="menu-title">Salary report</span></a>
                     </li>
                     <li class=" nav-item"><a href="users.php"><i class="icon-users"></i><span data-i18n="" class="menu-title">Users</span></a>
                     </li>
                     <li class=" nav-item"><a href="permissions.php"><i class="icon-equalizer"></i><span data-i18n="" class="menu-title">Permissions</span></a>
                     </li>
                     <li class=" nav-item"><a href="chat.php"><i class="icon-puzzle"></i><span data-i18n="" class="menu-title">Chat</span></a>
                     </li>
                    
                     <li class=" nav-item"><a href="login.php"><i class="icon-pin"></i><span data-i18n="" class="menu-title">Login Page </span></a>
                        </li>
                  </ul>
               </div>
            </div>
            <div class="sidebar-background"></div>
         </div>
         <nav class="navbar navbar-expand-lg navbar-light bg-faded">
            <div class="container-fluid">
               <div class="navbar-header">
                  <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><span class="d-lg-none navbar-right navbar-collapse-toggle"><a class="open-navbar-container"><i class="ft-more-vertical"></i></a></span>
                  <a id="navbar-fullscreen" href="javascript:;" class="mr-2 display-inline-block apptogglefullscreen">
                     <i class="ft-maximize blue-grey darken-4 toggleClass"></i>
                     <p class="d-none">fullscreen</p>
                  </a>
                  <a class="ml-2 display-inline-block">
                     <i class="ft-shopping-cart blue-grey darken-4"></i>
                     <p class="d-none">cart</p>
                  </a>
                  <div class="dropdown ml-2 display-inline-block">
                     <a id="apps" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle"><i class="ft-edit blue-grey darken-4"></i><span class="mx-1 blue-grey darken-4 text-bold-400">Apps</span></a>
                     <div class="apps dropdown-menu">
                        <div class="arrow_box"><a href="chat.php" class="dropdown-item py-1"><span>Chat</span></a><a href="#" class="dropdown-item py-1"><span>TaskBoard</span></a><a href="#" class="dropdown-item py-1"><span>Calendar</span></a></div>
                     </div>
                  </div>
               </div>
               <div class="navbar-container">
                  <div id="navbarSupportedContent" class="collapse navbar-collapse">
                     <ul class="navbar-nav">
                        <li class="nav-item mt-1 navbar-search text-left dropdown">
                           <a id="search" href="#" data-toggle="dropdown" class="nav-link dropdown-toggle"><i class="ft-search blue-grey darken-4"></i></a>
                           <div aria-labelledby="search" class="search dropdown-menu dropdown-menu-right">
                              <div class="arrow_box_right">
                                 <form role="search" class="navbar-form navbar-right">
                                    <div class="position-relative has-icon-right mb-0">
                                       <input id="navbar-search" type="text" placeholder="Search" class="form-control"/>
                                       <div class="form-control-position navbar-search-close"><i class="ft-x"></i></div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </li>
                        <li class="dropdown nav-item mt-1">
                           <a id="dropdownBasic" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle"><i class="ft-flag blue-grey darken-4"></i><span class="selected-language d-none"></span></a>
                           <div class="dropdown-menu dropdown-menu-right">
                              <div class="arrow_box_right"><a href="javascript:;" class="dropdown-item py-1"><img src="../app-assets/img/flags/us.png" alt="English Flag" class="langimg"/><span> English</span></a><a href="javascript:;" class="dropdown-item py-1"><img src="../app-assets/img/flags/es.png" alt="Spanish Flag" class="langimg"/><span> Spanish</span></a><a href="javascript:;" class="dropdown-item py-1"><img src="../app-assets/img/flags/br.png" alt="Portuguese Flag" class="langimg"/><span> Portuguese</span></a><a href="javascript:;" class="dropdown-item"><img src="../app-assets/img/flags/de.png" alt="French Flag" class="langimg"/><span> French</span></a></div>
                           </div>
                        </li>
                        <li class="dropdown nav-item mt-1">
                           <a id="dropdownBasic2" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle">
                              <i class="ft-bell blue-grey darken-4"></i><span class="notification badge badge-pill badge-danger">4</span>
                              <p class="d-none">Notifications</p>
                           </a>
                           <div class="notification-dropdown dropdown-menu dropdown-menu-right">
                              <div class="arrow_box_right">
                                 <div class="noti-list"><a class="dropdown-item noti-container py-2"><i class="ft-share info float-left d-block font-medium-4 mt-2 mr-2"></i><span class="noti-wrapper"><span class="noti-title line-height-1 d-block text-bold-400 info">New Order Received</span><span class="noti-text">Lorem ipsum dolor sit ametitaque in, et!</span></span></a><a class="dropdown-item noti-container py-2"><i class="ft-save warning float-left d-block font-medium-4 mt-2 mr-2"></i><span class="noti-wrapper"><span class="noti-title line-height-1 d-block text-bold-400 warning">New User Registered</span><span class="noti-text">Lorem ipsum dolor sit ametitaque in </span></span></a><a class="dropdown-item noti-container py-2"><i class="ft-repeat danger float-left d-block font-medium-4 mt-2 mr-2"></i><span class="noti-wrapper"><span class="noti-title line-height-1 d-block text-bold-400 danger">New Order Received</span><span class="noti-text">Lorem ipsum dolor sit ametest?</span></span></a><a class="dropdown-item noti-container py-2"><i class="ft-shopping-cart success float-left d-block font-medium-4 mt-2 mr-2"></i><span class="noti-wrapper"><span class="noti-title line-height-1 d-block text-bold-400 success">New Item In Your Cart</span><span class="noti-text">Lorem ipsum dolor sit ametnatus aut.</span></span></a><a class="dropdown-item noti-container py-2"><i class="ft-heart info float-left d-block font-medium-4 mt-2 mr-2"></i><span class="noti-wrapper"><span class="noti-title line-height-1 d-block text-bold-400 info">New Sale</span><span class="noti-text">Lorem ipsum dolor sit ametnatus aut.</span></span></a><a class="dropdown-item noti-container py-2"><i class="ft-box warning float-left d-block font-medium-4 mt-2 mr-2"></i><span class="noti-wrapper"><span class="noti-title line-height-1 d-block text-bold-400 warning">Order Delivered</span><span class="noti-text">Lorem ipsum dolor sit ametnatus aut.</span></span></a></div>
                                 <a class="noti-footer primary text-center d-block border-top border-top-blue-grey border-top-lighten-4 text-bold-400 py-1">Read All Notifications</a>
                              </div>
                           </div>
                        </li>
                        <li class="nav-item mt-1 d-none d-lg-block">
                           <a id="navbar-notification-sidebar" href="javascript:;" class="nav-link position-relative notification-sidebar-toggle">
                              <i class="icon-equalizer blue-grey darken-4"></i>
                              <p class="d-none">Notifications Sidebar</p>
                           </a>
                        </li>
                        <li class="dropdown nav-item mr-0">
                           <a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-user-link dropdown-toggle">
                              <span class="avatar avatar-online"><img id="navbar-avatar" src="../app-assets/img/portrait/small/avatar-s-3.jpg" alt="avatar"/></span>
                              <p class="d-none">User Settings</p>
                           </a>
                           <div aria-labelledby="dropdownBasic3" class="dropdown-menu dropdown-menu-right">
                              <div class="arrow_box_right">
                                 <a href="user-profile-page.html" class="dropdown-item py-1"><i class="ft-edit mr-2"></i><span>My Profile</span></a><a href="chat.html" class="dropdown-item py-1"><i class="ft-message-circle mr-2"></i><span>My Chat</span></a><a href="javascript:;" class="dropdown-item py-1"><i class="ft-settings mr-2"></i><span>Settings</span></a>
                                 <div class="dropdown-divider"></div>
                                 <a href="logout.php" class="dropdown-item"><i class="ft-power mr-2"></i><span>Logout</span></a>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </nav>
         <div class="main-panel">
            <div class="main-content">
               <div class="content-wrapper">
                  <div class="container-fluid">
                     <section id="minimal-statistics-bg">
                        <div class="row">
                           <div class="col-12 mt-3 mb-1">
                              <h2 class="content-header"> Welcome in Pioneer-solutions Dashboard .. </h2>
                              <p class="content-sub-header">Statistics on minimal cards with background color.</p>
                           </div>
                        </div>
                        <section id="basic-carousel">
                           <div class="row">
                              <div class="col-md-12 col-sm-12">
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="card-block">
                                          <div id="carousel-example-caption" class="carousel slide" data-ride="carousel">
                                             <ol class="carousel-indicators">
                                                <li data-target="#carousel-example-caption" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-example-caption" data-slide-to="1"></li>
                                                <li data-target="#carousel-example-caption" data-slide-to="2"></li>
                                             </ol>
                                             <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                   <img src="../app-assets/img/slide.PNG" alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                   <img src="../app-assets/img/slide2.PNG" alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                   <img src="../app-assets/img/slide3.PNG" alt="Third slide">
                                                </div>
                                             </div>
                                             <a class="carousel-control-prev" href="#carousel-example-caption" role="button" data-slide="prev">
                                             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                             <span class="sr-only">Previous</span>
                                             </a>
                                             <a class="carousel-control-next" href="#carousel-example-caption" role="button" data-slide="next">
                                             <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                             <span class="sr-only">Next</span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </section>
                        <!-- Basic Carousel end -->
                        <div class="row match-height">
                           <div class="col-xl-3 col-lg-6 col-12">
                              <div class="card bg-success" style="height: 145px;">
                                 <div class="card-body">
                                    <div class="px-3 py-3">
                                       <div class="row text-white">
                                          <div class="col-6">

                                             <?php
                                                $empc=$conn->prepare("SELECT count(*) FROM employees");
                                                $empc->execute();
                                                $emprow = $empc->fetch(PDO::FETCH_NUM);
                                                $empcount = $emprow[0];
                                             ?>

                                             <h1><i class="fa fa-usd background-round text-white p-2 font-medium-3"></i></h1>
                                             <h4 class="pt-1 m-0 text-white"><?php echo $empcount; ?> <i class="fa fa-long-arrow-up"></i></h4>
                                          </div>
                                          <div class="col-6 text-right pl-0">
                                             <h4 class="text-white mb-2">Employees</h4>
                                             <span>90%</span>
                                             <br>
                                             <span>Grate</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-3 col-lg-6 col-12">
                              <div class="card bg-danger" style="height: 145px;">
                                 <div class="card-body">
                                    <div class="px-3 py-3">
                                       <div class="row text-white">
                                          <div class="col-6">
                                             <h1><i class="fa fa-star-o background-round text-white p-2 font-medium-3"></i></h1>
                                             <h4 class="pt-1 m-0 text-white">10 <i class="fa fa-long-arrow-down"></i></h4>
                                          </div>
                                          <div class="col-6 text-right pl-0">
                                             <h4 class="text-white mb-2">trainees</h4>
                                             <span>5%</span>
                                             <br>
                                             <span>Average</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-3 col-lg-6 col-12">
                              <div class="card bg-info" style="height: 145px;">
                                 <div class="card-body">
                                    <div class="px-3 py-3">
                                       <div class="row text-white">
                                          <div class="col-6">
                                             <h1><i class="fa fa-line-chart background-round text-white p-2 font-medium-3"></i></h1>
                                             <h4 class="pt-1 m-0 text-white">20% <i class="fa fa-long-arrow-up"></i></h4>
                                          </div>
                                          <div class="col-6 text-right pl-0">
                                             <h4 class="text-white mb-2">Attendance </h4>
                                             <span>60%</span>
                                             <br>
                                             <span>Good</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-3 col-lg-6 col-12">
                              <div class="card bg-warning" style="height: 145px;">
                                 <div class="card-body">
                                    <div class="px-3 py-3">
                                       <div class="row text-white">
                                          <div class="col-6">
                                             <h1><i class="fa fa-rocket background-round text-white p-2 font-medium-3"></i></h1>
                                             <h4 class="pt-1 m-0 text-white">82% <i class="fa fa-long-arrow-up"></i></h4>
                                          </div>
                                          <div class="col-6 text-right pl-0">
                                             <h4 class="text-white">Referral</h4>
                                             <span>980</span>
                                             <br>
                                             <span>Grate</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <!--Statistics cards Starts-->
                     <div class="row match-height">
                        <div class="col-12 col-md-8" id="recent-sales">
                           <div class="card">
                              <div class="card-header">
                                 <div class="card-title-wrap bar-primary">
                                    <h4 class="card-title">Recent Activites</h4>
                                 </div>
                                 <a class="heading-elements-toggle">
                                 <i class="la la-ellipsis-v font-medium-3"></i>
                                 </a>
                              </div>
                              <div class="card-content mt-1">
                                 <div class="table-responsive">
                                    <table class="table table-hover table-xl mb-0" id="recent-orders">
                                       <thead>
                                          <tr>
                                             <th class="border-top-0">Emplyee id </th>
                                             <th class="border-top-0">Employee Name </th>
                                             <th class="border-top-0">Date </th>
                                             <th class="border-top-0">Attendance date</th>
                                             <th class="border-top-0">check-out date</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php 
                                            $records = $conn -> query(" SELECT  emp_id ,emp_name , hire_date , emp_in , emp_out
                                             FROM employees ");
                                            while($rows = $records->fetch()):
                                          ?>
                                          <tr>
                                             <td>
                                                <button class="btn btn-sm btn-outline-danger round mb-0" type="button"><?php echo $rows['emp_id'];?></button>
                                             </td>
                                             <td class="text-truncate"><?php echo $rows['emp_name'];?> </td>
                                             <td class="text-truncate"><?php echo $rows['hire_date'];?></td>
                                             <td class="text-truncate"><?php echo $rows['emp_in'];?></td>
                                             <td class="text-truncate"><?php echo $rows['emp_out'];?></td>
                                          </tr>
                                          <?php endwhile;?>
                                          <!-- <tr>
                                             <td>
                                                <button class="btn btn-sm btn-outline-success round mb-0" type="button">#9985</button>
                                             </td>
                                             <td class="text-truncate">Mohamed ali</td>
                                             <td class="text-truncate">1-11-2021</td>
                                             <td class="text-truncate">10 am </td>
                                             <td class="text-truncate">5 pm</td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <button class="btn btn-sm btn-outline-danger round mb-0" type="button">#1111</button>
                                             </td>
                                             <td class="text-truncate">Eman ahmed</td>
                                             <td class="text-truncate">1-11-2021</td>
                                             <td class="text-truncate">9 am </td>
                                             <td class="text-truncate">5 pm </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <button class="btn btn-sm btn-outline-success round mb-0" type="button">#050</button>
                                             </td>
                                             <td class="text-truncate">ahmed mohamed</td>
                                             <td class="text-truncate">1-11-2021</td>
                                             <td class="text-truncate">9 am </td>
                                             <td class="text-truncate">5 pm </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <button class="btn btn-sm btn-outline-danger round mb-0" type="button">#9333</button>
                                             </td>
                                             <td class="text-truncate">Reem Mohamed</td>
                                             <td class="text-truncate">1-11-2021</td>
                                             <td class="text-truncate">9 am </td>
                                             <td class="text-truncate">5 pm </td>
                                          </tr> -->
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-4 col-lg-12 col-12">
                           <div class="card">
                              <div class="card-header">
                                 <div class="card-title-wrap bar-warning">
                                    <h4 class="card-title">Statistics</h4>
                                 </div>
                              </div>
                              <div class="card-body">
                                 <p class="font-medium-2 text-muted text-center pb-2">Last 24 hours</p>
                                 <div id="Stack-bar-chart" class="height-300 Stackbarchart mb-2">				
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <footer class="footer footer-static footer-light">
               <p class="clearfix text-muted text-center px-2"><span>Copyright  &copy; 2020 <a href="#" id="pixinventLink" target="_blank" class="text-bold-800 primary darken-2">Pioneer-solutions</a>, All rights reserved. </span></p>
            </footer>
         </div>
      </div>
      <aside id="notification-sidebar" class="notification-sidebar d-none d-sm-none d-md-block">
         <a class="notification-sidebar-close"><i class="ft-x font-medium-3"></i></a>
         <div class="side-nav notification-sidebar-content">
            <div class="row">
               <div class="col-12 mt-1">
                  <ul class="nav nav-tabs">
                     <li class="nav-item"><a id="base-tab1" data-toggle="tab" aria-controls="base-tab1" href="#activity-tab" aria-expanded="true" class="nav-link active"><strong>Activity</strong></a></li>
                     <li class="nav-item"><a id="base-tab2" data-toggle="tab" aria-controls="base-tab2" href="#settings-tab" aria-expanded="false" class="nav-link"><strong>Settings</strong></a></li>
                  </ul>
                  <div class="tab-content">
                     <div id="activity-tab" role="tabpanel" aria-expanded="true" aria-labelledby="base-tab1" class="tab-pane active">
                        <div id="activity-timeline" class="col-12 timeline-left">
                           <h6 class="mt-1 mb-3 text-bold-400">RECENT ACTIVITY</h6>
                           <div class="timeline">
                              <ul class="list-unstyled base-timeline activity-timeline ml-0">
                                 <li>
                                    <div class="timeline-icon bg-danger"><i class="ft-shopping-cart"></i></div>
                                    <div class="base-timeline-info"><a href="#" class="text-uppercase text-danger">Update</a><span class="d-block">Jim Doe Purchased new equipments for zonal office.</span></div>
                                    <small class="text-muted">just now</small>
                                 </li>
                                 <li>
                                    <div class="timeline-icon bg-primary"><i class="fa fa-plane"></i></div>
                                    <div class="base-timeline-info"><a href="#" class="text-uppercase text-primary">Added</a><span class="d-block">Your Next flight for USA will be on 15th August 2015.</span></div>
                                    <small class="text-muted">25 hours ago</small>
                                 </li>
                                 <li>
                                    <div class="timeline-icon bg-dark"><i class="ft-mic"></i></div>
                                    <div class="base-timeline-info"><a href="#" class="text-uppercase text-dark">Assined</a><span class="d-block">Natalya Parker Send you a voice mail for next conference.</span></div>
                                    <small class="text-muted">15 days ago</small>
                                 </li>
                                 <li>
                                    <div class="timeline-icon bg-warning"><i class="ft-map-pin"></i></div>
                                    <div class="base-timeline-info"><a href="#" class="text-uppercase text-warning">New</a><span class="d-block">Jessy Jay open a new store at S.G Road.</span></div>
                                    <small class="text-muted">20 days ago</small>
                                 </li>
                                 <li>
                                    <div class="timeline-icon bg-primary"><i class="ft-inbox"></i></div>
                                    <div class="base-timeline-info"><a href="#" class="text-uppercase text-primary">Added</a><span class="d-block">voice mail for conference.</span></div>
                                    <small class="text-muted">2 Week Ago</small>
                                 </li>
                                 <li>
                                    <div class="timeline-icon bg-danger"><i class="ft-mic"></i></div>
                                    <div class="base-timeline-info"><a href="#" class="text-uppercase text-danger">Update</a><span class="d-block">Natalya Parker Jessy Jay open a new store at S.G Road.</span></div>
                                    <small class="text-muted">1 Month Ago</small>
                                 </li>
                                 <li>
                                    <div class="timeline-icon bg-dark"><i class="ft-inbox"></i></div>
                                    <div class="base-timeline-info"><a href="#" class="text-uppercase text-dark">Assined</a><span class="d-block">Natalya Parker Send you a voice mail for Updated conference.</span></div>
                                    <small class="text-muted">1 Month ago</small>
                                 </li>
                                 <li>
                                    <div class="timeline-icon bg-warning"><i class="ft-map-pin"></i></div>
                                    <div class="base-timeline-info"><a href="#" class="text-uppercase text-warning">New</a><span class="d-block">Started New project with Jessie Lee.</span></div>
                                    <small class="text-muted">2 Month ago</small>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div id="settings-tab" aria-labelledby="base-tab2" class="tab-pane">
                        <div id="settings" class="col-12">
                           <h6 class="mt-1 mb-3 text-bold-400">GENERAL SETTINGS</h6>
                           <ul class="list-unstyled">
                              <li>
                                 <div class="togglebutton">
                                    <div class="switch">
                                       <span class="text-bold-500">Notifications</span>
                                       <div class="float-right">
                                          <div class="form-group">
                                             <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                <input id="notifications1" checked="checked" type="checkbox" class="custom-control-input">
                                                <label for="notifications1" class="custom-control-label"></label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <p>Use checkboxes when looking for yes or no answers.</p>
                              </li>
                              <li>
                                 <div class="togglebutton">
                                    <div class="switch">
                                       <span class="text-bold-500">Show recent activity</span>
                                       <div class="float-right">
                                          <div class="form-group">
                                             <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                <input id="recent-activity1" checked="checked" type="checkbox" class="custom-control-input">
                                                <label for="recent-activity1" class="custom-control-label"></label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                              </li>
                              <li>
                                 <div class="togglebutton">
                                    <div class="switch">
                                       <span class="text-bold-500">Notifications</span>
                                       <div class="float-right">
                                          <div class="form-group">
                                             <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                <input id="notifications2" type="checkbox" class="custom-control-input">
                                                <label for="notifications2" class="custom-control-label"></label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <p>Use checkboxes when looking for yes or no answers.</p>
                              </li>
                              <li>
                                 <div class="togglebutton">
                                    <div class="switch">
                                       <span class="text-bold-500">Show recent activity</span>
                                       <div class="float-right">
                                          <div class="form-group">
                                             <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                <input id="recent-activity2" type="checkbox" class="custom-control-input">
                                                <label for="recent-activity2" class="custom-control-label"></label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                              </li>
                              <li>
                                 <div class="togglebutton">
                                    <div class="switch">
                                       <span class="text-bold-500">Show your emails</span>
                                       <div class="float-right">
                                          <div class="form-group">
                                             <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                <input id="show-emails" type="checkbox" class="custom-control-input">
                                                <label for="show-emails" class="custom-control-label"></label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <p>Use checkboxes when looking for yes or no answers.</p>
                              </li>
                              <li>
                                 <div class="togglebutton">
                                    <div class="switch">
                                       <span class="text-bold-500">Show Task statistics</span>
                                       <div class="float-right">
                                          <div class="form-group">
                                             <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                <input id="show-stats" checked="checked" type="checkbox" class="custom-control-input">
                                                <label for="show-stats" class="custom-control-label"></label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </aside>
      <div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-sm-none d-md-block">
         <a class="customizer-close"><i class="ft-x font-medium-3"></i></a><a id="customizer-toggle-icon" class="customizer-toggle bg-danger"><i class="ft-settings font-medium-4 fa fa-spin white align-middle"></i></a>
         <div data-ps-id="df6a5ce4-a175-9172-4402-dabd98fc9c0a" class="customizer-content p-3 ps-container ps-theme-dark">
            <h4 class="mb-0 text-bold-400">Theme Customizer</h4>
            <p>Customize &amp; Preview in Real Time</p>
            <hr>
            <h6 class="text-center text-bold-500 mb-3 text-uppercase">Sidebar Background Image</h6>
            <div class="cz-bg-image row">
               <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/01.jpg" width="50" height="100" alt="Bg image1" class="rounded box-shadow-2"></div>
               <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/02.jpg" width="50" height="100" alt="Bg image2" class="rounded box-shadow-2"></div>
               <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/03.jpg" width="50" height="100" alt="Bg image3" class="rounded box-shadow-2"></div>
               <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/04.jpg" width="50" height="100" alt="Bg image4" class="rounded box-shadow-2"></div>
               <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/05.jpg" width="50" height="100" alt="Bg image5" class="rounded box-shadow-2"></div>
               <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/06.jpg" width="50" height="100" alt="Bg image6" class="rounded box-shadow-2"></div>
               <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/07.jpg" width="50" height="100" alt="Bg image7" class="rounded box-shadow-2"></div>
               <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/08.jpg" width="50" height="100" alt="Bg image8" class="rounded box-shadow-2"></div>
            </div>
            <hr>
            <div class="togglebutton">
               <div class="switch">
                  <span class="text-bold-400">Show / Hide Sidebar Bg Image</span>
                  <div class="float-right">
                     <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                        <input id="sidebar-bg-img" type="checkbox" checked="" class="custom-control-input cz-bg-image-display">
                        <label for="sidebar-bg-img" class="custom-control-label"></label>
                     </div>
                  </div>
               </div>
            </div>
            <hr>
            <h6 class="text-center text-bold-500 mb-3 text-uppercase">Sidebar Color Options</h6>
            <div class="cz-bg-color">
               <div class="row p-1">
                  <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="aqua-marine" class="gradient-aqua-marine d-block rounded box-shadow-2"></span></div>
                  <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="sublime-vivid" class="gradient-sublime-vivid d-block rounded box-shadow-2"></span></div>
                  <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="crystal-clear" class="gradient-crystal-clear d-block rounded box-shadow-2"></span></div>
                  <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="timber" class="gradient-timber d-block rounded box-shadow-2"></span></div>
               </div>
               <div class="row p-1">
                  <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="black" class="bg-black d-block rounded box-shadow-2"></span></div>
                  <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="white" class="bg-white d-block rounded box-shadow-2"></span></div>
                  <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="primary" class="bg-primary d-block rounded box-shadow-2"></span></div>
                  <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="danger" class="bg-danger d-block rounded box-shadow-2"></span></div>
               </div>
            </div>
            <hr>
            <div class="togglebutton">
               <div class="switch">
                  <span class="text-bold-400">Compact Menu</span>
                  <div class="float-right">
                     <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                        <input id="cz-compact-menu" type="checkbox" class="custom-control-input cz-compact-menu">
                        <label for="cz-compact-menu" class="custom-control-label"></label>
                     </div>
                  </div>
               </div>
            </div>
            <hr>
            <div>
               <label for="cz-sidebar-width" class="text-bold-400">Sidebar Width</label>
               <select id="cz-sidebar-width" class="custom-select cz-sidebar-width float-right">
                  <option value="small">Small</option>
                  <option value="medium" selected="">Medium</option>
                  <option value="large">Large</option>
               </select>
            </div>
         </div>
      </div>
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
      <script src="../master/js/invoice.js"></script>
   </body>
</html>