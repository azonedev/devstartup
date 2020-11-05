@extends('admin.admin-master')

@section('page-title','Course Program')

@section('main-content')
    <div class="panel panel-primary ">
        <div class="panel-heading">Add new course on system as traning purpose</div> 
        <div class="panel-body">
            <form role="form" action="{{url('admin/course/store')}}" method="POST" enctype="multipart/form-data">
                
                @csrf

                <div class="row">

                    <div class="col-md-6">
                    <label for="title">Name</label>
                    <input type="text" class="form-control" name="name" required>
                    </div>
                   
                    <div class="col-md-6">
                        <label for="title">Upload Picture</label>
                        <input type="file" class="form-control" name="image" required>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                   <div class="row">
                       <div class="col-md-4 col-sm-4">
                           <label for="lession">Lession</label>
                           <input type="text" name="lession" class="form-control">
                       </div>
                       <div class="col-md-4 col-sm-4">
                           <label for="lession">Course Fee</label>
                           <input type="text" name="course_fee" class="form-control">
                       </div>
                       <div class="col-md-4 col-sm-4">
                           <label for="lession">Discount % <small>If needed then fill otherwise blank</small></label>
                           <input type="text" name="discount" class="form-control">
                       </div>
                   </div>
                </div>
                <div class="form-group">
                   <div class="row">
                       <div class="col-md-4 col-sm-4">
                           <label for="lession">Duration</label>
                           <input type="text" name="duration" placeholder="ex : 6 month" class="form-control">
                       </div>
                       <div class="col-md-4 col-sm-4">
                           <label for="lession">Class</label>
                           <input type="text" name="class" placeholder="ex : 5 days/week" class="form-control">
                       </div>
                       <div class="col-md-4 col-sm-4">
                           <label for="lession"></small>Start</label>
                           <input type="text" name="start" placeholder="ex : 25 dec, 2020"  class="form-control">
                       </div>
                   </div>
                </div>

                <div class="form-group">
                    <div class="row">

                        <div class="col-md-6">
                        <label for="title">Details page titile</label>
                        <input type="text" class="form-control" name="single_page_name" required>
                        </div>
                    
                        <div class="col-md-6">
                            <label for="title">Teacher</label>
                            <select name="teacher" class="form-control" id="">
                                <option value="">None</option>
                                @foreach ($teacherData as $item)
                                    
                                <option value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">

                        <div class="col-md-6">
                        <label for="title">Short Outline <small> use coma to separte sentence</small></label>
                        <textarea name="sort_outline" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                    
                        <div class="col-md-6">
                            <label for="title">Why student enroll ?
                            </label>
                            <textarea name="why_this" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
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
                                    All course on your web system
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover" id="dataTables-example">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Course Fee</th>
                                                    <th>Status</th>
                                                    <th>Eidt</th>
                                                    <th>Archrive</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 0;
                                                @endphp
                                                @foreach ($courseData as $item)
                                                <tr>
                                                    <td>{{$i+=1}}</td>
                                                    <td>{{$item->name}}</td>
                                                    <td class="center">
                                                        {{$item->course_fee}}
                                                    </td>
                                                    <td class="center">
                                                        @if ($item->status=="active")
                                                            <p class="btn btn-success">Active</p>
                                                        @else 
                                                            <p class="btn btn-danger">Archrived</p> 
                                                        @endif
                                                    </td>
                                                    <td class="center">
                                                        <form action="{{url('admin/course/edit')}}/{{$item->id}}" method="post">
                                                            @csrf
                                                            <button type="submit" class="btn btn-secodary btn-circle btn-lg"><i class="fa fa-edit"></i></button>
                                                        </form>
                                                    
                                                    </td>
                                                    <td class="center">
                                                        <form action="{{url('admin/course/archrive')}}/{{$item->id}}" method="post">
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