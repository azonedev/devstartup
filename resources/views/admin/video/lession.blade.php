@extends('admin.admin-master')
@section('extra-css')
    <link rel="stylesheet" href="{{asset('/assets/lity/lity.min.css')}}">
@endsection

@section('main-content')
    <div class="panel panel-primary ">
        <div class="panel-body">
            <form role="form" action="{{url('admin/video-lession/store')}}" method="POST" enctype="multipart/form-data">
                
                @csrf

                <div class="row">

                    <div class="col-md-4">
                    <label for="title">Thumbnail</label>
                    <input type="file" class="form-control" name="thumbnail" required>
                    </div>

                    <div class="col-md-4">
                    <label for="title">Link</label>
                    <input type="text" class="form-control" name="link" required>
                    </div>
                    <div class="col-md-4">
                        <label for="">Select Category</label>
                        <select name="video_cat_id" class="form-control" id="">
                            @foreach ($video_cat as $item)
                                <option value="{{$item->id}}">{{$item->category}}</option>
                            @endforeach
                        </select>
                    </div>
                   
                </div>
                <hr>
                <div class="row">

                    <div class="col-md-4">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" required>
                    </div>

                    <div class="col-md-4">
                    <label for="title">Alt</label>
                    <input type="text" class="form-control" name="alt" required>
                    </div>

                    <div class="col-md-4">
                    <label for="title">Course <small>To select multiple use ctrl+click</small> </label>
                        <select name="course_id[]" class="form-control" id="course_id"   multiple>
                            @foreach ($course as $item)
                                <option style="padding:8px;" value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                   
                </div>
                <hr>
        
                <input type="submit" class="btn btn-success" value="Save">

            </form>
        </div>
    </div>

    {{-- end of form --}}
<hr><hr><hr>

    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    All video lession on your web system
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover" id="dataTables-example">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Thumbnail</th>
                                                    <th>Category ID</th>
                                                    <th>Course ID</th>
                                                    {{-- <th>Edit</th> --}}
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($videolession as $item)
                                                <tr>
                                                    <td>{{$item->id}}</td>
                                                    <td>
                                                        <a href="{{$item->link}}" target="_blank"  data-lity>
                                                            <img src='{{asset("$item->thumbnail")}}' width="100px" alt="">
                                                        </a>
                                                    </td>
                                                    <td>{{$item->video_cat_id}}</td>
                                                    <td>{{$item->course_id}}</td>
                                                    
                                                    {{-- <td class="center">
                                                        <form action="{{url('admin/video-lession/edit')}}/{{$item->id}}" method="post">
                                                            @csrf
                                                            <button type="submit" class="btn btn-secodary btn-circle btn-lg"><i class="fa fa-edit"></i></button>
                                                        </form>
                                                    
                                                    </td> --}}
                                                    <td class="center">
                                                        <form action="{{url('admin/video-lession/archrive')}}/{{$item->id}}" method="post">
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger btn-circle btn-lg"><i class="fa fa-trash"></i></button>
                                                        </form>                                                            
                                                    </td>
                                                </tr>
                                                <div class="p-2"></div>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
@endsection

@section('extra-js')
    <!-- DataTables JavaScript -->
    <script src="{{asset('assets/admin/js/dataTables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/dataTables/dataTables.bootstrap.min.js')}}"></script>
    <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>
    <script src="{{asset('/assets/lity/lity.min.js')}}"></script>
@endsection