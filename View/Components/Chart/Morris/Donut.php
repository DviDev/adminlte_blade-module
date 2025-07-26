<?php

namespace Modules\Lte\View\Components\Chart\Morris;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

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
