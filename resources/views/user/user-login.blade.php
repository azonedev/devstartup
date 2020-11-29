
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>azOneDev login to admin</title>

        
			@yield('admin.partials.extra-css')

			@include('admin.partials.css-links')

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading text-center">
							<h2 class="panel-title ">Please login</h2>
							<br>
							@if (Session::has('msg'))
								<p class="text-danger">
									{{Session('msg')}}
								</p>
							@endif
                        </div>
                        <div class="panel-body">
							<form role="form" action="{{url('/login/match')}}" method="post">
								@csrf
                                <fieldset>
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control" placeholder="E-mail" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input name="password" type="password" class="form-control" placeholder="Password" required="required">
                                    </div>
                                    {{-- <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div> --}}
									<!-- Change this to a button or input when using this as a form -->
									  <input name="redirect_url" value="{{$re_url}}" type="text" hidden>
                                    <button type="submit" class="btn btn-success btn-block">Log in</button>
                                </fieldset>
							</form>
							<br>
							<p class="text-center"><a href="{{url('/register')}}/{{$re_url}}">Create an Account</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
