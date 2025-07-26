<?php

namespace Modules\Lte\View\Components;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

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
