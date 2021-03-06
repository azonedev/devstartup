@extends('admin.admin-master')

@section('page-title','Course Outline')

@section('main-content')
    <div class="panel panel-primary ">
        <div class="panel-heading">Edit a course lession on system as traning purpose</div> 
        <div class="panel-body">

            @foreach ($singleData as $item)
                
            <form role="form" action="{{url('admin/outline/update')}}/{{$item->id}}" method="POST" enctype="multipart/form-data">
                
                @csrf
                @method('put')
                <div class="form-group">
                    <div class="row">

                        <div class="col-md-6">
                        <label for="title">Lession Title</label>
                        <input type="text" class="form-control" name="lession_title" value="{{$item->lession_title}}" required>
                        </div>
                    
                        <div class="col-md-6">
                            <label for="title">Select Course</label>
                            <select name="course_id" class="form-control" id="">
                                @foreach ($courseData as $course)
                                    @if($item->course_id == $course->id)
                                        <option value="{{$item->course_id}}" selected>{{$course->name}}</option>
                                    @else 
                                        <option value="{{$course->id}}">{{$course->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">

                        <div class="col-md-6">
                            <label for="title">Lession items <small> use coma to separte sentence</small></label>
                            <textarea name="lession_items" class="form-control" id="" cols="30" rows="10">{{$item->lession_items}}</textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="title">Status</label>
                            <select name="status" class="form-control" id="">
                                @if ($item->status=="active")
                                    <option value="active" selected>Active</option>
                                @else
                                    <option value="active">Active</option>
                                @endif

                                @if ($item->status=='archrived')
                                    <option value="archrived" selected>Archrived</option>
                                @else
                                    <option value="archrived">Archrived</option>
                                @endif
                            </select>
                        </div>
                </div>


                <hr>

                <input type="submit" class="btn btn-success" value="Save">

            </form>

            @endforeach

        </div>
    </div>

    {{-- end of form --}}
<hr><hr><hr>

    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    All courses  lession outline on your web system
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover" id="dataTables-example">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Lession Name</th>
                                                    <th>Course ID</th>
                                                    <th>Status</th>
                                                    <th>Eidt</th>
                                                    <th>Archrive</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($outlineData as $item)
                                                <tr>
                                                    <td>{{$item->id}}</td>
                                                    <td>{{$item->lession_title}}</td>
                                                    <td class="center">
                                                        {{$item->course_id}}
                                                    </td>
                                                    <td class="center">
                                                        @if ($item->status=="active")
                                                            <p class="btn btn-success">Active</p>
                                                        @else 
                                                            <p class="btn btn-danger">Archrived</p> 
                                                        @endif
                                                    </td>
                                                    <td class="center">
                                                        <form action="{{url('admin/outline/edit')}}/{{$item->id}}" method="post">
                                                            @csrf
                                                            <button type="submit" class="btn btn-secodary btn-circle btn-lg"><i class="fa fa-edit"></i></button>
                                                        </form>
                                                    
                                                    </td>
                                                    <td class="center">
                                                        <form action="{{url('admin/outline/archrive')}}/{{$item->id}}" method="post">
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger btn-circle btn-lg"><i class="fa fa-archive"></i></button>
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
@endsection