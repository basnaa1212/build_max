<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<!-- Fonts-->
		<link rel="stylesheet" type="text/css" href="assets/fonts/fontawesome/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/fonts/pe-icon/pe-icon.css">
		<!-- Vendors-->
		<link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap/grid.css">
		<link rel="stylesheet" type="text/css" href="assets/vendors/magnific-popup/magnific-popup.min.css">
		<link rel="stylesheet" type="text/css" href="assets/vendors/swiper/swiper.css">
		<!--App & fonts-->
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Oswald:400,600|Playfair+Display:400i">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">
		<link rel="stylesheet" type="text/css" href="1.css"><!-- [if lt IE 9] -->
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<!--[endif]-->
		
		
	</head>
	
	<body>
				
				<!--preload -->
				<div class="preload" id="preload">
					<div class="cssload-spin-box"></div>
				</div><!-- End / preload -->
				
		<div class="page-wrap">
			
			<!-- header -->
			<header class="header header-fixheight header--fixed">
				<div class="container">
					<div class="header__inner">
						<div class="header-logo"><a href="home.html"><img src="\buildmax\raising-master\assets\img\11.jpeg" alt=""/></a></div>
						
						<!-- raising-nav -->
						<nav class="raising-nav">
							
							<!-- raising-menu -->
							<ul class="raising-menu">
								<li class="current"><a href="#id1">Home</a>
								</li>
								<li><a href="#id2">About</a>
								</li>
								<li><a href="#id3">service</a>
								</li>
								<li><a href="#id4">gallery</a>
								</li>
								
								<li><a href="#id6">team</a>
								</li>
								<li><a href="#id7">contact us</a>
								</li>
							</ul><!-- raising-menu -->
							
							<div class="navbar-toggle"><i class="fa fa-bars"></i></div>
						</nav><!-- End / raising-nav -->
						
						<div class="btn-right">
							<div class="search-btn"><i class="fa fa-search"></i></div>
						</div>
						<div class="searchbar">
							<div class="searchbar__group"><span class="searchbar__addon"><i class="fa fa-search"></i></span>
								<input class="searchbar__input" type="text" name="search" value="" placeholder="Search"/><span class="searchbar__close"></span>
							</div>
						</div>
					</div>
				</div>
			</header><!-- End / header -->
								
                                    

										
											

			
			<!-- Content-->
			<div class="md-content">
				
				<!-- hero -->
				<hero class="hero" id="id1">
					
					<!-- swiper swiper-container -->
					<div class="swiper swiper-container">
						<div class="swiper-wrapper">
							<div class="hero__wrapper">
							
								<div class="form-wrapper">
									<!-- Sign In Form goes here -->
										
									
					
									<div class="form-container">
										<!-- Sign In Form -->
										<div class="form-box" id="signin-box">
											<div class="form-header">
												<h2>Sign In</h2>
											</div>
											<form method="post" class="sign-in-form">
												<label for="email">Email</label>
												<input type="email" id="email" name="email" placeholder="Enter Your Email" required>
												<br /><br />
									
												<label for="password">Password</label>
												<input type="password" id="password" name="password" placeholder="Enter Your Password" required>

												<label for="usertype">User Type</label>
												<select id="usertype" name="usertype" required>
												<option value="Admin">Admin</option>
													-<option value="User">User</option>
													<option value="Architect">Architect</option>
												</select>
												<br /><br />
									
												<button type="submit">Sign In</button>
											</form>
									
											<p class="switch-form-text">Don't have an account? <span id="to-signup">Sign Up</span></p>
										</div>
									
										<!-- Sign Up Form -->
										<div class="form-box" id="signup-box" style="display: none;">
											<div class="form-header">
												<h2>Sign Up</h2>
											</div>
											<form class="sign-up-form">
												<label for="username">Username</label>
												<input type="text" id="username" name="username" required>
									
												<label for="email-signup">Email</label>
												<input type="email" id="email-signup" name="email-signup" required>
									
												<label for="phone">Phone Number</label>
												<input type="tel" id="phone" name="phone" required>
									
												<label for="address">Address</label>
												<textarea id="address" name="address" required></textarea>
									
												<!--<label for="usertype">User Type</label>
												<select id="usertype" name="usertype" required>
													<option value="user">User</option>
													<option value="admin">Admin</option>
												</select>-->
												
									
												<label for="password-signup">Password</label>
												<input type="password" id="password-signup" name="password-signup" required>
												<br /><br /><br />
									
												<button type="submit">Sign Up</button>
											</form>
									
											<p class="switch-form-text">Already have an account? <span id="to-signin">Sign In</span></p>
										</div>
									</div>
									
									<script>
										// Toggle between Sign In and Sign Up forms
										document.getElementById('to-signup').addEventListener('click', function() {
											document.getElementById('signin-box').style.display = 'none';
											document.getElementById('signup-box').style.display = 'block';
										});
									
										document.getElementById('to-signin').addEventListener('click', function() {
											document.getElementById('signup-box').style.display = 'none';
											document.getElementById('signin-box').style.display = 'block';
										});
									</script>
									






