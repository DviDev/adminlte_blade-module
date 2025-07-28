<?php

namespace Modules\Lte\View\Components\Layout;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;
use Modules\Project\Domains\MenuDomain;

class Sidebar extends Component
{
    use DevResources;

    public function render()
    {
        $items = MenuDomain::list();

        return view('lte::components.layout.sidebar', compact('items'));
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::LayoutSidebar;
    }
}
