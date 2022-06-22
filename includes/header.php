<?php
		error_reporting(0);
		session_start();
		if ($_COOKIE["auth"] != "admin_in") {header("location:"."./");}
			include("includes/connect.php");
			include("includes/data.php");
			?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="@housamz">

    <meta name="description" content="Mass Admin Panel">
    <title>Trvtps Admin Panel</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-h21C2fcDk/eFsW9sC9h0dhokq5pDinLNklTKoxIZRUn3+hvmgQSffLLQ4G4l2eEr" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="includes/style.css">
    <link href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
					<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
					<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
				<![endif]-->

    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="TRVTPS.png">
    <link rel="icon" type="image/png" sizes="32x32" href="TRVTPS.png">
    <link rel="icon" type="image/png" sizes="96x96" href="TRVTPS.png">
    <link rel="icon" type="image/png" sizes="16x16" href="TRVTPS.png">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="css/examples.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    // Shared ID
    gtag('config', 'UA-118965717-3');
    // Bootstrap ID
    gtag('config', 'UA-118965717-5');
    </script>
    <link href="vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar" class="bg-primary" style="background-color: #4C8A72 ">
            <!-- <div style="background-color: #4C8A72"> -->
            <div class="sidebar-header">
                <h3>
                    Trvtps<br>
                    <i id="sidebarCollapse" class="glyphicon glyphicon-circle-arrow-left"></i>
                </h3>
                <strong>
                    Trvtps<br>
                    <i id="sidebarExtend" class="glyphicon glyphicon-circle-arrow-right"></i>
                </strong>
            </div><!-- /sidebar-header -->

            <!-- start sidebar -->
            <ul class="list-unstyled components">
                <li>
                    <a href="home.php" aria-expanded="false">
                        <i class="glyphicon glyphicon-home"></i>
                        Home
                    </a>
                </li>
                <li><a href="announcement.php"> <i class="glyphicon glyphicon-plane"></i>Announcement <span
                            class="pull-right"><?=counting("announcement", "id")?></span></a></li>
                <li><a href="fine.php"> <i class="glyphicon glyphicon-folder-close"></i>Fine <span
                            class="pull-right"><?=counting("fine", "id")?></span></a></li>
                <li><a href="payment.php"> <i class="glyphicon glyphicon-chevron-down"></i>Payment <span
                            class="pull-right"><?=counting("payment", "id")?></span></a></li>
                <li><a href="policy_1.php"> <i class="glyphicon glyphicon-tag"></i>Policy_1 <span
                            class="pull-right"><?=counting("policy_1", "id")?></span></a></li>
                <li><a href="policy_2.php"> <i class="glyphicon glyphicon-rub"></i>Policy_2 <span
                            class="pull-right"><?=counting("policy_2", "id")?></span></a></li>
                <li><a href="policy_3.php"> <i class="glyphicon glyphicon-envelope"></i>Policy_3 <span
                            class="pull-right"><?=counting("policy_3", "id")?></span></a></li>
                <li><a href="report_subscriber.php"> <i class="glyphicon glyphicon-lock"></i>Report_subscriber <span
                            class="pull-right"><?=counting("report_subscriber", "id")?></span></a></li>
                <li><a href="user.php"> <i class="glyphicon glyphicon-floppy-remove"></i>User <span
                            class="pull-right"><?=counting("user", "id")?></span></a></li>
                <li><a href="users.php"> <i class="glyphicon glyphicon-list-alt"></i>Admin <span
                            class="pull-right"><?=counting("users", "id")?></span></a></li>
                <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
            </ul>
            <!-- </div> -->
        </nav><!-- /end sidebar -->

        <!-- Page Content Holder -->
        <div id="content">