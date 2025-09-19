<?php

declare(strict_types=1);

namespace Modules\Lte\View\Components\Layout;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

final class Page extends Component
{
    use DevResources;

    public function render(): View
    {
        return view('lte::components.layout.page-card');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::LayoutPage;
    }
}