>
							   
							 <!--div class="hero__inner"-->
									<!--div class="container"-->
										<!--h1 class="hero__title">"To build a home is to build a future"</h1>
										<p class="hero__desc">Building a dream home takes patience, but it also requires a strong foundation of trust.</p>
			
										<!- btn --
										<a class="btn btn-primary" href="#">LOGIN
										</a--><!-- End / btn -->
										
									</div>
								</div>
							</div>
							<!--div class="hero__wrapper" style="background-image: url('C:/project/raising-master/assets/img/slider/13.png');">
								<div class="hero__inner">
									<div class="container">
										<h1 class="hero__title">"Design is the silent ambassador of your brand"</h1>
										
										<p class="hero__desc">The best rooms have something to say about the people who live in them.

										<!-tn --
										<a class="btn btn-primary" href="#">LOGIN
										</a><!- End / btn --
										
									</div>
								</div>
							</div>
							<!-div class="hero__wrapper" style="background-image: url('assets/img/slider/3.jpg');">
								<div class="hero__inner">
									<div class="container">
										<h1 class="hero__title">Free PSD Files</h1>
										<p class="hero__desc">Curabitur elementum urna augue, eu porta purus gravida in. Cras consectetur, lorem a cursus</p>
										
										<-- btn --
										<a class="btn btn-primary" href="#">button
										</a><-- End / btn --
										
									</div>
								</div>
							</div--
							<div class="hero__wrapper" style="background-image: url('C:/project/raising-master/assets/img/slider/14.png');">
								<div class="hero__inner">
									<div class="container">
										<h1 class="hero__title">"We are builders, we create the world others live in."</h1>
										<p class="hero__desc">"The strength of the team is each individual member. The strength of each member is the team." </p>


										
										<!- btn --
										<a class="btn btn-primary" href="#" >LOGIN</a>
										<-- End / btn --
										
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-pagination-custom"></div>
						<div class="swiper-button-custom">
							<div class="swiper-button-prev-custom"><i class="fa fa-angle-left"></i></div>
							<div class="swiper-button-next-custom"><i class="fa fa-angle-right"></i></div>
						</div>
					</div><!- End / swiper swiper-container --
					
				</hero><!- End / hero --
				
				
				<!- cta-02 --
				<div class="cta-02">
					<div class="container">
						<div class="row">
							<div class="col-lg-9 ">
								<h3 class="cta-02__title">Looking for a high quality constructor company for your project?</h3>
							</div>
							<div class="col-lg-3  md-text-right">
								
								<-- btn --
								<a class="btn btn-outline" href="#">Get a quote
								</a><!-End / btn --
								
							</div>
						</div>
					</div>
				<div-->


					<!-- Sign-In Form -
					 		<div class="cont">
			<div class="form sign-in">
						<h2>Welcome</h2>
						<label>
							<span>Email</span>
							<input type="email" id="signInEmail" />
						</label>
						<label>
							<span>Password</span>
							<input type="password" id="signInPassword" />
						</label>
						<p class="forgot-pass">Forgot password?</p>
						<button type="button" class="submit" id="signInBtn">Sign In</button>
					</div>
				
				<!- Sign-Up Form 
					<div class="form sign-up">
						<h2>Create your Account</h2>
						<label>
							<span>Name</span>
							<input type="text" id="signUpName" />
						</label>
						<label>
							<span>Email</span>
							<input type="email" id="signUpEmail" />
						</label>
						<label>
							<span>Password</span>
							<input type="password" id="signUpPassword" />
						</label>
						<button type="button" class="submit" id="signUpBtn">Sign Up</button>
					</div>
				
					<div class="sub-cont">
						<div class="img">
							<div class="img__text m--up">
								<h3>Don't have an account? Please Sign up!</h3>
							</div>
							<div class="img__text m--in">
								<h3>If you already have an account, just sign in.</h3>
							</div>
							<div class="img__btn">
								<span class="m--up">Sign Up</span>
								<span class="m--in">Sign In</span>
							</div>
						</div>
					</div>
				</div>
				










			<script>
				// Wait for the DOM to fully load
				//document.addEventListener("DOMContentLoaded", function() {
				//	const signInBtn = document.getElementById("signInBtn");
				//	const signUpBtn = document.getElementById("signUpBtn");
				
				//	const signInForm = document.querySelector('.form.sign-in');
				//	const signUpForm = document.querySelector('.form.sign-up');
				//	const signInLink = document.querySelector('.m--in');
				//	const signUpLink = document.querySelector('.m--up');
				
					// Initially, show the Sign-In form and hide Sign-Up form
				//	signInForm.style.display = 'block';
				//	signUpForm.style.display = 'none';
				
					// Toggle between Sign In and Sign Up forms
				//	signInLink.addEventListener("click", function() {
				//		signInForm.style.display = 'block';
				//		signUpForm.style.display = 'none';
					});
				
				///	signUpLink.addEventListener("click", function() {
					//	signUpForm.style.display = 'block';
					//	signInForm.style.display = 'none';
					});
				//
					// Sign-In form submission logic
				//	signInBtn.addEventListener("click", function(e) {
				//		e.preventDefault(); // Prevent form from submitting normally
				
				//		const email = document.getElementById("signInEmail").value;
				//		const password = document.getElementById("signInPassword").value;
				
						// Here, you can perform validation or make an API request for real authentication
				//		// Mock check for valid credentials
				//		if (email === "test@example.com" && password === "password123") {
				//			window.location.href = "dashboard.html"; // Redirect to next page after successful sign-in
				//		} else {
				//			alert("Invalid credentials. Please try again.");
				//		}
				//	});
				
					// Sign-Up form submission logic
				//	signUpBtn.addEventListener("click", function(e) {
				//		e.preventDefault(); // Prevent form from submitting normally
				//					const name = document.getElementById("signUpName").value;
				//		const email = document.getElementById("signUpEmail").value;
				//		const password = document.getElementById("signUpPassword").value;
				
						// Basic validation for the sign-up form
				//		if (name && email && password) {
				//			alert("Account created successfully");
							// Here, you would typically send the data to a server to create a new user
							// Mock successful sign-up
				//			signInForm.style.display= 'block';
				//			signUpForm.style.display= 'none';  // Redirect after successful sign-up
				//		} else {
				//			alert("Please fill in all the fields.");
				//		}
				//	});
				//})//;
				</script>
				
						<!--- services --
								<div class="services">
									<div class="services__img"><img src="C:\project\raising-master\assets\img\service\floor.png" alt=""/></div>
									<h2 class="services__title"><a href="#">FLOORING</a></h2>
									<div class="services__desc">Our design planning services help bring your dream home to life with thoughtful, personalized solutions that align with your vision, lifestyle, and budget. From initial concept and layout to selecting finishes and fixtures, we guide you through every step to create a cohesive, functional, and beautiful home.</div>

									
									<!- btn --
									<a class="btn btn btn-primary btn-custom" href="service-single.html">read more
									</a>!-- End / btn -
									
								</div>!-- End / services ->
								
							</div>
							<div class="col-sm-6 col-md-6 col-lg-4 ">
								
								<!- services --
								<div class="services">
									<div class="services__img"><img src="C:\project\raising-master\assets\img\service\roof.png" alt=""/></div>
									<h2 class="services__title"><a href="#">ROOFING</a></h2>
									<div class="services__desc">Our Roofing Construction Plan is designed to provide a clear, structured approach to your roofing needs, with a focus on both the aesthetic and functional aspects of your property. From selecting the right materials to final installation, we walk you through every step of the process, ensuring a seamless and stress-free experience.</div>

									
									<!- btn --
									<a class="btn btn btn-primary btn-custom" href="service-single.html">read more
									</a>!-- End / btn ->
									
								</div>!-- End / services ->
								
							</div>
							<div class="col-sm-6 col-md-6 col-lg-4 ">
								<
					 services --
								<div class="services">
									<div class="services__img"><img src="C:\project\raising-master\assets\img\service\design.png" alt=""/></div>
									<h2 class="services__title"><a href="#">DESIGN</a></h2>
									<div class="services__desc">Our custom floor plans are crafted to create a harmonious balance between style and functionality, ensuring that your home is perfectly tailored to fit your lifestyle. We consider every detail—from room flow and natural light to maximizing storage and ensuring privacy—so your home feels both spacious and intimate</div>

									
									<!- btn --
									<a class="btn btn btn-primary btn-custom" href="service-single.html">read more
									</a>!-- End / btn -
									
								</div><!- End / services ->
								
							</div>
							<div class="col-sm-6 col-md-6 col-lg-4 ">
								
								<-- services --
								<div class="services">
									<div class="services__img"><img src="assets/img/service/4.jpg" alt=""/></div>
									<h2 class="services__title"><a href="#">Construction Consultant</a></h2>
									<div class="services__desc">Nam elit ligula, egestas et ornare non, viverra eu justo. Aliquam ornare lectus ut pharetra dictum. Aliquam erat</div>
									
									<!- btn --
									<a class="btn btn btn-primary btn-custom" href="service-single.html">read more
									</a><!- End / btn --
									
								</div><-- End / services --
								
							</div>
							<div class="col-sm-6 col-md-6 col-lg-4 ">
								
								<!- services --
								<div class="services">
									<div class="services__img"><img src="assets/img/service/5.jpg" alt=""/></div>
									<h2 class="services__title"><a href="#">Construction Consultant</a></h2>
									<div class="services__desc">Suspendisse ac elit vitae est lacinia interdum eu sit amet mauris. Phasellus aliquam nisi sit amet libero mattis ornare.</div>
									
									<-- btn --
									<a class="btn btn btn-primary btn-custom" href="service-single.html">read more
									</a><-- End / btn --
									
								</div><-- End / services --
								
							</div>
							<div class="col-sm-6 col-md-6 col-lg-4 ">
								
								<-- services --
								<div class="services">
									<div class="services__img"><img src="assets/img/service/6.jpg" alt=""/></div>
									<h2 class="services__title"><a href="#">General Builder</a></h2>
									<div class="services__desc">Integer placerat ullamcorper urna nec rhoncus. Sed velit justo, lacinia non sapien imperdiet, sagittis fringilla risus.</div>
									
									<-- btn --
									<a class="btn btn btn-primary btn-custom" href="service-single.html">read more
									</a><-- End / btn --
									
								</div><-- End / services --
								
							</div>
						</div>
					</div>
				</section>
				<-- End / Section --
				
				
				<!- Section --
				<section class="md-section" id="id4" style="background-color:#fff;">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-2 ">
								
								<-- sec-title --
								<div class="sec-title sec-title__lg-title md-text-center">
									<h2 class="sec-title__title">Gallery</h2><span class="sec-title__divider"></span>
								</div><!- End / sec-title --
								
							</div>
						</div>
						
						<!- gallery-wrap --
						<div class="gallery-wrap gallery-album">
							<div class="grid-css grid-css--grid" data-col-lg="4" data-col-md="2" data-col-sm="2" data-col-xs="1" data-gap="30">
								<div class="grid__inner">
									<div class="grid-sizer"></div>
									
									<!- grid-item --
									<div class="grid-item large">
										<div class="grid-item__inner">
											<div class="grid-item__content-wrapper">
												
												<!- gallery -->
												<!--div class="gallery gallery--grid">
													<div class="gallery__image bg-image" style="background-image: url(C:/project/raising-master/assets/img/gallery/21.jpeg;);"><img src="C:/project/raising-master/assets/img/gallery/21.jpeg" alt="How to Create and"/><a class="gallery__overlay mfp-image" href="C:/project/raising-master/assets/img/gallery/21.jpeg" data-effect="mfp-zoom-in" title="Design a Perfect">
															<div class="md-tb">
																<div class="md-tb__cell md-text-center"><i class="fa fa-search"></i></div>
															</div></a>
													</div>
												</div><-- End / gallery --
												
											</div>
										</div>
									</div><!- End / grid-item -->
									
									
									<!-- grid-item -->
									<!--div class="grid-item wide">
										<div class="grid-item__inner">
											<div class="grid-item__content-wrapper">
												
												<!- gallery --
												<div class="gallery gallery--grid">
													<div class="gallery__image bg-image" style="background-image: url(assets/img/gallery/10.jpg);"><img src="assets/img/gallery/10.jpg" alt="How to Master"/><a class="gallery__overlay mfp-image" href="assets/img/gallery/10.jpg" data-effect="mfp-zoom-in" title="Using Memes in Your">
															<div class="md-tb">
																<div class="md-tb__cell md-text-center"><i class="fa fa-search"></i></div>
															</div></a>
													</div>
												</div>!-- End / gallery --
												
											</div>
										</div>
									</div>!-- End / grid-item --
									
									
									<!- grid-item --
									<div class="grid-item">
										<div class="grid-item__inner">
											<div class="grid-item__content-wrapper">
												
												<!- gallery -->
												<!--div class="gallery gallery--grid">
													<div class="gallery__image bg-image" style="background-image: url(assets/img/gallery/11.jpg);"><img src="assets/img/gallery/11.jpg" alt="7 UI Choices That"/><a class="gallery__overlay mfp-image" href="assets/img/gallery/11.jpg" data-effect="mfp-zoom-in" title="Free PSD Files">
															<div class="md-tb">
																<div class="md-tb__cell md-text-center"><i class="fa fa-search"></i></div>
															</div></a>
													</div>
												</div>!-- End / gallery --
												
											</div>
										</div>
									</div>!-- End / grid-item --
									
									
									<!- grid-item --
									<div class="grid-item">
										<div class="grid-item__inner">
											<div class="grid-item__content-wrapper">
												
												<!- gallery -->
												<!--div class="gallery gallery--grid">
													<div class="gallery__image bg-image" style="background-image: url(assets/img/gallery/12.jpg);"><img src="assets/img/gallery/12.jpg" alt="Using Memes in Your"/><a class="gallery__overlay mfp-image" href="assets/img/gallery/12.jpg" data-effect="mfp-zoom-in" title="Is UX Really That">
															<div class="md-tb">
																<div class="md-tb__cell md-text-center"><i class="fa fa-search"></i></div>
															</div></a>
													</div>
												</div>!-- End / gallery --
												
											</div>
										</div>
									</div>!-- End / grid-item --
									
									
									<!- grid-item -->
									<!--div class="grid-item">
										<div class="grid-item__inner">
											<div class="grid-item__content-wrapper">
												
												<!- gallery ->
												<div class="gallery gallery--grid">
													<div class="gallery__image bg-image" style="background-image: url(assets/img/gallery/13.jpg);"><img src="assets/img/gallery/13.jpg" alt="How To Build A"/><a class="gallery__overlay mfp-image" href="assets/img/gallery/13.jpg" data-effect="mfp-zoom-in" title="Free Sketch Plugins">
															<div class="md-tb">
																<div class="md-tb__cell md-text-center"><i class="fa fa-search"></i></div>
															</div></a>
													</div>
												</div>!-- End / gallery ->
												
											</div>
										</div>
									</div>!-- End / grid-item --
									
									
									<!- grid-item --
									<div class="grid-item">
										<div class="grid-item__inner">
											<div class="grid-item__content-wrapper">
												
												<!-gallery -->
												<!--div class="gallery gallery--grid">
													<div class="gallery__image bg-image" style="background-image: url(assets/img/gallery/14.jpg);"><img src="assets/img/gallery/14.jpg" alt="Using Memes in Your"/><a class="gallery__overlay mfp-image" href="assets/img/gallery/14.jpg" data-effect="mfp-zoom-in" title="How to Create and">
															<div class="md-tb">
																<div class="md-tb__cell md-text-center"><i class="fa fa-search"></i></div>
															</div></a>
													</div>
												</div>!-- End / gallery --
												
											</div>
										</div>
									</div><!- End / grid-item --
									
									
									<!- grid-item --
									<div class="grid-item large">
										<div class="grid-item__inner">
											<div class="grid-item__content-wrapper">
												
												<!- gallery -->
												<!--div class="gallery gallery--grid">
													<div class="gallery__image bg-image" style="background-image: url(assets/img/gallery/1.jpg);"><img src="assets/img/gallery/1.jpg" alt="Is UX Really That"/><a class="gallery__overlay mfp-image" href="assets/img/gallery/1.jpg" data-effect="mfp-zoom-in" title="How to Master">
															<div class="md-tb">
																<div class="md-tb__cell md-text-center"><i class="fa fa-search"></i></div>
															</div></a>
													</div>
												</div>!-- End / gallery --
												
											</div>
										</div>
									</div><-- End / grid-item --
									
									
									<!- grid-item --
									<div class="grid-item wide">
										<div class="grid-item__inner">
											<div class="grid-item__content-wrapper">
												
												<!-gallery --
												<div class="gallery gallery--grid">
													<div class="gallery__image bg-image" style="background-image: url(assets/img/gallery/2.jpg);"><img src="assets/img/gallery/2.jpg" alt="Getting Started with"/><a class="gallery__overlay mfp-image" href="assets/img/gallery/2.jpg" data-effect="mfp-zoom-in" title="The Essential Guide">
															<div class="md-tb">
																<div class="md-tb__cell md-text-center"><i class="fa fa-search"></i></div>
															</div></a>
													</div>
												</div><!- End / gallery --
												
											</div>
										</div>
									</div>!-- End / grid-item --
									
								</div>
							</div>
						</div><!- End / gallery-wrap --
						
					</div>
				</section>
				<!-End / Section -->
				
				
				<!-- Section --
				<section class="md-section" id="id5">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-2 ">
								
								<!- sec-title --
								<div class="sec-title sec-title__lg-title md-text-center">
									<h2 class="sec-title__title">Testimonial</h2><span class="sec-title__divider"></span>
								</div><-- End / sec-title --
								
							</div>
						</div>
						
						<-- swiper swiper-container --
						<div class="swiper swiper-container" data-options='{"slidesPerView":3,"spaceBetween":30,"breakpoints":{"600":{"slidesPerView":1},"991":{"slidesPerView":2,"spaceBetween":30}}}'>
							<div class="swiper-wrapper">
								<div class="testimonial-item">
									
									<!- quote>
									<blockquote class="quote">
										<p>Nam suscipit nisi risus, et porttitor metus molestie a. Phasellus id quam id turpis suscipit pretium. Maecenas ultrices, lacus ut accumsan maximus, odio augue rhoncus augue,</p>
									</blockquote><-- End / quote -->
									
									
									<!-- authorbox --
									<div class="authorbox">
										<div class="authorbox__avartar" style="background-image: url(https://unsplash.it/800);"><img src="https://unsplash.it/800" alt=""/></div>
										<div class="authorbox__info">
											<h5 class="authorbox__name">Raymond Mendoza</h5>
											<p class="authorbox__work">Developer</p>
										</div>
									</div><!- End / authorbox --
									
								</div>
								<div class="testimonial-item">
									
									<!- quote --
									<blockquote class="quote">
										<p>Maecenas lorem ex, euismod eget pulvinar non, facilisis ut leo. Quisque placerat purus in neque efficitur ornare. Nam at justo magna. Aliquam venenatis odio ante, non euismod augue</p>
									</blockquote><-- End / quote -
									
									
									<- authorbox ->
									<div class="authorbox">
										<div class="authorbox__avartar" style="background-image: url(https://unsplash.it/800);"><img src="https://unsplash.it/800" alt=""/></div>
										<div class="authorbox__info">
											<h5 class="authorbox__name">Bruce Powell</h5>
											<p class="authorbox__work">Developer</p>
										</div>
									</div><-- En / authorbox --
									
								</div>
								<div class="testimonial-item">
									
									<!- quote --
									<blockquote class="quote">
										<p>Integer placerat ullamcorper urna nec rhoncus. Sed velit justo, lacinia non sapien imperdiet, sagittis fringilla risus. Nulla in est lobortis massa consectetur scelerisque. Etiam</p>
									</blockquote><!- End / quote --
									
									
									<-- authorbox --
									<div class="authorbox">
										<div class="authorbox__avartar" style="background-image: url(https://unsplash.it/800);"><img src="https://unsplash.it/800" alt=""/></div>
										<div class="authorbox__info">
											<h5 class="authorbox__name">Maria Gutierrez</h5>
											<p class="authorbox__work">Support</p>
										</div>
									</div><!- End / authorbox --
									
								</div>
								<div class="testimonial-item">
									
									<- quote --
									<blockquote class="quote">
										<p>Mauris lacinia venenatis dolor sit amet viverra. Integer malesuada nulla neque. Sed rutrum ligula eu sagittis volutpat. Aliquam erat volutpat. Praesent mattis non nulla eget</p>
									</blockquote><!- End / quote -->
									
									
									<!-- authorbox --
									<div class="authorbox">
										<div class="authorbox__avartar" style="background-image: url(https://unsplash.it/800);"><img src="https://unsplash.it/800" alt=""/></div>
										<div class="authorbox__info">
											<h5 class="authorbox__name">Brittany Williams</h5>
											<p class="authorbox__work">Developer</p>
										</div>
									</div><!- End authorbox --
									
								</div>
							</div>
						</div><!- End / swiper swiper-container --
						
					</div>
				</section>
				<!- End / Section -->
				
				
				<!-- Section -->
				<!--section class="md-section md-skin-dark" id="id6" style="background-image:url(&quot;assets/img/bg/demo.jpg&quot;);padding-bottom:50px;">
					<div class="md-overlay"></div>
					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-2 ">
								
								<!- sec-title -->
								<!--div class="sec-title sec-title__lg-title md-text-center">
									<h2 class="sec-title__title">Our team</h2><span class="sec-title__divider"></span>
								</div><!- End / sec-title >
								
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 col-md-6 col-lg-3 ">
								
								<!- team ->
								<div class="team">
									<div class="team__img"><img src="assets/img/team/1.jpg" alt=""/>
										<div class="team__overlay">
											<div class="md-tb">
												<div class="md-tb__cell md-text-center">
																	
																	<!- social-icon --
																	<a class="social-icon social-icon__style-03" href="#"><i class="social-icon__icon fa fa-facebook"></i>
																	</a>!-- End / social-icon --
																	
																	
																	<!- social-icon --
																	<a class="social-icon social-icon__style-03" href="#"><i class="social-icon__icon fa fa-twitter"></i>
																	</a>!-- End / social-icon --
																	
																	
																	<!-social-icon --
																	<a class="social-icon social-icon__style-03" href="#"><i class="social-icon__icon fa fa-linkedin"></i>
																	</a><-- End / social-icon --
																	
												</div>
											</div>
										</div>
									</div>
									<div class="team__body">
										<div class="team__user">
											<h4 class="team__name">AJMAL</h4><span class="team__work">Photography</span>
										</div>
									</div>
								</div>!-- End / team --
								
							</div>
							<div class="col-sm-6 col-md-6 col-lg-3 ">
								
								<!- team --
								<div class="team">
									<div class="team__img"><img src="assets/img/team/2.jpg" alt=""/>
										<div class="team__overlay">
											<div class="md-tb">
												<div class="md-tb__cell md-text-center">
																	
																	<!- social-icon --
																	<a class="social-icon social-icon__style-03" href="#"><i class="social-icon__icon fa fa-facebook"></i>
																	</a>!-- End / social-icon --
																	
																	
																	<!- social-icon --
																	<a class="social-icon social-icon__style-03" href="#"><i class="social-icon__icon fa fa-twitter"></i>
																	</a>!-- End / social-icon -->
																	
																	
																	<!-- social-icon --
																	<a class="social-icon social-icon__style-03" href="#"><i class="social-icon__icon fa fa-linkedin"></i>
																	</a><-- End / social-icon --
																	
												</div>
											</div>
										</div>
									</div>
									<div class="team__body">
										<div class="team__user">
											<h4 class="team__name">ANUSHKA</h4><span class="team__work">CEO &amp; Founder</span>
										</div>
									</div>
								</div>!-- End / team --
								
							</div>
							<div class="col-sm-6 col-md-6 col-lg-3 ">
								
								<!- team --
								<div class="team">
									<div class="team__img"><img src="assets/img/team/3.jpg" alt=""/>
										<div class="team__overlay">
											<div class="md-tb">
												<div class="md-tb__cell md-text-center">
																	
																	<!- social-icon --
																	<a class="social-icon social-icon__style-03" href="#"><i class="social-icon__icon fa fa-facebook"></i>
																	</a>!-- End / social-icon -->
																	
																	
																	<!-- social-icon --
																	<a class="social-icon social-icon__style-03" href="#"><i class="social-icon__icon fa fa-twitter"></i>
																	</a><-- End / social-icon --
																	
																	
																	<!- social-icon --
																	<a class="social-icon social-icon__style-03" href="#"><i class="social-icon__icon fa fa-linkedin"></i>
																	</a><!- End / social-icon --
																	
												</div>
											</div>
										</div>
									</div>
									<div class="team__body">
										<div class="team__user">
											<h4 class="team__name">SHARMA</h4><span class="team__work">Photography</span>
										</div>
									</div>
								</div>!-- End / team --
								
							</div>
							<div class="col-sm-6 col-md-6 col-lg-3 ">
								
								<!- team --
								<div class="team">
									<div class="team__img"><img src="assets/img/team/4.jpg" alt=""/>
										<div class="team__overlay">
											<div class="md-tb">
												<div class="md-tb__cell md-text-center">
																	
																	<!- social-icon --
																	<a class="social-icon social-icon__style-03" href="#"><i class="social-icon__icon fa fa-facebook"></i>
																	</a>!-- End / social-icon --
																	
																	
																	!-- social-icon --
																	<a class="social-icon social-icon__style-03" href="#"><i class="social-icon__icon fa fa-twitter"></i>
																	</a>!-- End / social-icon --
																	
																	
																	<!- social-icon --
																	<a class="social-icon social-icon__style-03" href="#"><i class="social-icon__icon fa fa-linkedin"></i>
																	</a><!- End / social-icon ->
																	
												</div>
											</div>
										</div>
									</div>
									<div class="team__body">
										<div class="team__user">
											<h4 class="team__name">ANIRUDH</h4><span class="team__work">Designer</span>
										</div>
									</div>
								</div><!- End / team --
								
							</div>
						</div>
					</div>
				</section>
				<!- End / Section -->
				
				
				<!-- Section --
				<section class="md-section" id="id7" style="background-color:#fff;padding:60px 0 0;">
					<div class="row">
						<div class="col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-2 ">
							
							<!- sec-title --
							<div class="sec-title sec-title__lg-title md-text-center">
								<h2 class="sec-title__title">Contact us</h2><span class="sec-title__divider"></span>
							</div><!- End / sec-title --
							
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-lg-9  col-lg-push-3">
								<div class="main-content">
									<div class="row"> 
										<div class="col-lg-6 ">
											<form class="contact-form">
												
												<!-form-item --
												<div class="form-item">
													<input class="form-control" type="text" name="input" placeholder="name"/>
												</div>!-- End / form-item -->
												
												
												<!-- form-item ->
												<div class="form-item">
													<input class="form-control" type="text" name="input" placeholder="email"/>
												</div>!-- End / form-item -->
												
												
												<!-- form-item ->
												<div class="form-item">
													<input class="form-control" type="text" name="input" placeholder="phone"/>
												</div><-- End / form-item ->
												
												
												<!- form-item --
												<div class="form-item">
													<input class="form-control" type="text" name="input" placeholder="subject"/>
												</div><-- End / form-item --
												
												
												<!- form-item --
												<div class="form-item">
													<textarea name="message" placeholder="Message" style="height: 150px;"></textarea>
												</div><!-End / form-item --
												
												<button class="btn btn-primary btn-round mb-30" type="submit">Send message</button>
											</form>
										</div>
										<div class="col-lg-6 ">
											<div class="contact-gmap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13251.372477946246!2d151.20128974429977!3d-33.86793372362399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae401e8b983f%3A0x5017d681632ccc0!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2s!4v1450842593491" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3  col-lg-pull-9">
								<div class="sidebar">
									
									<!- widget --
									<section class="widget">
										
										<!- sec-title --
										<div class="sec-title">
											<h2 class="sec-title__title">working hours</h2><span class="sec-title__divider"></span>
										</div><!\-- End / sec-title --
										<p class="mb-30">Mon - Sat: 9:00 - 18:00</p>

										
										
										<!-
										<div>
											<div class="widget-contact__item"><span class="widget-contact__title">Tel:</span>
												<p class="widget-contact__text">+91 0068776540</p>
											</div>
											<div class="widget-contact__item"><span class="widget-contact__title">email:</span>
												<p class="widget-contact__text"><a href="#">buildmax@gmail.com</a></p>
											</div>
											</div>
										</div><!- End /   -
										
									</section><!- End / widget -
									
								</div>
							</div>
						</div>
					</div>
				</section>
				<-- End / Section --
				
			</div>
			<-- End / Content-->
			<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
			<!-- footer-01 --
			<footer class="footer-01 md-skin-dark">
				<div class="footer-01__widget">
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-lg-3 ">
								
								<!- widget --
								<section class="widget">
									
									<!- sec-title --
									<div class="sec-title">
										<h2 class="sec-title__title">about us</h2><span class="sec-title__divider"></span>
									</div><!- End / sec-title --
									
									<p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis a rerum ratione aliquam placeat labore nemo itaque voluptas laudantium consequuntur ut quam, aperiam harum ipsam?</p>
								</section><-- End / widget -
								
							</div>
							<div class="col-md-6 col-lg-3 ">
								
								<-- widget --
								<section class="widget">
									
									<!-sec-title --
									<div class="sec-title">
										<h2 class="sec-title__title">tag</h2><span class="sec-title__divider"></span>
									</div><!-End / sec-title -->
									
									
									<!-- widget-tag --
									<div class="widget-tag"><a href="#">Dress</a><a href="#">Mini</a><a href="#">Skate Animal</a><a href="#">Lorem Ipsum</a><a href="#">Litterature</a><a href="#">Foreign</a><a href="#">Dessert</a><a href="#">Food</a><a href="#">Litterature</a><a href="#">Foreign</a><a href="#">Dessert</a><a href="#">Litterature</a><a href="#">Food</a>
									</div><!- End /  widget-tag --
									
								</section><!- End / widget --
								
							</div>
							<div class="col-md-6 col-lg-3 ">
								
								<!- widget --
								<section class="widget">
									
									<!- sec-title --
									<div class="sec-title">
										<h2 class="sec-title__title">flickr widget</h2><span class="sec-title__divider"></span>
									</div><!-End / sec-title --
									
									
									<-- widget-gallery --
									<div class="widget-gallery">
										<div class="widget-gallery__item"><a href="#" style="background-image: url('http://placehold.it/400x400');"><img src="http://placehold.it/400x400" alt=""/></a></div>
										<div class="widget-gallery__item"><a href="#" style="background-image: url('http://placehold.it/400x400');"><img src="http://placehold.it/400x400" alt=""/></a></div>
										<div class="widget-gallery__item"><a href="#" style="background-image: url('http://placehold.it/400x400');"><img src="http://placehold.it/400x400" alt=""/></a></div>
										<div class="widget-gallery__item"><a href="#" style="background-image: url('http://placehold.it/400x400');"><img src="http://placehold.it/400x400" alt=""/></a></div>
										<div class="widget-gallery__item"><a href="#" style="background-image: url('http://placehold.it/400x400');"><img src="http://placehold.it/400x400" alt=""/></a></div>
										<div class="widget-gallery__item"><a href="#" style="background-image: url('http://placehold.it/400x400');"><img src="http://placehold.it/400x400" alt=""/></a></div>
										<div class="widget-gallery__item"><a href="#" style="background-image: url('http://placehold.it/400x400');"><img src="http://placehold.it/400x400" alt=""/></a></div>
										<div class="widget-gallery__item"><a href="#" style="background-image: url('http://placehold.it/400x400');"><img src="http://placehold.it/400x400" alt=""/></a></div>
										<div class="widget-gallery__item"><a href="#" style="background-image: url('http://placehold.it/400x400');"><img src="http://placehold.it/400x400" alt=""/></a></div>
									</div><-- End /  widget-gallery --
									
								</section><-- End / widget --
								
							</div>
							<div class="col-lg-3 ">
								
								<!- widget --
								<section class="widget">
									
									<!-ec-title --
									<div class="sec-title">
										<h2 class="sec-title__title">working hours</h2><span class="sec-title__divider"></span>
									</div><-- End / sec-title --
									
									<p> Lorem ipsum dolor sit amet, consectetur</p>
									
									<
									<div>
										<div class="widget-contact__item"><span class="widget-contact__title">Tel:</span>
											<p class="widget-contact__text">+44 1632 960948</p>
										</div>
										<div class="widget-contact__item"><span class="widget-contact__title">email:</span>
											<p class="widget-contact__text"><a href="#">info@awe7.com</a></p>
										</div>
										<div class="widget-contact__item"><span class="widget-contact__title">Working Hours</span>
											<p class="widget-contact__text">Mon - Sat: 9:00 - 18:00</p>
										</div>
									</div><!- End /   --
									
								</section><!- End / widget 							
							</div>
						</div>
					</div>
				</div-->
				
				<!-- copyright-01 -->
				<div class="copyright-01 md-text-center">
					<div class="container">
						<p class="copyright-01__copy">2024 &copy; Copyright Buildmax. All rights Reserved.</p>
					</div>
				</div><!-- End / copyright-01 -->
				
			</footer><!-- End / footer-01 -->
			
		</div>
		<!-- Vendors-->
		<script type="text/javascript" src="assets/vendors/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="assets/vendors/imagesloaded/imagesloaded.pkgd.js"></script>
		<script type="text/javascript" src="assets/vendors/isotope-layout/isotope.pkgd.js"></script>
		<script type="text/javascript" src="assets/vendors/jquery.matchHeight/jquery.matchHeight.min.js"></script>
		<script type="text/javascript" src="assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="assets/vendors/masonry-layout/masonry.pkgd.js"></script>
		<script type="text/javascript" src="assets/vendors/swiper/swiper.jquery.js"></script>
		<script type="text/javascript" src="assets/vendors/jquery-one-page/jquery.nav.js"></script>
		<script type="text/javascript" src="assets/vendors/menu/menu.js"></script>
		<script type="text/javascript" src="assets/vendors/jquery.waypoints/jquery.waypoints.min.js"></script>
		<!-- App-->
		<script type="text/javascript" src="assets/js/main.js"></script>
	</body>
	<?php
	include 'connection.php';
	$email=$_POST['email'];
$password=$_POST['password'];
$usertype=$_POST['usertype'];
echo $email;
$sql="select * from login where email='$email' and password='$password' and usertype='$usertype'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
if($count==1)
{
   if($usertype=='Admin')
   {
   echo("<script>window.location = 'admin-dash.php';</script>");
   }
    //echo"<h1><center>Login successful</center></h1>";
    elseif($usertype=='User')
	{
		echo("<script>window.location = 'user-dash.php';</script>");
	}
	elseif($usertype=='Architect')
	{
		echo("<script>window.location = 'arch-dash.php';</script>");
	}

}
else{
    echo"<h1>Login Failed. invalid email or password.</h1>";
}
?>
</html>