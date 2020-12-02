@extends('admin.profile-master')

@section('page-title')
    <a href="{{url('/profile')}}">Dashboard</a>
@endsection

@section('main-content')
{{-- dashboard for admin panel --}}
                    @if(Session::has('enroll'))
                        
                    <div class="alert alert-success" role="alert">
                      <h4 class="alert-heading">Successfully enrolled</h4>
                      <p> </p>
                      <p class="mb-0">{{Session('enroll')}}</p>
                    </div>
                    @endif

                        <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-toggle-on fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{$activeCourse}}</div>
                                            <div>Active Course</div>
                                        </div>
                                    </div>
                                </div>
                                <a>
                                    <div class="panel-footer">
                                        <span class="pull-left">View Table below</span>
                                        <span class="pull-right"><i class="fa fa-arrow-down"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-power-off fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{$blockCourse}}</div>
                                            <div>Pending course</div>
                                        </div>
                                    </div> 
                                </div>
                                <a>
                                    <div class="panel-footer">
                                        <span class="pull-left">View Table below</span>
                                        <span class="pull-right"><i class="fa fa-arrow-down"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-plus-square fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{$allCourse}}</div>
                                            <div>Enroll New</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{url('/all-course')}}" target="_blank">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-cogs fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">.</div>
                                            <div>Profile Settings!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{url('/profile-setting')}}">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
{{-- / dashboard for admin panel --}}


                       <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                {{-- <div class="panel-heading">
                                    Course enrollment list
                                </div> --}}
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Course Name</th>
                                                    <th>Paid Ammount</th>
                                                    <th>Pay Info</th>
                                                    <th>Status</th>
                                                    <th>Valid to</th>
                                                    <th>Lession & Modules</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($enrollList as $item)
                                                  
                                                        <tr>
                                                            <td>{{$item->id}}</td>
                                                            <td>{{$item->name}}</td>
                                                            <td>{{$item->course_name}}</td>
                                                            <td>{{$item->due}}</td>
                                                            <td>
                                                                
                                                                @php
                                                                    $cal = intval($item->total)-intval($item->due);
                                                                @endphp
                                                                @if($cal>0)
                                                                    Due - {{$cal}}
                                                                    <button class="btn btn-warning" data-toggle="modal" data-target="#partial-{{$item->id}}">Pay</button>
                                                                @else
                                                                    <span class="text-success">Clear</span>
                                                                @endif
                                                                <!-- partial payment form -->
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="partial-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                                  <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                      <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLongTitle">Partial payment For - <br> {{$item->course_name}}</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                          <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                      </div>
                                                                      <div class="modal-body">
                                                                        <form action="{{url('/payment/partial/')}}/{{$item->id}}" method="post">
                                                                          @csrf  
                                                                            <input type="text" name="payment_no" class="form-control" placeholder="Enter payment phone no">
                                                                            <hr>
                                                                            <input type="text" name="trxid" class="form-control" placeholder="Trx ID : ">
                                                                            <hr>
                                                                            <select name="payment_by" id="" class="form-control" required>
                                                                                <option value="">Select payment type</option>
                                                                                <option value="bKash">bKash</option>
                                                                                <option value="rocket">Rocket</option>
                                                                                <option value="nagad">Nagad</option>
                                                                                <option value="cash_on">Cash on</option>
                                                                            </select>
                                                                            <hr>
                                                                            <div class="form-group">
                                                                            <input type="text" placeholder="Pay now" name="ammount" class="form-control">
                                                                            </div>

                                                                            <input type="hidden" name="due" value="{{$item->due}}">

                                                                            <input type="hidden" value="{{$item->course_name}}" name="course_name">

                                                                            <hr>
                                                                            <input type="submit" value="Payment Now" class="btn btn-success">
                                                                        </form>
                                                                      </div>
                                                                      <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                <!-- endof partial payment form -->        
                                                            </td>
                                                            <td>
                                                                @if($item->status=="block")
                                                                    <button class="btn btn-danger">Pending</button>
                                                                @else
                                                                    <button class="btn btn-success">{{$item->status}}</button>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                 @if($item->valid)

                                                                    {{$item->valid}}
                                                                    @if($item->valid< date('Y-m-d'))
                                                                     <span class="text-danger">Expired</span>
                                                                     @endif
                                                                 @else
                                                                 Pending
                                                                 @endif


                                                            </td>
                                                            <td class="text-center">
                                                               @if($item->status=="block")
                                                                    <span class="text-primary">Pending</span>
                                                               @elseif($item->valid< date('Y-m-d'))
                                                               <span class="text-danger">Expired</span>
                                                               @else
                                                                <form action="{{url('/proflie/lession')}}/{{$item->course_id}}" method="post">
                                                                    @csrf
                                                                    <button type="submit"class="btn btn-success btn-circle btn-lg"><i class="fa fa-link"></i></button>
                                                                </form>
                                                                @endif
                                                            </td>
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
        <script>
            $('#myModal').modal('handleUpdate')
        </script>
@endsection