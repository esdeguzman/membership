@extends('layouts.auth')

@section('sub-title')
    Password Reset
@endsection

@section('content')
<form class="form-horizontal form-material" action="{{ route('password.update') }}" method="post">
    @csrf

    @include('components.brandheader')

    @if($errors->all())
    <div class="form-group m-t-40">
        <div class="col-xs-12">
            <ul class="common-list">
            @foreach($errors->all() as $error)
                <li><i class="ti ti-close text-danger"></i> <b>{{ $error }}</b></li>
            @endforeach
            </ul>
        </div>
    </div>
    @endif

    <div class="form-group">
        <div class="col-xs-12">
            <h3>Reset Password</h3>
            <p class="text-muted">Enter your Email and provide new password! </p>
        </div>
    </div>

    <input type="hidden" name="token" value="{{ $token }}">

    <div class="form-group m-t-40">
        <div class="col-xs-12">
            <input class="form-control" type="text" required="" placeholder="Email" name="email" value="{{ old('email') }}">
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-12">
            <input class="form-control" type="password" required="" placeholder="New Password" name="password">
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-12">
            <input class="form-control" type="password" required="" placeholder="Confirm Password" name="password_confirmation">
        </div>
    </div>

    <div class="form-group text-center m-t-40">
        <div class="col-xs-12">
            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset Password</button>
        </div>
    </div>

</form>
@endsection