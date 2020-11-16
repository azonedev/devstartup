@extends('admin.admin-master')
@section('page-title')
    Add custom css
@endsection
@section('main-content')
    <form action="{{url('/admin/css/update')}}" method="POST">
        @csrf
    @foreach ($css as $item)
        
        <textarea name="css" id="" cols="10" rows="30" class="form-control">{{$item->css}}</textarea>

    @endforeach
    <br>
    <input type="submit" class="btn btn-primary" value="Save & Update">
    </form>
    <br>
    <br>
@endsection