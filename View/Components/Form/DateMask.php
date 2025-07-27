<?php

namespace Modules\Lte\View\Components\Form;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class DateMask extends Component
{
    use DevResources;
    public function render()
    {
        return view('lte::components.form.date-mask');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::FormDateMask;
    }
}
