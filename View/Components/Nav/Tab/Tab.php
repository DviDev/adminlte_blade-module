<?php

namespace Modules\Lte\View\Components\Nav\Tab;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

class Tab extends Component
{
    use DevResources;
    public function render()
    {
        return view('lte::components.nav.tab.index');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Tab;
    }
}
