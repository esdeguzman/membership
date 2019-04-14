@extends('layouts.auth')

@section('sub-title')
    Login
@endsection

@section('content')
<form class="form-horizontal form-material" action="{{ url('/login') }}" method="post">
    @csrf

    @include('components.brandheader')

    @if($errors->all() || session('status'))
    <div class="form-group m-t-40">
        <div class="col-xs-12">
            <ul class="common-list">
            @errors($errors, 'username')
                @foreach($errors->all() as $error)
                <li><i class="ti ti-close text-danger"></i> <b>{{ $error }}</b></li>
                @endforeach
            @enderrors
            @if(session('status'))
                <li><i class="ti ti-close text-danger"></i> <b>{{ session()->pull('status') }}</b></li>
            @endif
            </ul>
        </div>
    </div>
    @endif

    <div class="form-group m-t-40">
        <div class="col-xs-12">
            <input class="form-control" type="text" required="" placeholder="Username" name="username" value="{{ old('username') }}">
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-12">
            <input class="form-control" type="password" required="" placeholder="Password" name="password">
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-12">
            <a href="{{ route('password.request') }}" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot password?</a>
        </div>
    </div>

    <div class="form-group text-center m-t-20">
        <div class="col-xs-12">
            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
        </div>
    </div>

    <div class="form-group m-b-0">
        <div class="col-sm-12 text-center">
            <p>Don't have an account? <a href="{{ route('register') }}" class="text-primary m-l-5" id="register"><b>Sign Up</b></a></p>
        </div>
    </div>

</form>
@endsection