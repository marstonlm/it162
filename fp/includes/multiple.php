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

    <!-- Target Audience -->
    <div>   

        <fieldset>
            <legend>What age is your taget audience?</legend>
            <input type="checkbox" name="Age_Target_Audience[]" value="Under 14" tabindex="19"/> Under 14 years old <br />
            <input type="checkbox" name="Age_Target_Audience[]" value="14-17" tabindex="20" /> 14-17 <br />
            <input type="checkbox" name="Age_Target_Audience[]" value="18-24" tabindex="21"/> 18-24 <br />
            <input type="checkbox" name="Age_Target_Audience[]" value="25-34" tabindex="22"/> 25-34 <br />
            <input type="checkbox" name="Age_Target_Audience[]" value="35-44" tabindex="23"/> 35-44 <br />
            <input type="checkbox" name="Age_Target_Audience[]" value="45-54" tabindex="24"/> 45-54 <br />
            <input type="checkbox" name="Age_Target_Audience[]" value="55-64" tabindex="25"/> 55-64 <br />
            <input type="checkbox" name="Age_Target_Audience[]" value="56-64" tabindex="26"/> 56-74 <br />
            <input type="checkbox" name="Age_Target_Audience[]" value="75 or Older" tabindex="27" /> 75 years or older <br />
        </fieldset>
    </div>

    <!-- Purpose -->
    <div>
        <fieldset>        
            <legend>Goals</legend>
            <label>
                What is the goal of your website?<textarea  name="Goal_of_website" cols="36" rows="4" placeholder="example: sell product, provide content, recruit employees..." tabindex="28" ></textarea>
            </label>
        </fieldset>
    </div>

    <!-- Reference Websites -->
    <div>   
        <fieldset>
            <legend>What are 2 or 3 reference websites that you like?</legend><br />
            <label>
                Name of Website: <br /><input type="text" name="Company_Name" placeholder="Reference Website Name" title="Reference Website Name" tabindex="29" size="44" autofocus />
            </label>
            <label>
                URL of Website: <br /><input type="url" name="Reference_URL" placeholder="https://" title="Reference Website URL" tabindex="30" size="44" /> <br />
            </label>
            <label>
                What do you like or dislike about the site?<textarea name="Goal_of_website" cols="36" rows="4" placeholder="navigation, layout ..." tabindex="31"></textarea>
            </label><br /><br />
            <label>
                Name of Website: <br /><input type="text" name="Company_Name" placeholder="Reference Website Name" title="Reference Website Name" tabindex="32" size="44" autofocus />
            </label>
            <label>
                URL of Website: <br /><input type="url" name="Reference_URL" placeholder="https://" title="Reference Website URL" tabindex="33" size="44" /> <br />
            </label>
            <label>
                What do you like or dislike about the site?<textarea name="Goal_of_website" cols="36" rows="4" placeholder="navigation, layout ..." tabindex="34"></textarea>
            </label><br /><br />
            <label>
                Name of Website: <br /><input type="text" name="Company_Name" placeholder="Reference Website Name" title="Reference Website Name" tabindex="35" size="44" autofocus />
            </label>
            <label>
                URL of Website: <br /><input type="url" name="Reference_URL" placeholder="https://" title="Reference Website URL" tabindex="36" size="44" /> <br />
            </label>
            <label>
                What do you like or dislike about the site?<textarea name="Goal_of_website" cols="36" rows="4" placeholder="navigation, layout ..." tabindex="37"></textarea>
            </label><br /><br />
        </fieldset>
    </div>

    <!-- Pages -->
    <div>   
        <fieldset>
            <legend>What pages do you need on your website?</legend>
            <input type="checkbox" name="What_Pages_Need[]" value="Home" tabindex="38" /> Home <br />
            <input type="checkbox" name="What_Pages_Need[]" value="About" tabindex="39" /> About Us <br />
            <input type="checkbox" name="What_Pages_Need[]" value="Services" tabindex="40" /> Services <br />
            <input type="checkbox" name="What_Pages_Need[]" value="Products" tabindex="41" /> Products <br />
            <input type="checkbox" name="What_Pages_Need[]" value="FAQ" tabindex="42" /> FAQ <br />
            <input type="checkbox" name="What_Pages_Need[]" value="Testimonials" tabindex="43" /> Testimonials <br />  <input type="checkbox" name="What_Pages_Need[]" value="Contact" tabindex="44" /> Contact <br />
            <input type="checkbox" name="What_Pages_Need[]" value="Privacy Policy" tabindex="45" /> Privacy Policy <br />
            <input type="checkbox" name="What_Pages_Need[]" value="Contact" tabindex="46" /> Search My Website <br />
            <input type="checkbox" name="What_Pages_Need[]" value="Other" tabindex="47" /> Other <br />            
        </fieldset>
    </div>
    


    <!-- Features -->
    <div>   
        <fieldset>
            <legend>What features do you need on your website?</legend>
            <input type="checkbox" name="What_features_Need[]" value="Security" tabindex="48" /> Security <br />
            <input type="checkbox" name="What_features_Need[]" value="Social Media Integration" tabindex="49" /> Social Media Integration <br />
            <input type="checkbox" name="What_features_Need[]" value="Newsletter Signup" tabindex="50" /> Newsletter Signup <br />
            <input type="checkbox" name="What_features_Need[]" value="Media Gallery" tabindex="51" /> Media Gallery <br />
            <input type="checkbox" name="What_features_Need[]" value="Events Calendar" tabindex="52" /> Events Calendar <br />
            <input type="checkbox" name="What_features_Need[]" value="Blog" tabindex="53" /> Blog <br />
            <input type="checkbox" name="What_features_Need[]" value="Search My Website" tabindex="54" /> Search My Website <br />
            <input type="checkbox" name="What_features_Need[]" value="Contact Form" tabindex="55" /> Contact Form <br />
            <input type="checkbox" name="What_features_Need[]" value="Mobile-Ready Version" tabindex="56" /> Mobile-Ready Version <br />
            <input type="checkbox" name="What_features_Need[]" value="FAQ" tabindex="57" /> FAQ <br />
            <input type="checkbox" name="What_features_Need[]" value="Other" tabindex="58" /> Other: <br />
            <label>
                <textarea type="text" name="Other_Features" cols="36" rows="4" placeholder="Please list features not listed" title="Additional Features Needed" tabindex="59"></textarea><br />
            </label><br />
        </fieldset>
    </div>

    <!-- Other -->
    <div>   
        <fieldset>
            <legend>Do you have content ready for your site?</legend>
            <input type="radio" name="Content Ready[]" required="required" value="Yes" tabindex="60" /> Yes <br />
            <input type="radio" name="Content Ready[]" value="No" tabindex="61" tabindex="" /> No <br />
        </fieldset>
    </div>

    <div>   
        <fieldset>
            <legend>Does your company have a brand book covering thingls like colors and fonts?</legend>
            <input type="radio" name="Brand[]" required="required" value="Yes" tabindex="62" /> Yes <br />
            <input type="radio" name="Brand[]" value="No" tabindex="63" /> No <br />
        </fieldset>
    </div>

    <div>   
        <fieldset>
            <legend>Do you have a logo?</legend>
            <input type="radio" name="logo[]" required="required" value="Yes" tabindex="64" /> Yes <br />
            <input type="radio" name="logo[]" value="No" tabindex="65" /> No <br />
        </fieldset>
    </div>

    <div>   
        <fieldset>
            <legend>Do you know how to purchase a domain?</legend>
            <input type="radio" name="Purchase Domain[]" required="required" value="Yes" tabindex="66" /> Yes <br />
            <input type="radio" name="Purchase Domain[]" value="No" tabindex="67" /> No <br />
        </fieldset>
    </div>

    <div>   
        <fieldset>
            <legend>Do you need help updating and maintaining your website?</legend>
            <input type="radio" name="Updating and Maintaining[]" required="required" value="Yes" tabindex="68" /> Yes <br />
            <input type="radio" name="Updating and Maintaining[]" value="No" tabindex="69" /> No <br />
        </fieldset>
    </div>

    <div>   
        <label>
            What is your budget range?<br />
            <select name="What_is_your_budget_range?" required="required" title="Budget Range is required" tabindex="70">
                <option value="Under $500">Under $500</option>
                <option value="$500-$1,000">$500-$1,000</option>
                <option value="$1,000-1,500">$1,000-1,500</option>
                <option value="$1,500-$3,000">$1,500-$3,000</option>
                <option value="Over $10,000">Over $10,000</option>
            </select>
        </label>
    </div>


    <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>" tabindex="71" ></div>
    <div>
        <input type="submit" value="submit" tabindex="72" />
    </div>
</form>
<!-- END OF HTML FORM -->