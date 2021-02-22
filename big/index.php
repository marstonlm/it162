<?php include "includes/header.php";?>
<p>Develop and place an updated version of the "multiple.php" contact form (located in your web120 includes folder) on this main page. Adjust its fields to ask the basic questions you'd always need to ask any client to help determine if you can help them with their website needs.</p>

<!-- START CLIENT FORM -->
<div>
		<?php

		include 'includes/contact_include.php'; #site keys & code here

		$toAddress = "luann.webster@seattlecentral.edu";  //place your/your client's email address here
		$toName = "Luann Marston"; //place your client's name here
		$website = "Luann's BIG Project";  //place NAME of your client's website

		//echo 
		echo loadContact('multiple.php');#

		?>
	</div>
<!-- END CLIENT FORM -->

</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
	<h3>Basic Website Design Resources</h3>
	<h4>Wireframes</h4>
	<ul>
		<li><a href="https://webdesign.tutsplus.com/articles/a-beginners-guide-to-wireframing--webdesign-7399" target=" top">Wireframing for Beginners</a></li>
		<li><a href="https://blueflamethinking.com/blog/benefits-of-wireframing-design/" target=" top">What are the Benefits of Wireframing a Design?</a></li>
	</ul>

	<h4>CSS Grid</h4>
	<ul>
	<li><a href="https://www.creativebloq.com/features/5-top-grid-systems-for-web-designers" target=" top">5 Top Grid Systems for Web Designers</a></li>
	<li><a href="https://uxdesign.cc/responsive-grids-and-how-to-actually-use-them-970de4c16e01" target=" top">Responsive Grids and How to Actually Use Them</a></li>
	<li><a href="https://slideux.com/blog/layout-grid-responsive-web-design" target=" top">Tips for Using a Layout Grid in Responsive Web Design</a></li>
	<li><a href="https://www.hyperlinkinfosystem.com/blog/css-grid-system-alternatives-for-your-responsive-design" target=" top">CSS Grid System Alternatives For Your Responsive Design</a></li>
</ul>
</aside>
<!-- END RIGHT COL -->
<?php include "includes/footer.php";?>