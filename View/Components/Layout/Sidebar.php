<?php

namespace Modules\Lte\View\Components\Layout;

use Illuminate\View\Component;
use Modules\Project\Domains\MenuDomain;

class Sidebar extends Component
{

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $items = MenuDomain::list();
        return view('lte::components.layout.sidebar', compact('items'));
    }

    /*public function getSidebarMenuItems(): array
    {
        return MenuDomain::list();
    }*/
}
