
@extends('users::layouts.master')
@section('title')
@endsection
@section('content')
    <div class="row">
        <div class="container">
            <div class="col-md-6">
                <h1>Sign in </h1>
                <form action="{{ route('auth::signin.store') }}" method="post">
                    {{--{{csrf_field()}}--}}
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="text" name="email" id="email" class="form-control" value="" placeholder="Enter Email">
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Password</label>
                        <input type="password" name="password" id="password" class="form-control" value="" placeholder="Enter Paasword">
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <input type="hidden" name="_token" value="{{Session::token()}}">
                </form>
            </div>
        </div>
    </div>
@endsection