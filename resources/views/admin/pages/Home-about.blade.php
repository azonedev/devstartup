@extends('admin.admin-master')

@section('page-title','Home / about-company ')

@section('main-content')
    <div class="panel panel-primary ">
        <div class="panel-heading">Update about-company info on website's home page</div> 
        <div class="panel-body">
            @foreach ($aboutData as $item)
                
            <form role="form" action="{{url('admin/home/about/update')}}/{{$item->id}}" method="POST" enctype="multipart/form-data">
                
                @csrf

                <div class="form-group">
                    <label for="Details">Description</label>
                    <textarea name="description" class="form-control" id="" cols="30" rows="10" required>{{$item->description}}</textarea>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <label for="title">Add Link</label>
                        <input type="text" class="form-control" name="link" placeholder="If you don't have link just type #" value="{{$item->link}}" required>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label for="title">Button Name</label>
                        <input type="text" class="form-control" name="btn-name" value=" {{$item->btn}}" required>
                    </div>
                </div>
                <hr>
                <div class="row">
                    
                    <div class="col-md-6 col-sm-6">
                        <img src='{{asset("$item->img")}}'  width="80%" alt="">
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label for="title">Update Picture</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                </div>

                <hr>
                <input type="hidden" name="prev-img" value="{{$item->img}}">
                <input type="submit" class="btn btn-success" value="Update & Save">

            </form>

            @endforeach

        </div>
    </div>

    {{-- end of form --}}
@endsection
