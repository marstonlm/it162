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
            Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
        </label>
    </div>

    <!-- Services Interested In -->
    <div>	
        <fieldset>
            <legend>What Services Are You Interested In?</legend>
            <input type="checkbox" name="Interested_In[]" value="New Website" tabindex="40" /> Create New Website <br />
            <input type="checkbox" name="Interested_In[]" value="Website Redesign" /> Improve Existing Website <br />
            <input type="checkbox" name="Interested_In[]" value="Other" /> Other <br />
        </fieldset>
    </div>

    <!-- Tell us more -->
    <div>   
        <fieldset>
            <legend>Please tell us more about your company</legend>
            <label>
                Company Name:<br /><input type="text" name="Company_Name" required="required" placeholder="Company Name" title="Company Name" tabindex="10" size="44" autofocus />
            </label> <br />
            <label>
                Address of existing website:<br /><input type="url" name="Company_URL" placeholder="https://" title="Company Website" tabindex="20" size="44" /> <br />
            </label>
            <label>
                Company Phone number:<br /><input id="phone" type="tel" name="Phone" required="required" placeholder="Phone Number" title="A valid phone number is required" />
            </label> <br />

            <label>
                What is your company's purpose and vision?<br /><textarea name="Company_purpose_vision" cols="36" rows="4" placeholder="What are your company's purpose and vision?" tabindex="60"></textarea>
            </label>
        </fieldset>
    </div>

    <!-- Target Audience -->
    <div>   

        <fieldset>
            <legend>What age is your taget audience?</legend>
            <input type="checkbox" name="Age_Target_Audience[]" value="Under 14" /> Under 14 years old <br />
            <input type="checkbox" name="Age_Target_Audience[]" value="14-17" tabindex="40" /> 14-17 <br />
            <input type="checkbox" name="Age_Target_Audience[]" value="18-24" /> 18-24 <br />
            <input type="checkbox" name="Age_Target_Audience[]" value="25-34" /> 25-34 <br />
            <input type="checkbox" name="Age_Target_Audience[]" value="35-44" /> 35-44 <br />
            <input type="checkbox" name="Age_Target_Audience[]" value="45-54" /> 45-54 <br />
            <input type="checkbox" name="Age_Target_Audience[]" value="55-64" /> 55-64 <br />
            <input type="checkbox" name="Age_Target_Audience[]" value="56-64" /> 56-74 <br />
            <input type="checkbox" name="Age_Target_Audience[]" value="75 or Older" /> 75 years or older <br />
        </fieldset>
    </div>

    <!-- Purpose -->
    <div>
        <fieldset>        
            <legend>Goals</legend>
            <label>
                What is the goal of your website?<textarea name="Goal_of_website" cols="36" rows="4" placeholder="example: sell product, provide content, recruit employees..." tabindex="60"></textarea>
            </label>
        </fieldset>
    </div>

    <!-- Reference Websites -->
    <div>   
        <fieldset>
            <legend>What are 2 or 3 reference websites that you like?</legend><br />
            <label>
                Name of Website: <br /><input type="text" name="Company_Name" placeholder="Reference Website Name" title="Reference Website Name" tabindex="10" size="44" autofocus />
            </label>
            <label>
                URL of Website: <br /><input type="url" name="Reference_URL" placeholder="https://" title="Reference Website URL" tabindex="10" size="44" /> <br />
            </label>
            <label>
                What do you like or dislike about the site?<textarea name="Goal_of_website" cols="36" rows="4" placeholder="navigation, layout ..." tabindex="60"></textarea>
            </label><br /><br />
            <label>
                Name of Website: <br /><input type="text" name="Company_Name" placeholder="Reference Website Name" title="Reference Website Name" tabindex="10" size="44" autofocus />
            </label>
            <label>
                URL of Website: <br /><input type="url" name="Reference_URL" placeholder="https://" title="Reference Website URL" tabindex="10" size="44" /> <br />
            </label>
            <label>
                What do you like or dislike about the site?<textarea name="Goal_of_website" cols="36" rows="4" placeholder="navigation, layout ..." tabindex="60"></textarea>
            </label><br /><br />
            <label>
                Name of Website: <br /><input type="text" name="Company_Name" placeholder="Reference Website Name" title="Reference Website Name" tabindex="10" size="44" autofocus />
            </label>
            <label>
                URL of Website: <br /><input type="url" name="Reference_URL" placeholder="https://" title="Reference Website URL" tabindex="10" size="44" /> <br />
            </label>
            <label>
                What do you like or dislike about the site?<textarea name="Goal_of_website" cols="36" rows="4" placeholder="navigation, layout ..." tabindex="60"></textarea>
            </label><br /><br />
        </fieldset>
    </div>

    <!-- Pages -->
    <div>   
        <fieldset>
            <legend>What pages do you need on your website?</legend>
            <input type="checkbox" name="What_Pages_Need[]" value="Home" /> Home <br />
            <input type="checkbox" name="What_Pages_Need[]" value="About" /> About Us <br />
            <input type="checkbox" name="What_Pages_Need[]" value="Services" /> Services <br />
            <input type="checkbox" name="What_Pages_Need[]" value="Products" /> Products <br />
            <input type="checkbox" name="What_Pages_Need[]" value="FAQ" /> FAQ <br />
            <input type="checkbox" name="What_Pages_Need[]" value="Testimonials" /> Testimonials <br />  <input type="checkbox" name="What_Pages_Need[]" value="Contact" /> Contact <br />
            <input type="checkbox" name="What_Pages_Need[]" value="Privacy Policy" /> Privacy Policy <br />
            <input type="checkbox" name="What_Pages_Need[]" value="Contact" /> Search My Website <br />
            <input type="checkbox" name="What_Pages_Need[]" value="Other" /> Other <br />            
        </fieldset>
    </div>
    


    <!-- Features -->
    <div>   
        <fieldset>
            <legend>What features do you need on your website?</legend>
            <input type="checkbox" name="What_features_Need[]" value="Security" /> Security <br />
            <input type="checkbox" name="What_features_Need[]" value="Social Media Integration" tabindex="40" /> Social Media Integration <br />
            <input type="checkbox" name="What_features_Need[]" value="Newsletter Signup" /> Newsletter Signup <br />

            <input type="checkbox" name="What_features_Need[]" value="Media Gallery" /> Media Gallery <br />
            <input type="checkbox" name="What_features_Need[]" value="Events Calendar" /> Events Calendar <br />
            <input type="checkbox" name="What_features_Need[]" value="Blog" /> Blog <br />
            <input type="checkbox" name="What_features_Need[]" value="Search My Website" /> Search My Website <br />
            <input type="checkbox" name="What_features_Need[]" value="Contact Form" /> Contact Form <br />
            <input type="checkbox" name="What_features_Need[]" value="Mobile-Ready Version" /> Mobile-Ready Version <br />
            <input type="checkbox" name="What_features_Need[]" value="FAQ" /> FAQ <br />
            <input type="checkbox" name="What_features_Need[]" value="Other" /> Other: <br />
            <label>
                <textarea type="text" name="Other_Features" cols="36" rows="4" placeholder="Please list features not listed" title="Additional Features Needed" tabindex="60"></textarea><br />
            </label><br />
        </fieldset>
    </div>

    <!-- Other -->
    <div>   
        <fieldset>
            <legend>Do you have content ready for your site?</legend>
            <input type="checkbox" name="Content Ready[]" value="Yes" /> Yes <br />
            <input type="checkbox" name="Content Ready[]" value="No" tabindex="40" /> No <br />
        </fieldset>
    </div>

    <div>   
        <fieldset>
            <legend>Does your company have a brand book covering thingls like colors and fonts?</legend>
            <input type="checkbox" name="Brand[]" value="Yes" /> Yes <br />
            <input type="checkbox" name="Brand[]" value="No" tabindex="40" /> No <br />
        </fieldset>
    </div>

    <div>   
        <fieldset>
            <legend>Do you have a logo?</legend>
            <input type="checkbox" name="logo[]" value="Yes" /> Yes <br />
            <input type="checkbox" name="logo[]" value="No" tabindex="40" /> No <br />
        </fieldset>
    </div>

    <div>   
        <fieldset>
            <legend>Do you know how to purchase a domain?</legend>
            <input type="checkbox" name="Purchase Domain[]" value="Yes" /> Yes <br />
            <input type="checkbox" name="Purchase Domain[]" value="No" tabindex="40" /> No <br />
        </fieldset>
    </div>

    <div>   
        <fieldset>
            <legend>Do you need help updating and maintaining your website?</legend>
            <input type="checkbox" name="Updating and Maintaining[]" value="Yes" /> Yes <br />
            <input type="checkbox" name="Updating and Maintaining[]" value="No" tabindex="40" /> No <br />
        </fieldset>
    </div>

    <div>   
        <label>
            What is your budget range?<br />
            <select name="What_is_your_budget_range?" required="required" title="Budget Range is required" tabindex="30">
                <option value="Under $500">Under $500</option>
                <option value="$500-$1,000">$500-$1,000</option>
                <option value="$1,000-1,500">$1,000-1,500</option>
                <option value="$1,500-$3,000">$1,500-$3,000</option>
                <option value="Over $10,000">Over $10,000</option>
            </select>
        </label>
    </div>


    <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
    <div>
        <input type="submit" value="submit" />
    </div>
</form>
<!-- END OF HTML FORM -->