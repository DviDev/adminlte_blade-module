<?php

namespace Modules\Lte\View\Components\Card;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Footer extends Component
{
    use DevResources;

    public function render()
    {
        return view('lte::components.card/footer');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::CardFooter;
    }
}
