<?php

namespace Modules\Lte\View\Components\Layout;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class V1 extends Component
{
    use DevResources;

    public function render(): View
    {
        return view('lte::components.layout.v1');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::LayoutV1;
    }
}
