@extends('frontend.Frontend-master')

@section('main')
	<div class="m-0"></div>
	<div class="p-4"></div>
	<div class="fluid" style="background: url('{{asset('assets/frontend/assets/img/train-bg-23.svg')}}');">
		<div class="container">
			<h2 class="text-center">Free video lession </h2>
			<div class="heading"></div>
		</div>
		<div class="container">
			<div class="p-3"></div>
					<div class="row">
                        @foreach ($videoCategory as $item)
                            <div class="col-lg-4 col-md-6 pb-3">
                            <a href="{{url('video-lession')}}/{{$item->category}}-{{$item->id}}" style="color:white;">
                                <div class="outline-box bg-dark">
                                    <div class="h1 text-center">{{$item->category}}</div>
                                </div>
                            </a>
                            </div>
                        @endforeach
					</div>
		</div>
	</div>
	</div>
	<hr>
@endsection