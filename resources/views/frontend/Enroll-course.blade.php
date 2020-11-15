@extends('frontend.Frontend-master')

@section('main')
<hr>
<div class="p-4"></div>
    <div class="container dev-form p-4">
        <div class="row">
            @foreach ($course as $item)
                @php
                    $coursename = $item->name;
                    $feature_image = $item->feature_image;
                    $ammount = $item->course_fee;
                @endphp
            @endforeach
            <div class="col-lg-6 col-md-6 p-2">
                <h2>Enroll to - <span class="text-success">{{$coursename}}</span></h2>
                <div class="p-2"></div>
                <img src='{{asset("$feature_image")}}' width="100%" alt="">
            </div>
            <div class="col-lg-6 col-md-6 p-3">
                <h2 class="text-center">Payment Info :</h2>
                <hr style="border:1px solid;">
                <form action="{{url('/enroll-save')}}" method="POST">
                    @csrf 

                    <div class="form-group p-2">
                        <input type="text" name="name" class="form-control" placeholder="Enter your full name" required>
                    </div>
                    <div class="form-group p-2">
                        <input type="email" name="email" class="form-control" placeholder="E-mail [ example@mail.com ] " required>
                    </div>
                    <div class="form-group p-2">
                        <input type="text" name="phone" class="form-control" placeholder="Phone [ +012 345 678 ]" required>
                    </div>
                    <div class="form-group p-2">
                        <input type="text" name="payment" class="form-control" placeholder="Payment mobile number" required>
                    </div>
                    <div class="form-group p-2">
                        <input type="text" name="trxid" class="form-control" placeholder="Trx ID :">
                    </div>
                    <div class="form-group p-2">
                        <select name="payment_by" id="" class="form-control" required>
                            <option value="">Select payment type</option>
                            <option value="bKash">bKash</option>
                            <option value="rocket">Rocket</option>
                            <option value="nagad">Nagad</option>
                            <option value="cash_on">Cash on</option>
                        </select>
                    </div>
                    <input type="hidden" name="course_name" value="{{$coursename}}">
                    
                    <div class="form-group p-2">
                        <input type="text" name="ammount" class="form-control" value="{{$ammount}}">
                    </div>
                    
                    <div class="form-group p-2">
                        <input type="text" name="fb_link" class="form-control" placeholder="Facebook profile link">
                    </div>
                    <div class="form-group p-2">
                        <input type="submit" class="btn secondary-btn" value="Enroll">
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="p-3"></div>
    <hr>
@endsection