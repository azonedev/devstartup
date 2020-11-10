@extends('admin.admin-master')

@section('page-title','Certificate')

@section('main-content')
    <div class="panel panel-primary ">
        <div class="panel-heading">Add new certificate on system as traning purpose</div> 
        <div class="panel-body">
            <form role="form" action="{{url('admin/cer/store')}}" method="POST" enctype="multipart/form-data">
                
                @csrf

                <div class="row">

                    <div class="col-md-6">
                    <label for="title">MJCID</label>
                    <input type="text" class="form-control" name="cer_id" required>
                    </div>
                   
                    <div class="col-md-6">
                        <label for="title">Upload Certificate</label>
                        <input type="file" class="form-control" name="cer_img" required>
                    </div>
                </div>
                <hr>



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
                                    All certificate on your web system
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover" id="dataTables-example">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>#</th>
                                                    <th>MJCID</th>
                                                    <th>Image</th>
                                                    <th>Upload @</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 0;
                                                @endphp
                                                @foreach ($cer as $item)
                                                <tr>
                                                    <td>{{$i+=1}}</td>
                                                    <td>{{$item->cer_id}}</td>
                                                    <td class="center">
                                                        <img src='{{asset("$item->cer_img_path")}}' width="150px" alt="">
                                                    </td>
                                                   
                                                    </td>
                                                    <td class="center">
                                                              {{$item->created_at}}          
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