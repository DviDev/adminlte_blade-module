<?php

declare(strict_types=1);

namespace Modules\Lte\View\Components\Layout;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

final class Navbar extends Component
{
    use DevResources;

    public function render(): View
    {
        return view('lte::components.layout.navbar');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Navbar;
    }
}
