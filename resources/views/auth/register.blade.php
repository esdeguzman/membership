@extends('layouts.auth')

@section('sub-title')
    Register
@endsection

@section('content')
<form class="form-horizontal" id="registerform" action="#" style="height: 95vh;" method="post">
    @csrf

    @include('components.brandheader')

    <div class="form-group ">

        <div class="col-xs-12">
            <h3>Register for an Account</h3>
            <p class="text-muted">Enter provide the needed information and wait for the administrators to validate your request. </p>
            @if(! $errors->has('username') || ! $errors->has('password'))
            <ul class="common-list">
            @foreach($errors->all() as $error)
                <li><i class="ti ti-close text-danger"></i> <b>{{ $error }}</b></li>
            @endforeach
            </ul>
            @endif
        </div>

    </div>

    <div class="form-group ">

        <div class="col-xs-12">
            <input class="form-control" type="text" placeholder="Username *" name="username" value="{{ old('username') }}">
        </div>

        <div class="col-xs-12 m-t-10">
            <input class="form-control" type="text" placeholder="Email *" name="email" value="{{ old('email') }}">
        </div>

        <div class="col-xs-12 m-t-10">
            <input class="form-control" type="password" placeholder="Password *" name="desired_password">
        </div>

        <div class="col-xs-12 m-t-10">
            <input class="form-control" type="password" placeholder="Confirm Password *" name="desired_password_confirmation">
        </div>

        <div class="col-xs-12 m-t-10">
            <input class="form-control" type="text" placeholder="Full Name *" name="full_name" value="{{ old('full_name') }}">
        </div>

        <div class="col-xs-12 m-t-10">
            <input class="form-control" type="text" placeholder="Employee ID *" name="employee_id" value="{{ old('employee_id') }}">
        </div>

        <div class="col-xs-12 m-t-10">
            <select name="branch_id" class="form-control">
                <option value="" hidden>Select Your Branch *</option>
            </select>
        </div>

        <div class="col-xs-12 m-t-10">
            <textarea class="form-control" name="reason" rows="5" placeholder="Reason for Requesting Account *">{{ old('reason') }}</textarea>
        </div>

    </div>

    <div class="form-group text-center m-t-20">

        <div class="col-xs-12">
            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Submit</button>
        </div>

        <div class="col-xs-12 m-t-10">
            <a href="{{ route('login') }}" class="btn btn-danger btn-lg btn-block text-uppercase waves-effect waves-light" id="btn-cancel-request">login instead</a>
        </div>

    </div>

</form>
@endsection