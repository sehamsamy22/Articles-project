@extends('layouts.master')

      

@section('content')
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Get in Touch</h2>
				   					<h1>Contact Us</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h2>Contact Information</h2>
						<div class="row contact-info-wrap">
							<div class="col-md-3">
								<p><span><i class="icon-location-2"></i></span> 198 West 21th Street, <br> Suite 721 New York NY 10016</p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-phone3"></i></span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-globe"></i></span> <a href="#">yourwebsite.com</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h2>Get In Touch</h2>
						<form action="#">
							<div class="row form-group">
								<div class="col-md-6">
									<label for="fname">First Name</label>
									<input type="text" id="fname" class="form-control" placeholder="Your firstname">
								</div>
								<div class="col-md-6">
									<label for="lname">Last Name</label>
									<input type="text" id="lname" class="form-control" placeholder="Your lastname">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="email">Email</label>
									<input type="text" id="email" class="form-control" placeholder="Your email address">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="subject">Subject</label>
									<input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Message</label>
									<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" value="Send Message" class="btn btn-primary">
							</div>

						</form>		
					</div>
				</div>
			</div>
		</div>
		<div id="map" class="colorlib-map"></div>
		<div id="colorlib-subscribe">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 colorlib-heading animate-box">
						<h2>Sign up for a Newsletter</h2>
						<div class="row">
							<div class="col-md-7">
								<p>Enter your email address to get the latest news, events and special offers delivered right to your inbox.</p>
							</div>
							<div class="col-md-5">
								<form class="form-inline qbstp-header-subscribe">
									<div class="row">
										<div class="col-md-12 col-md-offset-0">
											<div class="form-group">
												<input type="text" class="form-control" id="email" placeholder="Enter your email">
												<button type="submit" class="btn btn-primary">Subscribe</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endsection