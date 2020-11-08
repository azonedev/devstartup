
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