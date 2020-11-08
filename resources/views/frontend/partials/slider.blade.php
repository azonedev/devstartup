	<!-- slider -->
	<div class="fluid welcome">
		<div class="clear"></div>
		
		<div class="container">
			<div class="slider demo slider-half">
				@foreach ($slider as $item)
					@if ($item->status == "active")
						<div class="slider">
							<div class="p-3"></div>
							<div class="row slider-row">
								<!-- col-lg-6 col-md-6 col-sm-6 -->
								<div class="col-6 slider-col-text float-right">
									<div class="d-block">
										<div class="p-lg-5"></div>
										<h1 class="slider-h1">{{$item->title}}</h1>
										<p style="font-size:20px;">{{$item->description}}</p>
										<a href="{{$item->link}}"><p class="btn primary-btn">{{$item->btn}}</p></a>
									</div>
								</div>
								<div class="col-6 slider-col-img float-right">
									<div class="d-block">
									<img src='{{asset("$item->img")}}' width="100%" alt="">
										
									</div>
								</div>
							</div>
						</div>
					@endif
				@endforeach
			</div>
			<div class="slider demo d-none slider-full">
				@foreach ($slider as $item)
					@if ($item->status == "active")
						<div class="slider">
							<div class="p-3"></div>
							<div class="row slider-row">
								<!-- col-lg-6 col-md-6 col-sm-6 -->
								
								<div class="col-12">
									<div class="d-block">
									<img src='{{asset("$item->img")}}' width="100%" alt="">
										
									</div>
								</div>
								<div class="col-12 slider-text">
									<div class="d-block">
										<div class="p-lg-5"></div>
										<h1 class="slider-h1">{{$item->title}}</h1>
										<p style="font-size:16px;">{{$item->description}}</p>
										<a href="{{$item->link}}"><p class="btn primary-btn">{{$item->btn}}</p></a>
									</div>
								</div>
							</div>
						</div>
					@endif
				@endforeach
			</div>
		</div>
	</div>
	<!-- / slider -->