@extends('frontend.Frontend-master')
    @foreach ($solution as $item)
        @php
            $blog_img = $item->blog_img;
        $blog_title = $item->blog_title;
        @endphp
    @endforeach
@section('main')
	<div class="m-0"></div>
	<div class="fluid" style="background: url('{{asset('assets/frontend/assets/img/train-bg.svg')}}');">
		<div class="container">
			<div class="p-4"></div>
				<div class="solution-header dev-form p-3 bg-white" style="background: url('{{asset("$blog_img")}}');  background-size: 100% 550px;background-repeat: no-repeat;">
				</div>
				
			<div class="p-4"></div>
		</div>		
	</div>
    <div class="p-3"></div>

	<div class="fluid" style="background: url('{{asset('assets/frontend/assets/img/train-bg-23.svg')}}');">
		<div class="container">
			<h2 class="text-center">{{$blog_title}}</h2>
			<div class="heading"></div>
		</div>
		<div class="container">
			<div class="p-3"></div>
			<div class="row">
				<!-- product feature body -->
				{{-- <div class="col-lg-9 col-md-8 bg-white">

					<div class="p-3"></div>
					<div class="h3 sub-head">Why this product for you ?</div>
					<div class="p-1"></div>
					<h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos commodi asperiores hic ab ut nesciunt aut culpa quisquam rerum officiis, saepe sint, neque esse aliquid doloremque delectus aperiam, amet iusto.</h5>

					<div class="p-3"></div>
					<div class="h3 sub-head">The top features for you !</div>
					<div class="p-2"></div>

					<div class="solution-feature">
						<p><i class="fa fa-check-square-o"></i> Employee Records and Database</p>
						<p><i class="fa fa-check-square-o"></i> Employee Self-Service Portal</p>
						<p><i class="fa fa-check-square-o"></i>  Job History</p>
						<p><i class="fa fa-check-square-o"></i>   Salary History</p>
						<p><i class="fa fa-check-square-o"></i>     Disciplinary History</p>
						<p><i class="fa fa-check-square-o"></i> Insurance Plans</p>
						<p><i class="fa fa-check-square-o"></i>  Banking and Tax Details</p>
						<p><i class="fa fa-check-square-o"></i>  Time Off Used and Accrued</p>
						<p><i class="fa fa-check-square-o"></i>  Job Requisitions</p>
						<p><i class="fa fa-check-square-o"></i> Job Descriptions</p>
						<p><i class="fa fa-check-square-o"></i>   Job Board Posting</p>
						<p><i class="fa fa-check-square-o"></i> Applicant Evaluation</p>
						<p><i class="fa fa-check-square-o"></i>   Candidate Pre-Screening </p>
						<p><i class="fa fa-check-square-o"></i>  Auto-Response</p>
						<p><i class="fa fa-check-square-o"></i>   Job Offer Extension</p>
						<p><i class="fa fa-check-square-o"></i>    Background Check</p>
						<p><i class="fa fa-check-square-o"></i> Onboarding</p>
						<p><i class="fa fa-check-square-o"></i>  Branded Company Job Site</p>
					</div>
					<div class="p-2"></div>
					<p>Is it for your ?</p>
					<button class="btn secondary-btn">For Order : Call +0123 457 698</button>
					<div class="p-3"></div>
					<p>Notice : all features are listed randomly :)</p>
				</div> --}}
                <!-- /product feature body -->
                
                {{-- product feature body --}}
                @foreach ($solution as $item)
                <div class="col-lg-9 col-md-8 bg-white">
                    {!! $item->blog !!}
                    <div class="p-2"></div>
					<p>Is it for your ?</p>
					<button class="btn secondary-btn">{{$item->btn}}</button>
					<div class="p-3"></div>
					<p>Notice : all features are listed randomly :)</p>
                </div>
                @endforeach
                {{-- / product feature body --}}

				<!-- others product -->
				<div class="col-lg-3 col-md-4 bg-white">
					<div class="p-3"></div>
					<div class="sub-head">Check More</div>
					<div class="p-1"></div>

					@foreach ($solutionAll as $item)
                        <!-- others-single -->
					<div class="solution-others p-3 text-center">
						<a href="{{url('/solution')}}/{{$item->name}}-{{$item->id}}">
							<img src='{{asset("$item->img")}}' width="100%" alt="">
							<div class="p-1"></div>
							<h4 style="color:#FF2E8C">{{$item->name}}</h4>
						</a>
					</div>
					<div class="p-1"></div>
					<!-- / others-single -->
                    @endforeach

				</div>
				<!-- others product -->

			</div>
		</div>
	</div>
	</div>
	<hr>
@endsection