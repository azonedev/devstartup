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
				
				@foreach ($solution as $item)
					@if ($item->status=="active")
						<div class="col-md-3 col-sm-6 p-4">
							<div class="box">
								<a href="{{url('/solution')}}/{{$item->name}}">
									<img src='{{asset("$item->img")}}' alt="erp by azonedev" width="100%" height="170px" class="p-4">
									<div class="p-2">{{$item->name}}</div>
								</a>
							</div>
						</div>
					@endif
				@endforeach

				<div class="p-3"></div>
			</div>
			<!-- / solutions sigle row loop -->
		</div>
	</div>
	<!-- / OUR SOLUTIONS -->
	<hr>