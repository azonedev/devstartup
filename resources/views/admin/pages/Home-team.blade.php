@extends('admin.admin-master')

@section('page-title','Home / team ')

@section('main-content')
    <div class="panel panel-primary ">
        <div class="panel-heading">Add new team on website's home page</div> 
        <div class="panel-body">
            <form role="form" action="{{url('admin/home/team/store')}}" method="POST" enctype="multipart/form-data">
                
                @csrf

                <div class="row">
                    <div class="col-md-6 col-sm-6">
                         <label for="title">Name</label>
                        <input type="text" class="form-control" name="name"  required>
                    </div>
                    <div class="col-md-6 col-sm-6">
                         <label for="title">Title</label>
                        <input type="text" class="form-control" name="title"  required>
                    </div>
                </div>
                
                <hr>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <label for="title">facebook</label>
                        <input type="text" class="form-control" name="facebook"  required>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <label for="title">linkedin</label>
                        <input type="text" class="form-control" name="linkedin" required>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <label for="title">twitter</label>
                        <input type="text" class="form-control" name="twitter" required>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-6 col-sm-6">
                         <label for="title">Contact</label>
                        <input type="text" class="form-control" name="contact"  required>
                    </div>
                    <div class="col-md-6 col-sm-6">
                         <label for="title">Profile Image</label>
                        <input type="file" class="form-control" name="image"  required>
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
                                    All team on your web system
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover" id="dataTables-example">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Title</th>
                                                    <th>Feature Image</th>
                                                    <th>Contact</th>
                                                    <th>Status</th>
                                                    <th>Eidt</th>
                                                    <th>Archrive</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 0;
                                                @endphp
                                                @foreach ($teamData as $item)
                                                <tr>
                                                    <td>{{$i+=1}}</td>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->title}}</td>
                                                    <td class="center">
                                                        <img src='{{asset("$item->img")}}' width="60px" alt="">
                                                    </td>
                                                    <td class="center">
                                                        {{$item->contact}}
                                                    </td>
                                                    <td class="center">
                                                        @if ($item->status=="active")
                                                            <p class="btn btn-success">Active</p>
                                                        @else 
                                                            <p class="btn btn-danger">Archrived</p> 
                                                        @endif
                                                    </td>
                                                    <td class="center">
                                                        <form action="{{url('admin/home/team/edit')}}/{{$item->id}}" method="post">
                                                            @csrf
                                                            <button type="submit" class="btn btn-secodary btn-circle btn-lg"><i class="fa fa-edit"></i></button>
                                                        </form>
                                                    
                                                    </td>
                                                    <td class="center">
                                                        <form action="{{url('admin/home/team/archrive')}}/{{$item->id}}" method="post">
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