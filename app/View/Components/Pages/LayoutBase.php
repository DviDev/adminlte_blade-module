<?php

declare(strict_types=1);

namespace Modules\Lte\View\Components\Pages;

use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\View\BaseBladeComponent;

final class LayoutBase extends BaseBladeComponent
{
    public function render(): View|string
    {
        if ($this->published('lte.pages.layout-base')) {
            return view('components.lte.pages.layout-base');
        }

        return view('lte::components.pages.layout-base');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::PagesLayoutBase;
    }
}
