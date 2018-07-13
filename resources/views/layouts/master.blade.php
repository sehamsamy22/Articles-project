<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Article Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	
	<link href="https://fonts.googleapis.com/css?family=Grand+Hotel" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,200,300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" />

	<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>


	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ url('css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ url('css/icomoon.css') }}">
	
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ url('css/flexslider.css') }}">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ url('css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ url('css/owl.theme.default.min.css') }}">
	
	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{ url('fonts/flaticon/font/flaticon.css') }}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ url('css/style.css') }}">

	<!-- Modernizr JS -->
	<script src="{{ url('js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="{{ url('js/respond.min.js') }}"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.html">Article.</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="/index">Home</a></li>
								<li class="has-dropdown">
									<a href="/blog">Blog</a>
									<ul class="dropdown">
										<li><a href="#">Commercial</a></li>
										<li><a href="#">Apartment</a></li>
										</ul>
								@if(Auth::check())
								@if(Auth::user()->hasRole('admin'))
									<li><a href="/users">Admin</a></li>
								@endif
								@endif
								<li><a href="/about">About Me</a></li>
			  @if (Route::has('login'))
			
               @auth
             
              <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                    @else
            <li> <a href="{{ route('login') }}">Login</a>  </li>  
            <li><a href="{{ route('register') }}">Register</a> </li>  
               @endauth 
			  
            @endif
								
							
								
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
	
         <main class="py-4">
            @yield('content')
        </main>
        	<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-4">
						<h2>Navigational</h2>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="/index"><i class="icon-check"></i> Home</a></li>
								<li><a href="/about"><i class="icon-check"></i> About Me</a></li>
								<li><a href="/blog"><i class="icon-check"></i> Blog</a></li>
								<li><a href="/travels"><i class="icon-check"></i> Travel</a></li>
								<li><a href="/lifestyle"><i class="icon-check"></i> Lifestyle</a></li>
								
							</ul>
						</p>
					</div>
					<div class="col-md-4">
						<h2>Recent Post</h2>
						<ul class="colorlib-footer-links">
							<li>
								<span>22 Jan, 2017</span>
								<a href="#">The Most Popular Leg Workout for Women</a>
							</li>
							<li>
								<span>20 Jan, 2017</span>
								<a href="#">Popular Lifestyle with Fashion &amp; Modeling</a>
							</li>
							<li>
								<span>21 Jan, 2017</span>
								<a href="#">Video Post Travel with my Friends</a>
							</li>
							<li>
								<span>20 Jan, 2017</span>
								<a href="#">Popular Lifestyle with Fashion &amp; Modeling</a>
							</li>
						</ul>
					</div>
					<div class="col-md-4 col-md-push-1">
						<h2>Tags</h2>
						<p class="tags">
							<span><a href="#"><i class="icon-tag"></i> Modeling</a></span>
							<span><a href="#"><i class="icon-tag"></i> Fashion</a></span>
							<span><a href="#"><i class="icon-tag"></i> Life</a></span>
							<span><a href="#"><i class="icon-tag"></i> Blog</a></span>
							<span><a href="#"><i class="icon-tag"></i> Workout</a></span>
							<span><a href="#"><i class="icon-tag"></i> Vacation</a></span>
							<span><a href="#"><i class="icon-tag"></i> Travel</a></span>
							<span><a href="#"><i class="icon-tag"></i> Exercise</a></span>
							<span><a href="#"><i class="icon-tag"></i> Health</a></span>
							<span><a href="#"><i class="icon-tag"></i> News</a></span>
							<span><a href="#"><i class="icon-tag"></i> Model</a></span>
							<span><a href="#"><i class="icon-tag"></i> Women</a></span>
							<span><a href="#"><i class="icon-tag"></i> Animals</a></span>
							<span><a href="#"><i class="icon-tag"></i> Nature</a></span>
							<span><a href="#"><i class="icon-tag"></i> Art</a></span>
							<span><a href="#"><i class="icon-tag"></i> Sea</a></span>
							<span><a href="#"><i class="icon-tag"></i> Ocean</a></span>
							<span><a href="#"><i class="icon-tag"></i> Office</a></span>
							<span><a href="#"><i class="icon-tag"></i> Home</a></span>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
     					<small class="block">Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved. This template is made with <i class="icon-heart3" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></small>
    					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{ url('js/jquery.min.js') }}
	"></script>
	<!-- jQuery Easing -->
	<script src="{{ url('js/jquery.easing.1.3.js') }}
	"></script>
	<!-- Bootstrap -->
	<script src="{{ url('js/bootstrap.min.js') }}
	"></script>
	<!-- Waypoints -->
	<script src="{{ url('js/jquery.waypoints.min.js') }}
	"></script>
	<!-- Flexslider -->
	<script src="{{ url('js/jquery.flexslider-min.js') }}
	"></script>
	<!-- Owl carousel -->
	<script src="{{ url('js/owl.carousel.min.js') }}
	"></script>
	<!-- Magnific Popup -->
	<script src="{{ url('js/jquery.magnific-popup.min.js') }}
	"></script>
	<script src="{{ url('js/magnific-popup-options.js') }}
	"></script>
	<!-- Main -->
	<script src="{{ url('js/main.js') }}
	"></script>

	</body>
</html>

