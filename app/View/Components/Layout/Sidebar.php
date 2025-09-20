<?php

declare(strict_types=1);

namespace Modules\Lte\View\Components\Layout;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;
use Modules\Project\Domains\MenuDomain;

final class Sidebar extends Component
{
    use DevResources;

    public function render(): View
    {
        return view('lte::components.layout.sidebar', [
            'items' => MenuDomain::list(),
        ]);
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::LayoutSidebar;
    }
}
