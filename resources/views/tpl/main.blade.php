<!DOCTYPE html>
<html>
<head>
	<title>Manchester Wolves</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<link rel="stylesheet" type="text/css" href="{{ asset( 'css/bootstrap.min.css' ) }}">
	<link rel="stylesheet" type="text/css" href="{{ asset( 'css/font-awesome.min.css' ) }}">
	<link rel="stylesheet" type="text/css" href="{{ asset( 'css/style.css' ) }}">
	@yield( 'styles' )

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!-- header -->
	<header>
		<div class="header-wrapper">
			<section class="navbar bs-docs-nav" id="top" role="banner">
				<div class="container" id="top-sub-text">
					<a href="{{ url( '/' ) }}" class="navbar-brand">
						<img src="{{ asset( 'img/logo.png' ) }}">
					</a>
					<div class="secondary-navigation">
						<span>Wolves Official Website</span>
						<ul class="navbar navbar-right">
							<li><a href="#">Wolves Wall</a></li>
							<li><a href="#">Wolves Player</a></li>
							<li><a href="#">Shop</a></li>
							<li><a href="#">Newsletter</a></li>
							<li><a href="#">Switch to Mobile</a></li>
						</ul>
					</div>					
				</div>
				<div class="main-navigation">
					<div class="container" id="main-menu-container">
						<div class="navbar-header">
							<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<nav class="navbar-collapse bs-navbar-collapse collapse" id="main-menu-wrapper" aria-expanded="false" style="height: 1px;">
							<ul class="nav navbar-nav navbar-right" id="main-menu">
								<li @if( $pagename == 'About Us' ) class="active" @endif >
									<a href="{{ url( 'about' ) }}">About Us</a>
								</li>
								<li @if( $pagename == 'News' ) class="active" @endif >
									<a href="{{ url( 'news' ) }}">News</a>
								</li>
								<li @if( $pagename == 'Fixtures' ) class="active" @endif >
									<a href="{{ url( 'fixtures' ) }}">Fixtures</a>			
								</li>
								<li @if( $pagename == 'Results' ) class="active" @endif >
									<a href="{{ url( 'results' ) }}">Results</a>
								</li>
								<li @if( $pagename == 'Contact Us' ) class="active" @endif >
									<a href="{{ url( 'contact-us' ) }}">Contact Us </a>
								</li>
								<li @if( $pagename == 'Our Ground' ) class="active" @endif >
									<a href="{{ url( 'ground' ) }}">Our Ground </a>
								</li>
							</ul>						
						</nav>
					</div>					
				</div>
				<div class="container">
					<div class="bottom-sub-text">
						<p>Official Website Sponsor</p>
					</div>
				</div>
			</section>
		</div>
	</header>
	<!-- End: header -->

	<!-- #main-container -->
	<section id="main-container">
		<div class=" main-content">
			<div class="container-fluid remove-side-padding">
				<div class="col-md-12 remove-side-padding left-container">
					<!-- page-content -->
					<div class="page-content">
						@yield( 'slider' )
						@yield( 'pagecontent' )
					</div>
					<!-- End: page-content -->

					<!-- featured-wrapper -->
					<div class="container">
						<div class="col-md-8 featured-content">
							<div class="partners">
								<div class="col-md-3">
									<a href="#"><img src="{{ asset( 'img/football-league.png' ) }}"></a>
									<p>Official Club Partner</p>
								</div>
								<div class="col-md-3">
									<a href="#"><img src="{{ asset( 'img/football-league.png' ) }}"></a>
									<p>Official Club Partner</p>
								</div>
								<div class="col-md-3">
									<a href="#"><img src="{{ asset( 'img/football-league.png' ) }}"></a>
									<p>Official Club Partner</p>
								</div>
								<div class="col-md-3">
									<a href="#"><img src="{{ asset( 'img/football-league.png' ) }}"></a>
									<p>Official Club Partner</p>
								</div>
							</div>
						</div>						
					</div>
					<div class="col-md-4"></div>
					<!-- End: featured-wrapper -->
				</div>
