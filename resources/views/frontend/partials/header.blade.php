	<!-- HEADER -->
	<div class="fluid header fixed-top" id="mian">
		<div class="container">
			<header>
				<a href="{{url('/')}}">
					<div class="logo float-left">
						@if ($status == "text")
							<h1>{{$logo_text}}</h1>
						@else
							<img src='{{asset("$logo")}}' height="90px" alt=""> 
						@endif
					</div>
				</a>

				<!-- menu -->
				<menu>
					<div id="mySidenav" class="sidenav">
					  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					  <a href="#departments" onclick="closeNav()">Departments</a>
					  <a href="#about-company" onclick="closeNav()">About Company</a>
					  {{-- <a href="#how-we-work" onclick="closeNav()">How We Work</a> --}}
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