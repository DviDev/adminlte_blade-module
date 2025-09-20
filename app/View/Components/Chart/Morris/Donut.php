<?php

declare(strict_types=1);

namespace Modules\Lte\View\Components\Chart\Morris;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

final class Donut extends Component
{
    use DevResources;

    public function render(): View
    {
        return view('lte::components.chart/morris/donut');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::MorrisDonut;
    }
}
