@extends('frontend.Frontend-master')

@section('main')
	<div class="m-0"></div>
	<div class="p-4"></div>
	<div class="fluid" style="background: url('{{asset('assets/frontend/assets/img/train-bg-23.svg')}}');">
		<div class="container">
			<h2 class="text-center"> All writer</h2>
			<div class="heading"></div>
		</div>
		<div class="container">
			<div class="p-3"></div>
					<div class="row">
                        @foreach ($auth as $item)
                            <div class="col-lg-4 col-md-6 pb-3">
                            <a href="{{url('blog/writer')}}/{{$item->name}}/{{$item->id}}" style="color:white;">
                                <div class="outline-box bg-dark">
                                    <div class="h1 text-center">{{$item->name}}</div>
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