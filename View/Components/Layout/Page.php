<?php

namespace Modules\Lte\View\Components\Layout;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

class Page extends Component
{
    use DevResources;
    public function render()
    {
        return view('lte::components.layout.page-card');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::LayoutPage;
    }
}
