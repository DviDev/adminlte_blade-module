<?php

namespace Modules\Lte\View\Components\Layout\V1;

use Closure;
use DvUi\Traits\DevResources;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

class Dashboard extends Component
{
    use DevResources;
    public function render(): View|Closure|string
    {
        return view('lte::components.layout.v1.dashboard');
    }

    public function getItems()
    {
        return [];
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Dashboard;
    }
}
