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
    <div>
        <label>
            Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
        </label>
    </div>
    <div>	
        <label>
            Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="11" size="44" />
        </label>
    </div>

    <!-- Services Interested In -->
    <div>	
        <fieldset>
            <legend>What Services Are You Interested In?</legend>
            <input type="radio" name="Interested_In[]" required="required" value="New Website" tabindex="12"  /> Create New Website <br />
            <input type="radio" name="Interested_In[]" value="Website Redesign" tabindex="13"/> Improve Existing Website <br />
            <input type="radio" name="Interested_In[]" value="Other" tabindex="14"/> Other <br />
            <label>
                <textarea type="text" name="Other" cols="36" rows="4" placeholder="If other: what other services are you interesed in?" title="Services Other" tabindex="59"></textarea><br />
            </label><br />
        </fieldset>
    </div>

    <!-- Tell us more -->
    <div>   
        <fieldset>
            <legend>Please tell us more about your company</legend>
            <label>
                Company Name:<br /><input type="text" name="Company_Name" required="required" placeholder="Company Name" title="Company Name" tabindex="15" size="44" autofocus />
            </label> <br />
            <label>
                Address of existing website:<br /><input type="url" name="Company_URL" placeholder="https://" title="Company Website" tabindex="16" size="44" /> <br />
            </label>
            <label>
                Company Phone number:<br /><input id="phone" type="tel" name="Phone" required="required" placeholder="Phone Number" title="A valid phone number is required" tabindex="17"/>
            </label> <br />
            <label>
                What is your company's purpose and vision?<br /><textarea  name="Company_purpose_vision" cols="36" rows="4" placeholder="What are your company's purpose and vision?" tabindex="18"></textarea>
            </label>
        </fieldset>
    </div>

      

    <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>" tabindex="71" ></div>
    <div>
        <input type="submit" value="submit" tabindex="72" />
    </div>
</form>
<!-- END OF HTML FORM -->