@extends('frontend.Frontend-master')

@section('main')
	@foreach ($course as $item)
		@php
			$courseId = $item->id;
			$title = $item->single_page_name;
			$lession = $item->lession;
			$class = $item->class;
			$duration = $item->duration;
			$sort_outline = $item->sort_outline;
			$why = $item->why_this;
			$fee = $item->course_fee;
			$sort_arr = explode(',',$sort_outline);
			$start = $item->start;
		@endphp
	@endforeach
	<div class="m-0"></div>
	<div class="fluid" style="background: url('{{asset('assets/frontend/assets/img/train-bg.svg')}}');">
		<div class="container">
			<div class="p-5"></div>
				<div class="header-body dev-form p-3 bg-white" style="background: url('{{asset('assets/frontend/assets/img/train-bg-23-0.svg')}}');">
					<h2>{{$title}}</h2>
					@for ($i = 0; $i < count($sort_arr); $i++)
						
					<h5> <i class="fa fa-arrow-right"></i> {{$sort_arr[$i]}}</h5>
					@endfor
					<p style="font-weight: bold;">{{$why}}</p>
				</div>
				{{-- <div class="small-bg-right"></div> --}}
			<div class="p-4"></div>
		</div>		
	</div>
	<div class="p-3"></div>
	<div class="fluid" style="background: url('{{asset('assets/frontend/assets/img/train-bg-23.svg')}}');">
		<div class="container">
			<h2 class="text-center">Course Outline</h2>
			<div class="heading"></div>
		</div>
		<div class="container">
			<div class="p-3"></div>
			<div class="row">
				<div class="col-lg-9 col-md-8">
					<div class="row">
						<!-- single outline box -->
						@foreach ($outline as $item)
							<div class="col-lg-4 col-md-6 pb-3">
							<div class="outline-box">
									<h4>{{$item->lession_title}}</h4>
									@php
										$lession_items = $item->lession_items;
										$item_arr = explode(',',$lession_items);
									@endphp
									<hr style="border:1px solid var(--two)">
										@for ($i = 0; $i < count($item_arr); $i++)
											<li>{{$item_arr[$i]}}</li>
										@endfor
								</div>
							</div>
						@endforeach
						<!-- /single outline box -->

					</div>
				</div>
				<div class="col-lg-3 col-md-4">

					<div class="p-2"></div>
					<div class="text-center">
						<a href="{{url('/enroll-course')}}-{{$courseId}}">
							<button class="btn secondary-btn">Enroll</button>
						</a>
					</div>
					<div class="p-2"></div>

					<table class="table table-dark">
					  <thead>
					    <tr>
					      <th scope="col">Course Fee</th>
					      <th scope="col">{{$fee}} BDT</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td>Lessons</td>
					      <td>{{$lession}}</td>
					    </tr>
					    <tr>
					      <td>Duration</td>
					      <td>{{$duration}}</td>
					    </tr>
					    <tr>
					      <td>Class</td>
					      <td>{{$class}}</td>
					    </tr>
					    @if (!empty($start))
							<tr>
								<td>Courses will be start</td>
								<td>{{$start}}</td>
							</tr>
						@else 
							<tr class="text-center">
								<td colspan="2">Course start date will be published soon</td>
							</tr>
						@endif
						
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	</div>
	<hr>
@endsection