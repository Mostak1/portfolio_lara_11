@extends('users.layouts.main')
@section('content')
	<!-- Page Title -->
    <section class="page-title" style="background-image:url(images/background/3.jpg)">
        <div class="auto-container">
			<h1>Contact Us</h1>
			<ul class="bread-crumb clearfix">
				<li><a href="index.html">Home</a></li>
				<li>Contact Us</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
	
	<!-- Contact Info One -->
	<section class="contact-info_one">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Content Column -->
				<div class="contact-info-column col-lg-4 col-md-6 col-sm-12">
					<div class="info-inner">
						<span class="icon flaticon-telephone"></span>
						<a class="phone" href="tel:+55-9900-666-22">+55 (9900) 666 22</a>
						<div class="text">Contact Phone</div>
					</div>
				</div>

				<!-- Content Column -->
				<div class="contact-info-column col-lg-4 col-md-6 col-sm-12">
					<div class="info-inner">
						<span class="icon flaticon-email"></span>
						<a class="email" href="mailto:info.mirpur@gmail.com">info.mirpur@gmail.com</a>
						<div class="text">Contact Email</div>
					</div>
				</div>

				<!-- Content Column -->
				<div class="contact-info-column col-lg-4 col-md-6 col-sm-12">
					<div class="info-inner">
						<span class="icon flaticon-map"></span>
						<a class="location" href="#">14/4, Bonosri, USA.</a>
						<div class="text">Contact Location</div>
					</div>
				</div>

			</div>

			<div class="comment-form-outer">
				<div class="title-box text-center">
					<h3>Post Comments</h3>
					<div class="text">Nunc velit metus, volutpat elementum euismod eget, cursus nec nunc.</div>
				</div>
				<!-- Contact Form -->
				<div class="contact-form">
					<form method="post" action="sendemail.php" id="contact-form">
						<div class="row clearfix">
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<label>Your Name</label>
								<input type="text" name="username" placeholder="Write your name" required="">
							</div>
							
							<div class="col-lg-6 col-md-12 col-sm-12 form-group">
								<label>Phone Number</label>
								<input type="text" name="phone" placeholder="+66 555 666 888 22" required="">
							</div>

							<div class="col-lg-12 col-md-12 col-sm-12 form-group">
								<textarea class="" name="message" placeholder="Write Your Message"></textarea>
								<div class="comment-text">* Call us 24/7 at 869-5414-5 or fill out the form below to receive a free and <br> confidential initial consultation.</div>
							</div>
							
							<div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
								<!-- Button Box -->
								<div class="button-box">
									<button class="btn-style-one theme-btn">
										<span class="btn-wrap">
											<span class="text-one">Post Comments <i class="fa-solid fa-arrow-right fa-fw"></i></span>
											<span class="text-two">Post Comments <i class="fa-solid fa-arrow-right fa-fw"></i></span>
										</span>
									</button>
								</div>
							</div>
							
						</div>
					</form>
				</div>
				<!-- End Contact Form -->
			</div>

		</div>
	</section>
	<!-- End Faq One -->

	<!-- Map One -->
	<section class="map-one">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s" allowfullscreen=""></iframe>
	</section>
	<!-- End Map One -->

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