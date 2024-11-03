<?php

namespace Modules\Lte\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Base\Events\UsingSpotlightEvent;
use Modules\Lte\Listeners\CreateMenuItemsListener;
use Modules\Lte\Listeners\UsingSpotlightListener;
use Modules\Project\Events\CreateMenuItemsEvent;

class LteEventServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register(): void
    {
        \Event::listen(UsingSpotlightEvent::class, UsingSpotlightListener::class);
        \Event::listen(CreateMenuItemsEvent::class, CreateMenuItemsListener::class);
    }

    /**
     * Get the services provided by the provider.
     */
    public function provides(): array
    {
        return [];
    }
}
