<?php

namespace Modules\Lte\View\Components;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

class PageAlert extends Component
{
    use DevResources;
    public function render()
    {
        return view('lte::components.page_alert');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::PageAlert;
    }
}
