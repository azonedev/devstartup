@extends('admin.admin-master')

@section('page-title','Home / slider ')

@section('main-content')
    <div class="panel panel-primary ">
        <div class="panel-heading">Add new slider on website's home page</div> 
        <div class="panel-body">
            @foreach ($singleData as $item)
                
            <form role="form" action="{{url('admin/home/slider/update')}}/{{$item->id}}" method="POST" enctype="multipart/form-data">
                
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" value="{{$item->title}}" required>
                </div>
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
                        <img src='{{asset("$item->img")}}'  width="80%" alt="">
                    </div>
                    <div class="col-md-3 col-sm-3">
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
<hr><hr><hr>

    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    All slider on your web system
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover" id="dataTables-example">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Titile</th>
                                                    <th>Description</th>
                                                    <th>Image</th>
                                                    <th>Status</th>
                                                    <th>Eidt</th>
                                                    <th>Archrive</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 0;
                                                @endphp
                                                @foreach ($sliderData as $item)
                                                <tr>
                                                    <td>{{$i+=1}}</td>
                                                    <td>{{$item->title}}</td>
                                                    <td>{{$item->description}}</td>
                                                    <td class="center">
                                                        <img src='{{asset("$item->img")}}' width="80px" alt="">
                                                    </td>
                                                    <td class="center">
                                                        @if ($item->status=="active")
                                                            <p class="btn btn-success">Active</p>
                                                        @else 
                                                            <p class="btn btn-danger">Archrived</p> 
                                                        @endif
                                                    </td>
                                                    <td class="center">
                                                        <form action="{{url('admin/home/slider/edit')}}/{{$item->id}}" method="post">
                                                            @csrf
                                                            <button type="submit" class="btn btn-secodary btn-circle btn-lg"><i class="fa fa-edit"></i></button>
                                                        </form>
                                                    
                                                    </td>
                                                    <td class="center">
                                                        <form action="{{url('admin/home/slider/archrive')}}/{{$item->id}}" method="post">
                                                            @csrf
                                                            <button type="button" class="btn btn-danger btn-circle btn-lg"><i class="fa fa-archive"></i></button>
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