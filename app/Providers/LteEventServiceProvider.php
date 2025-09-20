<?php

declare(strict_types=1);

namespace Modules\Lte\Providers;

use Event;
use Illuminate\Support\ServiceProvider;
use Modules\Base\Events\UsingSpotlightEvent;
use Modules\DBMap\Events\ScanTableEvent;
use Modules\Lte\Listeners\CreateMenuItemsListener;
use Modules\Lte\Listeners\ScanTableLteListener;
use Modules\Lte\Listeners\UsingSpotlightListener;
use Modules\Project\Events\CreateMenuItemsEvent;

final class LteEventServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register(): void
    {
        Event::listen(UsingSpotlightEvent::class, UsingSpotlightListener::class);
        Event::listen(CreateMenuItemsEvent::class, CreateMenuItemsListener::class);
        Event::listen(ScanTableEvent::class, ScanTableLteListener::class);
    }

    /**
     * Get the services provided by the provider.
     */
    public function provides(): array
    {
        return [];
    }
}
