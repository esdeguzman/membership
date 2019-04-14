<?php

namespace App\Traits;

use App\Notifications\EmailVerified;

trait HasVerifiedEmail
{
    public function sendCongratulatoryEmailNotification()
    {
        $this->notify(new EmailVerified);
    }
}
