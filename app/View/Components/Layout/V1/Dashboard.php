<?php

declare(strict_types=1);

namespace Modules\Lte\View\Components\Layout\V1;

use Closure;
use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

final class Dashboard extends Component
{
    use DevResources;

    public function render(): View|Closure|string
    {
        return view('lte::components.layout.v1.dashboard');
    }

    public function getItems(): array
    {
        return [];
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Dashboard;
    }
}
