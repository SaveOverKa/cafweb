<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>Careera Next  - Portfolio</title>

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
				<li class="current"><a href="portfolio.php">Пройти тест</a></li>
				<li><a href="project.php">Информация</a></li>
				<li><a href="about.php">Документы</a></li>
				<li><a href="contact.php">Связаться</a></li>
			</ul>
				
		</div><!-- header end -->
			
		<div class="content-innertube">
			
			<div id="text"><img src="img/portfolio.png" alt="" title=""></div>
			<div id="stripe"></div>
			
			<ul class="portfolio-nav clearfix">
				<li class="segment-1 selected-1"><a href="#" data-value="all">All</a></li>
				<li class="segment-0"><a href="#" data-value="ford"><span>01</span>Ford Mustang</a></li>
				<li class="segment-2"><a href="#" data-value="mark"><span>02</span>Mark Sebastian</a></li>
				<li class="segment-3"><a href="#" data-value="cars"><span>03</span>Other cars</a></li>
				<li class="segment-4 last"><a href="#" data-value="monty"><span>04</span>Monty Python</a></li>
			</ul>
			
			<ul id="list" class="portfolio clearfix">
			
				<li data-id="id-1" class="ford">
					
					<img title="" alt="" src="img/sample/portfolio-min1.jpg">
					<span class="portfolio-overlay"></span>
					
					<div class="info">
						<p class="info-title">Project name</p>

						<div class="read-more"><a href="project.html" title="Read more"></a></div>
						<div class="enlarge"><a href="img/sample/portfolio-big1.jpg" title="Enlarge image" rel="prettyPhoto[mixed]"></a></div>
						<div class="visit"><a href="#" title="Visit website"></a></div>
					</div>				
				
				</li>
						
				<li data-id="id-2" class="ford">
				
					<img title="" alt="" src="img/sample/portfolio-min2.jpg">
					<span class="portfolio-overlay"></span>
					
					<div class="info">
						<p class="info-title">Project name</p>
						<p class="info-desc">Vivamus congue magna eget sem rutrum a feugiat augue eleifend.</p>
						<div class="enlarge"><a href="img/sample/portfolio-big2.jpg" title="Enlarge image" rel="prettyPhoto[mixed]"></a></div>
					</div>	
				
				</li>
						
				<li data-id="id-3" class="ford">
				
					<img title="" alt="" src="img/sample/portfolio-min3.jpg">
					<span class="portfolio-overlay"></span>
					
					<div class="info">
						<div class="read-more"><a href="project.html" title="Read more"></a></div>
						<div class="enlarge"><a href="img/sample/portfolio-big3.jpg" title="Enlarge image" rel="prettyPhoto[mixed]"></a></div>
						<div class="visit"><a href="#" title="Visit website"></a></div>
					</div>				
				
				</li>
						
				<li data-id="id-4" class="ford">
				
					<a href="img/sample/portfolio-big4.jpg" rel="prettyPhoto[mixed]" title="Enlarge image">
						<img title="" alt="" src="img/sample/portfolio-min4.jpg">
						<span class="portfolio-overlay"></span>
					</a>
				
				</li>
						
				<li data-id="id-5" class="mark">
				
					<img title="" alt="" src="img/sample/portfolio-min5.jpg">
					<span class="portfolio-overlay"></span>
					
					<div class="info">
						<div class="read-more"><a href="project.html" title="Read more"></a></div>
						<div class="enlarge"><a href="img/sample/portfolio-big5.jpg" title="Enlarge image" rel="prettyPhoto[mixed]"></a></div>
						<div class="visit"><a href="#" title="Visit website"></a></div>
					</div>	
				
				</li>
				
				<li data-id="id-6" class="mark">
					
					<img title="" alt="" src="img/sample/portfolio-min6.jpg">
					<span class="portfolio-overlay"></span>
					
					<div class="info">
						<p class="info-title">Project name</p>
						
						<div class="read-more"><a href="project.html" title="Read more"></a></div>
						<div class="enlarge"><a href="img/sample/portfolio-big6.jpg" title="Enlarge image" rel="prettyPhoto[mixed]"></a></div>
						<div class="visit"><a href="#" title="Visit website"></a></div>
					</div>				
				
				</li>
						
				<li data-id="id-7" class="mark">
					
					<img title="" alt="" src="img/sample/portfolio-min7.jpg">
					<span class="portfolio-overlay"></span>
					
					<div class="info">
						<p class="info-title">Project name</p>
						<p class="info-desc">Vivamus congue magna eget sem rutrum a feugiat augue eleifend.</p>
						<div class="enlarge"><a href="img/sample/portfolio-big7.jpg" title="Enlarge image" rel="prettyPhoto[mixed]"></a></div>
					</div>	
				
				</li>
						
				<li data-id="id-8" class="mark">
					
					<img title="" alt="" src="img/sample/portfolio-min8.jpg">
					<span class="portfolio-overlay"></span>
					
					<div class="info">
						<div class="read-more"><a href="project.html" title="Read more"></a></div>
						<div class="enlarge"><a href="img/sample/portfolio-big8.jpg" title="Enlarge image" rel="prettyPhoto[mixed]"></a></div>
						<div class="visit"><a href="#" title="Visit website"></a></div>
					</div>				
				
				</li>
						
				<li data-id="id-9" class="mark">
					
					<a href="img/sample/portfolio-big9.jpg" rel="prettyPhoto[mixed]" title="Enlarge image">
						<img title="" alt="" src="img/sample/portfolio-min9.jpg">
						<span class="portfolio-overlay"></span>
					</a>
				
				</li>
						
				<li data-id="id-10" class="mark">
					
					<img title="" alt="" src="img/sample/portfolio-min10.jpg">
					<span class="portfolio-overlay"></span>
					
					<div class="info">
						<div class="read-more"><a href="project.html" title="Read more"></a></div>
						<div class="enlarge"><a href="img/sample/portfolio-big10.jpg" title="Enlarge image" rel="prettyPhoto[mixed]"></a></div>
						<div class="visit"><a href="#" title="Visit website"></a></div>
					</div>	
				
				</li>
				
				<li data-id="id-11" class="mark">
					
					<img title="" alt="" src="img/sample/portfolio-min11.jpg">
					<span class="portfolio-overlay"></span>
					
					<div class="info">
						<p class="info-title">Project name</p>

						<div class="read-more"><a href="project.html" title="Read more"></a></div>
						<div class="enlarge"><a href="img/sample/portfolio-big11.jpg" title="Enlarge image" rel="prettyPhoto[mixed]"></a></div>
						<div class="visit"><a href="#" title="Visit website"></a></div>
					</div>				
				
				</li>
						
				<li data-id="id-12" class="mark">
				
					<img title="" alt="" src="img/sample/portfolio-min12.jpg">
					<span class="portfolio-overlay"></span>
					
					<div class="info">
						<p class="info-title">Project name</p>
						<p class="info-desc">Vivamus congue magna eget sem rutrum a feugiat augue eleifend.</p>
						<div class="enlarge"><a href="img/sample/portfolio-big12.jpg" title="Enlarge image" rel="prettyPhoto[mixed]"></a></div>
					</div>	
				
				</li>
						
				<li data-id="id-13" class="cars">
					
					<img title="" alt="" src="img/sample/portfolio-min13.jpg">
					<span class="portfolio-overlay"></span>
					
					<div class="info">
						<div class="read-more"><a href="project.html" title="Read more"></a></div>
						<div class="enlarge"><a href="img/sample/portfolio-big13.jpg" title="Enlarge image" rel="prettyPhoto[mixed]"></a></div>
						<div class="visit"><a href="#" title="Visit website"></a></div>
					</div>				
				
				</li>
						
				<li data-id="id-14" class="cars">
					
					<a href="img/sample/portfolio-big14.jpg" rel="prettyPhoto[mixed]" title="Enlarge image">
						<img title="" alt="" src="img/sample/portfolio-min14.jpg">
						<span class="portfolio-overlay"></span>
					</a>
				
				</li>
						
				<li data-id="id-15" class="cars">
					
					<img title="" alt="" src="img/sample/portfolio-min15.jpg">
					<span class="portfolio-overlay"></span>
					
					<div class="info">
						<div class="read-more"><a href="project.html" title="Read more"></a></div>
						<div class="enlarge"><a href="img/sample/portfolio-big15.jpg" title="Enlarge image" rel="prettyPhoto[mixed]"></a></div>
						<div class="visit"><a href="#" title="Visit website"></a></div>
					</div>	
				
				</li>
				
				
				<li data-id="id-16" class="cars">
					
					<img title="" alt="" src="img/sample/portfolio-min16.jpg">
					<span class="portfolio-overlay"></span>
					
					<div class="info">
						<p class="info-title">Project name</p>

						<div class="read-more"><a href="project.html" title="Read more"></a></div>
						<div class="enlarge"><a href="img/sample/portfolio-big16.jpg" title="Enlarge image" rel="prettyPhoto[mixed]"></a></div>
						<div class="visit"><a href="#" title="Visit website"></a></div>
					</div>				
				
				</li>
						
				<li data-id="id-17" class="cars">
					
					<img title="" alt="" src="img/sample/portfolio-min17.jpg">
					<span class="portfolio-overlay"></span>
					
					<div class="info">
						<p class="info-title">Project name</p>
						<p class="info-desc">Vivamus congue magna eget sem rutrum a feugiat augue eleifend.</p>
						<div class="enlarge"><a href="img/sample/portfolio-big17.jpg" title="Enlarge image" rel="prettyPhoto[mixed]"></a></div>
					</div>	
				
				</li>
						
				<li data-id="id-18" class="cars">
				
					<img title="" alt="" src="img/sample/portfolio-min18.jpg">
					<span class="portfolio-overlay"></span>
					
					<div class="info">
						<div class="read-more"><a href="project.html" title="Read more"></a></div>
						<div class="enlarge"><a href="img/sample/portfolio-big18.jpg" title="Enlarge image" rel="prettyPhoto[mixed]"></a></div>
						<div class="visit"><a href="#" title="Visit website"></a></div>
					</div>				
				
				</li>
						
				<li data-id="id-19" class="monty">
					
					<a href="http://www.youtube.com/watch?v=M68GeL8PafE" rel="prettyPhoto[mixed]">
						<img title="" alt="" src="img/sample/portfolio-min19.jpg">
						<span class="portfolio-overlay"></span>
					</a>
				
				</li>
						
				<li data-id="id-20" class="monty">
					
					<img title="" alt="" src="img/sample/portfolio-min20.jpg">
					<span class="portfolio-overlay"></span>
					
					<div class="info">
						<p class="info-title">Monty Python - Silly Job Interview </p>
	
						<div class="read-more"><a href="project.html" title="Read more"></a></div>
						<div class="play"><a href="http://www.youtube.com/watch?v=1dWMIuipn_c" rel="prettyPhoto[mixed]"></a></div>
					</div>	
				
				</li>
				
			</ul><!-- portfolio end -->
			
			<ul id="prev-next" class="clearfix">
				<li class="next"><a href="#"></a></li>
				<li class="prev"><a href="#"></a></li>
			</ul>
		
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