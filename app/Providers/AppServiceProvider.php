<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('errors', function ($errorBag, ...$errors) {
            $bool = true;

            foreach($errors as $error) {
                $errorBag->has($error) ?: $bool = false;
            }

            return $bool;
        });

        VerifyEmail::toMailUsing(function ($notifiable) {
            $url = URL::temporarySignedRoute('verification.verify', 
                            Carbon::now()->addMinutes(
                                Config::get('auth.verification.expire', 60)), 
                                    ['id' => $notifiable->getKey()] );

            return (new MailMessage)
                ->subject('Verify your email address')
                ->markdown('emails.verify', compact('url'));
        });

        ResetPassword::toMailUsing(function ($notifiable, $token) {

            return (new MailMessage)
                ->subject('Password reset request')
                ->markdown('emails.reset', compact('token'));
        });
    }
}
