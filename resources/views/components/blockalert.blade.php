<div class="myadmin-alert myadmin-alert-img myadmin-alert-click
@if(session()->has('error')) alert-danger
@elseif(session()->has('resent') or session()->has('verified')or session()->has('status')) alert-success
@elseif(! auth()->user()->hasVerifiedEmail()) alert-warning
@endif
 myadmin-alert-top alerttop2 block5"  style="display: block; z-index: 9999;"> 	<img src="{{ asset('images/seamco_logo.png') }}" class="img" alt="img">
	<a href="#" class="closed">&times;</a>
    @if(session()->has('error'))
    	<h4>That was embarassing!</h4>
        {{ session('error') }}
	@elseif(session()->has('resent'))
		<h4>Hooray!</h4>
        A fresh email verification link has been sent to {{ auth()->user()->email }} which will expire within one (1) hour, if this email address is incorrect please update your profile information.
	@elseif(session()->has('verified'))
		<h4>Congratulations!</h4>
        You have successfully verified your email! You will now be receiving updates of {{ config('app.name') }}'s current activities and important notices!
	@elseif(session()->has('status'))
		<h4>Congratulations!</h4>
        {{ session()->pull('status') }}
	@elseif(! auth()->user()->hasVerifiedEmail())
		<h4>Hi there! It seems you haven't verified your email yet.</h4>
        Please check your email to check if you have received the email verification link. If you haven't received one, click <a href="{{ route('verification.resend') }}" id="resend-email">here</a> to request another, verifying your email entitles you to SEAMCO's future exciting events and important notices!
	@endif
    <a href="#" class="closed">&times;</a> 
</div>