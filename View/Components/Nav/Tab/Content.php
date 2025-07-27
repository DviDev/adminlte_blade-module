<?php

namespace Modules\Lte\View\Components\Nav\Tab;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Content extends Component
{
    use DevResources;
    public function render()
    {
        return view('lte::components.nav.tab.content');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::TabContent;
    }
}
