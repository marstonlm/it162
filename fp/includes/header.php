<?php include 'final-config.php'?>
<!DOCTYPE html>
<html lang="en">
<head> 
  <title><?=$title?></title>
  <meta name="viewport" content="width=device-width" />
  <meta name="robots" content="noindex,nofollow" />
  <meta charset="utf-8">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
      <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
        <script src="js/script.js"></script>
 <!--  <link rel="stylesheet" href="css/nav.css" /> -->
 <link rel="stylesheet" href="css/nav-new.css" />
  <link rel="stylesheet" href="css/final.css" />
  <script src="https://kit.fontawesome.com/2358758f1c.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- START WRAPPER -->
  <main class="wrapper">
    <header>
        <div class="header-logo"><a href="template.html"><img src="images/site_logo.jpg" class="logo responsive"></a>
          <p>Software Your Way</p>
        </div>
      <ul class="topnav" id="myTopnav">
        <?=makeLinks($nav1)?>
        <li><a class="selected" href="index.php"></a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
      </ul>
    </nav>
  </header>

  <!-- START MAIN CONTENT -->    
  <div id="content-main" class="container">
    <!-- START ASIDE -->
    <aside class="responsive">
      <div class="sidebar"><a href="index.html"><i class="fas fa-long-arrow-alt-left"></i> Back To Home</a></div>
    </aside>
    <!-- END ASIDE -->

    <!-- START SECTION -->
    <section class="section responsive">
      <div class="container responsive">
        <img class="img_id" src="images/page_id.jpg" alt="Page ID background image">
        <div class="page-id"><?=$pageID?></div>
      </div>

