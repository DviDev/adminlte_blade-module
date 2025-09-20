<?php

declare(strict_types=1);

namespace Modules\Lte\View\Components\Form;

use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;
use Modules\DvUi\View\BaseBladeComponent;

final class Date extends BaseBladeComponent
{
    use DevResources;

    public function render(): View
    {
        return view('lte::components.form.date');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::FormDate;
    }
}
