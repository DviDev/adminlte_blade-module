<?php

namespace Modules\Lte\View\Components\Form;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

class Select extends Component
{
    use DevResources;

    public function render()
    {
        return view('lte::components.form.select');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::FormSelect;
    }
}
