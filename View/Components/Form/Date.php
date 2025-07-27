<?php

namespace Modules\Lte\View\Components\Form;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Date extends Component
{
    use DevResources;
    public function render()
    {
        return view('lte::components.form.date');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::FormDate;
    }
}
