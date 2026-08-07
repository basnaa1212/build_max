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
<?php
include 'connection.php';
session_start();
?>	
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
												<input type="password" id="password" name="password" placeholder="Enter Your Password" pattern="^(?=.*[a-z])(?=.*[@$!%*?&#])[a-z@$!%*?&#]{6,}$" required>

												<label for="usertype">User Type</label>
												<select id="usertype" name="usertype" required>
												<option value="Admin">Admin</option>
													-<option value="User">User</option>
													<option value="Architect">Architect</option>
												</select>
												<br /><br />
									
												<button type="submit" id="Submit" name="Submit">Sign In</button>
											</form>
									
											<p class="switch-form-text">Don't have an account? <span id="to-signup">Sign Up</span></p>
                </div>
									
										<!-- Sign Up Form -->
										<div class="form-box" id="signup-box" style="display: none;">
											<div class="form-header">
												<h2>Sign Up</h2>
            </div>
											<form method="post" class="sign-up-form" action="signup.php">
												<label for="name">Name</label>
												<input type="text" id="name" name="name" required>
									
												<label for="email">Email</label>
												<input type="email" id="email" name="email" required>
									
												<label for="phoneno">Phone Number</label>
												<input type="tel" id="phoneno" name="phoneno"  placeholder="+1234567890" pattern="^\+?[0-9]{10}$" required>
									
												<label for="address">Address</label>
												<textarea id="address" name="address" required></textarea>
									
												<!--<label for="usertype">User Type</label>
												<select id="usertype" name="usertype" required>
													<option value="user">User</option>
													<option value="admin">Admin</option>
												</select>-->
								
									   
												<label for="password">Password</label>
												<input type="password" id="password" name="password" pattern="^(?=.*[a-z])(?=.*[@$!%*?&#])[a-z@$!%*?&#]{6,}$" required>
												<br /><br /><br />
									
												<button type="submit" id="Submit1" name="Submit1">Sign Up</button>
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
	
	if(isset($_POST['Submit']))	
{ 

	$email=$_POST['email'];
$password=$_POST['password'];
$usertype=$_POST['usertype'];
//echo $email;
$sql="select * from login where email='$email' and password='$password' and usertype='$usertype'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
if($count==1)
{
   if($usertype=='Admin')
   {
	$_SESSION["username"]=$email;
	//$_SESSION["username"]="h";

	echo("<script>window.location = 'admin-dash.php';</script>");
   }
    //echo"<h1><center>Login successful</center></h1>";
    elseif($usertype=='User')
	{
		$_SESSION["username"]=$email;
		echo("<script>window.location = 'user-dash.php';</script>");
	}
	elseif($usertype=='Architect')
	{
		$_SESSION["username"]=$email;
		echo("<script>window.location = 'arch-dash.php';</script>");
	}

}
else{
    echo"<h1>Login Failed. invalid email or password.</h1>";
}
}

?>



</html>