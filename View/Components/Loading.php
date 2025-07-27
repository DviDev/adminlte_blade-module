<?php

namespace Modules\Lte\View\Components;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Loading extends Component
{
    use DevResources;

    public function render()
    {
        return view('lte::components.loading');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Loading;
    }
}
