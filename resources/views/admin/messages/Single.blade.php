@extends('admin.admin-master')

  
@section('main-content')
    @foreach ($message as $item)
        <div class="panel panel-green">
            <div class="panel-heading">
                Subject : {{$item->project_type}}
            </div>
            <div class="panel-body">
                <p>{!!$item->details!!}</p>
            </div>
            <div class="panel-footer">
                <h5 class="text-primary">From :</h5>
                <em>
                   Name:{{$item->name}} <br>
                   E-mail: <a href="mailto:{{$item->email}}">{{$item->email}}</a> <br>
                   Phone: <a href="tel:{{$item->mobile}}">{{$item->mobile}}</a> <br>
                   at @ {{$item->date}} <br>
                </em>
                <br>
                <br>
                <form action="{{url('/admin/message/update')}}/{{$item->id}}" method="get">
                    <button class="btn btn-danger">Mark as read</button>
                </form>
            </div>
        </div>
    @endforeach
@endsection