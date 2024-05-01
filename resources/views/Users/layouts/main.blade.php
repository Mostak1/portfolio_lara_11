<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Mostak Ahmed</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

<!-- Color Switcher Mockup -->
<link href="css/color-switcher-design.css" rel="stylesheet">

<!-- Color Themes -->
<link id="theme-color-file" href="css/color-themes/default-color.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
@yield('css')
</head>

<body>
 
<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
	<!-- End Preloader -->
 	
 	<!-- Main Header -->
    <header class="main-header header-style-three">
    	
		<!-- Header Top -->
        <div class="header-top">
			<div class="auto-container">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div class="header-top_nav">
						<a href="#">Terms & Condition</a>
						<a href="#">Privacy Policy</a>
						<a href="#">Contact Us</a>
					</div>
					<div class="right-box d-flex">
						<a class="header-top_email" href="mailto:mdmostaka@gmail.com"><span>Email me:</span> mdmostaka@gmail.com</a>
						<!-- Header Top Social -->
						<div class="header-top_social">
							<a href="#">fb.</a>
							<a href="#">ln.</a>
							<a href="#">tw.</a>
							<a href="#">in.</a>
						</div>
					</div>
				</div>
			</div>
		</div>

        <!-- Header Lower -->
        <div class="header-lower">
            
			<div class="auto-container">
				<div class="inner-container d-flex justify-content-between align-items-center">
					
					<!-- Logo Box -->
					<div class="logo-box d-flex">
						<div class="logo"><a href="index.html"><img src="images/logo-4.svg" alt="" title=""></a></div>
					</div>
					
					<div class="nav-outer d-flex align-items-center">
						
						<!-- Main Menu -->
						<nav class="main-menu show navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							
							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li class=""><a href="{{url('/')}}">Home</a>
										{{-- <ul>
											<li><a href="index.html">Homepage One</a></li>
											<li><a href="index-2.html">Homepage Two</a></li>
											<li><a href="index-3.html">Homepage Three</a></li>
											<li class="dropdown"><a href="#">Header Styles</a>
												<ul>
													<li><a href="index.html">Header Style One</a></li>
													<li><a href="index-2.html">Header Style Two</a></li>
													<li><a href="index-3.html">Header Style Three</a></li>
												</ul>
											</li>
										</ul> --}}
									</li>
									<li class=""><a href="{{url('about')}}">About</a>
										{{-- <ul>
											<li><a href="about.html">About Us</a></li>
											<li><a href="faq.html">Faq's</a></li>
											<li><a href="team.html">Team</a></li>
											<li><a href="price.html">Price</a></li>
											<li><a href="testimonial.html">Testimonial</a></li>
										</ul> --}}
									</li>
									<li class="dropdown"><a href="{{url('project')}}">Projects</a>
										<ul>
											{{-- <li><a href="services.html">Services</a></li> --}}
											<li><a href="{{url('project-details')}}">Project Detail</a></li>
										</ul>
									</li>
									{{-- <li class="dropdown"><a href="#">Case</a>
										<ul>
											<li><a href="case.html">Case</a></li>
											<li><a href="case-detail.html">Case Detail</a></li>
										</ul>
									</li>
									<li><a href="gallery.html">Gallery</a></li>
									<li class="dropdown"><a href="#">Blog</a>
										<ul>
											<li><a href="blog.html">Our Blog</a></li>
											<li><a href="blog-sidebar.html">Blog Sidebar</a></li>
											<li><a href="blog-detail.html">Blog Detail</a></li>
										</ul>
									</li> --}}
									<li><a href="{{url('contact')}}">Contact</a></li>
								</ul>
							</div>
							
						</nav>
						<!-- Main Menu End-->
						
					</div>
					
					<!-- Outer Box -->
					<div class="outer-box d-flex align-items-center">
						
						<!-- Phone Box -->
						<div class="header-phone">
							<div class="header-phone_inner">
								<span class="header-phone_icon flaticon-telephone"></span>
								Phone Number <br>
								<a href="tel:+8801834160283">+8801834160283 call</a>
							</div>
						</div>
						
						<!-- Mobile Navigation Toggler -->
						<div class="mobile-nav-toggler"><span class="icon"><img src="images/icons/menu.png" alt="" /></span></div>
						
					</div>
					<!-- End Outer Box -->
					
				</div>
				
			</div>
        </div>
        <!-- End Header Lower -->
        
		<!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container">
				<div class="d-flex justify-content-between align-items-center">
					<!-- Logo -->
					<div class="logo">
						<a href="index.html" title=""><img src="images/logo.svg" alt="" title=""></a>
					</div>
					
					<!-- Right Col -->
					<div class="right-box">
						<!-- Main Menu -->
						<nav class="main-menu">
							<!--Keep This Empty / Menu will come through Javascript-->
						</nav>
						<!-- Main Menu End-->
						
						<!-- Mobile Navigation Toggler -->
						<div class="mobile-nav-toggler"><span class="icon"><img src="images/icons/menu.png" alt="" /></span></div>
						
					</div>
					
				</div>
            </div>
        </div>
		<!-- End Sticky Menu -->
    
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="images/logo.svg" alt="" title=""></a></div>
				<!-- Search -->
				<div class="search-box">
					<form method="post" action="contact.html">
						<div class="form-group">
							<input type="search" name="search-field" value="" placeholder="SEARCH HERE" required>
							<button type="submit"><span class="icon flaticon-search"></span></button>
						</div>
					</form>
				</div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div>
		<!-- End Mobile Menu -->
	
    </header>
    <!-- End Main Header -->
    @yield('content')
	<!-- Main Footer -->
    <footer class="main-footer">
		<div class="auto-container">
        	<!--Widgets Section-->
            <div class="main-footer_widgets">
            	<div class="row clearfix">
                	
                    <!--big column-->
                    <div class="big-column col-lg-7 col-md-12 col-sm-12">
                        <div class="row clearfix">
							
							<!--Footer Column-->
                            <div class="main-footer_column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget subscribe-widget">
									<h5 class="main-footer_title">subscribe us</h5>
									<div class="footer-text">Join us to our newsletter And releases submit.</div>
									<!-- Subscribe Form -->
									<div class="subscribe-form">
										<form method="post" action="contact.html">
											<div class="form-group">
												<input type="email" name="email" value="" placeholder="Enter your email" required>
												<button type="submit" class="theme-btn fa-solid fa-arrow-right fa-fw"></button>
											</div>
										</form>
									</div>
									<div class="footer-privacy">Our <a href="#">Privacy Policy</a> and provide consent to receive updates from our company.</div>
								</div>
							</div>

							<!--Footer Column-->
                            <div class="main-footer_column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h4 class="main-footer_title">Service links</h4>
									<ul class="main-footer_list">
										<li><a href="#">IT Consulting</a></li>
										<li><a href="#">Web Development</a></li>
										<li><a href="#">UX/UI Design</a></li>
										<li><a href="#">Product Design</a></li>
										<li><a href="#">Digital Marketing</a></li>
										<li><a href="#">Digital Agency</a></li>
									</ul>
								</div>
							</div>

						</div>
					</div>

					<!--big column-->
                    <div class="big-column col-lg-5 col-md-12 col-sm-12">
                        <div class="row clearfix">

							<!--Footer Column-->
                            <div class="main-footer_column col-lg-4 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h4 class="main-footer_title">quick links</h4>
									<ul class="main-footer_list">
										<li><a href="#">home</a></li>
										<li><a href="#">about us</a></li>
										<li><a href="#">services</a></li>
										<li><a href="#">portfolios</a></li>
										<li><a href="#">blogs</a></li>
										<li><a href="#">contact us</a></li>
									</ul>
								</div>
							</div>

							<!--Footer Column-->
                            <div class="main-footer_column col-lg-8 col-md-6 col-sm-12">
                                <div class="footer-widget news-widget">
									<h4 class="main-footer_title">Latest News</h4>
									<!--News Widget Block-->
                                    <div class="news-widget-block">
                                        <div class="news-widget_image">
											<img src="images/resource/news-widget-3.jpg" alt="" />
										</div>
										<h6 class="news-widget_title"><a href="blog-detail.html">Fusce tincidu commodo sapien, quis porttitor.</a></h6>
										<div class="news-widget_post-date">by <a href="#">Lilabik</a>  /  22 Aug 2023</div>
                                    </div>
									<!--News Widget Block-->
                                    <div class="news-widget-block">
                                        <div class="news-widget_image">
											<img src="images/resource/news-widget-4.jpg" alt="" />
										</div>
										<h6 class="news-widget_title"><a href="blog-detail.html">Fusce tincidu commodo sapien, quis porttitor.</a></h6>
										<div class="news-widget_post-date">by <a href="#">huirani</a>  /  22 Aug 2023</div>
                                    </div>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="auto-container">
				<div class="copyright"><a href="index.html">It-solutions</a> &copy; Copyright-2023 All Rights Reserved.</div>
			</div>
		</div>
	</footer>
	<!-- End Main Footer -->
	
	<!-- Color Palate / Color Switcher -->
	<div class="color-palate">
		<div class="color-trigger">
			<i class="flaticon-gear"></i>
		</div>
		<div class="color-palate-inner">
			<div class="color-palate-head">
				<h6>Choose Color</h6>
			</div>
			
			<!-- Colors -->
			<div class="various-color clearfix">
				<div class="colors-list">
					<span class="palate default-color active" data-theme-file="css/color-themes/default-color.css"></span>
					<span class="palate green-color" data-theme-file="css/color-themes/green-color.css"></span>
					<span class="palate olive-color" data-theme-file="css/color-themes/olive-color.css"></span>
					<span class="palate orange-color" data-theme-file="css/color-themes/orange-color.css"></span>
					<span class="palate purple-color" data-theme-file="css/color-themes/purple-color.css"></span>
					<span class="palate teal-color" data-theme-file="css/color-themes/teal-color.css"></span>
					<span class="palate brown-color" data-theme-file="css/color-themes/brown-color.css"></span>
					<span class="palate yellow-color" data-theme-file="css/color-themes/yellow-color.css"></span>
				</div>
			</div>
					
			<div class="purchase-box">
				You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.
				<a href="#" class="theme-btn btn-style-one">
					<span class="btn-wrap">
						<span class="text-one">buy now</span>
						<span class="text-two">buy now</span>
					</span>
				</a>
			</div>
			
		</div>
	</div>
	<!-- End Color Palate / Color Switcher -->
</div>
<!-- End PageWrapper -->
<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fas fa-arrow-up fa-fw"></span></div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/appear.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/parallax-scroll.js"></script>

<script src="js/odometer.js"></script>
<script src="js/nav-tool.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/color-settings.js"></script>
<script src="js/script.js"></script>
@yield('styles')
</body>
</html>