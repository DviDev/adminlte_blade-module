<?php

declare(strict_types=1);

namespace Modules\Lte\View\Components\Form;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

final class DateMask extends Component
{
    use DevResources;

    public function render(): View
    {
        return view('lte::components.form.date-mask');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::FormDateMask;
    }
}
