@extends('admin.profile-master')

@section('page-title')
    <a href="{{url('/profile')}}">Dashboard</a>
@endsection
@section('extra-css')
    <link rel="stylesheet" href="{{asset('/assets/lity/lity.min.css')}}">
@endsection
@section('main-content')
	<div class="p-4">
		<h3 class="text-center">{{$coursename}}</h3>
	</div>	
	<div class="row">
		@forelse($lession as $item)	
		<div class="col-lg-3 col-md-4 col-sm-6">
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

	<hr>
	{{-- pagination --}}
			<div class="col-lg-9">
				<div class="p-3"></div>
				<nav aria-label="Page navigation example">
				  <ul class="pagination justify-content-end">
				   			{{ $lession->links() }}
				  </ul>
				</nav>
			</div>	
			{{-- pagination --}}

@endsection

@section('extra-js')
    <script src="{{asset('/assets/lity/lity.min.js')}}"></script>
@endsection