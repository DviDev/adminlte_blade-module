<?php

declare(strict_types=1);

namespace Modules\Lte\View\Components\Nav\Tab;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

final class Tab extends Component
{
    use DevResources;

    public function render(): View
    {
        return view('lte::components.nav.tab.index');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Tab;
    }
}
