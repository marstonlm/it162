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
	<h3>Basic Website Design Cycle</h3>
	<p>Provide at least 3 (linked) resources that help you and/or your web team with steps found in very basic website design and development cycle. For example, client surveys, wireframing tools, etc.</p>
	<p>Here's a website to help get you started, <a href="https://business.tutsplus.com/articles/how-to-extract-the-facts-with-a-web-design-client-questionnaire--fsw-1830" target="_top">https://business.tutsplus.com/articles/...</a></p>
</aside>
<!-- END RIGHT COL -->
<?php include "includes/footer.php";?>