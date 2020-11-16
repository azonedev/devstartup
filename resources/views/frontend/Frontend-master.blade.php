<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mamurjor</title>
	<link rel="icon" href="{{asset('assets/frontend/assets/img/logo.png')}}" type="image/png" sizes="16x16">
    
    @include('frontend.partials.css-links')

    <style>
        @include('frontend.css');
    </style>

</head>
<body>
    {{-- retrive setting data --}}
    @foreach ($setting as $item)
        @php
            $logo = $item->logo;
            $logo_text = $item->logo_text;
            $moto = $item->moto;
            $address = $item->address;
            $google_map = $item->google_map;
            $phone = $item->phone;
            $mail = $item->mail;

            $facebook = $item->fb;
            $youtube = $item->tw;
            $linkedin = $item->ln;

            $event_title = $item->event_title;
            $event_img = $item->event_img;
            $event_link = $item->event_link;

            $copy_left = $item->copy_left;
            $copy_left_link = $item->copy_left_link;
            $copy_right = $item->copy_right;
            $copy_right_link = $item->copy_right_link;
            
            $status = $item->status;
        @endphp
    @endforeach
    {{-- retrive setting data --}}

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