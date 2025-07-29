<?php

namespace Modules\Lte\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class PageAlert extends Component
{
    use DevResources;

    public function render(): View
    {
        return view('lte::components.page_alert');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::PageAlert;
    }
}
