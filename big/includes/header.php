<?php include 'big-config.php'?>
<!doctype html>
<html>
<head>
	<title><?=$title?></title>
	<meta name="viewport" content="width=device-width" />
	<meta name="robots" content="noindex,nofollow" />
	<meta charset="utf-8">
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
	<link rel="stylesheet" href="css/nav.css" />
	<link rel="stylesheet" href="css/big.css" />
	<link rel="stylesheet" href="css/form.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
</head>
 
<body>
	<!-- START Wrapper -->
	<main class="wrapper">
		<header>
			<h1><a href="index.php"><i class="logo fa <?=$logo?>"></i>BIG Project by Luann Marston</a></h1>
			<nav id="cssmenu">
				<ul>
					<li><a href="../index.php"><span><i class="logo fa <?=$logo?>"></i></i> IT162 Portal</span></a></li>
					<li><a href="index.php"><span><i class="logo fa <?=$logo?>"></i>Home</span></a></li>
					<li><a href="flexbox.php"><span><i class="logo fa <?=$logo?>"></i>Flexbox</span></a></li>
					<li><a href="galleries.php"><span>Galleries</span></a></li>
					<li><a href="#"><span><i class="logo fa <?=$logo?>"></i>Google</span></a>
						<ul>
							<li><a href="map.php"><span>Map</span></a></li>
							<li><a href="calendar.php"><span>Calendar</span></a></li>
							<li><a href="youtube.php"><span>YouTube</span></a></li>
						</ul>
					</li>
					<li><a href="siteapp.php"><span>Site vs App</span></a></li>
					<li><a href="webcam.php"><span>Web Cam</span></a></li>
				</ul>
			</nav>
		</header>

		<!-- START LEFT COL -->
		<section>
			<h2 class="pageID"><?=$pageID?></h2>