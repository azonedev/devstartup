@extends('admin.admin-master')

@section('page-title','Students')
 @section('main-content')
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
                                                    <th>Paid Now</th>
                                                    <th>Pay Info</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                    <th>View</th>
                                                    <th>#</th>
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
                                                                    <button class="btn btn-danger">{{$item->status}}</button>
                                                                @else
                                                                    <button class="btn btn-success">{{$item->status}}</button>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                 <button type="submit"  data-toggle="modal" data-target="#exampleModal-{{$item->id}}" class="btn btn-primary">Add +</button>


                                                                <!-- Modal -->

                                                                <div class="modal fade" id="exampleModal-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                  <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                      <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Assign to course</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                          <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                      </div>
                                                                      <div class="modal-body">

                                                                        <!-- assign to course moddule -->
                                                                        <h3>Assign to the course :</h3>
                                                                       <p>Course Name : {{$item->course_name}}
                                                                        <br>Course ID : {{$item->id}}
                                                                       </p>

                                                                       <form action="{{url('admin/student/assign')}}/{{$item->id}}" method="POST">
                                                                         @csrf

                                                                         <div class="form-group">
                                                                             
                                                                            <select name="status" id="" class="form-control">
                                                                                <option value="{{$item->status}}">{{$item->status}}</option>
                                                                                 @if($item->status=="active") 
                                                                                 <option value="block">Block</option>
                                                                                 @else
                                                                                 <option value="active">active</option>
                                                                                 @endif  
                                                                            </select>
                                                                            
                                                                            <input type="date" value="{{$item->valid}}" class="form-control" name="valid">
                                                                            
                                                                         </div>

                                                                         <hr>
                                                                         <input type="submit" class="btn btn-success
                                                                         " value="Save Changes">
                                                                       </form>
                                                                        <!-- /assign to course moddule -->

                                                                      </div>
                                                                      <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                               
                                                                <a href="{{url('/admin/message')}}/{{$item->message_id}}" target="_blank">
                                                                    <button type="submit"class="btn btn-success btn-circle btn-lg"><i class="fa fa-link"></i></button>
                                                                </a>

                                                            </td>
                                                            <td>
                                                               <form action="{{url('/admin/student/delete')}}/{{$item->id}}" method="POST">
                                                                   @csrf
                                                                   <button type="submit" onclick="return confirm('Are you sure to delete this item ?');" class="btn btn-danger btn-circle btn-lg"><i class="fa fa-trash"></i></button>
                                                               </form>
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