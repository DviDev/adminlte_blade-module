<?php

namespace Modules\Lte\View\Components\Layout\V1;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class DashboardV1 extends Component
{
    use DevResources;

    public function render()
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
