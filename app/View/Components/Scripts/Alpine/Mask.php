<?php

declare(strict_types=1);

namespace Modules\Lte\View\Components\Scripts\Alpine;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

final class Mask extends Component
{
    use DevResources;

    public function render(): View
    {
        return view('lte::components.scripts/alpine/mask');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::ScriptsAlpineMask;
    }
}
