@extends('admin.admin-master')

@section('page-title','Home / department ')

@section('main-content')
    <div class="panel panel-primary ">
        <div class="panel-heading">Add new department on website's home page</div> 
        <div class="panel-body">
            @foreach ($singleData as $item)
                
            <form role="form" action="{{url('admin/home/solution/update')}}/{{$item->id}}" method="POST" enctype="multipart/form-data">
                
                @csrf

                <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$item->name}}" required>
                </div>
                <div class="form-group">
                    <label for="title">Blog Title</label>
                    <input type="text" class="form-control" name="blog_title" value="{{$item->blog_title}}" required>
                </div>
                <div class="form-group">
                    <label for="Details">Blog</label>
                    <textarea name="blog" class="form-control" id="" cols="30" rows="10" required>{!!$item->blog!!}</textarea>
                </div>

               
                <hr>
                <div class="row">
                    <div class="col-md-3 col-sm-3">
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
                    <div class="col-md-3 col-sm-3">
                        <label for="title">Button Name</label>
                        <input type="text" class="form-control" name="btn" value="{{$item->btn}}"placeholder="Use Phone No [ Call : +012 34 56 78] or other" required>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <label for="title">Feature Picture</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <label for="title">Blog Picture</label>
                        <input type="file" class="form-control" name="blog_image">
                    </div>
                </div>

                <hr>
                <input type="hidden" name="prev-img" value="{{$item->img}}">
                <input type="hidden" name="prev-img-blog" value="{{$item->blog_img}}">
                <input type="submit" class="btn btn-success" value="Update & Save">

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
                                    All solution on your web system
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover" id="dataTables-example">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Blog Title</th>
                                                    <th>Feature Image</th>
                                                    <th>Blog Image</th>
                                                    <th>Status</th>
                                                    <th>Eidt</th>
                                                    <th>Archrive</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 0;
                                                @endphp
                                                @foreach ($solutionData as $item)
                                                <tr>
                                                    <td>{{$i+=1}}</td>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->blog_title}}</td>
                                                    <td class="center">
                                                        <img src='{{asset("$item->img")}}' width="80px" alt="">
                                                    </td>
                                                    <td class="center">
                                                        <img src='{{asset("$item->blog_img")}}' width="80px" alt="">
                                                    </td>
                                                    <td class="center">
                                                        @if ($item->status=="active")
                                                            <p class="btn btn-success">Active</p>
                                                        @else 
                                                            <p class="btn btn-danger">Archrived</p> 
                                                        @endif
                                                    </td>
                                                    <td class="center">
                                                        <form action="{{url('admin/home/solution/edit')}}/{{$item->id}}" method="post">
                                                            @csrf
                                                            <button type="submit" class="btn btn-secodary btn-circle btn-lg"><i class="fa fa-edit"></i></button>
                                                        </form>
                                                    
                                                    </td>
                                                    <td class="center">
                                                        <form action="{{url('admin/home/solution/archrive')}}/{{$item->id}}" method="post">
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
    
    <script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>

	<script>
      CKEDITOR.replace('blog');
    </script>

@endsection