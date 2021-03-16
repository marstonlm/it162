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
		$title = " ";
		$logo = 'fa-home';
		$logo_color = ' style="color:rgba(128,26,134,.15)"';
		$pageID = ' ';
	break;

	case 'services.php':
		$title = " Services";
		$pageID = 'Services';
	break;

	case 'software.php':
		$title = " Software";
		$pageID = 'Software';
	break;

	case 'mobile.php':
		$title = " Mobile Apps";
		$logo = 'fa-universal-access';
		$logo_color = ' style="color:rgba(128,26,134,.15)"';
		$pageID = 'Mobile Apps';
	break;

	case 'database.php':
		$title = " Database";
		$logo = 'fa-universal-access';
		$logo_color = ' style="color:rgba(128,26,134,.15)"';
		$pageID = 'Database';
	break;

	case 'portfolio.php':
		$title = " Portfolio";
		$pageID = 'Portfolio';
	break;

	case 'about.php':
		$title = " about";
		$logo = 'fa-pencil-square-o';
		$logo_color = ' style="color:rgba(128,26,134,.15)"';
		$pageID = 'About';
	break;

	case 'ourstory.php':
		$title = " Our Story";
		$logo = 'fa-pencil-square-o';
		$logo_color = ' style="color:rgba(128,26,134,.15)"';
		$pageID = 'Our Story';
	break;

	case 'team.php':
		$title = " The Team";
		$logo = 'fa-pencil-square-o';
		$logo_color = ' style="color:rgba(128,26,134,.15)"';
		$pageID = 'The Team';
	break;

	case 'careers.php':
		$title = " Careers";
		$logo = 'fa-pencil-square-o';
		$logo_color = ' style="color:rgba(128,26,134,.15)"';
		$pageID = 'Career Oppertunities';
	break;

	case 'blog.php':
		$title = "Blog";
		$logo = 'fa-pencil-square-o';
		$pageID = 'Blog';
	break;

	case 'contact.php':
		$title = " Contact";
		$logo = 'fa-paper-plane-o';
		$logo_color = ' style="color:rgba(128,26,134,.15)"';
		$pageID = 'Contact';
	break; 

	default:
		$title = THIS_PAGE;
		$logo = ''; //no icon by default
		$logo_color = ''; // make logo_color an empty string by default
		$pageID = ''; //no icon by default
}

// arry for navigation

$nav1['index.php'] = "";
$nav1['services.php'] = "Services";
$nav1['portfolio.php'] = "Portfolio";
$nav1['about.php'] = "About";
$nav1['blog.php'] = "BLOG";
$nav1['contact.php'] = "Contact";


/* 
*function for nav links
*hightlight current page

  <li><a class="selected" href="index.php"></a></li>
  <li><a href="services.php">Services</a></li>
  <li><a href="portfolio.php">Portfolio</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="blog.php">Blog</a></li>
  <li><a href="contact.php">Contact</a></li>
*/

/*

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