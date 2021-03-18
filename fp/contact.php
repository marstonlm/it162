<?php include "includes/header.php";?>
<div class="content">
	<h2>Bite plants</h2>
	<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
        
        $toAddress = "luann.webster@seattlecentral.edu";  //place your/your client's email address here
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