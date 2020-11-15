@extends('frontend.Frontend-master')

@section('extra-css')
    <link rel="stylesheet" href="{{asset('/assets/lity/lity.min.css')}}">
@endsection
@section('main')
	<div class="m-0"></div>
	<div class="p-4"></div>
	<div class="fluid" style="background: url('{{asset('assets/frontend/assets/img/train-bg-23.svg')}}');">
		<div class="container">
			<h2 class="text-center">{{$name}}</h2>
			<div class="heading"></div>
		</div>
		<div class="container">
			<div class="p-3"></div>
					<div class="row">
                        @forelse($videolession as $item)
                            <div class="col-lg-4 col-md-6 pb-3">
                            <a href="{{$item->link}}" data-lity style="color:white;">
								<img src='{{asset("$item->thumbnail")}}' width="100%" alt="{{$item->alt}}">
								<div class="p-1"></div>
								<h4 style="color:black;">{{$item->title}}</h4>
                            </a>
							</div>
							<div class="p-2"></div>
                        @empty 
                            <h2>No data found !</h2>
                        @endforelse
					</div>
		</div>
	</div>
	</div>
	<hr>
@endsection

@section('extra-js')
    <script src="{{asset('/assets/lity/lity.min.js')}}"></script>
@endsection