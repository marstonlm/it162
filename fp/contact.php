<?php include "includes/header.php";?>
<div class="content">
	<p id="contact-us">To contact us, please fill out the form below or call! We're excited to hear from you.</p><br />
	<p id="contact-us"><strong>Call us:</strong> 1.123.1234</p> <br />
	<p id="contact-us"><strong>Email Us:</strong>info@a4loop.com</p><br />
	
        <?php

        include 'includes/contact_include.php'; #site keys & code here
        
        $toAddress = "luluwebster@gmail.com";  //place your/your client's email address here
        $toName = "Adele Manalili"; //place your client's name here
        $website = "A4 Loop";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

        ?> 
</div> 
</section>
<!-- SECTION -->

<!-- END MAIN CONTAINT -->
</div>

<?php include "includes/footer.php";?>