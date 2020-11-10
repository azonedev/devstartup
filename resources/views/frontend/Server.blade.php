@extends('frontend.Frontend-master')

@section('main')
    <hr>
	<div class="container" style="background: url('{{asset('assets/frontend/assets/img/full-bg.svg')}}');">
	<div class="p-2"></div>
		<div class="p-4"></div>
		<h2 class="text-center">Domain & Hosting</h2>
		<div class="heading"></div>
		<div class="p-4"></div>
		<div class="row ">
            @foreach ($allPlan as $item)
            @if ($item->status=="active")
                			<!-- single services -->
			<div class="col-lg-4 col-md-6 p-3">
				<div class="course-box services">
					<div class="price text-center">
						<h2>{{$item->price}} <small>/-</small></h2>
						<h4>{{$item->price_label}}</h4>
					</div>
					<div class="plan text-center">
						<h1>{{$item->package_name}}</h1>
					</div>
					<div class="feature">
                        @php
                            $feature_arr = explode(',',$item->feature_list);
                        @endphp
                        @for ($i = 0; $i < count($feature_arr); $i++)
                            
						<p><i class="fa fa-check"></i>{{$feature_arr[$i]}}</p>
                        @endfor
					</div>
					<div class="orderm text-center">
						<a href="https://mamu756807.supersite2.srsportal.com/" target="_blank">
							<button class="btn secondary-btn">Order Now</button>
						</a>
						<div class="p-2"></div>
					</div>
				</div>
			</div>
			<!-- /single services -->
            @endif
            @endforeach
			
		</div>
	<div class="p-3"></div>
	</div>
	<hr>
@endsection