<?php

declare(strict_types=1);

namespace Modules\Lte\View\Components\Form;

use Illuminate\View\View;
use Modules\Base\View\Components\Form\BaseFormBladeComponent;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

final class Select extends BaseFormBladeComponent
{
    use DevResources;

    public function render(): View
    {
        return view('lte::components.form.select');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::FormSelect;
    }
}
