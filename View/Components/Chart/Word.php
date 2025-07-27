<?php

namespace Modules\Lte\View\Components\Chart;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Word extends Component
{
    use DevResources;
    public function render()
    {
        return view('lte::components.chart/word');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::ChartWord;
    }
}
