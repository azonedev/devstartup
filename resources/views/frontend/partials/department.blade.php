	<!-- DEPARTMENTS -->
	<div class="p-3"></div>
	<div id="departments"></div>
	<div class="container">
		<h1 class="text-center">DEPARTMENTS
			<div class="heading"></div>
		</h1>
		<div class="p-4"></div>
		@foreach ($department as $item)

			@if ($item->status == "active")
				<!-- dept -->
				@if ($item->id%2!==0)
					<div class="row">
						<div class="col-md-6">
							<img src='{{asset("$item->img")}}' width="100%" alt="">
						</div>
						<div class="col-md-6 p-3">
							<div class="p-3"></div>
							<p class="sub-head">{{$item->title}}</p>
							<div class="p-3"></div>
							<p style="font-family: 'Hind Siliguri',
    sans-serif;" class="text-cont">{{$item->description}}</p>
							<div class="p-3"></div>
							<a href="{{$item->link}}">
								<button class="btn secondary-btn">{{$item->btn}}</button>
							</a>
						</div>
						<!-- <div class="col-md-4 col-sm-3">
							<img src="assets/img/hosting.svg" width="100%" alt="">
						</div> -->
					</div>
					<!-- /dept -->
					<div class="p-4"></div>
				@else
					<!-- dept -->
					<div class="row">
						<div class="col-md-6 p-3">
							<div class="p-3"></div>
							<p class="sub-head">{{$item->title}}</p>
							<div class="p-3"></div>
							<p style="font-family: 'Hind Siliguri',
    sans-serif;" class="text-cont" class="text-cont">{{$item->description}}</p>
							<div class="p-3"></div>
							<a href="{{$item->link}}">
								<button class="btn secondary-btn">{{$item->btn}}</button>
							</a>
						</div>
						<div class="col-md-6">
							<img src='{{asset("$item->img")}}' width="100%" alt="">
						</div>
					</div>
					<!-- /dept -->
					<div class="p-4"></div>
				@endif
			@endif
		@endforeach

		
	</div>
    <!-- / DEPARTMENTS -->
    
    

	<div class="p-4"></div>