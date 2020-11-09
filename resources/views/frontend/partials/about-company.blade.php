
	<!-- ABOUT COMPANY -->
	@foreach ($about as $item)
		<div class="fluid about-company" id="about-company">
			<div class="container">
				<div class="p-4"></div>
				<h1 class="text-center">ABOUT COMPANY
					<div class="heading-w"></div>
				</h1>
				<div class="p-4"></div>
				
				<div class="row">
					<div class="col-md-6 p-3">
						<img src='{{asset("$item->img")}}'width="100%" alt="">
						{{-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
								<img class="d-block w-100" src='{{asset("$item->img")}}' alt="First slide">
								  	<div class="carousel-caption d-none d-md-block">
										<h5>About</h5>
										<p>hi</p>
									</div>
								</div>
								<div class="carousel-item">
								<img class="d-block w-100" src='{{asset("$item->img")}}' alt="Second slide">
										<div class="carousel-caption d-none d-md-block">
										<h5>About company</h5>
										<p>hi</p>
									</div>
								</div>
								<div class="carousel-item">
								<img class="d-block w-100" src='{{asset("$item->img")}}' alt="Third slide">
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div> --}}
					</div>
					<div class="col-md-6 p-2">
						<p class="text-cont" style="font-family: 'Hind Siliguri',
    sans-serif;" class="text-cont">{!!$item->description!!}</p>
						<div class="p-2"></div>
						<a href="{{$item->link}}">
						<button class="btn primary-btn">{{$item->btn}}</button>
						</a>
					</div>
					<!-- <div class="col-md-4 col-sm-3">
						<img src="assets/img/hosting.svg" width="100%" alt="">
					</div> -->
					<div class="p-3"></div>
				</div>
			</div>
		</div>
	@endforeach
	<!-- / ABOUT COMPANY -->
	<div class="p-3"></div>