@extends('frontend.Frontend-master')

@section('main')
    @if ($page == "department")
       @include('frontend.partials.department')
    @elseif($page == "about")
        @include('frontend.partials.about-company')
    @elseif($page == "solution")
        @include('frontend.partials.solution')
    @elseif($page == "team")
        @include('frontend.partials.team')
    @elseif($page == "tech")
        @include('frontend.partials.technologies')
    @endif 
@endsection