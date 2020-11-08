<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>adDev by azOneDev</title>
	     
			@yield('admin.partials.extra-css')

			@include('admin.partials.css-links')

	<!-- custom internal css to get value of variables if need-->
	<style>
		:root{
			--light-green:#0C9977;
			--white:#FFFFFF;
			--light-yellow:#FCAF01;
			--black:#303030;
			--light:#F3F5F4;
			--box-shadow: 0px 2px 3px 0px rgba(202, 202, 202, 0.75);
		}
	</style>
	<!-- Custom stlylesheet -->
	<link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading text-center">
							<br>
							<h2 class="panel-title ">Register Here :)</h2>
							<br>
							@if (Session::has('msg'))
								<p class="text-danger">
									{{Session('msg')}}
								</p>
							@endif
                        </div>
                        <div class="panel-body">
							 <form action="{{url('/register/save')}}" method="post">
								@csrf     
								<div class="form-group">
									<input name="name" type="text" class="form-control" placeholder="Name" required="required">
								</div>     
								<div class="form-group">
									<input name="email" type="email" class="form-control" placeholder="Email" required="required">
								</div>     
								<div class="form-group">
									<input name="mobile_no" type="text" class="form-control" placeholder="Phone" required="required">
								</div>
								<div class="form-group">
									<input name="password" type="password" class="form-control" placeholder="Password" required="required">
								</div>
								<input type="hidden" value="{{$re_url}}" name="url">

                                    <div class="form-group">
										<button type="submit" class="btn btn-success btn-block">Register</button>
									</div>
                                </fieldset>
							</form>
							<br>
							<p class="text-center"><a href="{{url('/login')}}">If already have and account ? Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</body>
</html>