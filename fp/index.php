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
  <link rel="stylesheet" href="css/new-nav.css" />
  <link rel="stylesheet" href="css/final.css" />
  <link rel="stylesheet" href="css/form.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
</head>

<body>
  <!-- START WRAPPER -->
  <main class="wrapper-landing">
<header>
      <div class="header-logo"><a href="index.php"><img src="images/site_logo.jpg" class="logo responsive"></a>
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
  <div class="content-landing container"><img src="images/landing_background.png">
    <h1>CUPCAKE IPSUM</h1>
    <p>Ko te moemoea a Maui kia haere ngatahi ai ratou ko ona tuakana ki te hii ika. I te hokinga mai o ona tuakana ki tatahi, ka kii atu a Maui, “ka taea e au te haramai i to koutou na taha ki te hii ika?” Engari, ko te whakautu o ona tuakana ki a ia ano, “Kao, he rangatahi noa iho koe. Kaore he wahi mau kei te waka nei, na reira me noho tau ki tatahi ke”. <br/><br />
Ki ta Maui e kii ai, “Kaore au e whakahoha i a koutou, ka noho hei karetao noa iho, koinei taku whakapono ki a koutou.” Ko te whakautu o te tuakana, “Na to hiroki ka pohehe matou he kai noa iho ma nga ika”. Ka riri haere a Maui. “Maku e whai kaha, whai mana hei whakamana i ahau ano”, noku te mana hei whakaarahi i oku tuakana. Ka whakaritea e Maui he tatai hei whakamanahia i ona ake pukenga mo tenei mea te hii-ika. I tetahi po i a Maui e noho tau ana, ka timatahia e Maui ki te rarangahia he rakau hii-ika. I a ia e rarangahia e waiatatia e Maui tetahi karakia tawhito hei whakakaha i te rakau hii-ika. I te mutunga o tona mahi, i tangohia he kauae raro na tona tupuna i a Murirangawhenua i hoatu ki a ia. I te atatu o te ata, i kawea e Maui tona rakau hii-ika, a, ka huna a Maui ki te kei o te waka o tona tuakana.</p>      

    <!-- END MAIN CONTAINT -->
  </div>

  <!-- START Footer -->
  <footer>
    <div class="container">
      <div class="footer-logo"><a href="index.php"><img src="images/site_logo.jpg" class="logo responsive"></a>
        </div>
      <!-- place social media icons here -->
      <div class="social row">
        <div class="column"><img src="images/facebook.jpg" class="facebook icon"></div>
        <div class="column"><img src="images/instagram.jpg" class="instagram icon"></div>
        <div class="column"><img src="images/linkedin.jpg" class="linkedin icon"></div>
        <div class="column"><img src="images/twitter.jpg" class="twitter icon"></div>
      </div>
    </div>
    <div class="container footer-lower">
      <div class="site-map">
        <table>
          <tr>
            <th><a href="services.php">Services</a></th>
            <th><a href="work.php">Work</a></th>
            <th><a href="us.php">Us</a></th>
            <th><a href="blog.php">Blog</a></th>
            <th><a href="contact.php" class="th-contact">Contact</a></th>
          </tr>
<!-- Maybe add more links to site map
        <tr>
          <td>Software</td>
          <td>Portifolio</td>
          <td>Our Story</td>
          <td> </td>     
          <td>Contact Form</td>    
        </tr>
        <tr>
          <td>Mobile Apps</td>
          <td>Testamonials</td>
          <td>The Team</td>
          <td> </td>
          <td>Career Oppertunities</td>
        </tr>
        <tr>
          <td>Database</td>
        </tr>
      -->
    </table>
  </div>
  <div class="copyright"><p><small>&copy; <script>document.write(new Date().getFullYear())</script> by <a href="contactme.php" target="_blank">A4 Loop</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
  </div>
</div>
</footer>
<!-- END Footer --> 

</main>
<!-- END WRAPPER -->

<!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
<script>
  /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
</script>
</body>
</html>