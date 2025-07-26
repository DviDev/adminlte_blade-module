<?php

namespace Modules\Lte\View\Components\Form;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

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
