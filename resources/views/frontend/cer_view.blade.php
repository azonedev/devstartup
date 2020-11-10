@extends('frontend.Frontend-master')

@section('main')
    <hr>
    <div class="container p-3">
        <div  style="border:1px solid blue">
            <div id="cer_img">
                @forelse ($result as $item)
                    <img  src='{{asset("$item->cer_img_path")}}' width="100%" alt="">
                @empty
                    <h3 class="text-center text-danger">Sorry !! <br>Certificate haven't found !</h3>
                @endforelse
            </div>
        </div>
        <div class="p-2"></div>
        <button onclick="printDiv('cer_img')" class="btn secondary-btn"> <i class="fa fa-print"></i> Print</button>
    </div>
    <hr>
@endsection

@section('extra-js')
    <script>
		function printDiv(divName) {
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;
		}
	</script>

@endsection