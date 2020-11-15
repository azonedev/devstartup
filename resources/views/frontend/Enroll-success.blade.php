@extends('frontend.frontend-master')
@section('main')
	<div class="fluid bg-light">
			<div class="container p-5">
				<div class="success-page bg-white m-5 p-5">

						<article class="contact">
							<h3 class="text-center">Waiting for conformation or contact ...</h3>
							<div class="p-2"></div>
							@foreach ($setting as $item)
								
							<p>Developer team : <a href="tel:+012 345 678">{{$item->call_dev}}</a></p>
							<p>Support : <a href="tel:+012 345 678">{{$item->call_train}}</a></p>
							<p>Admin : <a href="tel:+012 345 678">{{$item->call_center}}</a></p>
							@endforeach
						</article>
						<div class="p-3"></div>

						<div class="text-success text-center">
							<i class="fa fa-check" style="font-size: 50px;"></i>
							<div class="p-2"></div>
							<h5>Congress enrolled successfully !!</h5>
							<h3>Thanks for your enrollment :)</h3>
						</div>
						<div class="p-3"></div>
				</div>
				<div class="p-5"></div>
			</div>
    </div>
    <hr>
@endsection