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
				@foreach ($team as $item)
					<div class="col-md-3 col-sm-6 p-3">
						<div class="box-1">

							<img src='{{asset("$item->img")}}'width="70%" style="border:5px solid var(--two);border-radius: 50%;">
							<div class="p-2"></div>
							<h4>{{$item->name}}</h4>
							<div class="p-2">{{$item->title}}</div>
							<span class="p-2"><a href="{{$item->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a></span>
							<span class="p-2"><a href="{{$item->linkedin}}" target="_blank"><i class="fa fa-linkedin"></i></a></span>
							<span class="p-2"><a href="{{$item->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a></span>
						</div>
					</div>
				@endforeach
				<div class="p-3"></div>
			</div>
			<!-- / team sigle row loop -->
		</div>
	</div>
	<!-- / OUR TEAM -->