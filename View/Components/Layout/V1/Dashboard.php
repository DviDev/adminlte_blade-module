<?php

namespace Modules\Lte\View\Components\Layout\V1;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

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
