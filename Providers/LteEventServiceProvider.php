<?php

namespace Modules\Lte\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Base\Events\UsingSpotlightEvent;
use Modules\Lte\Listeners\UsingSpotlightListener;

class LteEventServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register(): void
    {
        \Event::listen(UsingSpotlightEvent::class, UsingSpotlightListener::class);
    }

    /**
     * Get the services provided by the provider.
     */
    public function provides(): array
    {
        return [];
    }
}
