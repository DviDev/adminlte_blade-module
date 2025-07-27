<?php

namespace Modules\Lte\View\Components\Layout;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Navbar extends Component
{
    use DevResources;
    public function render()
    {
        return view('lte::components.layout.navbar');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Navbar;
    }
}
