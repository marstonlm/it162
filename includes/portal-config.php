<?
/*
portal-config.php

Use to store all of our IT 162 configuration info

*/

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){
	case 'index.php':
		$title = "Luann's IT162 Title Page";
		$logo = 'fa-home';
		$pageID = 'Welcome';
	break;

	case 'contactme.php':
		$title = "Luann's IT162 Contact Page";
		$logo = 'fa-pencil-square-o';
		$pageID = 'Contact Luann';
	break;

	default:
		$title = THIS_PAGE;
		$logo = 'fa-home';
		$pageID = 'Welcome';
}

?>