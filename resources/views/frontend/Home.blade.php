<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mamurjor</title>
	<link rel="icon" href="{{asset('assets/frontend/assets/img/logo.png')}}" type="image/png" sizes="16x16">
    
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{asset('assets/frontend/assets/css/bootstrap.min.css')}}">
	
	<!-- fontaswome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400&family=Indie+Flower&family=Teko:wght@300;500&display=swap" rel="stylesheet">

	<!-- custom internal css to get value of variables if need-->
	<style>
		
	</style>

	<!-- css -->
	<link rel="stylesheet" href="{{asset('assets/frontend/assets/css/slick.css')}}">
	<link rel="stylesheet" href="{{asset('assets/frontend/assets/css/slick-theme.css')}}">

	<!-- Custom stlylesheet -->
	<link rel="stylesheet" href="{{asset('assets/frontend/assets/css/style.css')}}">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	<!-- HEADER -->
	<div class="fluid header fixed-top" id="mian">
		<div class="container">
			<header>
				<div class="logo float-left">
					<h1>DevStartUP</h1>
					<!-- <img src="assets/img/logo.png" alt=""> -->
				</div>

				<!-- menu -->
				<menu>
					<div id="mySidenav" class="sidenav">
					  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					  <a href="#departments" onclick="closeNav()">Departments</a>
					  <a href="#about-company" onclick="closeNav()">About Company</a>
					  <a href="#how-we-work" onclick="closeNav()">How We Work</a>
					  <a href="#our-solutions" onclick="closeNav()">Our Solutions</a>
					  <a href="#team" onclick="closeNav()">Our Team</a>
					  <a href="#technologies" onclick="closeNav()">Technologies</a>
					</div>
					<div class="menu float-right">
						<h3 onclick="openNav();"><!-- menu  --><i class="fa fa-bars p-1"></i></h3>
					</div>
				</menu>
				<!-- /menu -->
			</header>
		</div>
	</div>
	<!-- / HEADER -->
	<hr>
	<!-- WELCOME -->
	<div class="fluid welcome">
		<div class="clear"></div>
		<div class="p-5"></div>
		<div class="container">
			<div class="slider demo">
				<div>
					<div class="p-4"></div>
					<div class="row">
						<div class="col-6">
							
							<h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, quasi?</h1>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi unde in labore, perspiciatis quidem libero laudantium sed assumenda esse magnam ullam quibusdam, ipsa veritatis et quae porro excepturi hic magni?</p>
							<p class="btn primary-btn">Get In Touch</p>
						</div>
						<div class="col-6">
							<img src="{{asset('assets/frontend/assets/img/team.svg')}}" width="100%" alt="">
						</div>
					</div>
				</div>
				<div>
					<div class="p-4"></div>
					<div class="row">
						<div class="col-6">
							
							<div class="p-1"></div>
							<h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, quasi?</h1>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi unde in labore, perspiciatis quidem libero laudantium sed assumenda esse magnam ullam quibusdam, ipsa veritatis et quae porro excepturi hic magni?</p>
							<div class="p-1"></div>

							<p class="btn primary-btn">Get In Touch</p>
						</div>
						<div class="col-6">
							<img src="{{asset('assets/frontend/assets/img/team.svg')}}" width="100%" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- / WELCOME -->


	<!-- DEPARTMENTS -->
	<div class="p-3"></div>
	<div id="departments"></div>
	<div class="container">
		<h1 class="text-center">DEPARTMENTS
			<div class="heading"></div>
		</h1>
		<div class="p-4"></div>
		<!-- dept -->
		<div class="row">
			<div class="col-md-6">
				<img src="{{asset('assets/frontend/assets/img/dev.svg')}}" width="100%" alt="">
			</div>
			<div class="col-md-6 p-3">
				<div class="p-3"></div>
				<p class="sub-head">Developement</p>
				<div class="p-3"></div>
				<p class="text-cont">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus architecto similique nulla quis tempore repellendus voluptatibus saepe quidem laboriosam excepturi rerum eveniet modi sint magni id, nihil. Saepe, veritatis, debitis.</p>
				<div class="p-3"></div>
				<button class="btn secondary-btn">Get In Touch</button>
			</div>
			<!-- <div class="col-md-4 col-sm-3">
				<img src="assets/img/hosting.svg" width="100%" alt="">
			</div> -->
		</div>
		<!-- /dept -->
		<div class="p-4"></div>
		<!-- dept -->
		<div class="row">
			<div class="col-md-6 p-3">
				<div class="p-3"></div>
				<p class="sub-head">Tranning</p>
				<div class="p-3"></div>
				<p class="text-cont">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus architecto similique nulla quis tempore repellendus voluptatibus saepe quidem laboriosam excepturi rerum eveniet modi sint magni id, nihil. Saepe, veritatis, debitis.</p>
				<div class="p-3"></div>
				<button class="btn secondary-btn">Get In Touch</button>
			</div>
			<div class="col-md-6">
				<img src="{{asset('assets/frontend/assets/img/train.svg')}}" width="100%" alt="">
			</div>
		</div>
		<!-- /dept -->

		<div class="p-4"></div>
		<!-- dept -->
		<div class="row">
			<div class="col-md-6">
				<img src="{{asset('assets/frontend/assets/img/hosting.svg')}}" width="100%" alt="">
			</div>
			<div class="col-md-6 p-3">
				<div class="p-3"></div>
				<p class="sub-head">Domain & Hosting</p>
				<div class="p-3"></div>
				<p class="text-cont">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus architecto similique nulla quis tempore repellendus voluptatibus saepe quidem laboriosam excepturi rerum eveniet modi sint magni id, nihil. Saepe, veritatis, debitis.</p>
				<div class="p-3"></div>
				<button class="btn secondary-btn">Get In Touch</button>
			</div>
			<!-- <div class="col-md-4 col-sm-3">
				<img src="assets/img/hosting.svg" width="100%" alt="">
			</div> -->
		</div>
		<!-- /dept -->
	</div>
	<!-- / DEPARTMENTS -->

	<div class="p-4"></div>

	<!-- ABOUT COMPANY -->
	<div class="fluid about-company" id="about-company">
		<div class="container">
			<div class="p-4"></div>
			<h1 class="text-center">ABOUT COMPANY
				<div class="heading-w"></div>
			</h1>
			<div class="p-4"></div>
			
			<div class="row">
				<div class="col-md-6">
					<img src="{{asset('assets/frontend/assets/img/company-w.svg')}}" width="100%" alt="">
				</div>
				<div class="col-md-6 p-3">
					<div class="p-3"></div>
					<p class="text-cont">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus architecto similique nulla quis tempore repellendus voluptatibus saepe quidem laboriosam excepturi rerum eveniet modi sint magni id, nihil. Saepe, veritatis, debitis.</p>
					<div class="p-3"></div>
					<button class="btn primary-btn">Get In Touch</button>
				</div>
				<!-- <div class="col-md-4 col-sm-3">
					<img src="assets/img/hosting.svg" width="100%" alt="">
				</div> -->
				<div class="p-3"></div>
			</div>
		</div>
	</div>
	<!-- / ABOUT COMPANY -->
	<div class="p-3"></div>

	<!-- HOW WE WORK -->
	<div class="fluid how-we-work" id="how-we-work">
		<div class="container">
			<div class="p-4"></div>
			<h1 class="text-center">HOW WE WORK
				<div class="heading"></div>
			</h1>
			<div class="p-4"></div>
			
			<div class="row">
				
				<div class="col-md-6 p-3">
					<div class="p-3"></div>
					<p class="text-cont">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus architecto similique nulla quis tempore repellendus voluptatibus saepe quidem laboriosam excepturi rerum eveniet modi sint magni id, nihil. Saepe, veritatis, debitis.</p>
					<div class="p-3"></div>
					<button class="btn secondary-btn">Get In Touch</button>
				</div>
				<div class="col-md-6">
					<img src="{{asset('assets/frontend/assets/img/how-we-work.svg')}}" width="100%" alt="">
				</div>
				<!-- <div class="col-md-4 col-sm-3">
					<img src="assets/img/hosting.svg" width="100%" alt="">
				</div> -->
				<div class="p-3"></div>
			</div>
		</div>
	</div>
	<!-- / HOW WE WORK -->
	<hr>
	<!-- OUR SOLUTIONS -->
	<div class="fluid how-we-work" id="our-solutions">
		<div class="container">
			<div class="p-4"></div>
			<h1 class="text-center">OUR SOLUTIONS
				<div class="heading"></div>
			</h1>
			<div class="p-4"></div>
			
			<!-- solutions sigle row loop -->
			<div class="row text-center">
				
				<div class="col-md-3 col-sm-6 p-4">
					<div class="box">
						<a href="#">
							<img src="{{asset('assets/frontend/assets/img/erp.svg')}}" alt="erp by azonedev" width="100%" height="170px" class="p-4">
							<div class="p-2">ERP-dev</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 p-4">
					<div class="box">
						<a href="#">
							<img src="{{asset('assets/frontend/assets/img/ecom.svg')}}" alt="ecommerce by azonedev" width="100%" height="170px" class="p-4">
							<div class="p-2">e-Ecommerce</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 p-4">
					<div class="box">
						<a href="#">
							<img src="{{asset('assets/frontend/assets/img/ad-dev.svg')}}" alt="online add or Classfied website by azonedev" width="100%" height="170px" class="p-4">
							<div class="p-2">Classfied</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 p-4">
					<div class="box">
						<a href="#">
							<img src="{{asset('assets/frontend/assets/img/dev-portal.svg')}}" alt="dev-portal by azonedev" width="100%" height="170px" class="p-4">
							<div class="p-2">Newsportal</div>
						</a>
					</div>
				</div>

				<div class="p-3"></div>
			</div>
			<!-- / solutions sigle row loop -->
		</div>
	</div>
	<!-- / OUR SOLUTIONS -->
	<hr>
	<!-- OUR TEAM -->
	<div class="fluid how-we-work" id="team">
		<div class="container">
			<div class="p-4"></div>
			<h1 class="text-center">OUR STRONG TEAM
				<div class="heading"></div>
			</h1>
			<div class="p-4"></div>
			
			<!-- team sigle row loop -->
			<div class="row team text-center">
				<div class="col-md-3 col-sm-6 p-3">
					<div class="box-1">

						<img src="{{asset('assets/frontend/assets/img/atif.jpg')}}" width="70%" style="border:5px solid var(--two);border-radius: 50%;">
						<div class="p-2"></div>
						<h4>Md. Niamat Ullah Atif</h4>
						<div class="p-2">CEO of Mamujor</div>
						<span class="p-2"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></span>
						<span class="p-2"><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></span>
						<span class="p-2"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 p-4">
					<div class="box-1">

						<img src="{{asset('assets/frontend/assets/img/hadi.jpg')}}"  width="70%" style="border:5px solid var(--two);border-radius: 50%;">
						<div class="p-2"></div>
						<h4>Hadi Jamman</h4>
						<div class="p-2">Founder & Chairman of Mamujor</div>

						<span class="p-2"><a href="https://web.facebook.com/hadijaman" target="_blank"><i class="fa fa-facebook"></i></a></span>

						<span class="p-2"><a href="https://www.linkedin.com/in/hadi-jaman-a59570155/" target="_blank"><i class="fa fa-linkedin"></i></a></span>

						<span class="p-2"><a href="https://twitter.com/hadijaman1" target="_blank"><i class="fa fa-twitter"></i></a></span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 p-4">
					<div class="box-1">

						<img src="{{asset('assets/frontend/assets/img/rofi.jpg')}}" width="70%" style="border:5px solid var(--two);border-radius: 50%;">
						<div class="p-2"></div>
						<h4>ASM ROFI UDDIN</h4>
						<div class="p-2">Wordpress Developer</div>
						<span class="p-2"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></span>
						<span class="p-2"><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></span>
						<span class="p-2"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 p-4">
					<div class="box-1">

						<img src="{{asset('assets/frontend/assets/img/abdullah.jpg')}}" width="70%" style="border:5px solid var(--two);border-radius: 50%;">
						<div class="p-2"></div>
						<h4>Abdullah Al Mamun</h4>
						<div class="p-2">Full Stack Developer ( Laravel PHP)</div>

						<span class="p-2"><a href="https://www.facebook.com/abdullah.me.info" target="_blank"><i class="fa fa-facebook"></i></a></span>

						<span class="p-2"><a href="https://www.linkedin.com/in/abdullah18/" target="_blank"><i class="fa fa-linkedin"></i></a></span>

						<span class="p-2"><a href="https://twitter.com/ceo_of_azonedev" target="_blank"><i class="fa fa-twitter"></i></a></span>
					</div>
				</div>
				<div class="p-3"></div>
			</div>
			<!-- / team sigle row loop -->

			<!-- team sigle row loop -->
			<div class="row team text-center">
				<div class="col-md-3 col-sm-6 p-3">
				
					<div class="box-1">

						<img src="{{asset('assets/frontend/assets/img/amir.jpg')}}" width="70%" style="border:5px solid var(--two);border-radius: 50%;">
						<div class="p-2"></div>
						<h4>Amir Hamja</h4>
						<div class="p-2">Graphic Designer & Web Developer</div>
						<span class="p-2"><a href="https://www.facebook.com/amirhamza29?_rdc=1&_rdr" target="_blank"><i class="fa fa-facebook"></i></a></span>
						<span class="p-2"><a href="https://www.linkedin.com/in/amir-hamza-iu/" target="_blank"><i class="fa fa-linkedin"></i></a></span>
						<span class="p-2"><a href="https://twitter.com/hamjaiu" target="_blank"><i class="fa fa-twitter"></i></a></span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 p-4">
					<div class="box-1">

						<img src="{{asset('assets/frontend/assets/img/najir.jpg')}}" width="70%" style="border:5px solid var(--two);border-radius: 50%;">
						<div class="p-2"></div>
						<h4>Najir Ahamed</h4>
						<div class="p-2">Wordpress Developer</div>

						<span class="p-2"><a href="https://www.facebook.com/najir.ahamed.71" target="_blank"><i class="fa fa-facebook"></i></a></span>

						<span class="p-2"><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></span>

						<span class="p-2"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 p-4">
					<div class="box-1">

						<img src="{{asset('assets/frontend/assets/img/turan.jpg')}}"  width="70%" style="border:5px solid var(--two);border-radius: 50%;">
						<div class="p-2"></div>
						<h4>KAZI ALAM</h4>
						<div class="p-2">Web Developer</div>
						<span class="p-2"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></span>
						<span class="p-2"><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></span>
						<span class="p-2"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 p-4">
					<div class="box-1">

						<img src="{{asset('assets/frontend/assets/img/rasel.jpg')}}"  width="70%" style="border:5px solid var(--two);border-radius: 50%;">
						<div class="p-2"></div>
						<h4>SHARFUZZMAN RASEL </h4>
						<div class="p-2">Laravel Developer</div>

						<span class="p-2"><a href="https://www.facebook.com/sharfuzzaman" target="_blank"><i class="fa fa-facebook"></i></a></span>

						<span class="p-2"><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></span>

						<span class="p-2"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></span>
					</div>
				</div>
				<div class="p-3"></div>
			</div>
			<!-- / team sigle row loop -->
		</div>
	</div>
	<!-- / OUR TEAM -->

	<!-- TECHNOLOGIES -->
	<div class="fluid about-company" id="technologies">
		<div class="container">
			<div class="p-4"></div>
			<h1 class="text-center">TECHNOLOGIES 
				<div class="heading-w"></div>
			</h1>
			<div class="p-4"></div>
			
			<div class="row text-center">
				<div class="col-6 col-lg-2 col-md-2 col-sm-4 p-1">
					<img src="{{asset('assets/frontend/assets/img/php.png')}}" width="100px" alt="">
					<p>PHP</p>
				</div>
				<div class="col-6 col-lg-2 col-md-2 col-sm-4 p-1">
					<img src="{{asset('assets/frontend/assets/img/laravel.png')}}" width="100px" alt="">
					<p>Laravel</p>
				</div>

				<div class="col-6 col-lg-2 col-md-2 col-sm-4 p-1">
					<img src="{{asset('assets/frontend/assets/img/wordpress.png')}}" width="100px" alt="">
					<p>WordPress</p>
				</div>

				<div class="col-6 col-lg-2 col-md-2 col-sm-4 p-1">
					<img src="{{asset('assets/frontend/assets/img/asp.png')}}" width="100px" alt="">
					<p>ASP.NET</p>
				</div>


				<div class="col-6 col-lg-2 col-md-2 col-sm-4 p-1">
					<img src="{{asset('assets/frontend/assets/img/rest-api.png')}}" alt="">
					<p>REST API</p>
				</div>

				<div class="col-6 col-lg-2 col-md-2 col-sm-4 p-1">
					<img src="{{asset('assets/frontend/assets/img/js.png')}}" width="100px" alt="">
					<p>JavaScript</p>
				</div>

				<div class="col-6 col-lg-2 col-md-2 col-sm-4 p-1">
					<img src="{{asset('assets/frontend/assets/img/vue-js.png')}}" width="100px" alt="">
					<p>Vue.js</p>
				</div>

				<div class="col-6 col-lg-2 col-md-2 col-sm-4 p-1">
					<img src="{{asset('assets/frontend/assets/img/angular.png')}}" width="100px" alt="">
					<p>Angular</p>
				</div>

				<div class="col-6 col-lg-2 col-md-2 col-sm-4 p-1">
					<img src="{{asset('assets/frontend/assets/img/react.png')}}" width="100px" alt="">
					<p>React</p>
				</div>

				<div class="col-6 col-lg-2 col-md-2 col-sm-4 p-1">
					<img src="{{asset('assets/frontend/assets/img/mysql.png')}}" width="100px" alt="">
					<p>MySql</p>
				</div>

				<div class="col-6 col-lg-2 col-md-2 col-sm-4 p-1">
					<img src="{{asset('assets/frontend/assets/img/sql.png')}}" width="100px" alt="">
					<p>SQL</p>
				</div>

				<div class="col-6 col-lg-2 col-md-2 col-sm-4 p-1">
					<img src="{{asset('assets/frontend/assets/img/ajax.png')}}" width="100px" alt="">
					<p>Ajax</p>
				</div>
				<div class="col-6 col-lg-2 col-md-2 col-sm-4 p-1">
					<img src="{{asset('assets/frontend/assets/img/jquery.png')}}" width="100px" alt="">
					<p>jQuery</p>
				</div>
				<div class="col-6 col-lg-2 col-md-2 col-sm-4 p-1">
					<img src="{{asset('assets/frontend/assets/img/bs.png')}}" width="100px" alt="">
					<p>BootStrap</p>
				</div>

				<div class="col-6 col-lg-2 col-md-2 col-sm-4 p-1">
					<img src="{{asset('assets/frontend/assets/img/gulp.png')}}" width="100px" alt="">
					<p>Gulp</p>
				</div>

				<div class="col-6 col-lg-2 col-md-2 col-sm-4 p-1">
					<img src="{{asset('assets/frontend/assets/img/sass.png')}}" width="100px" alt="">
					<p>SASS</p>
				</div>
				<div class="col-6 col-lg-2 col-md-2 col-sm-4 p-1">
					<img src="{{asset('assets/frontend/assets/img/css.png')}}" width="100px" alt="">
					<p>CSS</p>
				</div>
				<div class="col-6 col-lg-2 col-md-2 col-sm-4 p-1">
					<img src="{{asset('assets/frontend/assets/img/html.png')}}" width="100px" alt="">
					<p>HTML</p>
				</div>
			</div>
			<div class="p-3"></div>
		</div>
	</div>
	<!-- TECHNOLOGIES -->

			<!-- footer -->
		<footer>
			<div class="fluid">
				<div class="middle">
					<div class="container">
						<div class="p-4"></div>
						<div class="row p-1">
							<div class="col-md-4 col-sm-6">
								<h2>Address & Contact</h2>
								<i class="fa fa-home"></i><a href="//maps.google.com/maps?q=Mirpur-10, Dhaka, Bangladesh" class="a-white" data-lity> Mirpur-10, Dhaka, Bangladesh</a>
								<br>
								<i class="fa fa-phone"></i><a href="tel:123-456-7890" class="a-white"> + 123-456-7890</a>
								<br>
								<i class="fa fa-envelope"></i><a href="mailto:example@mail.com" class="a-white"> example@mail.com</a>
								<br>
								<div class="p-2"></div>
								<h2>Social Link</h2>
								
								<div class="row p-3">
										<div class="col-4 col-sm-4 d-block">
											<a href="#" target="_blank">
												<div class="footer-top-icon">
													<i class="fa fa-facebook"></i>
													<small>Facebook</small>
												</div>
											</a>
										</div>
										<div class="col-4 col-sm-4 d-block">
											<a href="#" target="_blank">
												<div class="footer-top-icon">
													<i class="fa fa-twitter"></i>
													<small>Twitter</small>
												</div>
											</a>
										</div>
										<div class="col-4 col-sm-4 d-block">
											<a href="#" target="_blank">
												<div class="footer-top-icon">
													<i class="fa fa-youtube-play"></i>
													<small>Youtube</small>
												</div>
											</a>
										</div>
								</div>
								
							</div>			
							<div class="col-md-4 col-sm-6">
								<h2>Quick Link </h2>
								<a href="#"><p>Admission</p></a>
								<a href="#departments"><p>Departments</p></a>
								<a href="#"><p>Training</p></a>
							 	<a href="#about-company"><p>About Company</p></a>
							 	<a href="#how-we-work"><p>How We Work</p></a>
							 	<a href="#our-solutions"><p>Our Solutions</p></a>
							 	<a href="#team"><p>Our Team</p></a>
							 	<a href="#technologies"><p>Technologies</p></a>
							</div>			
							<div class="col-md-4 col-sm-6">
                                <h2>Up comming event :</h2>
                                <div class="p-2"></div>
								<img src="{{asset('assets/frontend/assets/img/team.svg')}}" width="100%" style="max-width: 100%;" alt="">
							</div>			
						</div>
						<div class="p-4"></div>

					</div>
				</div>
			</div>
			<div class="fluid footer-two">
				<div class="bottom">
					<div class="container">
						<div class="row p-3">
							<div class="col-md-6 col-sm-6">
								<div class="footer-bottom float-left"><a href="#">DevPortal</a> &copy; 2020</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="footer-bottom float-right">Technical Help &copy; <a href="#" target="_blank"> Mamurjor</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- /footer -->

	<!-- bootstrap -->
	<script src="{{asset('assets/frontend/assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/frontend/assets/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/frontend/assets/js/bootstrap.min.js')}}"></script>

	<!-- js & plugins -->
	<script src="{{asset('assets/frontend/assets/js/slider-slick.js')}}"></script>
	<script src="{{asset('assets/frontend/assets/js/main.js')}}"></script>

	<script>
		$(document).ready(function(){
		  $('.demo').slick({
		  	autoplay:true,
		  	
 			  // nextArrow: '<i class="fa fa-arrow-right"></i>',
 			  // prevArrow: '<i class="fa fa-arrow-left"></i>',				

		  });
		});
	</script>

</body>
</html>