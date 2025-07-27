<?php

namespace Modules\Lte\View\Components\Chart\Morris;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Donut extends Component
{
    use DevResources;
    public function render()
    {
        return view('lte::components.chart/morris/donut');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::MorrisDonut;
    }
}
