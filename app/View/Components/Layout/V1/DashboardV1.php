<?php

declare(strict_types=1);

namespace Modules\Lte\View\Components\Layout\V1;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

final class DashboardV1 extends Component
{
    use DevResources;

    public function render(): View
    {
        return view('store::livewire.dashboard.dashboard-v1');
    }

    public function getItems()
    {
        return [];
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::DashboardV1;
    }
}
