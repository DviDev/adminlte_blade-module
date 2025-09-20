<?php

declare(strict_types=1);

namespace Modules\Lte\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

final class Error extends Component
{
    use DevResources;

    public function render(): View
    {
        return view('lte::components.error');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Error;
    }
}
