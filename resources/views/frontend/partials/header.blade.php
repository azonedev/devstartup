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
					  @if (\Request::is('/'))
						  	<a href="#departments" onclick="closeNav()">Departments</a>
					  		<a href="#about-company" onclick="closeNav()">About Company</a>
					  		<a href="#our-solutions" onclick="closeNav()">Our Solutions</a>
					  		<a href="#team" onclick="closeNav()">Our Team</a>
					  		<a href="#technologies" onclick="closeNav()">Technologies</a>
							<a href="" data-toggle="modal" data-target="#exampleModal" onclick="closeNav()"><p>Check / Download Certificate</p></a>
						 
					  @else
						 	<a href="{{url('/home-single-department')}}" onclick="closeNav()">Departments</a>
					  		<a href="{{url('/home-single-about')}}" onclick="closeNav()">About Company</a>
							
					  		<a href="{{url('/home-single-solution')}}" onclick="closeNav()">Our Solutions</a>
					  		<a href="{{url('/home-single-team')}}" onclick="closeNav()">Our Team</a>
							<a href="{{url('/home-single-tech')}}" onclick="closeNav()">Technologies</a>
							<a href="" data-toggle="modal" data-target="#exampleModal" onclick="closeNav()"><p>Check / Download Certificate</p></a>
					  @endif
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