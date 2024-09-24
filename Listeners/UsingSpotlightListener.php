<?php

namespace Modules\Lte\Listeners;

use Modules\Base\Events\UsingSpotlightEvent;

class UsingSpotlightListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UsingSpotlightEvent $event): void
    {
        if (str($event->uri)->startsWith(['lte', '/lte'])) {
            //if lte no using tailwind ...
            config(['livewire-ui-spotlight.include_css' => true]);
        }
    }
}
