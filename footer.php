            <footer>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3">
							<img src="images/galaxy-crowd-white.png" alt="logo" class="img-fluid"/>
							<p align="justify">CloudReach Services Pvt. Ltd. is a company founded by a group of industry experts that have decades of experience between them. Each of them has spent years understanding the needs of the people around them and knowing how to ensure the financial freedom of the people around them.</p>
						</div>
						<div class="col-md-3">
							<h3 class="after-underline">About Galaxy Crowd</h3>
							<ul>
								<li><a href="about.php">What Is Galaxy Crowd</a></li>
								<li><a href="contact.php"Contact Us</a></li>
							
								
							<!--	<li><a href="work-with-us.php">Work With Us</a></li>
								<li><a href="partner.php">Partner With Us</a></li>
								<li><a href="promotion-rules.php">Promotion Rules</a></li>
								<li><a href="project-rules.php">Project Rules</a></li> -->
							</ul>
						</div>
						<div class="col-md-3">
							<h3 class="after-underline">Support</h3>
							<ul>
								<li><a href="trust-and-safety.php">Trust & Safety</a></li>
								<li><a href="contact.php">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<h3 class="after-underline">Follow Us</h3>
							<ul class="social-media">
								<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
							</ul>
							<h4>Payment Methods</h4>
							<ul class="social-media hover-disable">
								<li><a href="javascript:void(0)"><img src="images/visa.png" alt="visa"></a></li>
								<li><a href="javascript:void(0)"><img src="images/master-card.png" alt="master-card"></a></li>
								<li><a href="javascript:void(0)"><img src="images/mastero.png" alt="mastero"></a></li>
								<li><a href="javascript:void(0)"><img src="images/paypal.png" alt="paypal"></a></li>
								<li><a href="javascript:void(0)"><img src="images/paytm.png" alt="paytm"></a></li>
								<li><a href="#javascript:void(0)"><img src="images/rupay.png" alt="rupay"></a></li>
								<li><a href="javascript:void(0)"><img src="images/solid-truest-pay.png" alt="solid truest pay"></a></li>
								<li><a href="javascript:void(0)"><img src="images/upi.png" alt="upi"></a></li>
								<li><a href="javascript:void(0)"><img src="images/net-banking.png" alt="net-banking"></a></li>
							</ul>
						</div>
					</div><hr>
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="mb-1">
								<li class="d-inline-block pr-3 border-right"><a href="privacy-policy.php">Privacy Policy</a></li>
								<li class="d-inline-block pl-3 pr-3 border-right"><a href="terms-of-use.php">Terms of Use</a></li>
								<li class="d-inline-block pl-3 pr-3 border-right"><a href="cookie-policy.php">Cookie Policy</a></li>
								<li class="d-inline-block pl-3"><a href="campaign-owner-agreement.php">Campaign Owner Agreement</a></li>
							</ul>
							<p>&copy; 2019 www.galaxycrowd.com | All Right Reserved</p>
						</div>
					</div>
				</div>
			</footer>
		</section>

	<!-- required javascript -->
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/lightslider.js"></script>
	<!-- close -->
	
	<script>
    	 $(document).ready(function() {
			$("#content-slider").lightSlider({
                loop:true,
                keyPress:true
            });
            $('#image-gallery').lightSlider({
                gallery:true,
                item:1,
                thumbItem:9,
                slideMargin: 0,
                speed:500,
                auto:true,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }  
            });
		});
    </script>
	</body>
</html>