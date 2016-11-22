
<!DOCTYPE HTML>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/styling.css">
	<link rel="stylesheet" type="text/css" href="css/bx_styles.css">
	
	<!-- Add fancyBox CSS files -->
	<link rel="stylesheet" type="text/css" href="css/popup.css" media="screen" />
	

	<title>Precedo Financial Consulting</title>
	<meta name="description" content="">
	
	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	
	<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
	<script src="js/calculator.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/popup.js"></script>
	
		<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>	
	
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33771067-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>

<section id="topStrip">
</section>

<!--Header-->
<header>
	<a href="index.php"><img src="images/logo.gif" alt="precedo financial logo" class="logo"></a>
	<p class="headerRight"> <a href="mailto:info@precedofinancial.com" style="color: #5f5e5a;">info@precedofinancial.com</a> | 07749337805</p>
</header>

<!--Navigation-->
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="our_fees.php">Our Fees</a></li>
        <li><a href="community.php">In the Community</a></li>
		<li><a href="e-guides.php">E-Guides</a></li>
		<li><a href="charteredStatus.php">Chartered Status</a></li> 
		<li><a href="accreditations.php">Accreditations</a></li>
		<li><a href="contact.php">Contact us</a></li>
    </ul>
</nav>
<!--Image holder-->
	<section id="imageHolder_new">
		<img src="images/mainImages/bg.jpg" style="width: 100%; height:100%;" alt="Precedo Financial Consultancy">
		
		<div id="overlay">
		<h1>We are Independent Financial Advisers based in the heart of Yorkshire</h1>
		<h2>We specialise in providing financial planning to the over 55's on Drawing Pension Benefits at Retirement, Lifetime Mortgages, Pre-Paid Funeral Plans, Long Term Care Planning and Investment Planning both At and In Retirement</h2>
		</div>
	</section>

<!--Wrapper-->
<section id="pageWrap">

	

	<!--Home Content-->
	<section id="homeContent">
		<article id="left-col-250">
			<a href="personalServices.php"><h2>Personal Financial Planning</h2>
			<img src="images/personal_thumb.gif" alt="Personal Financial Planning"></a>
			<p>Providing you with a bespoke financial plan for now and the future.</p>
			<p>We offer holistic financial planning to protect you and your loved ones whilst investing for their future and yours through preservation and growth of wealth within the family.</p> 
			<p><a href="personalServices.php" class="followThrough">Find out more</a></p>
		</article>
		
		<article id="middle-col-250">
			<a href="funeral_plans.php"><h2>Funeral Plans</h2>
			<img src="images/funeral_plans.jpg" alt="Funeral Plans"></a>
			<p>Providing a funeral plan so you receive the funeral you would wish to receive and reducing the work for those left behind at this stressful time.</p><p><a href="funeral_plans.php" class="followThrough">Find out more</a></p>
		</article>
		
		<article id="right-col-250">
			<a href="laterLife.php"><h2>Later Life Financial Planning</h2>
			<img src="images/later_life.gif" alt="Later Life Financial Planning"></a>
			<p>Providing you with a bespoke financial plan to ensure that you have the lifestyle and comfort you deserve in retirement. </p><p><a href="laterLife.php" class="followThrough">Find out more</a></p>
		</article>
	</section>
	
	<!--Bottom Content
	<section id="bottomHomeContent">
	
		
		
				
		<article id="news">
			<a href="about.php"><img src="images/magazine_cover.gif" alt="Download Precedo Magazine"></a>		
		</article>
	</section>
	-->
	
	
	

	




	
	
	<!--Bottom Content-->
	<section id="bottomHomeContent">
		<article id="testimonials">
			<div class="rectangle"><h2>Testimonials</h2></div>
			<div class="triangle-l"></div>
			<div class="triangle-r"></div>
	
			<ul id="slider1">
  				<li><a href="testimonials.php"><img src="images/test1.gif" alt="client testimonial 1"></a></li>
  				<li><a href="testimonials.php"><img src="images/test2.gif" alt="client testimonial 2"></a></li>
			</ul>
		</article>
		
		<article id="news">
			<a href="about.php"><img src="images/magazine_cover.jpg" alt="Download Precedo Magazine"></a>		
		</article>
	</section>

</section>

<script src="js/jquery.bxSlider.min.js" type="text/javascript"></script>

<script type="text/javascript">  	
  	$(function(){
  $('#slider1').bxSlider({
    infiniteLoop: false,
    hideControlOnEnd: true
  });
});
</script>

<section id="footerStrip">
	<footer>
		<article class="footerLeft">
				<p>A summary of our internal complaints handling procedures for the reasonable and prompt handling of complaints is available on request and if you cannot settle your complaint with us, you may be entitled to refer it to the <a href="www.financial-ombudsman.org.uk" style="font-size: 100%; line-height: 1.2em; margin-top: 10px; font-family: arial; color: #F27F00;">Financial Ombudsman Service</a>  or by contacting them </br>on 0800 023 4 567</p>
				<p>Precedo Financial Consultancy is authorised and regulated by the Financial Conduct Authority</p>
		</article>
		<article class="footerMiddle" style="text-align: center;">
			
		</article>
		<article class="footerRight">
			<ul>
				<li>E: info@precedofinancial.com</li>
				<li>M: 07749 337805</li>
			</ul>
		</article>
		
		<div id="lowerFooter">
			<p class="copyright">Copyright &copy; Precedo Financial Consultancy LTD 2012</p>
			<p class="creator"><a href="http://www.dansteeldesign.co.uk">Created by: dansteeldesign.co.uk</a></p>
		</div>
	</footer>
	
	
</section>




</body>

</html>
