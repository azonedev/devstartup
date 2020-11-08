@extends('admin.admin-master')

@section('page-title','Update user role')

@section('main-content')
                       <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                {{-- <div class="panel-heading">
                                    DataTables Advanced Tables
                                </div> --}}
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>User ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Role type</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $item)
                                                    
                                                        <tr>
                                                            <td>{{$item->id}}</td>
                                                            <td>{{$item->name}}</td>
                                                            <td>{{$item->email}}</td>
                                                            <td>{{$item->mobile_no}}</td>
                                                            <form action="{{url('admin/add-new/update')}}/{{$item->id}}" method="POST">
                                                            @csrf
                                                                <td>
                                                                    <select name="role" id="" class="form-control">
                                                                        
                                                                        <option value="{{$item->role}}" selected>{{$item->role}}</option>

                                                                        @if($item->role=="admin")
                                                                        <option value="user">user</option >  
                                                                        @endif
                                                                        
                                                                        @if($item->role=="user")
                                                                        <option value="admin">admin</option >  
                                                                        @endif
                                                                        
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <button type="submit" class="btn btn-primary btn-circle"><i
                                                                         class="fa fa-check"></i></button>
                                                                </td>
                                                            </form>
                                                            
                                                        </tr>   
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                   
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div> 
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