@extends('admin.admin-master')

@section('page-title','Teacher')

@section('main-content')
    <div class="panel panel-primary ">
        <div class="panel-heading">Add new domain & hosting service on system as traning purpose</div> 
        <div class="panel-body">
            <form role="form" action="{{url('admin/server/store')}}" method="POST" enctype="multipart/form-data">
                
                @csrf

                <div class="row">
                    <div class="col-md-4">
                    <label for="title">Price</label>
                    <input type="text" class="form-control" name="price" placeholder="Ex: 3500" required>
                    </div>
                   
                    <div class="col-md-4">
                        <label for="title">Price Label</label>
                        <input type="text" class="form-control" name="price_label" placeholder="Ex : Per Year " required>
                    </div>
                   
                    <div class="col-md-4">
                        <label for="title">Package Name</label>
                        <input type="text" class="form-control" name="package_name" placeholder="Ex : Plan - A" required>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label for="Details">Feature List <small class="text-danger">use coma (,) to separate features</small></label>
                    <textarea name="feature_list" class="form-control" id="" cols="30" rows="10" placeholder="Ex : 5 GB SSD storage, Lite speed server" required></textarea>
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
                                    All domain & hosting services on your web system
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover" id="dataTables-example">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Package Name</th>
                                                    <th>Price</th>
                                                    <th>Feature List</th>
                                                    <th>Status</th>
                                                    <th>Eidt</th>
                                                    <th>Archrive</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 0;
                                                @endphp
                                                @foreach ($serverData as $item)
                                                <tr>
                                                    <td>{{$i+=1}}</td>
                                                    <td>{{$item->package_name}}</td>
                                                    <td>{{$item->price}}</td>
                                                    <td class="center">
                                                       {{$item->feature_list}}
                                                    </td>
                                                    <td class="center">
                                                        @if ($item->status=="active")
                                                            <p class="btn btn-success">Active</p>
                                                        @else 
                                                            <p class="btn btn-danger">Archrived</p> 
                                                        @endif
                                                    </td>
                                                    <td class="center">
                                                        <form action="{{url('admin/server/edit')}}/{{$item->id}}" method="post">
                                                            @csrf
                                                            <button type="submit" class="btn btn-secodary btn-circle btn-lg"><i class="fa fa-edit"></i></button>
                                                        </form>
                                                    
                                                    </td>
                                                    <td class="center">
                                                        <form action="{{url('admin/server/archrive')}}/{{$item->id}}" method="post">
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