<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="footer-ribbon">
                <span>Join the Movement</span>
            </div>
            <!--<div class="col-xs-12 col-sm-5">-->
			<div class="col-xs-12 col-sm-5">
				<div class="newsletter">
                    <h4>Exclusive Beta Access</h4>
                    <p>Sign up to be an exclusive beta tester and to get notified when we launch. </p>

					<div class="alert alert-success hidden" id="newsletterSuccess">
						<strong>Success!</strong> You've been added to our email list.
					</div>

					<div class="alert alert-danger hidden" id="newsletterError"></div>

					<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
						<div class="form-group">
							<input class="form-control" placeholder="Name" name="name" id="newsletterName" type="text">
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Email Address" name="email" id="newsletterEmail" type="text">
						</div>
						<div class="form-group">
							<span class="input-group-btn">
								<button class="btn btn-primary btn-lg" type="submit">Sign Me Up!</button>
							</span>
						</div>
					</form>
				</div>
			</div>


            <div class="col-xs-12 col-sm-4">
                <div class="contact-details">
                    <h4>Contact Us</h4>
                    <p>For questions on the app or press inquiries, please contact us below. </p>
                    <ul class="contact">
                        <li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong> Boulder, CO, United States</p></li>
                        <li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:info@pingwhenapp.com">info@pingwhenapp.com</a></p></li>
                    </ul>
                </div>
            </div>
        
        
            <div class="col-xs-12 col-sm-3">
                <h4>Follow Us</h4>
                <div class="social-icons">
                    <ul class="social-icons">
                        <li class="facebook"><a href="https://www.facebook.com/pages/Pingwhen/292317570939511#" target="_blank" data-placement="bottom" data-tooltip title="Facebook">Facebook</a></li>
                        <li class="twitter"><a href="http://www.twitter.com/pingwhenapp" target="_blank" data-placement="bottom" data-tooltip title="Twitter">Twitter</a></li>
                        <li class="linkedin"><a href="https://www.linkedin.com/company/pingwhen/" target="_blank" data-placement="bottom" data-tooltip title="Linkedin">Linkedin</a></li>
                    </ul>
                </div>
            </div>
        
        
        </div>
    </div>

    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <a href="/" class="logo">
                        <img alt="Porto Website Template" class="img-responsive" src="img/logo.png">
                    </a>
                </div>
                <div class="col-md-7">
                    <p>© Copyright 2015. All Rights Reserved.</p>
                </div>
                <div class="col-md-4">
                    <nav id="sub-menu">
                        <ul>
                            <li><a href="terms">Terms & Services</a></li>
                            <li><a href="faq">FAQ's</a></li>
                            <li><a href="contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
        
</footer>
				
<!-- Vendor -->
<script src="vendor/jquery/jquery.js"></script>
<script src="vendor/jquery.appear/jquery.appear.js"></script>
<script src="vendor/jquery.easing/jquery.easing.js"></script>
<script src="vendor/jquery-cookie/jquery-cookie.js"></script>
<script src="vendor/bootstrap/bootstrap.js"></script>
<script src="vendor/common/common.js"></script>
<script src="vendor/jquery.validation/jquery.validation.js"></script>
<script src="vendor/jquery.stellar/jquery.stellar.js"></script>
<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="vendor/jquery.gmap/jquery.gmap.js"></script>
<script src="vendor/isotope/jquery.isotope.js"></script>
<script src="vendor/owlcarousel/owl.carousel.js"></script>
<script src="vendor/jflickrfeed/jflickrfeed.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
<script src="vendor/vide/vide.js"></script>

<!-- Video stuff -->
<script src="videoEmbed/jquery-video-lightning.js"></script>
<link href="videoEmbed/jquery-video-lightning.css" rel="stylesheet" type="text/css">

<!-- Theme Base, Components and Settings -->
<script src="js/theme.js"></script>

<!-- Theme Custom -->
<script src="js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="js/theme.init.js"></script>

<!-- Actually make video embedds work -->
<script>
    $(function() {
        $(".video-link").jqueryVideoLightning({
            autoplay: 1,
            backdrop_color: "#ddd",
            backdrop_opacity: 0.6,
            glow: 20,
            glow_color: "#000"
        });
    });
</script>

<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=10250457; 
var sc_invisible=1; 
var sc_security="8b987725"; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="shopify visitor
statistics" href="http://statcounter.com/shopify/"
target="_blank"><img class="statcounter"
src="http://c.statcounter.com/10250457/0/8b987725/1/"
alt="shopify visitor statistics"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->

<!-- Start of Google Analytics Code -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64449125-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- End of Google Analytics Code -->