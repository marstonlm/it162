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

	case 'big/index.php':
		$title = "Big";
		$logo = 'fa-pencil-square-o';
		$pageID = 'Big';
	break;

	case 'aia.php':
		$title = "Aia";
		$logo = 'fa-pencil-square-o';
		$pageID = 'Aia';
	break;

	case 'flowchart.php':
		$title = "Flowchart layout";
		$logo = 'fa-pencil-square-o';
		$pageID = 'Flowchart';
	break;

	case 'fp/index.php':
		$title = "Final Project";
		$logo = 'fa-pencil-square-o';
		$pageID = 'Final Project';
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



$nav[index.php] = 'Welcome';
$nav[big/index.php] = 'Big';
$nav[aia.php] = 'AIA';
$nav[flowchart.php] = 'Flowchart / Layout';
$nav[fp/index.php] = 'Final Project';
$nav[contactme.php] = 'Contact Luann';


/* 
*function for nav links
*hightlight current page


<li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Luann</a></li>
*/



function makeLinks($nav)
{
	$myReturn = '';
	foreach($nav as $url => $text){
			$myReturn .= " <li><a href=\"contactme.php\">Contact Luann</a></li>";
	}

	return $myReturn;

}

?>