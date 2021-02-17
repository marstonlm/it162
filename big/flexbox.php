<?php include "includes/header.php";?>
<p>Before Flexbox, there was Cascading Style Sheets (CSS) Box Model. The CSS box model instructs browsers how to display a web page by defining elements box properties. Specifically the content, padding, border, and margins of each element box (Gallagher). This CSS layout model works for a web page viewed on a predetermined-sized device such as a desktop screen. When people began using smartphones and tablets to access the internet, designers needed to find a better way to display web pages across various devices. These web pages required a change to be responsive, and the CSS Flexbox Model was created to improve the CSS Box Model (Kopecky).</p>
<p>In essence, CSS Flexbox is a layout module to provide an easier, more efficient way of arranging and organizing a  responsive website design using CSS. The concept is that the items will ‘flex’ to different sizes, allowing elements to fill the space in an element’s parent box (Carnes).</p>
<p>Typically the best uses for flexbox is for small-scale layouts and applications. Think of navigation menus, found on (almost) every page’s top or left side, media items like image galleries,  and web forms such as a ‘contact me’ form (Schäferhoff). Flexbox is ideal for scaling, vertical alignment, horizontal alignment, ordering lists. However, there are some don’ts to keep in mind when using flexbox (Caldwell).</p>
<p>One: don’t use Flexbox for a page layout. Instead, use Flexbox in conjunction with a grid system layout for a responsive website (Caldwell). </p>
<p>Two: don’t add ‘display: flex;’ to every container div. If you in doubt, Caldwell suggested you ask yourself, “does flexbox really solve an alignment, scale, or ordering issue that can’t be solved more simply with basic CSS?” In other words, if basic CSS can solve this issue, then use basic CSS (Caldwell).</p>
<p>Three: don’t use flexbox if you need your website to be compatible with Internet Explorer (IE) 8 and IE9. As of this paper’s writing, IE8 and IE9 won’t display the website how you expect it to look (Caldwell). As of this paper’s report, caniuse.com shows that all the other modern mainstream browsers such as Edge, Firefox, Chrome, Safari, Chrome for Android, and Firefox for Android are Flexbox compatible.</p>
<p>CSS Flexbox model isn’t a replacement for the CSS basic grid layout for creating responsive websites. Using the CSS Flexbox model in conjunction with a CSS grid layout provides web developers with additional tools and fewer headaches to develop a responsive website that meets industry standards</p>


</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
	<h3>Works Cited
</h3>
	<p>Kopecky, Christina. “The CSS Flexbox Model: The Complete Guide.” Career Karma, 29 June 2020, careerkarma.com/blog/css-flexbox/. </p>
	<p>Gallagher, James. “CSS Box Model: A How-To Guide.” Career Karma, 11 Jan. 2021, careerkarma.com/blog/css-box-model/. </p>
	<p>Carnes, Beau. “Flexbox - The Ultimate CSS Flex Cheatsheet (with Animated Diagrams!).” FreeCodeCamp.org, FreeCodeCamp.org, 14 Oct. 2019, www.freecodecamp.org/news/flexbox-the-ultimate-css-flex-cheatsheet/. </p>
	<p>Schäferhoff, Nick. “A CSS Flexbox Tutorial for Beginners - What It Is and How to Use It.” Torque, Torque, 27 Feb. 2020, torquemag.io/2020/02/flexbox-tutorial/.</p>
	<p>Caldwell, Alex. “When to Use Flexbox.” When to Use Flexbox, Brolik, 22 Dec. 2015, brolik.com/blog/when-to-use-flexbox/. </p>
	<p>Can I Use... Support Tables for HTML5, CSS3, Etc, 12 Feb. 2021, 16:05, caniuse.com/?search=flexbox. </p>
</aside>
<!-- END RIGHT COL -->
<?php include "includes/footer.php";?>