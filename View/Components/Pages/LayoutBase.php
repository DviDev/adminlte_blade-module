<?php

namespace Modules\Lte\View\Components\Pages;

use Illuminate\View\View;
use Modules\DvUi\View\BaseBladeComponent;

class LayoutBase extends BaseBladeComponent
{

    /**
     * Get the view/contents that represent the component.
     */
    public function render(): View|string
    {
        if ($this->published('lte.pages.layout-base')) {
            return view('components.lte.pages.layout-base');
        }
        return view('lte::components.pages.layout-base');
    }
}
