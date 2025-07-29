<?php

namespace Modules\Lte\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Tab extends Component
{
    use DevResources;

    public function render(): View
    {
        return view('lte::components.card.tab');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Tab;
    }
}
