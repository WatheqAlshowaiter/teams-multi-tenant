<?php

namespace App\Listeners;

class RemoveTenantIdFromSession
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        if (session()->has('tenant_id')) {
            session()->forget('tenant_id');
        }
    }
}
