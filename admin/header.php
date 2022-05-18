<?php 
include "connection.php";

if(!isset($_SESSION['maxdeal_admin']))
{
  header("location:login.php");
}
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Admin | Filter System</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="shortcut icon" href="../user/web/logo.png">
    <!--Chartist Chart CSS -->
    <!-- DataTables -->
    <link href="plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <!-- Responsive datatable examples -->
      <link href="assets/css/select2.min.css" rel="stylesheet" type="text/css" />
       <link href="assets/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

    <link href="plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="plugins/chartist/css/chartist.min.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="assets/css/magnific-popup.css" rel="stylesheet" type="text/css" /> 
 <link href="assets/css/bootstrap-datepicker.min.css" rel="stylesheet">
       
 <style type="text/css">
  .tree{
    width: 70%;
  }
    .tree li a{
        border: 0!important;
        background-image: url(images/businessman.png) !important;
        background-repeat: no-repeat!important;
        background-color: transparent!important;
        background-position: -15px 0 !important;
        width: 100px;
        height: 100px;
    }

.tree ul {
    padding-top: 20px;
    position: relative;
    transition: all .5s;
    -webkit-transition: all .5s;
    -moz-transition: all .5s
}

.tree li {
    float: left;
    text-align: center;
    list-style-type: none;
    position: relative;
    padding: 59px 0 0 31px;
    transition: all .5s;
    -webkit-transition: all .5s;
    -moz-transition: all .5s
}

.tree li::before,
.tree li::after {
    content: '';
    position: absolute;
    top: 0;
    right: 43%;
    border-top: 1px solid #ccc;
    width: 54%;
    height: 60px
}

.tree li::after {
    right: auto;
    left: 50%;
    border-left: 1px solid #ccc
}

.tree li:only-child::after,
.tree li:only-child::before {
    display: none
}

.tree li:only-child {
    padding-top: 0
}

.tree li:first-child::before,
.tree li:last-child::after {
    border: 0
}

.tree li:last-child::before {
    border-right: 1px solid #ccc;
    border-radius: 0 5px 0 0;
    -webkit-border-radius: 0 5px 0 0;
    -moz-border-radius: 0 5px 0 0
}

.tree li:first-child::after {
    border-radius: 5px 0 0 0;
    -webkit-border-radius: 5px 0 0 0;
    -moz-border-radius: 5px 0 0 0
}

.tree ul ul::before {
    content: '';
    position: absolute;
    top: 0;
    left: 50%;
    border-left: 1px solid #ccc;
    width: 0;
    height: 20px
}

.tree li a {
    border: 1px solid #ccc;
    background-color: azure;
    padding: 2px 2px;
    text-decoration: none;
    color: #666;
    font-family: arial, verdana, tahoma;
    font-size: 11px;
    display: inline-block;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    transition: all .5s;
    -webkit-transition: all .5s;
    -moz-transition: all .5s
}

.tree li a:hover,
.tree li a:hover+ul li a {
    background: -webkit-linear-gradient(left, #19b4b6, #16c2c4);
    color: azure;
    border: 1px solid #94a0b4
}

.tree-image {
    height: 20px;
    width: 23px;
    padding-right: 10px
}

.tree li a:hover+ul li::after,
.tree li a:hover+ul li::before,
.tree li a:hover+ul::before,
.tree li a:hover+ul ul::before {
    border-color: #94a0b4
}

@media (min-width:320px) and (max-width:767px) {
    ul.mobile-hide-content {
        display: none!important;
    }
  .tree{
    width: 130%;
    margin-left: -45px !important;
  }
.tree li::before, .tree li::after
{
    right: 52%;
}
    .tree li {
        padding: 60px 0px 0px 3px;
    }
    .tree li:only-child {
        padding-top: 0!important;
    }
    .tree li a {
        background-position: -26px 16px !important;
        width: 50px;
        height: 100px;
        background-size: 100px 100px!important
    }
    .wrapper {
        padding: 20px!important;
    }
}
@media (min-width:768px) and (max-width:1023px) {
    .tree li a {
        background-position: -30px 0px !important;
        width: 70px;
        height: 100px;
    }
    .search-bar.bordered {
        padding: 15px;
    }
    .search-page {
        padding: 5px;
    }
    .tree li {
        padding: 59px 0px 0px 10px!important;
    }
    .tree li:only-child {
        padding-top: 0!important;
    }
}
@media (min-width:1024px) and (max-width:1279px) {
    .tree li a {
        background-position: -30px 0px !important;
        width: 70px;
        height: 100px;
    }
    .search-bar.bordered {
        padding: 15px;
    }
    .search-page {
        padding: 5px;
    }
    .tree li {
        padding: 62px 1px 0px 7px!important;
    }
}
.medium{
  box-shadow: 0px 0px 10px #7571f9, 0px 0px 20px #7571f9, 0px 0px 30px #7571f9, 0px 0px 50px #7571f9, 0px 0px 60px #7571f9;

z-index: 1;

background-color: #7571f9;

animation: bigball 1s infinite linear;
}
</style>

        <link rel="stylesheet" href="assets/css/circle.css">
  <link rel="stylesheet" type="text/css" href="assets/css/tooltip-flip.css" />

</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left"><a href="index.php" class="logo"><span><img src="../user/web/logo.png" alt="" height="38"> </span><i><img src="../user/web/logo.png" alt="" height="22"></i></a></div>
            <nav class="navbar-custom">
                <ul class="navbar-right list-inline float-right mb-0">

                    
                    <!-- full screen -->
                    <li class="dropdown notification-list list-inline-item d-none d-md-inline-block"><a class="nav-link waves-effect" href="../#" id="btn-fullscreen"><i class="mdi mdi-fullscreen noti-icon"></i></a></li>
                    <!-- notification -->
                   
                </ul>
                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-effect"><i class="mdi mdi-menu"></i></button>
                    </li>

                </ul>
            </nav>
        </div>
        <!-- Top Bar End -->
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">Menu</li>
                        <li><a href="index.php" class="waves-effect"><i class="ti-home"></i><span class="badge badge-primary badge-pill float-right"> </span> <span>Dashboard</span></a></li>

                        <li><a href="manage_data.php" class="waves-effect"><i class="ti-home"></i><span class="badge badge-primary badge-pill float-right"> </span> <span>Manage</span></a></li>
                        <li><a href="medical_staff.php" class="waves-effect"><i class="ti-home"></i><span class="badge badge-primary badge-pill float-right"> </span> <span>Medical Staff</span></a></li>
                        <li><a href="../index.php" class="waves-effect"><i class="ti-home"></i><span class="badge badge-primary badge-pill float-right"> </span> <span>Review</span></a></li>

                        <li><a href="logout.php" class="waves-effect"><i class="hvr fas fa-sign-out-alt"></i><span class="badge badge-warning badge-pill float-right"> </span> <span>Sign Out</span></a></li>


                    </ul>
                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>
            </div>
            <!-- Sidebar -left -->
        </div>
        <!-- Left Sidebar End -->
