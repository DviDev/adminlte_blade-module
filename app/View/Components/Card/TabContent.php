<?php

namespace Modules\Lte\View\Components\Card;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class TabContent extends Component
{
    use DevResources;

    public function render(): View
    {
        return view('lte::components.card.tabcontent');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::CardTabContent;
    }
}
