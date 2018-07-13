@extends('layouts.master')

      

@section('content')
		<aside id="colorlib-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12 breadcrumbs text-center">
						<h2>Blog Single Post</h2>
					</div>
				</div>
			</div>
		</aside>

		<div id="colorlib-container">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<article class="blog-entry">
							<div class="blog-wrap">
								<span class="category text-center"><a href="blog.html">Health</a> | <a href="blog.html">Workout</a></span>
								<h2 class="text-center"><a href="blog.html">The Most Popular Leg Workout for Women</a></h2>
								<div class="blog-image">
									<div class="owl-carousel owl-carousel2 blog-item">
										<div class="item">
											<a href="#" class="blog image-popup-link" style="background-image: url(images/blog-1.jpg);">
											</a>
										</div>
										<div class="item">
											<a href="#" class="blog image-popup-link" style="background-image: url(images/blog-2.jpg);">
											</a>
										</div>
									</div>
									<ul class="share">
										<li class="text-vertical"><i class="icon-share3"></i></li>
										<li><a href="#"><i class="icon-facebook"></i></a></li>
										<li><a href="#"><i class="icon-twitter"></i></a></li>
										<li><a href="#"><i class="icon-googleplus"></i></a></li>
									</ul>
								</div>
								<span class="category text-center"><a href="blog.html"><i class="icon-calendar3"></i> January 21, 2017</a> | <a href="blog.html" class="posted-by"><i class="icon-user2"></i> by Stephy</a> | <a href="blog.html"><i class="icon-bubble3"></i> 5 Comments</a></span>
							</div>
							<div class="desc">
								<p class="first-letra">Far far away, <strong><a href="#">behind the word mountains</a></strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
								<blockquote>
									A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
								</blockquote>
								<p><strong>1. When she reached</strong> the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
								<ul>
									<li>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove</li>
									<li>It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</li>
								</ul>
								<ol>
									<li>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove</li>
									<li>It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</li>
								</ol>
								<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies. Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
							</div>
						</article>
						<div class="comment-box">
							<h2 class="colorlib-heading-2">3 Comments</h2>
							<div class="comment-post">
								<div class="user" style="background-image: url(images/person1.jpg);"></div>
								<div class="desc">
									<h3>Stephen Brent <span>Commented 5 days ago</span></h3>
									<p>A small river named Duden flows by their place and supplies. Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
								</div>
							</div>
							<div class="comment-post">
								<div class="user" style="background-image: url(images/person2.jpg);"></div>
								<div class="desc">
									<h3>Stephen Brent <span>Commented 5 days ago</span></h3>
									<p>A small river named Duden flows by their place and supplies. Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
								</div>
							</div>
							<div class="comment-post">
								<div class="user" style="background-image: url(images/person3.jpg);"></div>
								<div class="desc">
									<h3>Stephen Brent <span>Commented 5 days ago</span></h3>
									<p>A small river named Duden flows by their place and supplies. Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
								</div>
							</div>
						</div>
						<div class="comment-area">
							<h2 class="colorlib-heading-2">Leave a comment</h2>
							<form action="#">
								<div class="row form-group">
									<div class="col-md-6">
										<!-- <label for="fname">First Name</label> -->
										<input type="text" id="fname" class="form-control" placeholder="Your firstname">
									</div>
									<div class="col-md-6">
										<!-- <label for="lname">Last Name</label> -->
										<input type="text" id="lname" class="form-control" placeholder="Your lastname">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<!-- <label for="email">Email</label> -->
										<input type="text" id="email" class="form-control" placeholder="Your email address">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<!-- <label for="subject">Subject</label> -->
										<input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<!-- <label for="message">Message</label> -->
										<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
									</div>
								</div>
								<div class="form-group">
									<input type="submit" value="Post Comment" class="btn btn-primary">
								</div>

							</form>	
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-instagram">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 colorlib-heading text-center">
					<h2>Instagram</h2>
				</div>
			</div>
			<div class="row">
				<div class="instagram-entry">
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-1.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-2.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-3.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-4.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-5.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-6.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-7.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-8.jpg);">
					</a>
				</div>
			</div>
		</div>
			@endsection