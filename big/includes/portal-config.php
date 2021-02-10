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
 
switch(THIS_PAGE){
	case 'index.php':
		$title = "Luann's IT162 Big Project";
		$logo = 'fa-home';
		$pageID = 'Welcome to the Big Project';
	break;
/*
	case 'index.php':
		$title = "Luann's IT162 Big Project";
		$logo = 'fa-home';
		$pageID = 'Welcome';
	break;

	case 'responsivemoible.php':
		$title = "Responsive vs Mobile";
		$logo = 'fa-universal-access';
		$logo_color = ' style="color:#00f"';
		$pageID = 'Responsive vs Mobile';
	break;

	case 'galleries.php':
		$title = "Luann's Galleries";
		$logo = 'fa-universal-access';
		$logo_color = ' style="color:#00f"';
		$pageID = 'Galleries';
	break;

	case 'flexbox.php':
		$title = "Flexbox Info";
		$logo = 'fa-universal-access';
		$pageID = 'Flexbox';
	break;

	case 'contactme.php':
		$title = "Luann's IT162 Contact Page";
		$logo = 'fa-paper-plane-o';
		$logo_color = ' style="color:#0f0"';
		$pageID = 'Contact Luann';
	break; 
*/

	default:
		$title = THIS_PAGE;
		$logo = ''; //no icon by default
		$logo_color = ''; // make logo_color an empty string by default
		$pageID = ''; //no icon by default
}

/*commented out while debugging big index page

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


/*
Debugging big project index page
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
 
*/

?>