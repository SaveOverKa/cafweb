<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>Careera Next  - About me</title>

<link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />

<link rel="stylesheet" type="text/css" media="print" href="css/print.css"  />

<link rel="stylesheet" type="text/css" media="screen" href="css/prettyPhoto.css" />

<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:light' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Just+Another+Hand' rel='stylesheet' type='text/css'>

<!--[if lt IE 7]><link rel="stylesheet" type="text/css" media="screen" href="css/ie-fix.css" /><![endif]-->

<script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>

<script type="text/javascript" src="js/jquery.tweet.js"></script>

<script type="text/javascript" src="js/jquery.ScrollTo.js"></script>

<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>

<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

<script type="text/javascript" src="js/jquery.quicksand.js"></script>

<script type="text/javascript" src="js/jquery.quicksand-config.js"></script>

<script type="text/javascript" src="js/scripts.js"></script>

</head>
<body>

	<div id="page">
	
		<div id="header" class="clearfix">
			
			<h1>Здравствуйте, <?php echo $_COOKIE['name']; ?>!</h1>
				
			<ul id="main-nav">
				<li><a href="index.php">Моя страница</a></li>
				<li><a href="portfolio.php">Пройти тест</a></li>
				<li><a href="project.php">Информация</a></li>
				<li class="current"><a href="about.php">Документы</a></li>
				<li><a href="contact.php">Связаться</a></li>
			</ul>
				
		</div><!-- header end -->
			
		<div class="content-innertube">
			
			<div id="text"><img src="img/aboutme.png" alt="" title=""></div>
			<div id="stripe"></div>
			
			<div id="about" class="clearfix">
			
				<img src="img/sample/photo.jpg" alt="" title="">
				
				<h2>A few words about me</h2>
				
				<p class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in nisl elit, id fermentum ipsum. Nullam nibh sem, facilisis cursus malesuada non, condimentum sed mauris. Aenean consequat, nunc eget molestie convallis, neque est rhoncus ligula, volutpat varius purus nisl non diam. Phasellus enim arcu, pretium sed tincidunt tempor, consequat a lorem. Vestibulum ligula nulla, blandit a ullamcorper in, scelerisque ullamcorper justo.</p>
				
				<blockquote class="about-me">
					<div class="quote-top"></div>
					&#8220;Vestibulum leo dolor, tristique vel consectetur ultrices, dapibus ut odio. Integer eget pulvinar lorem. Phasellus blandit libero eget ante vulputate a convallis sapien vestibulum. Proin at leo lacus, a semper. &#8220;
					<p class="quote-author">Joe Doe, <a href="#" title="">Web Design Studio</a></p>
				</blockquote>
				
			</div><!-- about end -->
					
			<div id="about-middle" class="clearfix">
				
				<div id="content-left">
					
					<div class="clearfix"><h2>My skills</h2></div>
					
						<ul id="chart">
							<li class="five">Photoshop</li>
							<li class="four">Windows</li>
							<li class=" three">Office</li>
							<li class="five">HTML5</li>
							<li class="four">JavaScript</li>
						</ul>
						
						<div id="axis"></div>
					
				</div><!-- content-left end -->
					
				<div id="content-right">
					
					<div class="clearfix"><h2>What can I do</h2></div>
					
						<ul id="check">
							<li>Nam vel diam at ligula pharetra imperdiet at eget magna.</li>
							<li>Curabitur ac erat quis nisl lobortis mattis a vitae ligula.</li>
							<li>Morbi et diam magna, at tincidunt tortor.</li>
							<li>Morbi auctor dignissim lacus, quis ullamcorper metus sodales id.</li>
							<li>Maecenas elementum nibh id sapien sodales non placerat risus interdum.</li>
							<li class="last">Donec luctus mollis elit, eget vulputate felis lacinia quis.</li>
						</ul>
					
				</div><!-- content-right end -->
				
			</div><!-- about-middle end -->
				
			<div id="twitter" class="clearfix">
				
				<div id="twitter-btn"><a href="#"></a></div>
					
				<div id="last-tweets">
					<div class="tweet"></div> 
				</div>
				
			</div><!-- twitter end -->
			
		</div><!-- content-innertube end -->
		
		<div id="footer">
		
			<div id="footer-innertube">
			
				<div id="footer-address">
					<h5>Address</h5>
					<ul>
						<li>123 Street Address,</li>
						<li>Lovely City,</li>
						<li>My Country</li>
					</ul>
				</div><!-- footer-address end -->
				
				<div id="footer-contact">
					<h5>Contact</h5>
					<ul>
						<li>000 123 456 789</li>
						<li><a href="mailto:#" title="Send me an email">address@email.com</a></li>
						<li><a href="contact.php">Contact form<span class="raquo">&#187;</span></a></li>
					</ul>
				</div><!-- footer-contact end -->
				
				<div id="footer-social">
					<h5>Social</h5>
					<ul>
						<li><a href="#" title=""><img src="img/twitter.png" alt="twitter" title="My Twitter profile"></a></li>
						<li><a href="#" title=""><img src="img/facebook.png" alt="facebook" title="My Facebook profile"></a></li>
						<li><a href="#" title=""><img src="img/flickr.png" alt="flickr" title="My Flickr profile"></a></li>
						<li><a href="#" title=""><img src="img/linkedin.png" alt="linkedin" title="My Linkedin profile"></a></li>
					</ul>
				</div><!-- footer-social end -->
				
				<div id="footer-resume">
					<h5>Resume</h5>
					<div id="download-resume"><a href="#"></a></div>
				</div><!-- footer-resume end -->
				
				<div class="clear"></div>
				
				<ul id="footer-nav">
					<li><a href="index.html">Resume</a></li>
					<li><a href="portfolio.html">Portfolio</a></li>
					<li><a href="about.html">About me</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
				
				<div id="go-top"></div>
				
				<div class="clear"></div>
			
			</div><!-- footer-innertube end -->
			
		</div><!-- footer end -->
		
	</div><!-- page end -->

</body>
</html>