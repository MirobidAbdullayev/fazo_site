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
						<a class="nav-link fabtheme-nav-link" href="#home">Asosiy</a>
					</li>
					<li class="nav-item">
						<a class="nav-link fabtheme-nav-link" href="#about">Haqida</a>
					</li>
					<li class="nav-item">
						<a class="nav-link fabtheme-nav-link" href="#services">Xizmatlar</a>
					</li>
					<li class="nav-item">
						<a class="nav-link fabtheme-nav-link" href="#team">Jamoa</a>
					</li>
					<li class="nav-item">
						<a class="nav-link fabtheme-nav-link" href="#blog">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link fabtheme-nav-link" href="#contact">Aloqa</a>
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
					@foreach ($abouts as $about)
					<div class="col-11 col-sm-11 col-md-10 col-lg-10 col-xl-9 pr-0">
						<div class="p-3 p-sm-4 p-md-4 p-lg-5 p-xl-5 text-right wow fadeInRight fabtheme-about" data-wow-duration="3s">
							<h2>{{$about->AboutTitle}}</h2>
							<p class="py-2">{{$about->description}}</p>
							<a href="javascript:void(0);" class="btn fabtheme-button">Know More</a>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>
		<!-- END OF ABOUT -->
		<!-- SERVICES -->
		<section id="services" class="fabtheme-link-show">
			<div class="container-fluid h-100">
				<div class="row h-100 align-items-center mt-5 justify-content-start">
					<div class="col-11 col-sm-11 col-md-10 col-lg-10 col-xl-9 pl-0">
						@foreach ($services as $servic)
						<div class="p-3 p-sm-4 p-md-4 p-lg-5 p-xl-5 text-left wow fadeInLeft fabtheme-services-1" data-wow-duration="3s">
							<h2>{{$servic->title}}</h2>
							<p class="card-text py-2">{{$servic->description}}</p>
							<div class="card-columns fabtheme-card-columns">
							@endforeach
								@foreach ($aboutServices as $aboutServic)
								<div class="card fabtheme-services-2">
									<div class="card-body">
										<h4 class="card-title py-3">{{$aboutServic->title}}</h4>
										<p class="card-text">{{$aboutServic->description}}</p>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END OF SERVICES -->
		<!-- COUNT -->
		<section id="count" class="fabtheme-parallax-2 img-fluid">
			@foreach ($statistics as $statistic)
			<div class="container-fluid h-100">
				<div class="row h-100 align-items-center mt-5 justify-content-end">
					<div class="col-11 col-sm-11 col-md-10 col-lg-10 col-xl-9 pr-0">
						<div class="p-3 p-sm-4 p-md-4 p-lg-5 p-xl-5 text-right wow fadeInRight fabtheme-count" data-wow-duration="3s">
							<div class="row">
								<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
									<h2 class="fabtheme-counter-up">{{$statistic->number_1}}</h2>
									<p class="mb-0">{{$statistic->title_1}}</p>
								</div>
								<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
									<h2 class="fabtheme-counter-up">{{$statistic->number_2}}</h2>
									<p class="mb-0">{{$statistic->title_2}}</p>
								</div>
								<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
									<h2 class="fabtheme-counter-up">{{$statistic->number_3}}</h2>
									<p class="mb-0">{{$statistic->title_3}}</p>
								</div>
								<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
									<h2 class="fabtheme-counter-up">{{$statistic->number_4}}</h2>
									<p class="mb-0">{{$statistic->title_4}}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</section>
		<!-- END OF COUNT -->
		<!-- TEAM -->
		<section id="team" class="fabtheme-link-show">
			<div class="container-fluid h-100">
				<div class="row h-100 align-items-center mt-5 justify-content-start">
					@foreach ($teams as $team)
					<div class="col-11 col-sm-11 col-md-10 col-lg-10 col-xl-9 pl-0">
						<div class="p-3 p-sm-4 p-md-4 p-lg-5 p-xl-5 text-left wow fadeInLeft fabtheme-team-1" data-wow-duration="3s">
							<h2>{{$team->title}}</h2>
							<p class="card-text py-2">{{$team->description}}</p>
							<div class="fabtheme-owl-2 owl-carousel">
								<div class="card fabtheme-team-2">
									<img class="card-img mx-auto rounded-0" src="{{$team->photo_1}}" alt="member1">
									<div class="card-body p-2 p-sm-3 p-md-3 p-lg-3 p-xl-4">
										<p class="fabtheme-link-1">
											<i class="fas fa-phone-alt"></i>
											{{$team->phone_1}}
										</p>
										<p>
											<a href="javascript:void(0);" class="fabtheme-link-1">
												<i class="fas fa-envelope-open"></i>
												{{$team->email_1}}
											</a>
										</p>
										<a href="{{$team->link_1}}" class="fabtheme-link-1"><i class="fab fa-twitter fa-lg"></i></a>
										<a href="{{$team->link_2}}" class="fabtheme-link-1"><i class="fab fa-facebook-f fa-lg"></i></a>
										<a href="{{$team->link_3}}" class="fabtheme-link-1"><i class="fab fa-instagram fa-lg"></i></a>
									</div>
								</div>
								<div class="card fabtheme-team-2">
									<img class="card-img mx-auto rounded-0" src="{{$team->photo_2}}" alt="member2">
									<div class="card-body p-2 p-sm-3 p-md-3 p-lg-3 p-xl-4">
										<p class="fabtheme-link-1">
											<i class="fas fa-phone-alt"></i>
											{{$team->phone_2}}
										</p>
										<p>
											<a href="javascript:void(0);" class="fabtheme-link-1">
												<i class="fas fa-envelope-open"></i>
												{{$team->email_2}}
											</a>
										</p>
										<a href="{{$team->link_4}}" class="fabtheme-link-1"><i class="fab fa-twitter fa-lg"></i></a>
										<a href="{{$team->link_5}}" class="fabtheme-link-1"><i class="fab fa-facebook-f fa-lg"></i></a>
										<a href="{{$team->link_6}}" class="fabtheme-link-1"><i class="fab fa-instagram fa-lg"></i></a>
									</div>
								</div>
								<div class="card fabtheme-team-2">
									<img class="card-img mx-auto rounded-0" src="{{$team->photo_3}}" alt="member3">
									<div class="card-body p-2 p-sm-3 p-md-3 p-lg-3 p-xl-4">
										<p class="fabtheme-link-1">
											<i class="fas fa-phone-alt"></i>
											{{$team->phone_3}}
										</p>
										<p>
											<a href="javascript:void(0);" class="fabtheme-link-1">
												<i class="fas fa-envelope-open"></i>
												{{$team->email_3}}
											</a>
										</p>
										<a href="{{$team->link_7}}" class="fabtheme-link-1"><i class="fab fa-twitter fa-lg"></i></a>
										<a href="{{$team->link_8}}" class="fabtheme-link-1"><i class="fab fa-facebook-f fa-lg"></i></a>
										<a href="{{$team->link_9}}" class="fabtheme-link-1"><i class="fab fa-instagram fa-lg"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>
		<!-- END OF TEAM -->
		<!-- BLOG -->
		<section id="blog" class="fabtheme-link-show">
			<div class="container-fluid h-100">
				@foreach ($blogs as $blog)
				<div class="row h-100 align-items-center mt-5 justify-content-end">
					<div class="col-11 col-sm-11 col-md-10 col-lg-10 col-xl-9 pr-0">
						<div class="p-3 p-sm-4 p-md-4 p-lg-5 p-xl-5 text-right wow fadeInRight fabtheme-blog-1" data-wow-duration="3s">
							<h2>{{$blog->title_1}}</h2>
							<p class="py-2">{{$blog->description_1}}</p>
							<div class="fabtheme-owl-1 owl-carousel d-flex">
								<div class="card fabtheme-blog-2">
									<a href="javascript:void(0);">
										<img src="{{$blog->image_1}}" class="card-img mx-auto rounded-0" alt="blog1">
									</a>
									<div class="card-body pt-5 pr-0">
										<h4 class="card-title font-weight-bold">{{$blog->title_2}}</h4>
										<p class="card-text pt-3">{{$blog->description_2}}</p>
										<a href="javascript:void(0);" class="btn fabtheme-button">Read More</a>
									</div>
								</div>
								<div class="card fabtheme-blog-2">
									<a href="javascript:void(0);">
										<img src="{{$blog->image_2}}" class="card-img mx-auto rounded-0" alt="blog2">
									</a>
									<div class="card-body pt-5 pr-0">
										<h4 class="card-title font-weight-bold">{{$blog->title_2}}</h4>
										<p class="card-text pt-3">{{$blog->description_2}}</p>
										<a href="javascript:void(0);" class="btn fabtheme-button">Read More</a>
									</div>
								</div>
								<div class="card fabtheme-blog-2">
									<a href="javascript:void(0);">
										<img src="{{$blog->image_3}}" class="card-img mx-auto rounded-0" alt="blog3">
									</a>
									<div class="card-body pt-5 pr-0">
										<h4 class="card-title font-weight-bold">{{$blog->title_2}}</h4>
										<p class="card-text pt-3">{{$blog->description_2}}</p>
										<a href="javascript:void(0);" class="btn fabtheme-button">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
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
									<source src="website/images/video_2021-11-15_21-33-28.mp4" type="video/mp4">
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
					@foreach ($contacts as $contact)
					<div class="col-11 col-sm-11 col-md-10 col-lg-10 col-xl-9 pr-0">
						<div class="p-3 p-sm-4 p-md-4 p-lg-5 p-xl-5 text-right wow fadeInRight fabtheme-contact" data-wow-duration="3s">
							<h2>{{$contact->title}}</h2>
							<p class="py-2">{{$contact->description}}</p>
							<form id="form" class="contact-form" method="post" action="{{route('store')}}">
								@csrf
								<div class="row pt-2">
									<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
										<a href="javascript:void(0);" class="fabtheme-link-2">
											<i class="fas fa-envelope-open"></i>
											<p>{{$contact->email}}</p>
										</a>
										<i class="fas fa-phone-alt"></i>
										<p>{{$contact->number}} </p>
										<i class="fas fa-map-marker"></i>
										<p>{{$contact->location}}</p>
										<i class="fas fa-clock"></i>
										<p>{{$contact->working_hours}}</p>
										<div class="col-12 py-2 pr-0">
											<a href="{{$contact->link_1}}" class="fabtheme-link-2"><i class="fab fa-instagram fa-lg mr-2"></i></a>
											<a href="{{$contact->link_2}}" class="fabtheme-link-2"><i class="fab fa-facebook-f fa-lg mr-2"></i></a>
											<a href="{{$contact->link_3}}" class="fabtheme-link-2"><i class="fab fa-twitter fa-lg mr-2"></i></a>
										</div>
									</div>
									<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
										<div class="form-group fabtheme-field">
											<label for="form_name">Ism *</label>
											<input id="form_name" type="text" name="firstname" class="form-control" placeholder="Firstname" required="required">
										</div>
										<div class="form-group fabtheme-field">
											<label for="form_lastname">Familiya *</label>
											<input id="form_lastname" type="text" name="lastname" class="form-control" placeholder="Lastname" required="required">
										</div>
										<div class="form-group fabtheme-field">
											<label for="form_email">Email *</label>
											<input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required="required">
										</div>
										<div class="form-group fabtheme-field">
											<label for="form_message">Xabar</label>
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
					@endforeach
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
