@extends('frontend.Frontend-master')

@section('main')
    <hr>
	<div class="fluid p-5" style="background: url('assets/img/full-bg.svg');">
	<div class="p-2"></div>
		<h2 class="text-center">Our All Courses</h2>
		<div class="heading"></div>
		<div class="p-4"></div>
		<div class="row ">

			@foreach ($course as $item)
				<!-- single course -->
			<div class="col-lg-3 col-md-4 col-sm-6 p-3">
				<div class="course-box">
					<div class="p-1"></div>

					<img src='{{asset("$item->feature_image")}}' width="100%" height="160px" alt="">

					<hr style="border:1px solid var(--two)">

					<h5>{{$item->name}}</h5>
					<div class="p-1"></div>

					<div class="row">
						<div class="col-6">
							{{-- <h6>Course Fee:</h6>
							<span><del>45,000 BDT</del></span> --}}
							<h6>{{$item->course_fee}} BDT</h6>

						</div>
						<div class="col-6">
							<h6>Lession : {{$item->lession}}</h6>
						</div>
						<div class="col-6">
							<h6>Duration : </h6>
						</div>
						<div class="col-6">
							{{$item->duration}}
						</div>
					</div>

					<hr style="border:1px solid var(--two)">

					<div class="row">
						<div class="col-5"><a href="{{url('/details-course')}}-{{$item->id}}"><button class="btn primary-btn">Details</button></a></div>
						<div class="col-7">
						@if (Session::has('user_id'))
							<a href="{{url('/enroll-course')}}-{{$item->id}}" class="d-block  float-right"><button class="btn primary-btn btn-danger active">Enroll</button></a>
						@else
							<a href="{{url('/login/enroll-course')}}-{{$item->id}}" class="d-block  float-right"><button class="btn primary-btn btn-danger active">Enroll</button></a>	
						@endif

						</div>
					</div>

					<div class="p-1"></div>
					</div>
			</div>
			<!-- /single course -->
			@endforeach
			
		</div>
	<div class="p-3"></div>
	</div>
	<hr>
@endsection