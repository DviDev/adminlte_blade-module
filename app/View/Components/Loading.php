<?php

declare(strict_types=1);

namespace Modules\Lte\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

final class Loading extends Component
{
    use DevResources;

    public function render(): View
    {
        return view('lte::components.loading');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Loading;
    }
}
