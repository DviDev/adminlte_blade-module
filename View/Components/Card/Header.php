<?php

namespace Modules\Lte\View\Components\Card;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

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
