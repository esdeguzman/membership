@extends('layouts.mail')

@section('content')
<p style="margin: 20px 0;; font-size: 14px; mso-line-height-rule: exactly; line-height: 24px; margin: 30px 0;">
    <span style="font-weight: bold;">Congratulations on verifying your email!</span>
</p>

<p style="margin: 20px 0; font-size: 14px; mso-line-height-rule: exactly; line-height: 24px; margin: 30px 0;">
        You will now be able to receive {{ config('app.name') }}'s updates and 
        important notices. Also, all important issues about your account and 
        answers to your inquiries will all be sent here as well. 
</p>
<p style="margin: 20px 0; font-size: 14px; mso-line-height-rule: exactly; line-height: 24px; margin: 30px 0;">
        If for some reason you need your email address to be changed. Please 
        ensure that the newly registered email is also successfully verified. 
        You can only use one email at a given time.
</p>
<p style="margin: 20px 0; font-size: 14px; mso-line-height-rule: exactly; line-height: 24px; margin: 30px 0;">
        Thank you for joining {{ config('app.name') }}! We welcome you to our 
        growing family. Together we will achieve a future proof financial 
        freedom.
</p>
@endsection