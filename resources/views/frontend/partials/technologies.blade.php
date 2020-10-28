	<!-- TECHNOLOGIES -->
	<div class="fluid about-company" id="technologies">
		<div class="container">
			<div class="p-4"></div>
			<h1 class="text-center">TECHNOLOGIES 
				<div class="heading-w"></div>
			</h1>
			<div class="p-4"></div>
			
			<div class="row text-center">
				@foreach ($tech as $item)
					@if ($item->status=="active")
						<div class="col-6 col-lg-2 col-md-2 col-sm-4 p-1">
							<img src='{{asset("$item->img")}}' width="100px" alt="">
							<p>{{$item->name}}</p>
						</div>
					@endif
				@endforeach
			</div>
			<div class="p-3"></div>
		</div>
	</div>
	<!-- TECHNOLOGIES -->