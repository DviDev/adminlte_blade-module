<?php

namespace Modules\Lte\View\Components;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Label extends Component
{
    use DevResources;

    public function render()
    {
        return view('lte::components.label');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::FormLabel;
    }
}
