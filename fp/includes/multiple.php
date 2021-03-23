<?php
/**
* multiple.php is a postback application designed to provide a 
* contact form for users to email our clients.  
* 
* multiple.php provides a larger form with more elements to provide 
* a richer example form.
*
* @package nmCAPTCHA2
* @author Luann Marston <luann.webster@seattlecentral.edu>
* @version 2 2021/02/21
* @link http://www.luannmarston.com/
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see contact_include.php 
* @todo none
*/

#--------------END CONFIG AREA ------------------------#
?>

<!-- START HTML FORM -->
<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="row">
        <label class="col-l" for="firstname">
            <input type="text" name="First Name" required="required" placeholder="First Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
        </label>

        <label class="col-r" for="lastname">
            <input type="text" name="Last Name" required="required" placeholder="Last Name (required)" title="Last Name is required" tabindex="11" size="44" autofocus />
        </label>

        <div class="row">
            <label class="col-l" for="Company Name">
                <input type="text" name="Company Name" placeholder="Company Name" title="Company Name" tabindex="13" size="44">
            </label>
            <label class="col-r" for="Job Title">
                <input type="text" name="Job Title"  placeholder="Job Title" tabindex="14" size="44" />
            </label>
        </div>

        <div class="row">
            <label class="col-l" for="Phone Number">
                <input type="tel" name="Phone Number" placeholder="Phone Number" tabindex="15" size="44">
            </label>
            <label class="col-r" for="email">
                <input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="16" size="44" />
            </label>
        </div>

        <div class="address">
            <label for="streetaddress">
                <input type="text" name="Street Address" placeholder="Street Address" title="Street Address" tabindex="17" style="width: 90%" />
            </label>

            <div class="row">
                <label class="col-l" for="city">
                    <input type="text" name="City" placeholder="City" tabindex="18" size="44">
                </label>
                <label class="col-r" for="State">
                    <input type="text" name="State" placeholder="State" title="State" tabindex="19" size="44" />
                </label>
            </div>
            <label for="Reason Writing">
               <textarea  name="Reason Contating" cols="36" rows="4" placeholder="Tell us wy your writing (*)" style="width: 90%" required="required" tabindex="20" ></textarea>
           </label>
           <div>

           </div>
           <label for="How Hear">
               <textarea  name="How_did_you_hear_about_us" placeholder="How did you hear about us? (required)" style="width: 90%;" required="required" tabindex="21" ></textarea>
           </label>
           <div>

           </div>

           <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>" tabindex="71" ></div>
           <div>
            <input type="submit" value="submit" tabindex="72" />
        </div>
    </form>
<!-- END OF HTML FORM -->