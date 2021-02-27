<?
/*
portal-config.php 

Use to store all of our IT 162 configuration info

*/
//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

/* --------Color Palette ----------
#4E0250 - Russian Violet
#801A86 - Mardi Gras
#645986 - Dark Blue Gray
#8FE388 - Light Green 
#58BC82 - Medium Sea Green
*/

switch(THIS_PAGE){
	case 'index.php':
		$title = "Luann's IT162 Title Page";
		$logo = 'fa-home';
		$logo_color = ' style="color:rgba(128,26,134,.15)"';
		$pageID = 'Welcome';
	break;

	case 'big/index.php':
		$title = " Luann's Big";
		$logo = 'fa-universal-access';
		$logo_color = ' style="color:rgba(128,26,134,.15)"';
		$pageID = 'Big';
	break;

	case 'aia.php':
		$title = " AIA";
		$logo = 'fa-universal-access';
		$logo_color = ' style="color:rgba(128,26,134,.15)"';
		$pageID = 'Aia';
	break;

	case 'flowchart.php':
		$title = " Flowchart layout";
		$logo = 'fa-pencil-square-o';
		$logo_color = ' style="color:rgba(128,26,134,.15)"';
		$pageID = 'Flowchart';
	break;

	case 'fp/index.php':
		$title = "Luann's Final Project";
		$logo = 'fa-pencil-square-o';
		$pageID = 'Final Project';
	break;

	case 'contactme.php':
		$title = " Luann's IT162 Contact Page";
		$logo = 'fa-paper-plane-o';
		$logo_color = ' style="color:rgba(128,26,134,.15)"';
		$pageID = 'Contact Luann';
	break; 

	default:
		$title = THIS_PAGE;
		$logo = ''; //no icon by default
		$logo_color = ''; // make logo_color an empty string by default
		$pageID = ''; //no icon by default
}

// arry for navigation

$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart  Layout";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Luann";


/* 
*function for nav links
*hightlight current page


			<li><a href="index.php">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Luann</a></li>
*/



function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;   
} 


?>