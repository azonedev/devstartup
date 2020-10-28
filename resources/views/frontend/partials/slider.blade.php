	<!-- slider -->
	<div class="fluid welcome">
		<div class="clear"></div>
		<div class="p-5"></div>
		<div class="container">
			<div class="slider demo">
				@foreach ($slider as $item)
					@if ($item->status == "active")
						<div>
							<div class="p-4"></div>
							<div class="row">
								<div class="col-6">
									
									<h1>{{$item->title}}</h1>
									<p>{{$item->description}}</p>
									<a href="{{$item->link}}"><p class="btn primary-btn">{{$item->btn}}</p></a>
								</div>
								<div class="col-6">
									<img src='{{asset("$item->img")}}' width="100%" alt="">
								</div>
							</div>
						</div>
					@endif
				@endforeach
			</div>
		</div>
	</div>
	<!-- / slider -->