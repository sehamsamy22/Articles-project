@extends('layouts.master')

      

@section('content')
	<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			
			   	<li style="background-image: url({{ url('images/img_bg_2.jpg') }});">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner">
				   					
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url({{ url('images/img_bg_3.jpg') }});">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner">
				   				
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url({{ url('images/img_bg_4.jpg') }});">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner">
				   					
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-container">
			<div class="container">
				<div class="row">
					<div class="content">
				    @foreach ($articles as $article)
						<article class="blog-entry">
							<div class="blog-wrap">
								<span class="category text-center">
								<strong>Tag:</strong>
					 @foreach($article->tags as $tag)

					<label class="label label-info">{{ $tag->name }}</label>

			      	@endforeach
							</span>
								<h2 class="text-center"><a href="blog.html">{{ $article->title }}</a></h2>
							
				
					@foreach($images as $image)
								<div class="blog-image">
									<div class="owl-carousel owl-carousel2 blog-item">
									
											<div class="item">
											<a href="#" class="blog image-popup-link" style="background-image: url(
				'/images/{{ $image }}' 							);">
											</a>
										</div>
									</div>
									@endforeach
									<ul class="share">
										<li class="text-vertical"><i class="icon-share3"></i></li>
										<li><a href="#"><i class="icon-facebook"></i></a></li>
										<li><a href="#"><i class="icon-twitter"></i></a></li>
										<li><a href="#"><i class="icon-googleplus"></i></a></li>
									</ul>
								</div>
								<span class="category text-center"><a href="/blog"><i class="icon-calendar3"></i> {{ 
									date('M j,Y ',strtotime($article->created_at)) }}</a> | <a href="/blog" class="posted-by"><i class="icon-user2"></i> by Stephy</a> | <a href="/blog"><i class="icon-bubble3"></i> 5 Comments</a></span>
							</div>
							<div class="desc">
								<p class="first-letra">{{ strip_tags($article->body) }}</p>
								
								
							</div>
							<p class="text-center"><a href="/blog" class="btn btn-primary btn-custom">Continue Reading</a></p>
						</article>
						@endforeach
						{{--  <article class="blog-entry">
							<div class="blog-wrap">
								<span class="category text-center"><a href="blog.html">Fashion</a> | <a href="blog.html">Lifestyle</a></span>
								<h2 class="text-center"><a href="blog.html">Popular Lifestyle with Fashion &amp; Modeling</a></h2>
								<div class="blog-image">
									<a href="blog.html" class="blog-img text-center" style="background-image: url(images/blog-2.jpg);"><span><i class="icon-link"></i></span></a>
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
								<p class="first-letra">On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
							</div>
							<p class="text-center"><a href="blog.html" class="btn btn-primary btn-custom">Continue Reading</a></p>
						</article>
						<article class="blog-entry">
							<div class="blog-wrap">
								<span class="category text-center"><a href="blog.html">Model</a> | <a href="blog.html">Fashion</a></span>
								<h2 class="text-center"><a href="blog.html">Fashion &amp; Modeling</a></h2>
								<div class="blog-image">
									<a href="blog.html" class="blog-img text-center" style="background-image: url(images/blog-3.jpg);"><span><i class="icon-link"></i></span></a>
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
								<p class="first-letra">But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their. Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
							</div>
							<p class="text-center"><a href="blog.html" class="btn btn-primary btn-custom">Continue Reading</a></p>
						</article>
						  --}}
						<div class="row">
							<div class="col-md-12 text-center">
								 <ul class="pagination">
							<li>
								{!! $articles->links() !!}
							</li>	
								</ul>

							</div>
						</div>
					</div>

					<aside class="sidebar">


						<div class="side">
							<div class="form-group">
								<input type="text" class="form-control" id="search" placeholder="Enter any key to search...">
								<button type="submit" class="btn btn-primary"><i class="icon-search3"></i></button>
							</div>
						</div>
							<div class="side-wrap">
							<h2 class="sidebar-heading">Tags</h2>
								 @foreach($tags as $tag)
							<p class="tags">

								<span><a href="/index/{{  $tag->name }}"><i class="icon-tag"></i> {{ $tag->name }}</a></span>
								
							</p>
									@endforeach
						</div>
				


						<div class="side-wrap">
							<h2 class="sidebar-heading">About Me</h2>
							<div class="author-img" style="background-image: url({{ url('images/author.jpg') }});"></div>
							<p>Hi! My Name is <strong>Steph</strong> Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
							<p>
								<ul class="colorlib-social-icons">
									<li><a href="#"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-facebook"></i></a></li>
									<li><a href="#"><i class="icon-linkedin"></i></a></li>
									<li><a href="#"><i class="icon-dribbble"></i></a></li>
								</ul>
							</p>
						</div>
						<div class="side-wrap">
							<h2 class="sidebar-heading">Recent Post</h2>
							<div class="f-entry">
								<a href="#" class="featured-img" style="background-image: url(images/blog-1.jpg);"></a>
								<div class="desc">
									<span><i class="icon-calendar3"></i> January 21, 2018</span>
									<h3><a href="#">The Most Popular Leg Workout for Women</a></h3>
								</div>
							</div>
							<div class="f-entry">
								<a href="#" class="featured-img" style="background-image: url(images/blog-2.jpg);"></a>
								<div class="desc">
									<span><i class="icon-calendar3"></i> January 21, 2018</span>
									<h3><a href="#">The Most Popular Leg Workout for Women</a></h3>
								</div>
							</div>
							<div class="f-entry">
								<a href="#" class="featured-img" style="background-image: url(images/blog-3.jpg);"></a>
								<div class="desc">
									<span><i class="icon-calendar3"></i> January 21, 2018</span>
									<h3><a href="#">The Most Popular Leg Workout for Women</a></h3>
								</div>
							</div>
							<div class="f-entry">
								<a href="#" class="featured-img" style="background-image: url({{ url('images/blog-4.jpg') }});"></a>
								<div class="desc">
									<span><i class="icon-calendar3"></i> January 21, 2018</span>
									<h3><a href="#">The Most Popular Leg Workout for Women</a></h3>
								</div>
							</div>
						</div>
						<div class="side-wrap">
							<h2 class="sidebar-heading">Categories</h2>
							<ul class="category">
								<li><a href="#"><i class="icon-check"></i> Blog</a></li>
								<li><a href="#"><i class="icon-check"></i> Lifestyle</a></li>
								<li><a href="#"><i class="icon-check"></i> Travel</a></li>
								<li><a href="#"><i class="icon-check"></i> Fashion</a></li>
							</ul>
						</div>
						<div class="side-wrap">
							<h2 class="sidebar-heading">Video Post</h2>
							<div class="video colorlib-video" style="background-image: url({{ url('	images/blog-1.jpg') }}
							);">
								<a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-play"></i></a>
								<div class="overlay"></div>
							</div>
						</div>
					
					
						<div class="side-wrap">
							<h2 class="sidebar-heading">Gallery</h2>
							<a href="images/gallery-1.jpg" class="gallery image-popup-link text-center" style="background-image: url({{ url('images/gallery-1.jpg') }});">
								<span><i class="icon-search3"></i></span>
							</a>
							<a href="images/gallery-2.jpg" class="gallery image-popup-link text-center" style="background-image: url({{ url('images/gallery-2.jpg') }});">
								<span><i class="icon-search3"></i></span>
							</a>
							<a href="images/gallery-3.jpg" class="gallery image-popup-link text-center" style="background-image: url({{ url('images/gallery-3.jpg') }});">
								<span><i class="icon-search3"></i></span>
							</a>
							<a href="images/gallery-4.jpg" class="gallery image-popup-link text-center" style="background-image: url({{ url('images/gallery-3.jpg') }});">
								<span><i class="icon-search3"></i></span>
							</a>
							<a href="images/gallery-5.jpg" class="gallery image-popup-link text-center" style="background-image:  url({{ url('images/gallery-5.jpg') }});;">
								<span><i class="icon-search3"></i></span>
							</a>
							<a href="images/gallery-6.jpg" class="gallery image-popup-link text-center" style="background-image: url({{ url('images/gallery-6.jpg') }});">
								<span><i class="icon-search3"></i></span>
							</a>
							<a href="images/gallery-7.jpg" class="gallery image-popup-link text-center" style="background-image: url({{ url('images/gallery-7.jpg') }});">
								<span><i class="icon-search3"></i></span>
							</a>
							<a href="images/gallery-8.jpg" class="gallery image-popup-link text-center" style="background-image:  url({{ url('images/gallery-8.jpg') }});">
								<span><i class="icon-search3"></i></span>
							</a>
						</div>
						<div class="side-wrap">
							<h2 class="sidebar-heading">Blockquote</h2>
							<blockquote>
								" Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.
							</blockquote>
						</div>
						<div class="side-wrap">
							<h2 class="sidebar-heading">Paragraph</h2>
							<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around</p>
						</div>
						<div class="side">
							<h2 class="sidebar-heading">Subscribe to our newsletter</h2>
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<input type="text" class="form-control form-email text-center" id="email" placeholder="Enter your email">
										<button type="submit" class="btn btn-primary btn-subscribe">Subscribe</button>
									</div>
								</div>
								<p>
									<ul class="colorlib-social-icons text-center">
										<li><a href="#"><i class="icon-twitter"></i></a></li>
										<li><a href="#"><i class="icon-facebook"></i></a></li>
										<li><a href="#"><i class="icon-linkedin"></i></a></li>
										<li><a href="#"><i class="icon-dribbble"></i></a></li>
									</ul>
								</p>
							</div>
						</div>
					</aside>
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
					<a href="#" class="instagram text-center" style="background-image: url({{ url('images/gallery-1.jpg') }});">
					</a>
					<a href="#" class="instagram text-center" style="background-image:  url({{ url('images/gallery-2.jpg') }});">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url({{ url('images/gallery-3.jpg') }});">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url({{ url('images/gallery-4.jpg') }});">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url({{ url('images/gallery-5.jpg') }});;">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url({{ url('images/gallery-6.jpg') }});;">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url({{ url('images/gallery-7.jpg') }});;">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url({{ url('images/gallery-8.jpg') }});">
					</a>
				</div>
			</div>
		</div>
	 @endsection