<?php

namespace Modules\Lte\View\Components\Scripts\Alpine;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

class Mask extends Component
{
    use DevResources;
    public function render()
    {
        return view('lte::components.scripts/alpine/mask');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::ScriptsAlpineMask;
    }
}
