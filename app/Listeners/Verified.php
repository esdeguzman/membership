<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Verified as VerifiedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class Verified
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Verified  $event
     * @return void
     */
    public function handle(VerifiedEvent $event)
    {
        if ($event->user->hasVerifiedEmail()) {
            $event->user->sendCongratulatoryEmailNotification();
        }
    }
}
