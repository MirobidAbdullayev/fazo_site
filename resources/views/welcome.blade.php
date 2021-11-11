<!DOCTYPE html>
<html lang="en">
	<!-- HEAD -->
	<head>
		<!-- TITLE -->
		<title>FazoSite</title>
		<meta charset="utf-8">
		<meta name="keywords" content="You, can, add, all, the, necessary, keywords, related, to, your, website, here">
		<meta name="description" content="You can write about your website description here">
		<meta name="author" content="hpthemes23">
		<meta name="viewport" content="width=content-width, initial-scale=1">
		<!-- CSS -->
		<!-- FAVICON -->
		<link href="{{asset('website/images/favicon.ico')}}" rel="icon">
		<!-- GOOGLE FONT CSS -->
		<link href="{{asset('https://fonts.googleapis.com/css?family=Black+Han+Sans&display=swap')}}" rel="stylesheet">
		<link href="{{asset('https://fonts.googleapis.com/css?family=Varela+Round&display=swap')}}" rel="stylesheet">
		<!-- FONT AWESOME CSS -->
		<link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css')}}" rel="stylesheet">
		<!-- BOOTSTRAP CSS -->
		<link href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}" rel="stylesheet">
		<!-- OWL CAROUSEL CSS -->
		<link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css')}}" rel="stylesheet">
		<!-- ANIMATE CSS --> 
		<link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css')}}" rel="stylesheet">
		<!-- MAIN STYLESHEET CSS -->
		<link href="{{asset('website/css/main_style.css')}}" rel="stylesheet">
		<!-- END OF CSS -->
	</head>
	<!-- END OF HEAD -->
	<body id="fabtheme-body">
		<!-- NAVIGATION BAR -->
		<nav id="fabtheme-navbar" class="navbar navbar-expand-lg navbar-expand-xl navbar-dark fixed-top">
			<a class="navbar-brand">
				<!-- WEBSITE LOGO -->
				FAZO
			</a>
			<div class="collapse navbar-collapse" id="expands">
				<ul class="navbar-nav text-center ml-auto">
					<li class="nav-item">
						<a class="nav-link fabtheme-nav-link" href="#home">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link fabtheme-nav-link" href="#about">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link fabtheme-nav-link" href="#services">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link fabtheme-nav-link" href="#team">Team</a>
					</li>
					<li class="nav-item">
						<a class="nav-link fabtheme-nav-link" href="#blog">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link fabtheme-nav-link" href="#contact">Contact</a>
					</li>
				</ul>
			</div>
		</nav>
		<!-- END OF NAVIGATION BAR -->
		<!-- HEADER -->
		@foreach ($carausels as $carausel)
		<header id="home" class="fabtheme-parallax-1 img-fluid fabtheme-thetop">
			<div class="container-fluid h-100">
				<div class="row h-100 align-items-center justify-content-start">
					<div class="col-11 col-sm-11 col-md-10 col-lg-10 col-xl-9 pl-0">
						<div class="p-3 p-sm-4 p-md-4 p-lg-5 p-xl-5 text-left wow fadeInLeft fabtheme-headings" data-wow-duration="3s">
							<h2>{{$carausel->title}}</h2>
							<p class="pt-2 mb-0">{{$carausel->description}}</p>
						</div>
					</div>
				</div>
			</div>
		</header>
		@endforeach
		<!-- END OF HEADER -->
		<!-- ABOUT -->
		<section id="about" class="fabtheme-link-show">
			<div class="container-fluid h-100">
				<div class="row h-100 align-items-center mt-5 justify-content-end">
					<div class="col-11 col-sm-11 col-md-10 col-lg-10 col-xl-9 pr-0">
						<div class="p-3 p-sm-4 p-md-4 p-lg-5 p-xl-5 text-right wow fadeInRight fabtheme-about" data-wow-duration="3s">
							<h2>ABOUT</h2>
							<p class="py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							<a href="javascript:void(0);" class="btn fabtheme-button">Know More</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END OF ABOUT -->
		<!-- SERVICES -->
		<section id="services" class="fabtheme-link-show">
			<div class="container-fluid h-100">
				<div class="row h-100 align-items-center mt-5 justify-content-start">
					<div class="col-11 col-sm-11 col-md-10 col-lg-10 col-xl-9 pl-0">
						<div class="p-3 p-sm-4 p-md-4 p-lg-5 p-xl-5 text-left wow fadeInLeft fabtheme-services-1" data-wow-duration="3s">
							<h2>SERVICES</h2>
							<p class="card-text py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>
							<div class="card-columns fabtheme-card-columns">
								<div class="card fabtheme-services-2">
									<div class="card-body">
										<i class="fas fa-thumbs-up fa-2x"></i>
										<h4 class="card-title py-3">Best Seller</h4>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div>
								<div class="card fabtheme-services-2">
									<div class="card-body">
										<i class="far fa-star fa-2x"></i>
										<h4 class="card-title py-3">Cool Rating</h4>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div>
								<div class="card fabtheme-services-2">
									<div class="card-body">
										<i class="fas fa-users fa-2x"></i>
										<h4 class="card-title py-3">Best Team</h4>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END OF SERVICES -->
		<!-- COUNT -->
		<section id="count" class="fabtheme-parallax-2 img-fluid">
			<div class="container-fluid h-100">
				<div class="row h-100 align-items-center mt-5 justify-content-end">
					<div class="col-11 col-sm-11 col-md-10 col-lg-10 col-xl-9 pr-0">
						<div class="p-3 p-sm-4 p-md-4 p-lg-5 p-xl-5 text-right wow fadeInRight fabtheme-count" data-wow-duration="3s">
							<div class="row">
								<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
									<h2 class="fabtheme-counter-up">300</h2>
									<p class="mb-0">Likes</p>
								</div>
								<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
									<h2 class="fabtheme-counter-up">500</h2>
									<p class="mb-0">Happy Clients</p>
								</div>
								<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
									<h2 class="fabtheme-counter-up">600</h2>
									<p class="mb-0">Projects Completed</p>
								</div>
								<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
									<h2 class="fabtheme-counter-up">100</h2>
									<p class="mb-0">Employees</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END OF COUNT -->
		<!-- TEAM -->
		<section id="team" class="fabtheme-link-show">
			<div class="container-fluid h-100">
				<div class="row h-100 align-items-center mt-5 justify-content-start">
					<div class="col-11 col-sm-11 col-md-10 col-lg-10 col-xl-9 pl-0">
						<div class="p-3 p-sm-4 p-md-4 p-lg-5 p-xl-5 text-left wow fadeInLeft fabtheme-team-1" data-wow-duration="3s">
							<h2>TEAM</h2>
							<p class="card-text py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>
							<div class="fabtheme-owl-2 owl-carousel">
								<div class="card fabtheme-team-2">
									<img class="card-img mx-auto rounded-0" src="https://via.placeholder.com/640x426/.png" alt="member1">
									<div class="card-body p-2 p-sm-3 p-md-3 p-lg-3 p-xl-4">
										<p class="fabtheme-link-1">
											<i class="fas fa-phone-alt"></i>
											(123)456-7890
										</p>
										<p>
											<a href="javascript:void(0);" class="fabtheme-link-1">
												<i class="fas fa-envelope-open"></i>
												example@gmail.com
											</a>
										</p>
										<a href="javascript:void(0);" class="fabtheme-link-1"><i class="fab fa-twitter fa-lg"></i></a>
										<a href="javascript:void(0);" class="fabtheme-link-1"><i class="fab fa-facebook-f fa-lg"></i></a>
										<a href="javascript:void(0);" class="fabtheme-link-1"><i class="fab fa-instagram fa-lg"></i></a>
										<a href="javascript:void(0);" class="fabtheme-link-1"><i class="fab fa-whatsapp fa-lg"></i></a>
										<a href="javascript:void(0);" class="fabtheme-link-1"><i class="fab fa-reddit-alien fa-lg"></i></a>
									</div>
								</div>
								<div class="card fabtheme-team-2">
									<img class="card-img mx-auto rounded-0" src="https://via.placeholder.com/640x426/.png" alt="member2">
									<div class="card-body p-2 p-sm-3 p-md-3 p-lg-3 p-xl-4">
										<p class="fabtheme-link-1">
											<i class="fas fa-phone-alt"></i>
											(123)456-7890
										</p>
										<p>
											<a href="javascript:void(0);" class="fabtheme-link-1">
												<i class="fas fa-envelope-open"></i>
												example@gmail.com
											</a>
										</p>
										<a href="javascript:void(0);" class="fabtheme-link-1"><i class="fab fa-twitter fa-lg"></i></a>
										<a href="javascript:void(0);" class="fabtheme-link-1"><i class="fab fa-facebook-f fa-lg"></i></a>
										<a href="javascript:void(0);" class="fabtheme-link-1"><i class="fab fa-instagram fa-lg"></i></a>
										<a href="javascript:void(0);" class="fabtheme-link-1"><i class="fab fa-whatsapp fa-lg"></i></a>
										<a href="javascript:void(0);" class="fabtheme-link-1"><i class="fab fa-reddit-alien fa-lg"></i></a>
									</div>
								</div>
								<div class="card fabtheme-team-2">
									<img class="card-img mx-auto rounded-0" src="https://via.placeholder.com/640x426/.png" alt="member3">
									<div class="card-body p-2 p-sm-3 p-md-3 p-lg-3 p-xl-4">
										<p class="fabtheme-link-1">
											<i class="fas fa-phone-alt"></i>
											(123)456-7890
										</p>
										<p>
											<a href="javascript:void(0);" class="fabtheme-link-1">
												<i class="fas fa-envelope-open"></i>
												example@gmail.com
											</a>
										</p>
										<a href="javascript:void(0);" class="fabtheme-link-1"><i class="fab fa-twitter fa-lg"></i></a>
										<a href="javascript:void(0);" class="fabtheme-link-1"><i class="fab fa-facebook-f fa-lg"></i></a>
										<a href="javascript:void(0);" class="fabtheme-link-1"><i class="fab fa-instagram fa-lg"></i></a>
										<a href="javascript:void(0);" class="fabtheme-link-1"><i class="fab fa-whatsapp fa-lg"></i></a>
										<a href="javascript:void(0);" class="fabtheme-link-1"><i class="fab fa-reddit-alien fa-lg"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END OF TEAM -->
		<!-- BLOG -->
		<section id="blog" class="fabtheme-link-show">
			<div class="container-fluid h-100">
				<div class="row h-100 align-items-center mt-5 justify-content-end">
					<div class="col-11 col-sm-11 col-md-10 col-lg-10 col-xl-9 pr-0">
						<div class="p-3 p-sm-4 p-md-4 p-lg-5 p-xl-5 text-right wow fadeInRight fabtheme-blog-1" data-wow-duration="3s">
							<h2>Latest News</h2>
							<p class="py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>
							<div class="fabtheme-owl-1 owl-carousel d-flex">
								<div class="card fabtheme-blog-2">
									<a href="javascript:void(0);">
										<img src="https://via.placeholder.com/1920x1280/.png" class="card-img mx-auto rounded-0" alt="blog1">
									</a>
									<div class="card-body pt-5 pr-0">
										<h4 class="card-title font-weight-bold">Lorem ipsum</h4>
										<p class="card-text pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat.</p>
										<a href="javascript:void(0);" class="btn fabtheme-button">Read More</a>
									</div>
								</div>
								<div class="card fabtheme-blog-2">
									<a href="javascript:void(0);">
										<img src="https://via.placeholder.com/1920x1280/.png" class="card-img mx-auto rounded-0" alt="blog2">
									</a>
									<div class="card-body pt-5 pr-0">
										<h4 class="card-title font-weight-bold">Lorem ipsum</h4>
										<p class="card-text pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat.</p>
										<a href="javascript:void(0);" class="btn fabtheme-button">Read More</a>
									</div>
								</div>
								<div class="card fabtheme-blog-2">
									<a href="javascript:void(0);">
										<img src="https://via.placeholder.com/1920x1280/.png" class="card-img mx-auto rounded-0" alt="blog3">
									</a>
									<div class="card-body pt-5 pr-0">
										<h4 class="card-title font-weight-bold">Lorem ipsum</h4>
										<p class="card-text pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat.</p>
										<a href="javascript:void(0);" class="btn fabtheme-button">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END OF BLOG -->
		<!-- VIDEO -->
		<section id="video">
			<div class="container-fluid h-100">
				<div class="row h-100 align-items-center mt-5">
					<div class="col-12">
						<div class="text-center wow fadeIn fabtheme-video" data-wow-duration="3s">
							<div class="embed-responsive embed-responsive-16by9">
								<video class="embed-responsive-item" controls autoplay loop muted>
									<source src="https://temp.media/video/?height=400&width=500&length=5" type="video/mp4">
										<h6>video</h6>
								</video>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END OF VIDEO -->
		<!-- CONTACT -->
		<section id="contact" class="fabtheme-link-show">
			<div class="container-fluid h-100">
				<div class="row h-100 align-items-center mt-5 justify-content-end">
					<div class="col-11 col-sm-11 col-md-10 col-lg-10 col-xl-9 pr-0">
						<div class="p-3 p-sm-4 p-md-4 p-lg-5 p-xl-5 text-right wow fadeInRight fabtheme-contact" data-wow-duration="3s">
							<h2>Contact</h2>
							<p class="py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>
							<form id="form" class="contact-form" method="post" action="{{route('store')}}">
								@csrf
								<div class="row pt-2">
									<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
										<a href="javascript:void(0);" class="fabtheme-link-2">
											<i class="fas fa-envelope-open"></i>
											<p>example@gmail.com</p>
										</a>
										<i class="fas fa-phone-alt"></i>
										<p>(123)456-7890 </p>
										<i class="fas fa-map-marker"></i>
										<p>Building Number, Street Name, Neighborhood, City, Postal Code or Zip Code, Additional Number</p>
										<i class="fas fa-clock"></i>
										<p>Monday-Friday: 9:00 AM to 5:00 PM, Saturday and Sunday: Holidays</p>
										<div class="col-12 py-2 pr-0">
											<a href="javascript:void(0);" class="fabtheme-link-2"><i class="fab fa-instagram fa-lg mr-2"></i></a>
											<a href="javascript:void(0);" class="fabtheme-link-2"><i class="fab fa-facebook-f fa-lg mr-2"></i></a>
											<a href="javascript:void(0);" class="fabtheme-link-2"><i class="fab fa-twitter fa-lg mr-2"></i></a>
											<a href="javascript:void(0);" class="fabtheme-link-2"><i class="fab fa-whatsapp fa-lg mr-2"></i></a>
											<a href="javascript:void(0);" class="fabtheme-link-2"><i class="fab fa-reddit-alien fa-lg"></i></a>
										</div>
									</div>
									<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
										<div class="form-group fabtheme-field">
											<label for="form_name">Firstname *</label>
											<input id="form_name" type="text" name="firstname" class="form-control" placeholder="Firstname" required="required">
										</div>
										<div class="form-group fabtheme-field">
											<label for="form_lastname">Lastname *</label>
											<input id="form_lastname" type="text" name="lastname" class="form-control" placeholder="Lastname" required="required">
										</div>
										<div class="form-group fabtheme-field">
											<label for="form_email">Email *</label>
											<input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required="required">
										</div>
										<div class="form-group fabtheme-field">
											<label for="form_message">Message</label>
											<textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="4"></textarea>
										</div>
										<div class="form-group fabtheme-field">
											<input type="submit" class="btn fabtheme-button" value="Send message">
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END OF CONTACT -->
		<!-- SCROLL TOP -->
		<div class="fabtheme-scrolltop">
			<div class="fabtheme-scroll">
				<i class="fas fa-angle-up"></i>
			</div>
		</div>
		<!-- END OF SCROLL TOP -->
		<!-- JQUERY JS -->
		<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script>
		<!-- WAYPOINTS JS -->
		<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js')}}"></script>
		<!-- UI JS -->
		<script src="{{asset('https://code.jquery.com/ui/1.12.1/jquery-ui.min.js')}}"></script>
		<!-- COUNTERUP JS -->
		<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js')}}"></script>
		<!-- POPPER JS -->
		<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/popper.min.js')}}"></script>
		<!-- BOOTSTRAP JS -->
		<script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js')}}"></script>
		<!-- OWL CAROUSEL JS -->
		<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js')}}"></script>
		<!-- WOW JS -->
		<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js')}}"></script>
		<!-- MAIN JS -->
		<script src="{{asset('website/js/script.js')}}"></script>
		<!-- END OF JQUERY JS -->
    </body>
</html>
