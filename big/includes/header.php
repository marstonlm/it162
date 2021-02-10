<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html lang="en">
<head> 
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://kit.fontawesome.com/902b4b52d9.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1><i class="logo fa <?=$logo?>"<?=$logo_color?>></i>Luann's IT162 Portal</h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <?=makeLinks($nav1)?>
<!-- START COMMENT OUT NAV
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Luann</a></li>
END COMMENT OUT NAV -->
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID"><?=$pageID?></h2>