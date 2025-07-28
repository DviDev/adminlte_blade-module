<?php

namespace Modules\Lte\View\Components\Card;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Header extends Component
{
    use DevResources;

    public function render()
    {
        return view('lte::components.card/header');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::CardHeader;
    }
}
