<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package COA_Microsite
 */

?>

	</div><!-- #content -->

	<footer id="footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<p><a href="http://explore.albemarle.edu/privacy-statement/" id="ps-link">Privacy Statement</a></p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<h2>CAMPUS LOCATIONS</h2>
				</div>
				</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3">
					<h3>COA - Currituck</h3>
					<p>107 College Way<br>
					Barco, NC 27917<br>
					<a href="tel:252-453-3035">252-453-3035</a></p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<h3>COA - Dare</h3>
					<p>132 Russell Twiford Road<br>
					205 S Business Highway 64/264<br>
					Manteo, NC 27954<br>
					<a href="tel:252-473-2264">252-473-2264</a></p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<h3>COA - Edenton-Chowan</h3>
					<p>118 Blades Street<br>
					Edenton, NC 27932<br>
					<a href="tel:252-482-7900">252-482-7900</a></p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<h3>COA - Elizabeth City</h3>
					<p>1208 North Road Street<br>
					Elizabeth City, NC 27909<br>
					<a href="tel:252-335-0821">252-335-0821</a></p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<p id="data-info">Data throughout the microsite is drawn from nccommunitycolleges.edu, northcarolina.edu, the Bureau of Labor Statistics (bls.org), and CareerOneStop.org, sponsored by the US Department of Labor. The information presented is intended to offer a general frame of reference and does not constitute any promise or guarantee regarding an individual's expected salary, job prospects, academic prospects or qualifications, which are influenced by numerous factors and cannot be predicted by statistical trends.</p>
				</div>
			</div>
		</div>
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- Androll Pixel -->
<script type="text/javascript">
    adroll_adv_id = "GJ64XNUOTFD6BAC5FWFYHB";
    adroll_pix_id = "WRRZ7DFBHZDJ7KCCMCCKLH";
    (function () {
        var _onload = function(){
            if (document.readyState && !/loaded|complete/.test(document.readyState)){setTimeout(_onload, 10);return}
            if (!window.__adroll_loaded){__adroll_loaded=true;setTimeout(_onload, 50);return}
            var scr = document.createElement("script");
            var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
            scr.setAttribute('async', 'true');
            scr.type = "text/javascript";
            scr.src = host + "/j/roundtrip.js";
            ((document.getElementsByTagName('head') || [null])[0] ||
                document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
        };
        if (window.addEventListener) {window.addEventListener('load', _onload, false);}
        else {window.attachEvent('onload', _onload)}
    }());
</script>
</body>
</html>
