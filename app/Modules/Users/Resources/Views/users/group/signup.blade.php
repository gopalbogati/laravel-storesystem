@extends('users::layouts.master')
@section('title')
@endsection
@section('content')

    <div class="row">
        <div class="container">
        <div class="col-md-6">
            <h1>Sign up for admin</h1>
            <form action="{{ route('auth::signup.store') }}" method="post" autocomplete="off">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter Name" value=""
                           class="form-control">
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
                <div class="form-group">
                <label for="email">Your Email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email" value="">
                <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>
                <div class="form-group">
                    <label for="email">Your Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter Password" value=""
                           class="form-control">
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                </div>

                {{--<input type="hidden" name="_token" value="{{session::token()}}">--}}
                <button type="submit" class="btn btn-primary">Submit</button>

                <input type="hidden" name="_token" value="{{Session::token()}}">
            </form>
        </div>
    </div>
        </div>