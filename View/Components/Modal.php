<?php

namespace Modules\Lte\View\Components;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

class Modal extends Component
{
    use DevResources;
    public function render()
    {
        return view('lte::components.modal');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Modal;
    }
}
