@extends('frontend.frontend-master')

@section('main')

	<div class="fluid bg-light">
		<div class="p-5"></div>
		<div class="container dev-form bg-white p-4">
			<h2>Send us a inquiry</h2>
			<div class="p-2"></div>
            <form action="{{url('/dept/development/save')}}" method="POST">
                @csrf
				<div class="form-group">
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<label for="Name">Name / Company</label>
							<input type="text" class="form-control" name="name" required>
						</div>
						<div class="col-md-4 col-sm-4">
							<label for="Name">Mobile no</label>
							<input type="text" class="form-control" name="mobile" required>
						</div>
						<div class="col-md-4 col-sm-4">
							<label for="Name">E-mail</label>
							<input type="text" class="form-control" name="email" required>
						</div>
					</div>
				</div>
				<hr style="border:1px solid var(--two)">
				<div class="form-group">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<label for="Name">Project type</label>
							<input type="text" class="form-control" name="project_type" required>
						</div>
						<div class="col-md-6 col-sm-6">
							<label for="Name">Have any example ? <small>optional</small></label>
							<input type="text" class="form-control" name="example" placeholder="If example type or paste link :) else not">
						</div>
					</div>
				</div>
				<hr style="border:1px solid var(--two)">
				<div class="form-group">
					<label for="details">Project feature & description </label>
					<textarea name="details" id="" width="100%" cols="30" rows="10" required>Write here your   requirements</textarea>
				</div>
				<div class="form-group">
				    <div class="form-check">
				      <input class="form-check-input" type="checkbox" id="gridCheck" required>
				      <label class="form-check-label" for="gridCheck">
				        Check me out
				      </label>
				    </div>
				 </div>
				<div class="p-3"></div>
				<input type="submit" class="btn primary-btn" value="Send to developer team">
				<div class="p-3"></div>
			</form>
		</div>
	</div>
	<hr>
@endsection

@section('extra-js')
     <script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
     <script>
         CKEDITOR.replace('details');
     </script>
@endsection