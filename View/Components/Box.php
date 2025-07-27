<?php

namespace Modules\Lte\View\Components;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Box extends Component
{
    use DevResources;
    public function render()
    {
        return view('lte::components.box');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Box;
    }
}
