@extends('frontend.frontend-master')
@section('main')
    <hr>
	<div class="fluid bg-light">
			<div class="container p-5">
				<div class="p-5"></div>
				<div class="success-page bg-white m-5 p-5">

						<article class="contact">
							<h2 class="text-center">Next step contact to ...</h2>
							<div class="p-2"></div>
							@foreach ($setting as $item)
								
							<p>Developer team : <a href="tel:+012 345 678">{{$item->call_dev}}</a></p>
							<p>Support : <a href="tel:+012 345 678">{{$item->call_services}}</a></p>
							<p>Admin : <a href="tel:+012 345 678">{{$item->call_center}}</a></p>
							@endforeach

						</article>
						<div class="p-3"></div>

						<div class="text-success text-center">
							<i class="fa fa-check" style="font-size: 50px;"></i>
							<div class="p-2"></div>
							<h3>Thanks for send your requirements :)</h3>
						</div>
						<div class="p-3"></div>
				</div>
				<div class="p-5"></div>
			</div>
    </div>
    <hr>
@endsection