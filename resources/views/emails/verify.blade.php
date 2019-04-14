@extends('layouts.mail')

@section('content')
<p style="margin: 20px 0;; font-size: 14px; mso-line-height-rule: exactly; line-height: 24px; margin: 30px 0;">
    <span style="font-weight: bold;">Here is your email verification link!</span>
</p>

<p style="margin: 20px 0; font-size: 14px; mso-line-height-rule: exactly; line-height: 24px; margin: 30px 0;">
        You are receiving this because you recently tried to register as a 
        member of {{ config('app.name') }} or have requested a new verification link.
</p>
<p style="margin: 20px 0; font-size: 14px; mso-line-height-rule: exactly; line-height: 24px; margin: 30px 0;">
        Click <a href="{{ $url }}">here</a> to 
        verify your email address.
</p>
<p style="margin: 20px 0; font-size: 14px; mso-line-height-rule: exactly; line-height: 24px; margin: 30px 0;">
        If you did not requested a password reset, please ignore this email.
</p>
@endsection