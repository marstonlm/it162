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
  <link rel="stylesheet" href="css/new-nav.css" />
  <link rel="stylesheet" href="css/final.css" />
  <link rel="stylesheet" href="css/form.css" />
  <script src="https://kit.fontawesome.com/2358758f1c.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
</head>

<body>
  <!-- START WRAPPER -->
  <main class="wrapper-landing">
    <header>
      <div class="header-logo"><a href="index.php"><img src="images/site_logo.jpg" class="logo responsive" alt="A4 Loop logo"></a>
        <p>Software Your Way</p>
      </div>
      <nav id="cssmenu">
        <ul>
          <li><a class="selected" href="index.php"></a></li>
          <li><a href="services.php"><span>Services</span></a>
            <ul>
              <li><a href="software.php"><span>Software</span></a></li>
              <li><a href="mobile.php"><span>Mobile Apps</span></a></li>
              <li><a href="database.php"><span>Database </span></a></li>
            </ul></li>
            <li><a href="portfolio.php"><span>Portfolio</span></a></li>
            <li><a href="about.php"><span>About</span></a>
              <ul>
                <li><a href="ourstory.php"><span>Our Story</span></a></li>
                <li><a href="team.php"><span>The Team</span></a></li>
                <li><a href="careers.php"><span>Career Oppertunities</span></a></li>
              </ul>
            </li>
            <li><a href="blog.php"><span>Blog</span></a></li>
            <li><a href="contact.php"><span>Contact</span></a></li>
          </ul>
        </nav>
      </header> 

      <!-- START MAIN CONTENT -->    
      <div class="content-landing container" id="landing-image">
        <img src="images/landing_background.png" id="landing-image" alt="a4 loop"> 
      </div>
        <div class="landing-text">
          <h1>Cupcake ipsum dolor</h1>
          <h3>Sit amet oat cake brownie tootsie roll jujubes sweet roll candy halvah. Chupa chups apple pie tart.</h3>      
        </div>
        <!-- END MAIN CONTAINT -->

      <?php include "includes/footer.php";?>