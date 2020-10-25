<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>adDev - admin</title>

    @yield('admin.partials.extra-css')

    @include('admin.partials.css-links')
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->

    @include('admin.partials.menu')

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        @yield('page-title')
                    </h1>
                </div>
            </div>
            @if (Session::has('msg'))
                <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{Session('msg')}}
                </div>
            @endif
            <!-- ... Your content goes here ... -->
            @yield('main-content')
        </div>
    </div>

</div>

    @include('admin.partials.js-links')
    @yield('extra-js')
</body>
</html>
