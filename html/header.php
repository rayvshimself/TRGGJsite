<?php
  if (!isset($selectedMenuItem)) $selectedMenuItem = -1;
  if (!isset($title)) $title = "GGJ Trier";
  if (!isset($scipt)) $script = "";
?>

<html>
<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
    <script src="assets/js/main.js"></script>
    <?php echo $script; ?>
</head>
<body class="homepage">
    <div id="page-wrapper">

        <!-- Header -->
            <div id="header-wrapper">
                <header id="header" class="container">

                    <!-- Logo -->
                        <div id="logo">
                        <img src="images/websiteheader-transp.png" alt="" />
                        </div>

                    <!-- Nav -->
                        <nav id="nav">
                            <ul>
                                <li <?php if($selectedMenuItem == 0) echo"class='current'"; ?>><a href="index.php">Welcome</a></li>
                                <li <?php if($selectedMenuItem == 1) echo"class='current'"; ?>><a href="index.php?a=past">Past GGJs Trier</a></li>
                                <li <?php if($selectedMenuItem == 2) echo"class='current'"; ?>><a href="contact.php">Contact</a></li>
                            </ul>
                        </nav>

                </header>
            </div>
