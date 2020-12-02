@extends('admin.profile-master')

@section('page-title')
    <a href="{{url('/profile')}}">Dashboard</a>
@endsection

@section('main-content')
	<div class="p-4">
		<h2 class="text-center">
			Profile Setting
			<hr>
		</h3>
	</div>
	<br>
	<div class="container">
		@foreach($profileData as $item)
		<form action="{{url('/profile-update')}}/{{$item->id}}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
                <div class="row">
                    <div class="col-md-6">
						<label for="title">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$item->name}}">
                        </div>
                    
                    <div class="col-md-6">
                        <label for="title">Email</label>
                         <input type="text" class="form-control" name="email" value="{{$item->email}}">   
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
						<label for="title">Phone</label>
                        <input type="text" class="form-control" name="mobile_no" value="{{$item->mobile_no}}">
                        </div>
                    
                    <div class="col-md-6">
                        <label for="title">Password</label>
                         <input type="password" class="form-control" name="password" id="myInput" value="{{$item->password}}"><input type="checkbox" onclick="myFunction()" class="form-inline"> Show Password

                         <script>
						function myFunction() {
						  var x = document.getElementById("myInput");
						  if (x.type === "password") {
						    x.type = "text";
						  } else {
						    x.type = "password";
						  }
						}
						</script>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
						<label for="title">Profile Photo <small>If you don't want to update your profile picture. It's not need to select this field</small> </label>
                        <input type="file" class="form-control" name="photo_url">
                        </div>
                    
                    <div class="col-md-6">
                       <input type="hidden" value="{{$item->photo_url}}" name="photo_prev">
                    </div>
                </div>
			</div>

			<hr>
			<input type="submit" onclick="return confirm('Are you sure to update your profile data ?');" class="btn btn-success" value="Save Changes">
		</form>
		@endforeach
	</div>
@endsection