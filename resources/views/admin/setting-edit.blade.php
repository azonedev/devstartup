@extends('admin.admin-master')

@section('page-title','Setting')

@section('main-content')
    <div class="panel panel-primary ">
        <div class="panel-heading">Edit & Update setting data</div> 
        <div class="panel-body">
            @foreach ($singleData as $item)
                
            <form role="form" action="{{url('admin/setting/update')}}/{{$item->id}}" method="POST" enctype="multipart/form-data">
                
                @csrf

                <div class="row">
                    <div class="col-md-3 col-sm-6">
                         <label for="title">Logo</label>
                        <input type="file" class="form-control" name="image" value="{{$item->logo}}" >
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <img src='{{asset("$item->logo")}}' width="90%" alt="">
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                         <label for="title">Logo Text</label>
                        <input type="text" class="form-control" name="logo_text" value="{{$item->logo_text}}"  required>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <label for="title">Logo display as</label>
                        <select name="status" class="form-control" id="">
                            @if ($item->status=="logo")
                                <option value="logo" selected>Logo</option>
                            @else
                                <option value="logo">Logo</option>
                            @endif

                            @if ($item->status=='text')
                                <option value="text" selected>Text</option>
                            @else
                                <option value="text">Text</option>
                            @endif
                        </select>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label for="#">Moto <small>Give your company details within --oneline</small></label>
                    <input type="text" class="form-control" placeholder="Give your company details within --oneline" name="moto" value="{{$item->moto}}" required>
                </div>

                <div class="row form-group">
                    <div class="col-md-6 col-sm-6">
                        <label for="">Address</label>
                        <input type="text" name="address" class="form-control" value="{{$item->address}}" required>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label for="">Address google map link</label>
                        <input type="text" name="google_map" class="form-control" value="{{$item->google_map}}" required>
                    </div>
                </div>
                <hr>
                <div class="row form-group">
                    <div class="col-md-6 col-sm-6">
                        <label for="">Mail (universal)</label>
                        <input type="text" name="mail" class="form-control" value="{{$item->mail}}" required>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label for="">Phone (universal)</label>
                        <input type="text" name="phone" class="form-control" value="{{$item->phone}}" required>
                    </div>
                </div>
                <hr>
                
                <div class="row form-group">
                    <div class="col-md-4 col-sm-4">
                        <label for="">Facebook</label>
                        <input type="text" name="fb" class="form-control" value="{{$item->fb}}" required>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <label for="">Youtube</label>
                        <input type="text" name="tw" class="form-control" value="{{$item->tw}}" required>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <label for="">Linkedin</label>
                        <input type="text" name="ln" class="form-control" value="{{$item->ln}}" required>
                    </div>
                </div>
                <hr>
                                
                <div class="row form-group">
                    <div class="col-md-3 col-sm-6">
                        <label for="">Call Developement</label>
                        <input type="text" name="call_dev" class="form-control" placeholder="+012 34 56 789" value="{{$item->call_dev}}" required>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <label for="">Call Training</label>
                        <input type="text" name="call_train" class="form-control" placeholder="+012 34 56 789" value="{{$item->call_train}}" required>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <label for="">Call Domain & Hosting</label>
                        <input type="text" name="call_services" class="form-control" placeholder="+012 34 56 789" value="{{$item->call_services}}" required>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <label for="">Call Receptionist</label>
                        <input type="text" name="call_center" class="form-control" placeholder="+012 34 56 789" value="{{$item->call_center}}" required>
                    </div>
                </div>
                <hr>
                                
                <div class="row form-group">
                    <div class="col-md-3 col-sm-6">
                        <label for="">Copyright &copy;left</label>
                        <input type="text" name="copy_left" class="form-control" placeholder="mamurjor" value="{{$item->copy_left}}" required>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <label for="">link left</label>
                        <input type="text" name="copy_left_link" class="form-control" placeholder="" value="{{$item->copy_left_link}}" required>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <label for="">Copyright &copy;right</label>
                        <input type="text" name="copy_right" class="form-control" placeholder="azonedev" value="{{$item->copy_right}}" required>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <label for="">link right</label>
                        <input type="text" name="copy_right_link" class="form-control" placeholder="+012 34 56 789" value="{{$item->copy_right_link}}" required>
                    </div>
                </div>

                <input type="hidden" name="prev-img" value="{{$item->logo}}">


                <input type="submit" class="btn btn-success" value="Update">
            @endforeach

            </form>
        </div>
    </div>

  
@endsection