<!-- 				<div class="col-md-4 right-container">
						
				</div>	 -->

				<!-- Official Websites -->
				<div class="container col-md-12 official-sites-container">
					<div class="container official-sites-content">
						<div class="col-md-12 content">
							<ul class="list-inline bottom-list pull-left">
								<li><img src="{{ asset( 'img/logo.png' ) }}" class="logo"></li>
								<li><p>THE OFFICIAL CLUB WEBSITE OF WOLVES</p></li>
								<li><img src="{{ asset( 'img/skybet-masthead-championship.png' ) }}" class="img-skybet"></li>
							</ul>
							<ul class="list-inline bottom-social-links pull-right">
								<li>
									<a href="#">
										<i class="list-twitter"></i>
										Follow us on Twitter
									</a>
								</li>
								<li class="list-fb">
									<a href="#">
										<i class="list-fb"></i>
										Find us on Facebook
									</a>
								</li>
								<li class="list-rss">
									<a href="#">
										<i class="list-rss"></i>
										RSS updates
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div id="bottom-links-horizontal-1">
				<div class="container">
					<ul class="list-inline">
						<li><a href="#">Terms of Use</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Accessibility</a></li>
						<li><a href="#">Company Details</a></li>
						<li><a href="#">Careers</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Unsubscribe</a></li>
						<li><a href="#">CEOP Report Abuse</a></li>
						<li><a href="#">Switch to Mobile</a></li>
					</ul>					
				</div>
			</div>
			<div id="bottom-links-horizontal-2">
				<div class="container">
					<ul class="list-inline">
						<li><p>SITEMAP</p></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- End: #main-container -->

	<!-- footer -->
	<footer>
		<div class="container">
			<div class="links">
				<ul class="list-inline">
					<li>
						<a href="#" class="heading">News</a>
						<ul class="list-unstyled sub-links">
							<li>
								<a href="#">First Team</a>
							</li>
							<li>
								<a href="#">Latest Video</a>
							</li>
							<li>
								<a href="#">Club News</a>
							</li>
							<li>
								<a href="#">Academy</a>
							</li>
							<li>
								<a href="#">Wolves Women</a>
							</li>
							<li>
								<a href="#">Development Centre</a>
							</li>
							<li>
								<a href="#">Archive News</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" class="heading">Fixtures and Results</a>
						<ul class="list-unstyled sub-links">
							<li>
								<a href="#">League Table</a>
							</li>
							<li>
								<a href="#">Fixtures List</a>
							</li>
							<li>
								<a href="#">Match Preview</a>
							</li>
							<li>
								<a href="#">Match Report</a>
							</li>
							<li>
								<a href="#">U21s Fixtures</a>
							</li>
							<li>
								<a href="#">U21s Report</a>
							</li>
							<li>
								<a href="#">Academy Fixtures</a>
							</li>
							<li>
								<a href="#">Academy Report</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" class="heading">Tickets</a>
						<ul class="list-unstyled sub-links">
							<li>
								<a href="#">Latest Ticket News</a>
							</li>
							<li>
								<a href="#">Ticket Information</a>
							</li>
							<li>
								<a href="#">Buy Tickets</a>
							</li>
							<li>
								<a href="#">Stadium Plan</a>
							</li>
							<li>
								<a href="#">Conditions of Sale</a>
							</li>
							<li>
								<a href="#">Memberships</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" class="heading">Team</a>
						<ul class="list-unstyled sub-links">
							<li>
								<a href="#">Player Profiles</a>
							</li>
							<li>
								<a href="#">Staff Profiles </a>
							</li>
							<li>
								<a href="#">Academy Profiles</a>
							</li>
							<li>
								<a href="#">Academy Staff</a>
							</li>
						</ul>						
					</li>
					<li>
						<a href="#" class="heading">Stats</a>
						<ul class="list-unstyled sub-links">
							<li>
								<a href="#">Head to Head Stats</a>
							</li>
							<li>
								<a href="#">Player Stats</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" class="heading">Fans</a>
						<ul class="list-unstyled sub-links">
							<li>
								<a href="#">Disabled Supporters Club</a>
							</li>
							<li>
								<a href="#">Official Wolves Merchandise</a>
							</li>
							<li>
								<a href="#">Fans Parliament</a>
							</li>
							<li>
								<a href="#">Youth Parliament</a>
							</li>
							<li>
								<a href="#">My Wolves</a>
							</li>
							<li>
								<a href="#">Junior Supporters</a>
							</li>
							<li>
								<a href="#">Wolves Products</a>
							</li>
							<li>
								<a href="#">Stadium Tours</a>
							</li>
						</ul>						
					</li>
					<li>
						<a href="#" class="heading">Club</a>
						<ul class="list-unstyled sub-links">
							<li>
								<a href="#">Business Finder</a>
							</li>
							<li>
								<a href="#">About Us</a>
							</li>
							<li>
								<a href="#">Wolves Community Trust</a>
							</li>
							<li>
								<a href="#">Museum</a>
							</li>
							<li>
								<a href="#">Safeguarding</a>
							</li>
							<li>
								<a href="#">Vacancies</a>
							</li>
							<li>
								<a href="#">Contact Us</a>
							</li>
							<li>
								<a href="#">Your Feedback</a>
							</li>
						</ul>						
					</li>
					<li>
						<a href="#" class="heading">Commercial</a>
						<ul class="list-unstyled sub-links">
							<li>
								<a href="#">Matchday Hospitality</a>
							</li>
							<li>
								<a href="#">Seasonal Hospitality</a>
							</li>
							<li>
								<a href="#">Conference/Private Hire</a>
							</li>
							<li>
								<a href="#">Christmas Events</a>
							</li>
							<li>
								<a href="#">Advertising/Sponsorship</a>
							</li>
							<li>
								<a href="#">Contact Corporate Wolves</a>
							</li>
						</ul>						
					</li>
				</ul>
			</div>
			<div class="copyright">
				<div class="col-md-12">
					<p>Wolves Business Finder is powered by <a href="#">city-visitor.com</a> &amp; <a href="#">cityvisitor.co.uk</a></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- End: footer -->

	<!-- Scripts -->
	<script type="text/javascript" src="{{ asset( 'js/jquery.min.js' ) }}"></script>
	<script type="text/javascript" src="{{ asset( 'js/bootstrap.min.js' ) }}"></script>
</body>
</html>