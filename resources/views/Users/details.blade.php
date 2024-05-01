@extends('users.layouts.main')
@section('content')	
	<!-- Page Title -->
    <section class="page-title" style="background-image:url(images/background/3.jpg)">
        <div class="auto-container">
			<h1>Service Detail</h1>
			<ul class="bread-crumb clearfix">
				<li><a href="index.html">Home</a></li>
				<li>Service Detail</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
	
	<!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
				
				<!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
					<div class="service-detail">
						<div class="inner-box">
							<div class="image">
								<img src="images/resource/project-1.jpg" alt="" />
							</div>
							<div class="lower-content">
								<h3>Cyber Security</h3>
								<p>Mauris ultricies orci in sodales molestie. Nullam et vehicula lacus, euismod gravida tortor. Morbi ipsum lectus, viverra id vulputate eget, molestie non nunc. Donec mollis accumsan risus, at vestibulum tortor commodo at. Cras vulputate nisi in consectetur sollicitudin. Vestibulum ut vestibulum justo. Fusce fringilla ullamcorper elit, a bibendum orci blandit non. Integer porta, nunc ut ornare auctor, mauris nulla blandit ipsum, a facilisis tortor nisi eget ex. Integer luctus sollicitudin justo et finibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla in ligula vitae turpis suscipit tristique id ut turpis. Aenean mollis purus in arcu tempor, nec suscipit nulla sodales.</p>
								<p>Proin finibus imperdiet nulla, quis euismod nunc gravida eget. Vestibulum iaculis nibh facilisis felis iaculis vestibulum. Curabitur purus nulla, bibendum vitae varius pulvinar, molestie in massa. Quisque ut venenatis nunc, vitae rutrum libero. Duis eget consectetur urna. Ut ut aliquet magna. Nullam augue nulla, fermentum vel elit eu, posuere vehicula tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam eget nisl non elit tempor dignissim nec non sapien.</p>
								<h6>Our Success JOURNEY We can Provide.</h6>
								<p>Phasellus dignissim arcu sit amet augue mattis, eget rutrum ex finibus. Morbi blandit luctus nisi, id ornare sem blandit sed. In sed luctus dolor. Integer vitae pretium nunc. Aliquam rutrum lectus vel est pulvinar in scelerisque purus.</p>
								<div class="row clearfix">
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="image-two">
											<img src="images/resource/project-2.jpg" alt="" />
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12">
										<h6>It consultancy and It services to Join Work Our company?</h6>
										<p>Nulla facilisi. Nullam congue, tortor id finibus pose, risus magna convallis massa, sit amet gravida est tellus vitae dui. Proin hendrerit.</p>
										<ul class="service-detail_list">
											<li>One-time security check fee: $99.95</li>
											<li>Elite membership fee: $999.95 per month</li>
											<li>Coast to domestic flights: from $3,799.95</li>
										</ul>
									</div>
								</div>
								<div class="more-posts">
									<div class="d-flex justify-content-between align-items-center flex-wrap">
										<a href="#" class="prev-post">
											<span class="icon fa-solid fa-arrow-left fa-fw"></span>
											Prev  Services
											<strong>Child Emergency</strong>
										</a>
										<a href="#" class="next-post">
											<span class="icon fa-solid fa-arrow-right fa-fw"></span>
											Next  Portfolio
											<strong>Surgery Center</strong>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Sidebar Side -->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar">

						<!-- Search -->
                        <div class="sidebar-widget search-box">
							<div class="widget-content">
								<div class="sidebar-title">
									<h6>Search Here</h6>
								</div>
								<form method="post" action="contact.html">
									<div class="form-group">
										<input type="search" name="search-field" value="" placeholder="Enter Your Keyword..." required>
										<button type="submit"><span class="icon fa fa-search"></span></button>
									</div>
								</form>
							</div>
						</div>

						<!-- Category List -->
                        <div class="sidebar-widget category-list">
							<div class="widget-content">
								<div class="sidebar-title">
									<h6>Services List</h6>
								</div>
								<ul>
									<li><a href="#">UX strategy</a></li>
									<li><a href="#">Information architecture</a></li>
									<li><a href="#">Prototyping</a></li>
									<li><a href="#">Wireframing</a></li>
									<li><a href="#">UI Design</a></li>
									<li><a href="#">Figma Design</a></li>
								</ul>
							</div>
						</div>

						<!-- Social Widget -->
                        <div class="sidebar-widget social-widget">
							<div class="widget-content">
								<div class="sidebar-title">
									<h6>Social Icon</h6>
								</div>
								<!-- Social Box -->
								<ul class="social-box">
									<li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
									<li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
									<li><a href="https://www.behance.com/" class="fa fa-behance"></a></li>
									<li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
									<li><a href="https://www.youtube.com/" class="fa fa-youtube"></a></li>
								</ul>
							</div>
						</div>

						<!-- Social Widget -->
                        <div class="sidebar-widget brochure-widget">
							<div class="widget-content">
								<div class="sidebar-title">
									<h6>Brochure</h6>
								</div>
								<ul class="brochure-list">
									<li><a href="#"><span class="icon fa-solid fa-file fa-fw"></span>Brochure.doc <i>80kb</i></a></li>
									<li><a href="#"><span class="icon fa-solid fa-file-pdf fa-fw"></span>Brochure.pdf <i>80kb</i></a></li>
								</ul>
							</div>
						</div>

					</aside>
				</div>

			</div>
		</div>
	</div>

	<!-- CTA One -->
	<section class="cta-one style-two">
		<div class="auto-container">
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<!-- CTA Logo -->
				<div class="cta-logo">
					<img src="images/logo-3.svg" alt="" />
				</div>
				<!-- Info Text -->
				<div class="cta-one_text">
					1247/Plot No. 39, 15th Phase, New York State <br> United States.
				</div>
			</div>
		</div>
	</section>
	<!-- End CTA One -->
@endsection