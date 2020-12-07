@extends('admin.profile-master')

@section('page-title','Dashboard')

@section('main-content')
{{-- dashboard for admin panel --}}
                    <div class="alert alert-danger" role="alert">
                      <h4 class="alert-heading">Verify email !!</h4>
                      <p> Please verify your mail as soon as possible :) <br>Check Inbox</p>
                      <p class="mb-0">For support : 01746 686868</p>
                    </div>
                    <div class="alert alert-success" role="alert">
                      <h4 class="alert-heading">Resend email !!</h4>
                      <form action="{{url('/mail/resend')}}" method="post">
                      		@csrf
                      		<input type="hidden" name="user_id" value="{{Session('user_id')}}">
                      		<input type="hidden" name="name" value="{{Session('username')}}">
                      		<input type="hidden" name="email" value="{{Session('usermail')}}">
                      		<button type="submit" class="btn btn-danger">Re-send verify mail</button>
                      </form>
                    </div>

{{-- / dashboard for admin panel --}}

@endsection