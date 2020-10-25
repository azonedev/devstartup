<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mamurjor</title>
	<link rel="icon" href="{{asset('assets/frontend/assets/img/logo.png')}}" type="image/png" sizes="16x16">
    
    @include('frontend.partials.css-links')

</head>
<body>

    @include('frontend.partials.header')
    <div class="p-4"></div>
    @yield('main')

    {{-- @include('frontend.partials.technologies') --}}
    
    @include('frontend.partials.footer')

    {{-- js & plugins --}}
    @include('frontend.partials.js-links')

    {{-- extra js & plugins --}}
    @yield('extra-js')

    {{-- only for home page --}}
	<script src="{{asset('assets/frontend/assets/js/slider-slick.js')}}"></script>
    <script>
        $(document).ready(function(){
        $('.demo').slick({
            autoplay:true,			
        });
        });
    </script>
    {{-- / only for home page --}}
</body>
</html>