@extends('layouts.auth')

@section('sub-title')
    Reset Password
@endsection

@section('content')
<form class="form-horizontal" action="{{ route('password.email') }}" method="post">
    @csrf

    @include('components.brandheader')

    @if(session('status'))
    <div class="form-group m-t-40">
        <div class="col-xs-12">
            <ul class="common-list">
                <li><i class="fa fa-check text-info"></i> <b>{{ session()->pull('status') }}</b></li>
            </ul>
        </div>
    </div>
    @endif

    <div class="form-group">
        <div class="col-xs-12">
            <h3>Reset Password</h3>
            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-12">
            <input class="form-control" type="text" required="" placeholder="Email" name="email" value="{{ old('email') }}">
        </div>
    </div>

    <div class="form-group text-center m-t-20">
        <div class="col-xs-12">
            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
        </div>
        <div class="col-xs-12 m-t-10">
            <a href="{{ route('login') }}" class="btn btn-danger btn-lg btn-block text-uppercase waves-effect waves-light">Cancel</a>
        </div>
    </div>

</form>
@endsection