<?
/*
portal-config.php 

Use to store all of our IT 162 configuration info

*/
//prevents data from being sent early
ob_start();

//place your site keys here (keys for web-students.net posted here)
$siteKey = "6LcHYjYaAAAAAEUuL1Rai4fdZ_1yqLVcF89SFzFh";
$secretKey = "6LcHYjYaAAAAAEmydxs5fQNeOHPG3s0UVGIBIWz-";

date_default_timezone_set('America/Los_Angeles'); #sets default date/timezone for this website
$server = 'dreamhost.com';
//end config area ----------------------------------------

//echo basename($_SERVER['PHP_SELF']);
//this constant allows a page to know it's own url/name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){
	case '../index.php':
		$title = "IT 162 Portlal";
		$logo = 'fa-home';
		$pageID = 'Home';
	break;

	case 'index.php':
		$title = "L. Marston's IT162 BIG Project";
		$logo = 'fa-home';
		$pageID = 'Client Questionnaire';
	break;

	case 'flexbox.php':
		$title = "Flexbox Research";
		$logo = 'fa-universal-access';
		$pageID = 'Flexbox Research';
	break;

	case 'galleries.php':
		$title = "Galleries Research";
		$logo = 'fa-universal-access';
		$logo_color = ' style="color:#00f"';
		$pageID = 'Galleries Research';
	break;

	case 'map.php':
		$title = "Google Map";
		$logo = 'fa-pencil-square-o';
		$pageID = 'Google Map';
	break;

	case 'calendar.php':
		$title = "Google Calendar";
		$logo = 'fa-pencil-square-o';
		$pageID = 'Google Calendar';
	break;

	case 'youtube.php':
		$title = "Youtube";
		$logo = 'fa-pencil-square-o';
		$pageID = 'YouTube';
	break;

	case 'siteapp.php':
		$title = "Site vs App Research";
		$logo = 'fa-pencil-square-o';
		$pageID = 'Responsiver Site vs Native App Research';
	break;

	case 'webcam.php':
		$title = "Live Web Cameras";
		$logo = 'fa-paper-plane-o';
		$logo_color = ' style="color:#0f0"';
		$pageID = 'Live Web Cameras';
	break; 

	default:
		$title = THIS_PAGE;
		$logo = ''; //no icon by default
		$logo_color = ''; // make logo_color an empty string by default
		$pageID = ''; //no icon by default
}


?>