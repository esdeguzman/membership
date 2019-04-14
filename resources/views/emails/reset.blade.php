@extends('layouts.mail')

@section('content')
<p style="margin: 20px 0;; font-size: 14px; mso-line-height-rule: exactly; line-height: 24px; margin: 30px 0;">
    <span style="font-weight: bold;">Here is your password reset link!</span>
</p>

<p style="margin: 20px 0; font-size: 14px; mso-line-height-rule: exactly; line-height: 24px; margin: 30px 0;">
        You have requested to reset your password, please click the link below to begin password reset.
</p>
<p style="margin: 20px 0; font-size: 14px; mso-line-height-rule: exactly; line-height: 24px; margin: 30px 0;">
        <a href="{{ url(route('password.reset', $token, false)) }}">Password reset link</a>
</p>
<p style="margin: 20px 0; font-size: 14px; mso-line-height-rule: exactly; line-height: 24px; margin: 30px 0;">
        If you did not requested a password reset, please ignore this email.
</p>
@endsection