<?php

namespace App\Listeners;

use App\Events\newNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNotification
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
     * @param  newNotification  $event
     * @return void
     */
    public function handle(newNotification $event)
    {
        //
    }
}
