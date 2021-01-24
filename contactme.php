<?php include "includes/header.php";?>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 <img src="images/desktop.jpg" class="desktop" alt="Abby in bed" />
 <img src="images/phone.jpg" class="phone" alt="Abby eating puppuccino" />

<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "luann.webster@seattlecentral.edu";  //place your/your client's email address here
        $toName = "Luann Marston"; //place your client's name here
        $website = "Luann's IT162 Web Portal";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
 </section>
 
<?php include "includes/footer.php";?>