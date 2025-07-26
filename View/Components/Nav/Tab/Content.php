<?php

namespace Modules\Lte\View\Components\Nav\Tab;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

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
